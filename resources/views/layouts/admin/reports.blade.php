@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<center>
    <h2 style="padding-top: 20px">{{ __('adminlte::menu.report') }}</h2>
</center>


    <div class="row pt-4">
        <div class="col">
          <div class="card card-danger">
              <h5 class="card-title text-center pt-4" style="font-size: 2em;">Rincian Harian</h5>
              <div class="card-body">

                <div class="container">
                        <div class="row">
                            <div class="col">
                                <table class="table table-borderless mt-4">
                                    <tbody>
                                      <tr>
                                        <td>
                                            <div class="card text-dark bg-light mb-3" style="width: 11rem; height: 60px;">
                                                <div class="card-body">
                                                  <h5 class="card-title">Total Pemesanan</h5>
                                                  </div>
                                              </div>
                                        </td>
                                        <td>
                                            <div class="card text-dark bg-light mb-3" style="width: 10rem; height: 60px;">
                                                <div class="card-body">
                                                  <h5 class="card-title">Total Tranksaksi</h5>
                                                  </div>
                                              </div>
                                        </td>
                                        <td>
                                            <div class="card text-dark bg-light mb-3" style="width: 12rem; height: 60px;">
                                                <div class="card-body">
                                                  <h5 class="card-title">Total Pengembalian</h5>
                                                  </div>
                                              </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div style="margin-left: 10px">
                                    <h3 class="mb-4">Aktivitas Terbaru</h3>
                                    <table class="table table-borderless" style="width: 300px;">
                                        <tbody>
                                          <tr>
                                            <td>
                                                <img src="https://assets.pikiran-rakyat.com/crop/0x51:719x857/x/photo/2021/08/13/878582708.jpeg"
                                                width="60px" height="60px" style="border-radius: 50%">

                                            </td>
                                            <td>
                                                <h8>Maldini</h8>
                                                <b>Administrator</b>
                                            </td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <h5>Halo Guys, Maldini disini, kali ini kita akan mereview Bakpau</h5>
                                    <br>
                                    <h6 style="font-size: 1 em">Selasa, 17 Agustus 2021</h6>

                                    <hr class="mb-4 mt-4">

                                    <table class="table table-borderless" style="width: 300px;">
                                        <tbody>
                                          <tr>
                                            <td>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbSkT8TAmr8rQSc3pBsTBqL9vVuzEfpGyv-w&usqp=CAU"
                                                width="60px" height="60px" style="border-radius: 50%">

                                            </td>
                                            <td>
                                                <h8>Latifatul</h8>
                                                <b>Administrator</b>
                                            </td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <h5>Aku tanpamu, bagaikan minyak tanpa air (◕ᴗ◕✿)</h5>
                                    <br>
                                    <h6 style="font-size: 1 em">Waktu ketika aku belajar untuk mencintaimu ♥</h6>
                                  </div>
                                  <hr class="mt-4">




                            </div>
                            <div class="col mt-4">
                              <h1><i class="fas fa-socks text-success"> </i> Toko Sepatu</h1>
                              <h8>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sapiente quae dolor voluptates, possimus quaerat dolorum veniam, provident, iste quidem aperiam blanditiis velit nesciunt porro vitae maxime. Deleniti, pariatur nobis!</h8>
                              <br><br>
                              <table >
                                  <tr>
                                      <td><h8>Didirikan Oleh</h8></td>
                                  </tr>
                                  <tr>
                                    <td><b><h8>Trio 3 Manjur</h8></b></td>
                                  </tr>
                                  <tr>
                                </tr>
                              </table>
                              <br>
                              <table>
                                <td><h8>Diprakasai oleh</h8></td>
                                <tr>
                                    <td><b><h8>* Latiful Kamal</h8></b></td>
                                  </tr>
                                  <tr>
                                      <td><b><h8>* Maldini Dwi P</h8></b></td>
                                  </tr>
                                  <tr>
                                      <td><b><h8>* Yusufi BusliaN</h8></b></td>
                                  </tr>
                              </table>
                              <br>
                              <table>
                                <td><h8>Isian Laporan</h8></td>
                                <tr>
                                    <td><h8><i class="fas fa-hamburger text-success"></i> Makan</h8></td>
                                  </tr>
                                  <tr>
                                    <td><h8><i class="fas fa-hotdog text-success"></i> Makan</h8></td>
                                  </tr>
                                  <tr>
                                    <td><h8><i class="fas fa-bone text-success"></i> dan Makan</h8></td>
                                  </tr>
                                  <tr>
                                    <td><h8><i class="fas fa-heart text-danger"></i> Tolong kami Jomblo!</h8></td>
                                  </tr>
                              </table>
                            </div>
                            </div>
                          </div>



          </div>
        </div>
      </div>
  </div>

@stop
