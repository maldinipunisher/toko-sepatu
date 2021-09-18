<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
    <title>TokoSepatu</title>
</head>
<style>
    .icon {
        position: absolute;
        top: 48%;
        padding-left: 2%;
        transform: translate(-50%, -50%);
        display: block;
        font-size: 25px;
    }

    .carousel .carousel-item {
        height: 500px;
    }

    .carousel-item img {

        object-fit: cover;
        max-height: 500px;
    }




    /* Top right text */
    .top-right {
        position: absolute;
        top: 8px;
        left: 16px;

    }
</style>
<body>
    @include('partial.navbar')

    <div class="row" style="padding-bottom: 100px">
        <div class="col-8">
            <h1 style="font-size: 4em; margin-top: 70px; font-weight: bold; margin-left: 50px">DISKON UNTUK HARI INI !</h1>
            <h4 style="margin-top: 70px; margin-left: 50px; margin-top: 20px;">
            Hanya untuk Hari Ini! Semua varian Sepatu akan diskon hingga 20%,
            </h4>
            <h4 style="margin-left: 50px;">
                selain itu, juga terdapat Gratis Ongkir bagi Pelanggan yang melakukan
            </h4>
            <h4 style="margin-left: 50px;">
                pembeliah hanya dengan 2 set Sepatu!,  Tunggu apalagi, Dapatkan Segera!
            </h4>

            <a href="/">
                <button type="button" class="btn btn-primary btn-lg" style="color: white; margin-left: 50px; margin-top: 40px;">Menuju Ke Menu</button>
            </a>
        </div>
        <div class="col-4">
            <img src="images/merk5.png" width="400px" height="400px">
        </div>
        <table style="margin-left: 60px; margin-top: -10px">
            <tr>
                <td><h8>Hanya di : </h8></b>
                <b><a class="navbar-brand text-primary" href="/" style="font-size: 15px">TOKO SEPATU</a></b>
                </td>
            </tr>
        </table>
      </div>
    </div>




    @include('partial.footer')


    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
