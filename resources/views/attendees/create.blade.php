@extends ('layouts.app')
@section ('content')  
    <!-- Create Attendees -->
    <style>
        .button-create {
            margin: 10px 15px;
        }
    </style>
    <h1>Create Attendee</h1>
    <div class="button-create">
        <a href="{{ route('attendees.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
    <form method="POST" action="{{ route('attendees.store') }}">
        @csrf
        <div class="mb-3 form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3 form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <!-- Role -->
        <div class="mb-3 form-group">
            <label for="role" class="form-label">Role:</label>
            <select style="height: 40px;" name="role" id="role" class="form-control">
                <option value="attendee">Attendee</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <!-- Register status -->
        <div class="mb-3 form-group">
            <label for="register_status" class="form-label">Register Status:</label>
            <select style="height: 40px;" name="register_status" id="register_status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Unactive</option>
            </select>
        </div>
        <!-- Attendance -->
        <div class="mb-3 form-group">
            <label for="attendance" class="form-label">Attendance:</label>
            <select style="height: 40px;" name="attendance" id="attendance" class="form-control">
                <option value="1">Present</option>
                <option value="0">Absent</option>
            </select>
        </div>
        <!-- Event Name -->
        <div class="mb-3 form-group">
            <label for="event_id" class="form-label">Event Name:</label>
            <select style="height: 40px;" name="event_id" id="event_id" class="form-control">
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>
        <x-primary-button class="btn-sm">
            {{__('Submit')}}
        </x-primary-button>

    </form>
@endsection