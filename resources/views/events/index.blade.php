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
    <h1>Events</h1>
    <div class="button-create">
        <a href="{{ route('events.create') }}">
            <x-primary-button>
                {{__('Create Event')}}
            </x-primary-button>
        </a>
    </div>
    <table class="table table-md">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Description</th>
                <th scope="col">Client Name</th>
                <th scope="col">Budget</th>
                <th scope="col">Status</th>
                <th scope="col">Vendor Name</th>
                <th scope="col">Venue Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->time }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->client->name }}</td>
                    <td>{{ $event->budget }}</td>
                    <td>{{ $event->status }}</td>
                    <td>{{ $event->vendor->name }}</td>
                    <td>{{ $event->venue->name }}</td>
                    <td>
                        <a href="{{ route('events.edit', $event) }}">
                            <x-primary-button>
                                {{__('Edit')}}
                            </x-primary-button>
                        </a>
                        <form method="POST" action="{{ route('events.destroy', $event) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <x-danger-button class="btn-sm">
                                {{__('Delete')}}
                            </x-danger-button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection