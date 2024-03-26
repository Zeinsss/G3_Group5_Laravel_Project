@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Create Event</h1>
    <div class="button-create">
        <a href="{{ route('events.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
  <form method="POST" action="{{ route('events.store') }}">
      @csrf
      <div class="mb-3 form-group ">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3 form-group">
          <label for="date" class="form-label">Date:</label>
          <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="mb-3 form-group">
          <label for="time" class="form-label">Time:</label>
          <input type="time" class="form-control" id="time" name="time">
      </div>
      <div class="mb-3 form-group">
          <label for="description" class="form-label">Description:</label>
          <input type="text" class="form-control" id="description" name="description">
      </div>
      <div class="mb-3 form-group">
          <label for="client_id" class="form-label">Client Name:</label>
          <select style="height:40px" class="form-control" id="client_id" name="client_id">
              @foreach ($clients as $client)
                  <option value="{{ $client->id }}">{{ $client->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="mb-3 form-group">
          <label for="budget" class="form-label">Budget:</label>
          <input type="number" class="form-control" id="budget" name="budget">
      </div>
      <div class="mb-3 form-group">
          <label for="status" class="form-label">Status:</label>
          <input type="text" class="form-control" id="status" name="status">
      </div>
      <div class="mb-3 form-group">
          <label for="vendor_id" class="form-label">Vendor Name:</label>
          <select style="height:40px" class="form-control" id="vendor_id" name="vendor_id">
              @foreach ($vendors as $vendor)
                  <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="mb-3 form-group">
          <label for="venue_id" class="form-label">Venue Name:</label>
          <select style="height:40px" class="form-control" id="venue_id" name="venue_id">
              @foreach ($venues as $venue)
                  <option value="{{ $venue->id }}">{{ $venue->name }}</option>
              @endforeach
          </select>
      </div>
      
      <div class="mb-3 form-group">
                <label style="display: block;" for="notes" class="form-label">Notes</label>
                <textarea style="height: 100px;" class="form-control" id="notes" name="notes">{{$vendor->notes}}</textarea>
          </div>  
      <x-primary-button class="btn-sm">
            {{__('Submit')}}    
      </x-primary-button>
  </form>
@endsection