@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Edit Venue</h1>
    <div class="button-create">
        <a href="{{ route('venues.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
  <a href="{{ route('venues.index') }}" class="btn btn-primary">Back</a>
  <form method="POST" action="{{ route('venues.update', $venue->id) }}">
      @csrf
      @method('PUT')
      <div class="mb-3 form-group ">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $venue->name }}">
      </div>
      <div class="mb-3 form-group">
          <label for="address" class="form-label">Address:</label>
          <input type="text" class="form-control" id="address" name="address" value="{{ $venue->address }}">
      </div>
      <div class="mb-3 form-group">
          <label for="capacity" class="form-label">Capacity:</label>
          <input type="text" class="form-control" id="capacity" name="capacity" value="{{ $venue->capacity }}">
      </div>
      <div class="mb-3 form-group">
          <label for="is_available" class="form-label">Availablity:</label>
          <select class="form-control-select" name="is_available" id="is_available">
              <option value="1" {{ $venue->is_available == 1 ? 'selected' : '' }}>Available</option>
              <option value="0" {{ $venue->is_available == 0 ? 'selected' : '' }}>Not Available</option>
          </select>
      </div>
      <div class="mb-3 form-group" >
          <label for="rental_fee" class="form-label">Rental Fee:</label>
          <input type="number" class="form-control" id="rental_fee" name="rental_fee" value="{{ $venue->rental_fee }}">
      </div>
      <div class="mb-3 form-group">
          <label for="available_date" class="form-label">Available Date:</label>
          <input type="date" class="form-control" id="available_date" name="available_date" value="{{ $venue->available_date }}">
      </div>
          <div class="mb-3 form-group">
                <label style="display: block;" for="notes" class="form-label">Notes</label>
                <textarea style="height: 100px;" class="form-control" id="notes" name="notes">{{ $venue->notes }}</textarea>
          </div>
          <x-primary-button class="btn-sm">
                {{__('Submit Edit')}}    
          </x-primary-button>
  </form>

@endsection