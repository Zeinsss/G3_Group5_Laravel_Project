@extends ('layouts.app')
@section ('content')
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
    <h1>Attendees</h1>
    <div class="button-create">
        <a href="{{ route('attendees.create') }}">
            <x-primary-button>
                {{__('Create Attendee')}}
            </x-primary-button>
        </a>
    </div>
    <table class="table table-md">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Register Status</th>
                <th>Attendance</th>
                <th>Event Name</th>
                <th>Actions (Edit)</th>
                <th>Action (Delete)</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($attendees as $attendee)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $attendee->name }}</td>
                    <td>{{ $attendee->email }}</td>
                    <td>{{ $attendee->role }}</td>
                    <td>
                      <?php if ($attendee->register_status == 1) {
                        echo "Active";
                      } else {
                        echo "Unactive";
                      } ?>
                    </td>
                    <td>
                      <?php if ($attendee->attendance == 1) {
                        echo "Present";
                      } else {
                        echo "Absent";
                      } ?>
                    </td>
                    <td>{{ $attendee->event->name }}</td>
                    <td>
                        <a href="{{ route('attendees.edit', $attendee) }}">
                            <x-primary-button>
                                {{__('Edit')}}
                            </x-primary-button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('attendees.destroy', $attendee) }}">
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