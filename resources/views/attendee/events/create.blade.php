@extends('layout')
@section('content')
    <div id="attendee-register">
        <event-registration :event-id="{{ $event->id }}"></event-registration>
    </div>
@endsection

@section('script')

@endsection
