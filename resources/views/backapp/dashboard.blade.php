@extends ('layouts.app')

@section ('content')
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
<h1>Dashboard</h1>
  <table class="table table-md">
    <thead>
      <tr>

        <th>Venue's Amount</th>
        <th>Event's Amount</th>
        <th>Task's Amount</th>
        <th>User's Amount</th>
        <th>Attendees's amount</th>
        <th>Client's Amount</th>
        <th>User's Amount</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $venues->count() }}</td>
        <td>{{ $events->count() }}</td>
        <td>{{ $tasks->count() }}</td>
        <td>{{ $users->count() }}</td>
        <td>{{ $attendees->count() }}</td>
        <td>{{ $clients->count() }}</td>
        <td>{{ $users->count() }}</td>
      </tr>
    </tbody>
  </table>
  <!-- Pie Chart of counting each table's data  -->
  <div id="piechart" style="width: 500px; height: 500px; float:left"></div>
@endsection
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Amount'],
        ['Venues', {{ $venues->count() }}],
        ['Events', {{ $events->count() }}],
        ['Tasks', {{ $tasks->count() }}],
        ['Users', {{ $users->count() }}],
        ['Attendees', {{ $attendees->count() }}],
        ['Clients', {{ $clients->count() }}],
        ['Users', {{ $users->count() }}]
      ]);
      var options = {
        title: 'Each Table\'s data count',
        backgroundColor: { fill: "" }
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
