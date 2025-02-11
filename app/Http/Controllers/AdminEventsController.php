<?php

namespace App\Http\Controllers;

class AdminEventsController extends Controller
{
    public function index()
    {
        return view('admin.events.index');
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store()
    {
        return view('admin.events.create');
    }

    public function edit()
    {
        return view('admin.events.create');
    }

    public function update()
    {
        return view('admin.events.create');
    }
}
