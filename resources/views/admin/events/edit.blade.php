@extends('layout')
@section('content')

    <div id="admin-edit-event">
        <create-update-event :is-create="false" :event-id="{{ $event->id }}"></create-update-event>
    </div>

@endsection

@section('scripts')

@endsection
