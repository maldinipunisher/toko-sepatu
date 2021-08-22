@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="container mt-4">
    <div class="row">
      <div class="col">
        <div class="card text-white bg-primary mb-3" >
            <div class="card-body">
              <p class="card-text ">
                  <div class="row">
                      <div class="col">
              <h3 class="text-bold">{{ __('adminlte::menu.orders') }}</h3>

                          <h4 class="text-light text-bold">101</h4>
                      </div>
                      <div class="col"><i class="fa fa-fw fa-shopping-bag float-right" style="  font-size: 3.5em;color: rgba(107, 107, 107, 0.4);"></i></div>
                  </div>
              </p>
            </div>
            <div style="background-color: rgba(107, 107, 107, 0.4)" class="card-header text-center"><a class="text-light" href="#">{{ __('adminlte::menu.more') }} <i class="fa fa-fw fa-arrow-right"></i> </a></div>
          </div>
      </div>
      <div class="col">
        <div class="card text-white bg-success mb-3" >
            <div class="card-body">
              <p class="card-text ">
                  <div class="row">
                      <div class="col">
              <h3 class="text-bold">{{ __('adminlte::menu.users') }}</h3>

                          <h4 class="text-light text-bold">1001</h4>
                      </div>
                      <div class="col"><i class="fa fa-fw fa-user float-right" style="  font-size: 3.5em;color: rgba(107, 107, 107, 0.4);"></i></div>
                  </div>
              </p>
            </div>
            <div style="background-color: rgba(107, 107, 107, 0.4)" class="card-header text-center"><a class="text-light" href="#">{{ __('adminlte::menu.more') }} <i class="fa fa-fw fa-arrow-right"></i> </a></div>
          </div>
      </div>
      <div class="col">
        <div class="card text-white bg-danger mb-3" >
            <div class="card-body">
              <p class="card-text ">
                  <div class="row">
                      <div class="col">
              <h3 class="text-bold">{{ __('adminlte::menu.visitors') }}</h3>

                          <h4 class="text-light text-bold">2001</h4>
                      </div>
                      <div class="col"><i class="fa fa-fw fa-users float-right" style="  font-size: 3.5em;color: rgba(107, 107, 107, 0.4);"></i></div>
                  </div>
              </p>
            </div>
            <div style="background-color: rgba(107, 107, 107, 0.4)" class="card-header text-center"><a class="text-light" href="#">{{ __('adminlte::menu.more') }} <i class="fa fa-fw fa-arrow-right"></i> </a></div>
          </div>
      </div>
  </div>
<div class="container py-3 ">
    <div class="row">
      <div class="col">
        <div class="card card-danger">
            <h5 class="card-title text-bold fs-3 text-center mt-4">{{ __('adminlte::menu.sale') }}</h5>
            <div class="card-body">
                <canvas id="myChart" width="100" height="50"></canvas>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-danger">
            <h5 class="card-title fs-3 ml-4 text-bold mt-4">{{ __('adminlte::menu.users') }}</h5>
            <div class="card-body">
                <canvas id="secondChart" width="100" height="50"></canvas>
            </div>
        </div>
      </div>

    </div>
    <div class="row">
        <div class="col">
          <div class="card card-danger">
              <h5 class="card-title fs-3 text-center mt-4">{{ __('adminlte::menu.product') }}</h5>
              <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col"  colspan="2">{{ __('adminlte::menu.name') }}</th>
                          <th scope="col">{{ __('adminlte::menu.qty') }}</th>
                          <th scope="col">{{ __('adminlte::menu.dist') }}</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td  colspan="2">Mark</td>
                          <td>21</td>
                          <td>@mdo</td>
                          <td><a class="text-dark" href="#"><i class="fas fa-fw fa-search"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td  colspan="2">Jacob</td>
                          <td>3</td>
                          <td>@fat</td>
                          <td><a class="text-dark" href="#"><i class="fas fa-fw fa-search"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>2</td>
                          <td>@twitter</td>
                          <td><a class="text-dark" href="#"><i class="fas fa-fw fa-search"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="2">The Has Slinging Slasher</td>
                            <td>33</td>
                            <td>@Spongeboob</td>
                            <td><a class="text-dark" href="#"><i class="fas fa-fw fa-search"></i></a></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td colspan="2">Bocil Kematian</td>
                            <td>98</td>
                            <td>@windah</td>
                            <td><a class="text-dark" href="#"><i class="fas fa-fw fa-search"></i></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
        {{-- <div class="col">
          <div class="card card-danger">
              <h5 class="card-title fs-3 text-center mt-4">{{ __('adminlte::menu.sum') }}</h5>
              <div class="card-body">
                <ul class="list-group">
                    <li class="border-0 list-group-item"><i class="fas fa-fw fa-retweet"></i>
                        <hr class="text-dark">
                    </li>
                    <li class="border-0 list-group-item"><i class="fas fa-fw fa-shopping-cart"></i>
                        <hr class="text-dark">
                    </li>
                    <li class="border-0 list-group-item"><i class="fas fa-fw fa-users"></i>
                        <hr class="text-dark">
                    </li>
                    <li class="border-0 list-group-item"><i class="fas fa-fw fa-percentage"></i>
                        <hr class="text-dark">
                    </li>
                  </ul>
              </div>
          </div>
        </div> --}}

      </div>
  </div>


@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["{{ __('adminlte::menu.mon') }}", "{{ __('adminlte::menu.tue') }}", "{{ __('adminlte::menu.wed') }}","{{ __('adminlte::menu.fri') }}","{{ __('adminlte::menu.sat') }}", "{{ __('adminlte::menu.sun') }}"],
        datasets: [{
            label: "{{ __('adminlte::menu.profit') }}",
            data: [1, 2, 3, 4, 5, 6],
            backgroundColor: [
                'rgba(50, 28, 252, 0.2)'
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(50, 28, 252, 1)'
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },
        {
            label: "{{ __('adminlte::menu.loss') }}",
            data: [3,4,2,1,4,5,10],
            backgroundColor: [
                'rgba(255, 13, 69, 0.2)'
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 13, 69, 1)'
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },
        {
            label: "{{ __('adminlte::menu.average') }}",
            data: [10,5,6,4,2,8,9],
            backgroundColor: [
                'rgba(145, 145, 145, 0.2)'
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(145, 145, 145, 1)'
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

//secondChart
var ctx2 = document.getElementById('secondChart').getContext('2d');
var myChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['2021', '2022', '2023', '2024', '2025'],
        datasets: [{
            label: "",
            data: [6, 100, 150, 60, 0, 0],
            backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)',
      'rgb(70, 0, 109)',
      'rgb(80, 46, 6)'
    ],
        }]
    }
    ,
    options: {
      legend: {
         position: 'right'
      }}
});
</script>
@stop
