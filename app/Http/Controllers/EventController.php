<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class EventController extends Controller
{
    public function create()
    {
        return view('admin');
    }

    public function showAdminEventsPage()
    {
        $events = Event::all();
        return view('admin')->with('events', $events);
    }

    public function delete($id)
    {
        DB::table('events')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Event deleted successfully.');
    }

    public function store(Request $request)
    {
        $event = Event::create([
            'event_name' => $request->event_name,
            'event_artists' => $request->event_artists,
            'ticket_price' => $request->ticket_price,
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

        // Event class needs to be defined and used here properly
        // event(new YourEventClass($event));

        return back()->with('flash_message', 'Event created!');
    }

    // Other methods...
}