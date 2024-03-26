@extends ('layouts.app')
@section('content') 
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Edit Task</h1>
    <div class="button-create">
        <a href="{{ route('tasks.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
  <form method="POST" action="{{ route('tasks.update', $task) }}">
      @csrf
      @method('PUT')
      <div class="mb-3 form-group ">
          <label for="name" class="form-label">Task:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
      </div>
      <div class="mb-3 form-group">
          <label for="event_id" class="form-label">Event Name:</label>
          <select style="height:40px" class="form-control" id="event_id" name="event_id">
              @foreach ($events as $event)
                  <option value="{{ $event->id }}" {{ $event->id == $task->event_id ? 'selected' : '' }}>{{ $event->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="mb-3 form-group">
          <label for="description" class="form-label">Description:</label>
          <input type="text" class="form-control" id="description" name="description" value="{{ $task->description }}">
      </div>
      <div class="mb-3 form-group">
          <label for="due_date" class="form-label">Due Date:</label>
          <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $task->due_date }}">
      </div>
      <div class="mb-3 form-group">
          <label for="member" class="form-label">Member:</label>
          <input type="text" class="form-control" id="member" name="member" value="{{ $task->member }}">
      </div>
      <div class="mb-3 form-group">
          <label for="status" class="form-label">Status:</label>
          <input type="text" class="form-control" id="status"
          name="status" value="{{ $task->status }}">
      </div>
      <div class="mb-3 form-group">
          <label for="priority" class="form-label">Priority:</label>
          <select style="height:40px" class="form-control" id="priority" name="priority">
              <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
              <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
              <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
          </select>
      </div>
      <x-primary-button class="btn-sm">
          {{__('Update')}}
      </x-primary-button>
  </form>
@endsection