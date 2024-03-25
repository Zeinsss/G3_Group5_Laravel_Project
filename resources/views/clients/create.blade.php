@extends('layouts.app')

@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }
    </style>
    <h1>Create Clients</h1>
    <div class="button-create">
        <a href="{{ route('clients.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            <div class="mb-3 form-group ">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3 form-group">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3 form-group">
                <label for="budgets" class="form-label">Budgets:</label>
                <input type="number" class="form-control" id="budgets" name="budgets">
            </div>
            <div class="mb-3 form-group">
                <label style="display: block;" for="notes" class="form-label">Notes</label>
                <textarea style="height: 100px;" class="form-control" id="notes" name="notes"></textarea>
            </div>
            
            <x-primary-button class="btn-sm">
                {{__('Submit')}}    
            </x-primary-button>
            
@endsection