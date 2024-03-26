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
    <h1>Users</h1>
    <div class="button-create">
        <a href="{{ route('users.create') }}">
            <x-primary-button>
                {{__('Create User')}}
            </x-primary-button>
        </a>
    </div>
    <table class="table table-md">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <?php if ($user->type  == 'admin') {
                        echo 'Admin';
                      } else {
                        echo 'User';
                      } ?>
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}">
                            <x-primary-button>
                                {{__('Edit')}}
                            </x-primary-button>
                        </a>
                        <form method="POST" action="{{ route('users.destroy', $user) }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>
                                {{__('Delete')}}
                            </x-danger-button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection