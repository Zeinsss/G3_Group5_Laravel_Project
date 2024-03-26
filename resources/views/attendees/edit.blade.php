@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Edit Attendee</h1>
    <div class="button-create">
        <a href="{{ route('attendees.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
    <form method="POST" action="{{ route('attendees.update', $attendee) }}">
        @csrf
        @method('PUT')
        <div class="mb-3 form-group ">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $attendee->name }}">
        </div>
        <div class="mb-3 form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $attendee->email }}">
        </div>
        <div class="mb-3 form-group">
            <label for="role" class="form-label">Role:</label>
            <select style="height:40px" class="form-control" id="role" name="role">
                <option value="attendee" {{ $attendee->role == 'attendee' ? 'selected' : '' }}>Attendee</option>
                <option value="admin" {{ $attendee->role == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="register_status" class="form-label">Register Status:</label>
            <select style="height:40px" class="form-control" id="register_status" name="register_status">
                <option value="1" {{ $attendee->register_status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $attendee->register_status == 0 ? 'selected' : '' }}>Unactive</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="attendance" class="form-label">Attendance:</label>
            <select style="height:40px" class="form-control" id="attendance" name="attendance">
                <option value="1" {{ $attendee->attendance == 1 ? 'selected' : '' }}>Present</option>
                <option value="0" {{ $attendee->attendance == 0 ? 'selected' : '' }}>Absent</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="event_id" class="form-label">Event Name:</label>
            <select style="height:40px" class="form-control" id="event_id" name="event_id">
                @foreach ($events as $event)
                    <option value="{{ $event->id }}" {{ $attendee->event_id == $event->id ? 'selected' : '' }}>{{ $event->name }}</option>
                @endforeach
            </select>
        </div>
        <x-primary-button class="btn-sm">
            {{__('Update')}}
        </x-primary-button>
    </form>
@endsection