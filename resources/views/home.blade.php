@extends('layouts.app')

@section('content')
<style>
    .container {
        margin-top: 50px;
    }
    .row {
        margin-bottom: 20px;
    }
    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
    }
    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    /* make .col-md-4 display in 4 boxes */
    .col-md-4 {
        margin-bottom: 20px;
        float: left;
    }
    /* make .col-md-4 display in 4 boxes */
    .col-md-4:first-child {
        margin-left: 10%;
        margin-right: 20%;
    }
    
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Make a Home page  -->
                    <h1>Home</h1>
                    <!-- Make div containing image with entites related -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('users.index') }}">
                                    <img src="{{ asset('images/users.jpg') }}" alt="Users" style="width: 400px;height:400px;">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('venues.index') }}">
                                    <img src="{{ asset('images/venues.jpg') }}" alt="Venues" style="width: 400px;height:400px;">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('tasks.index') }}">
                                    <img src="{{ asset('images/tasks.jpg') }}" alt="Tasks" style="width: 400px;height:400px;margin-left: 32%;margin-right: 20%;">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('events.index') }}">
                                    <img src="{{ asset('images/events.jpg') }}" alt="Events" style="width: 400px;height:400px; margin-left: 96%;">
                                </a>
                            </div>  
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
