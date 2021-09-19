<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
  <title>TokoSepatu</title>
</head>
<style>
.garis_verikal{
border-left: 1px black solid;
height: 500;
width: 0px;
margin-top: 20px;
}


</style>

<body>


{{-- navbar --}}

<div class="bg-white border-bottom" style="height: 6em;">
    <div class="container ">
        <nav class="navbar navbar-expand-sm navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <b><a class="navbar-brand text-primary" href="/">TOKO SEPATU</a></b>

                <form class="d-flex w-50">
                    <div class="input-group">

                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>

                    </div>
                </form>
                <div class="float-right">
                    <div class="collapse navbar-collapse ">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item ">
                                @if (Auth::check())
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="nav-link my-auto mr-4 bg-white"
                                            style="font-size: 24px;border : none;"><i class="bi bi-box-arrow-right "></i></button>
                                    </form>
                                @else
                                        <a href="/login" class="nav-link my-auto mr-4 bg-white"
                                                style="font-size: 24px;border : none;"><i class="bi bi-person "></i></a>
                                @endif
                            </li>

                            <li class="nav-item">
                                <a class="nav-link my-auto" style="font-size: 24px;" href="#"><b><i
                                            class="bi bi-suit-heart"></i></b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link my-auto" style="font-size: 24px;" href="cart"><i
                                        class="bi bi-cart4"></i></a>
                            </li>
                            <li class="nav-item">
                                <b>
                                    <p class="text-dart mt-3">
                                        Saldo
                                    </p>
                                </b>
                                <p class="text-danger mt-n4" style="font-size: 12px;">
                                    Rp. 1.590.000
                                </p>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>
        </nav>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" data-bs-keyboard="false"
    data-bs-backdrop="false" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header bg-primary">
        <h5 class="offcanvas-title text-light" style="font-size: 20px" id="offcanvasExampleLabel">Toko Sepatu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div id="sidebar">
            <div class="nav flex-column py-3 ">
                <a href="#menu1" class="nav-link text-dark collapsed" style="font-size: 18px" data-bs-toggle="collapse"
                    role="button"><i class="bi bi-person"></i> Profile</a>
                <a href="#menu1" class="nav-link collapsed text-dark mt-3" style="font-size: 18px"
                    data-bs-toggle="collapse" role="button"><i class="bi bi-suit-heart"></i> Disimpan</a>
                <a href="#menu1" class="nav-link collapsed text-dark mt-3" style="font-size: 18px"
                    data-bs-toggle="collapse" role="button"><i class="bi bi-cart4"></i> Kerajang</a>

                <p href="#menu1" class="nav-link collapsed text-danger mt-3" style="font-size: 18px"
                    data-bs-toggle="collapse" role="button"><i class="text-dark bi bi-cash-coin"></i> Rp. 1.500.000
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light border-bottom ">
    <div class="container">
        <center>
            <div class="row py-2">

                <div class="col my-auto">
                    <b><a class=" link-dark" style="text-decoration: none;" href="penawaran">
                            <i class="bi bi-lightning" style="color: #FFE65B"></i>Penawaran Hari Ini</a></b>
                </div>
                <div class="col my-auto">
                    <b><a class=" link-dark" style="text-decoration: none;" href="#">
                            <i class="bi bi-tag"></i>Harga Spesial</a></b>
                </div>
                <div class="col my-auto">
                    <b>
                        <div class="dropdown ">
                            <a class=" dropdown-toggle link-dark" style="text-decoration: none;" href="#"
                                id="runningShoesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sepatu Lari
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="runningShoesDropdown">
                                <li><a class="dropdown-item text-dark" href="#">Ringan</a></li>
                                <li><a class="dropdown-item text-dark" href="#">Jarak Jauh</a></li>
                                <li><a class="dropdown-item text-dark" href="#">Stabilitas</a></li>
                            </ul>
                        </div>
                    </b>
                </div>

                <div class="col col-sm-4 my-auto float-right ">
                    <b><a class="link-danger" style="text-decoration: none;" href="#">
                            <i class="bi bi-award"></i>Hot</a></b>
                </div>
            </div>
        </center>
    </div>
</div>


{{-- navbar --}}






  <div class="card mt-4" style="width: 65rem; height: 35rem; margin-left: 250px;">
    <div class="container ">
        <div class="row">
          <div class="col" style="margin-top : 30px ;">
            <img src="/images/merk4.jpg" alt="sepatu" width="430" height="500" style="margin-left: 25px;" >
          </div>
          <div class="garis_verikal"></div>
          <div class="col" style="margin-top : 30px ;">
            <center><h2>Detail Produk</h2></center>
            <br>
            <h6>Kode Produk </h6>
            <hr>
            <h6>Point Reward </h6>
            <hr>
            <h6>Ketersediaan </h6>
            <hr>
            <br>
            <h4 class="text-primary ">Rp. 600.000 </h4>
            <br>
            <h6>Warna </h6>
            <div class="btn-group text-light">
                <button type="button" class="btn btn-primary dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                  Silahkan Pilih
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>

              </div>
              <br><br>
            <h6>Ukuran </h6>

            <button type="button" class="btn btn-primary dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                Silahkan Pilih
              </button>
              <ul class="dropdown-menu text-light">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
              </ul>

              <button type="button" class="btn btn-primary text-light" style="margin-left: 130px;">Tambah ke Keranjang</button>

              <br><br><br>
              <a href="/" style="margin-left: 420px;">Kembali</a>
            </div>

            <p></p>

          </div>

        </div>

      </div>

  </div>

  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>

</html>
