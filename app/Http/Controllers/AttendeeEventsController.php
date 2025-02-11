<?php

namespace App\Http\Controllers;

class AttendeeEventsController extends Controller
{
    public function index()
    {
        return view('attendee.events.index');
    }

    public function create()
    {
        return view('attendee.events.create');
    }

    public function store()
    {
        return view('attendee.events.create');
    }

    public function edit()
    {
        return view('attendee.events.create');
    }

    public function update()
    {
        return view('attendee.events.create');
    }
}
