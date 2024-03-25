@extends ('layouts.app')
@section('content')
  <!--Vendor -->
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
  <h1>Vendor's List</h1>
  <div class="button-create">
    <a href="{{ route('vendors.create') }}">
      <x-primary-button>
        {{__('Create New Vendor')}}
      </x-primary-button>
    </a>
  </div>
  <table class"table table-md">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Services</th>
        <th>Pricing</th>
        <th>Action (Edit)</th>
        <th>Action (Delete)</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1 ?>
      @foreach ($vendors as $vendor)
        <tr>
          <td>{{$no++}}</td>
          <td>{{ $vendor->name }}</td>
          <td>{{ $vendor->services }}</td>
          <td>{{ $vendor->pricing }}</td>
          <td>
            <a href="{{ route('vendors.edit', $vendor->id) }}">
              <x-primary-button class="btn-sm">
                {{__('Edit')}}
              </x-primary-button>
            </a>
          </td>
          <td>
            <form method="POST" action="{{ route('vendors.destroy', ['vendor' => $vendor]) }}">
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