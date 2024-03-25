@extends ('layouts.app')
@section('content')
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
  <h1>Venue's List</h1>
  <div class="button-create">
    <a href="{{ route('venues.create') }}">
      <x-primary-button>
        {{__('Create New Venue')}}
      </x-primary-button>
    </a>
  </div>
  <table class"table table-md">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>Capacity</th>
        <th>Availablity</th>
        <th>Rental Fee</th>
        <th>Available Date</th>
        <th>Action (Edit)</th>
        <th>Action (Delete)</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1 ?>
      @foreach ($venues as $venue)
        <tr>
          <td>{{$no++}}</td>
          <td>{{ $venue->name }}</td>
          <td>{{ $venue->address }}</td>
          <td>{{ $venue->capacity }} People</td>
          <td>
          @if ($venue->is_available == 1)
            Available
          @else
            Not Available
          @endif
          </td>
          <td>{{ $venue->rental_fee }}</td>
          <td>{{ $venue->available_date }}</td>
          <td>
            <a href="{{ route('venues.edit', $venue->id) }}">
              <x-primary-button class="btn-sm">
                {{__('Edit')}}
              </x-primary-button>
            </a>
          </td>
          <td>
            <form action="{{ route('venues.destroy', $venue->id) }}" method="POST">
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
  </table>
@endsection