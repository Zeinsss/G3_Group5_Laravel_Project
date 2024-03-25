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
    <h1>Client's List</h1>
    <div class="button-create">
        <a href="{{ route('clients.create') }}">
            <x-primary-button>
                {{__('Create New Client')}}
            </x-primary-button>
        </a>
    </div>
    <table class="table table-md">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Budgets</th>
                <th scope="col">Action (Edit)</th>
                <th scope="col">Action (Delete)</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->budgets }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}">
                            <x-primary-button class="btn-sm">
                                {{__('Edit')}}
                            </x-primary-button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
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
@endsection