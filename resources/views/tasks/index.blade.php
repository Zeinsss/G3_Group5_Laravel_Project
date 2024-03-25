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
    </style>
  <h1>Task List</h1>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Task</th>
        <th>Name</th>
        <th>Description</th>
        <th>Due Date</th>
        <th>Member</th>
        <th>Status</th>
        <th>Priority</th>
        <th>Event Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
        <tr>
          <td>{{ $task->name }}</td>
          <td>{{ $task->created_at }}</td>
          <td>{{ $task->updated_at }}</td>
          <td>
            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-default">View</a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
            <form style="display:inline-block" method="POST" action="{{ route('tasks.destroy', $task->id) }}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="form-control btn btn-danger">Delete</a>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
@endsection