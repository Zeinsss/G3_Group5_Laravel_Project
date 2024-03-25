@extends ('layouts.app')
@section('content')
    <style>
        .button-create {
            margin: 10px 15px;
        }   
    </style>
    <h1>Edit Vendor</h1>
    <div class="button-create">
        <a href="{{ route('vendors.index') }}">
            <x-primary-button>
                {{__('Back')}}
            </x-primary-button>
        </a>
    </div>
  <form method="POST" action="{{ route('vendors.update', $vendor) }}">
      @csrf
      @method('PUT')
      <div class="mb-3 form-group ">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $vendor->name }}">
      </div>
      <div class="mb-3 form-group">
          <label for="services" class="form-label">Services:</label>
          <input type="text" class="form-control" id="services" name="services" value="{{ $vendor->services }}">
      </div>
      <div class="mb-3 form-group">
          <label for="pricing" class="form-label">Pricing:</label>
          <input type="text" class="form-control" id="pricing" name="pricing" value="{{ $vendor->pricing }}">
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