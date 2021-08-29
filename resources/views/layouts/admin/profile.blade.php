@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="container py-5">
    <div class="row h-100">
      <div class="col-4">
        <div class="card card-danger">
            <div class="card-body ">
                {{-- <div class="position-relative">
                    <button class="position-absolute border-0 btn btn-primary rounded-circle" style="margin-top: 110px;margin-left: 25vh;"><i class="fa fa-fw fa-camera pr-3" style="width: 10px"></i></button>

                </div> --}}
                    {{-- <a class="position-absolute" style="margin-top: 70px; margin-right: 60px;" href="#>"<i class="position-absolute fa fa-fw fa-camera " ></i>AWDWAD</a> --}}
                    <center><img src="{{ asset('images/user_profile.png')}}" class="  img-fluid rounded-start " alt="..." style="width: 50%">
                    <br><br>
                    <h5>Leon S Kennedy</h5>
                    <h7 style="font-size: 15px;">Reevil@gmail.com</h7>
                </center>
                <br>

                {{-- <a href="" class="float-right "><h7 style="font-size: 15px; color: blue">{{ __('adminlte::menu.change_picture') }}</h7></a> --}}

            </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-danger h-100">
            <div class="card-body">
                <form action="#" method="post">
                    @csrf
                <table class="table table-borderless table-striped">

                    <tbody>
                      <tr >
                        <td>{{ __('adminlte::menu.name') }}</td>
                        <td>Leon S kennedy</td>
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td>Reevil@gmail.com</td>
                      </tr>
                      <tr>
                        <td>{{ __('adminlte::menu.change_password') }}</td>
                        <td>**********</td>
                      </tr>
                      <tr>
                        <td>{{ __('adminlte::menu.address') }}</td>
                        <td>Santiago Road number 2</td>
                      </tr>
                    </tbody>
                    <tr>
                        <td>{{ __('adminlte::menu.hp') }}</td>
                        <td>089765342115</td>
                      </tr>
                      <tr>
                        <td>{{ __('adminlte::menu.role') }}</td>
                        <td>Admin</td>
                      </tr>
                      <tr>
                          <td>{{ __('adminlte::menu.change_picture') }}</td>
                          <td>
                            <input type="file" name="profilepic" id="profilepic">
                        </td>
                      </tr>
                    </tbody>
                    </tbody>
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-info float-right" style="margin-top: 70px">
                    <i class="fa fa-fw fa-pen"></i>
                    <a>{{ __('adminlte::menu.edit') }}</a>
                  </button>
                </form>
            </div>
        </div>
      </div>
    </div>

@stop
