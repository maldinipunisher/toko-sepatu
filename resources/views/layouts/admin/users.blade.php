@extends('adminlte::page')
@section('title', 'Users')

@section('content_header')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<!-- baris 1 -->
<div class="container py-3" >
    {{-- test --}}
    {{-- <form action="/admin/users" method="post">
        @csrf
    <button type="submit">GET USERS</button>
    </form> --}}

    <div class="row">
    @foreach ($users as $user)
        <div class="col col-md-6"  >
          <div class="card mb-3"  >
            <div class="row" style="height: 350px !important;">
              <div class="col-md-4 mt-4" style="display: block;">
                <img src="@if($user->profilepic != null) {{ url($user->profilepic) }} @else {{ asset('images/user_profile.png')}} @endif" class="  img-fluid rounded-start " alt="...">
              </div>
              <div class="col-md-8" >
                <div class="card-body">
                  <h5 class="card-title">{{ $user->name }}</h5>
                  <p class="card-text mt-5"><b>About</b> : {{ $user->description }} </p>
                  <table class="table ">
                    <tr>
                        <td><i class="fas fa-cogs"></i></td>
                        <td>
                          <p class="card-text">Role : <span class="@if($user->role == "1") text-danger @else text-success @endif text-bold">{{ $user->roles->name }}</span></p>
                        </td>
                      </tr>
                    <tr>
                      <td><i class="fas fa-map-marked-alt"> </i></td>
                      <td>
                        <p class="card-text">Address : {{ $user->address }}</p>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-phone"> </i></i></td>
                      <td>
                        <p class="card-text">Phone : {{ $user->phone }}</p>
                      </td>
                    </tr>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

    </div>


</div>


@stop
