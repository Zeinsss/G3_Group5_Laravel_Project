@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Create Venue</h1>
    <div class="button-create">
        <a href="{{ route('venues.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
  <form method="POST" action="{{ route('venues.store') }}">
      @csrf
      <div class="mb-3 form-group ">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3 form-group">
          <label for="address" class="form-label">Address:</label>
          <input type="text" class="form-control" id="address" name="address">
      </div>
      <div class="mb-3 form-group">
          <label for="capacity" class="form-label">Capacity:</label>
          <input type="text" class="form-control" id="capacity" name="capacity">
      </div>
      <div class="mb-3 form-group">
          <label for="is_available" class="form-label">Availablity:</label>
          <select class="form-control-select" name="is_available" id="is_available">
              <option value="1">Available</option>
              <option value="0">Not Available</option>
          </select>
      </div>
      <div class="mb-3 form-group" >
          <label for="rental_fee" class="form-label">Rental Fee:</label>
          <input type="number" class="form-control" id="rental_fee" name="rental_fee">
      </div>
      <div class="mb-3 form-group">
          <label for="available_date" class="form-label">Available Date:</label>
          <input type="date" class="form-control" id="available_date" name="available_date">
      </div>
          <div class="mb-3 form-group">
                <label style="display: block;" for="notes" class="form-label">Notes</label>
                <textarea style="height: 100px;" class="form-control" id="notes" name="notes"></textarea>
          </div>
          <x-primary-button class="btn-sm">
                {{__('Submit')}}    
          </x-primary-button>
  </form>
@endsection