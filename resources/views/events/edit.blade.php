@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Edit Event</h1>
    <div class="button-create">
        <a href="{{ route('events.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
  <form method="POST" action="{{ route('events.update', $event) }}">
      @csrf
      @method('PUT')
      <div class="mb-3 form-group ">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}">
      </div>
      <div class="mb-3 form-group">
          <label for="date" class="form-label">Date:</label>
          <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}">
      </div>
      <div class="mb-3 form-group">
          <label for="time" class="form-label">Time:</label>
          <input type="time" class="form-control" id="time" name="time" value="{{ $event->time }}">
      </div>
      <div class="mb-3 form-group">
          <label for="description" class="form-label">Description:</label>
          <input type="text" class="form-control" id="description" name="description" value="{{ $event->description }}">
      </div>
      <div class="mb-3 form-group">
          <label for="client_id" class="form-label">Client Name:</label>
          
          <select style="height: 40px;" name="client_id" id="client_id" class="form-control">
              @foreach ($clients as $client)
                  <option value="{{ $client->id }}" {{ $client->id == $event->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="mb-3 form-group">
          <label for="budget" class="form-label">Budget:</label>
          <input type="text" class="form-control" id="budget" name="budget" value="{{ $event->budget }}">
      </div>
      <div class="mb-3 form-group">
          <label for="status" class="form-label">Status:</label>
          <input type="text" class="form-control" id="status" name="status" value="{{ $event->status }}">
      </div>
      <div class="mb-3 form-group">
          <label for="vendor_id" class="form-label">Vendor Name:</label>
          
          <select style="height: 40px;" name="vendor_id" id="vendor_id" class="form-control">
              @foreach ($vendors as $vendor)
                  <option value="{{ $vendor->id }}" {{ $vendor->id == $event->vendor_id ? 'selected' : '' }}>{{ $vendor->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="mb-3 form-group">
          <label for="venue_id" class="form-label">Venue Name:</label>
          
          <select style="height: 40px;" name="venue_id" id="venue_id" class="form-control">
              @foreach ($venues as $venue)
                  <option value="{{ $venue->id }}" {{ $venue->id == $event->venue_id ? 'selected' : '' }}>{{ $venue->name }}</option>
              @endforeach
          </select>
      </div>
      <x-primary-button class="btn-sm">
            {{__('Submit')}}    
      </x-primary-button>
  </form>
@endsection