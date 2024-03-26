@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Create Task</h1>
    <div class="button-create">
        <a href="{{ route('tasks.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3 form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3 form-group">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3 form-group">
            <label for="status" class="form-label">Status:</label>
            <select style="height: 40px;" name="status" id="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="due_date" class="form-label">Due Date:</label>
            <input type="date" class="form-control" id="due_date" name="due_date">
        </div>
        <div class="mb-3 form-group">
            <label for="event_id" class="form-label">Event Name:</label>
            <select style="height: 40px;" name="event_id" id="event_id" class="form-control">
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="priority" class="form-label">Priority:</label>
            <select style="height: 40px;" name="priority" id="priority" class="form-control">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>
        <div class="mb-3 form-group">
            <label for="member" class="form-label">Member:</label>
            <input type="text" class="form-control" id="member" name="member">
        </div>
        <x-primary-button>
            {{__('Create')}}
        </x-primary-button>
    </form>
@endsection