<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Ticket;

class EventController extends Controller
{
    public function create()
    {
        return view('admin');
    }
    
     public function updateEventId(Request $request)
    {
        $eventId = $request->input('event_id');
        config(['custom.event_id' => $eventId]);
        return response()->json(['message' => 'Event ID updated'], 200);
    }

    public function showAdminEventsPage()
    {
        $events = Event::all();
        return view('admin')->with('events', $events);
    }

    public function delete($id)
    {
        // First, delete related tickets
    DB::table('tickets')->where('event_id', $id)->delete();

    // Then, delete the event
    DB::table('events')->where('id', $id)->delete();

    return redirect()->back()->with('message', 'Event and related tickets deleted successfully.');
    }

    public function store(Request $request)
{
    try {
        $event = Event::create([
            'event_name' => $request->event_name,
            'event_artists' => $request->event_artists,
            'banner_image' => $request->banner_image,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'event_time' => $request->event_time,
        ]);

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . $request->file('banner_image')->getClientOriginalName();
            $filePath = $request->file('banner_image')->storeAs('images', $filename, 'public');
            $storagePath = 'storage/' . $filePath;
            $event->banner_image = $storagePath;
            $event->save();
        }

        $ticketTypes = [
            'vip', 'patronA', 'patronB', 'lower', 'upper', 'genAd'
        ];

        foreach ($ticketTypes as $type) {
            $ticket = new Ticket();
            $ticket->event_id = $event->id; 
            $ticket->type_name = ucfirst($type);
            $ticket->ticket_price = $request->input("{$type}_price");
            $ticket->max_tickets = $request->input("{$type}_max");
            $ticket->save();
        }

        return back()->with('flash_message', 'Event created!');
    } catch (\Exception $e) {
         return back()->withInput()->withErrors(['error' => 'Duplicate event name.']);
    }
}

}