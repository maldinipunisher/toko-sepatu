<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
    <title>TokoSepatu</title>
</head>

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
                                Tipe Sepatu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="runningShoesDropdown">
                                <li><a class="dropdown-item text-dark" href="tipe">Ringan</a></li>
                                <li><a class="dropdown-item text-dark" href="tipe">Jarak Jauh</a></li>
                                <li><a class="dropdown-item text-dark" href="tipe">Stabilitas</a></li>
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
        <h4 class="" style="margin-left: 125px; margin-top: 50px;">KERANJANG</h4>
<center>
    <div class="row mt-4">
        <div class="col-8 mt-4">
            <table class="table table-striped mx-4" style="border: 1px; width : 800px;">
                <thead>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td class="m">Pilih Semua</td>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td scope="col">
                                <table>
                                    <tbody>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </td>
                                        <td>
                                            <b>{{$product->suppliers->name}}</b>
                                            <img src="https://image.flaticon.com/icons/png/512/3892/3892943.png"
                                                width="20px" height="20px">
                                        </td>
                                    </tbody>
                                </table>
                                <p class="card-text px-4" style="font-size: 13px;">{{$product->categories->name}}</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <img src="@if($product->product_photo != null ) {{$product->product_photo}} @else images/no_image.png @endif"
                                                width="120px" height="120px">
                                        </div>
                                        <div class="col" style="margin-right: 10px;">
                                            <p class>{{$product->name}}</p>
                                            <p class="mb-4" style="font-size: 13px; color:green;">Tersisa : {{$product->stock}}</p>
                                            <b>
                                                <p class="mb-4">Rp. {{$product->price}}</p>
                                            </b>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p class="mb-4" style="font-size: 14px; color:green;">Tulis catatan
                                                        untuk barang ini</p>
                                                </div>
                                                {{-- <div class="col">
                                                    <P>Item : {{$product->}}</P>
                                                </div> --}}

                                            </div>
                                        </div>
                            </td>
                        </tr>
                        @endforeach


                </tbody>
            </table>

        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Rincian Total Pembelian</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Dari list keranjang</h6>
                    <br>
                    <table style="width:100%">
                        <tr>
                            <td colspan="2">Total Harga (0 Barang) </td>
                            <td>Rp 0</td>
                    </table>
                    <hr>
                    <table style="width:100%">
                        <tr>
                            <th colspan="2">Total Harga</th>
                            <th> - </th>
                        </tr>
                    </table>
                    <br>
                    <center><a href="payment"><button type="button" class="btn btn-success">Beli (0)</button></a></center>
                </div>
            </div>
        </div>
    </div>
    </div>
    </center>


    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
