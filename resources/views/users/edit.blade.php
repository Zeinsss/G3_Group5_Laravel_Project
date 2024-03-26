@extends ('layouts.app')
@section ('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Edit User</h1>
    <div class="button-create">
        <a href="{{ route('users.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PUT')
        <div class="mb-3 form-group ">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3 form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3 form-group">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value='{{$user->password}}'>
        </div>
        <div class="mb-3 form-group">
            <label for="role" class="form-label">Role:</label>
            <select style="height:40px" class="form-control" id="role" name="role">
                <option value="admin" {{ $user->type == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->type == 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <x-primary-button class="btn-sm">
            {{__('Update')}}
        </x-primary-button>
@endsection