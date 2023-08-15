<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->hasVerifiedEmail()) {
                $usertype = Auth::user()->usertype;

                if ($usertype == 'user') {
                    return view('dashboard');
                } elseif ($usertype == 'admin') {
                    return view('admin');
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->route('verification.notice');
            }
        }
    }
}