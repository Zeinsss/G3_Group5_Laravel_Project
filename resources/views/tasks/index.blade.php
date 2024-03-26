@extends ('layouts.app')
@section('content')
<style>
        table {
            width: 95%;
            margin: 0 auto;
        }
        td {
            width: auto
        }
        thead tr th {
            text-align: left;
        }
        .button-create {
            margin: 30px 35px;
        }
        h1 {
            margin: 15px 35px;  
        }
        td {
          border-bottom: 2px solid #000;
        }
    </style>
  <h1>Task List</h1>
  <div class="button-create">
    <a href="{{ route('tasks.create') }}">
      <x-primary-button>
        {{__('Create new Task')}}
      </x-primary-button>
    </a>
  </div>
  <table class="table table-md">
    <thead>
      <tr>
        <th>Task</th>
        <th>Event Name</th>
        <th>Description</th>
        <th>Due Date</th>
        <th>Member</th>
        <th>Status</th>
        <th>Priority</th>
        <th>Action (Edit)</th>
        <th>Action (Delete)</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
        <tr>
          <td>{{ $task->name }}</td>
          <td>{{ $task->event->name }}</td>
          <td>{{ $task->due_date }}</td>
          <td>{{ $task->description }}</td>
          <td>{{ $task->member }}</td>
          <td>{{ $task->status }}</td>
          <td>{{ $task->priority }}</td>
          
          <td>
            <a href="{{ route('tasks.edit', $task) }}">
              <x-primary-button>
                {{__('Edit')}}
              </x-primary-button>
            </a>
          </td>
          <td>
            <form method="POST" action="{{ route('tasks.destroy', $task) }}">
              @csrf
              @method('DELETE')
              <x-danger-button>
                {{__('Delete')}}
              </x-danger-button>
            </form>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection