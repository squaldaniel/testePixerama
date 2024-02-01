@extends('bootstrap.model')
@section('headscripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section("body")

<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Mini Dashboard</h4>
        </div>
        <div class="card-body">
            <!-- charts -->
            <div id="piechart" style="width: 400px; height: 300px;"></div>
            <!-- charts -->
        </div>
      </div>


    <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="dark">
      <nav class="col-lg-8">
        <ul class="list-unstyled d-flex flex-column gap-2">
          <li>
              <span class="fa fa-group fa-2x"></span>
              <div>
                <strong class="d-block">Clientes Ativos</strong>
                <strong>{{$totalclients}}</strong> <small>Clentes</small>
              </div>
          </li>
          <li>
            <span class="fa fa-frown-o fa-2x"></span>
              <div>
                <strong class="d-block">Clientes Inativos</strong>
                <strong>{{$inativeclients}}</> <small> Clentes</small>
              </div>
          </li>
        </ul>
      </nav>
      </div>
    </div>
  </div>
@endsection
@section("footer")
    @include('bootstrap.footer')
@endsection
@section('footerscripts')
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['gender', 'quant'],
        ['Homens', {{$man}}],
        ['Mulheres', {{$woman}}]
      ]);
      var options = {
        title: 'Gênero Clientes ativos'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
@endsection

