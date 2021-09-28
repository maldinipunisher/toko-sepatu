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
    @include('partial.carousel')
    @include('partial.merk_terkenal')
    @include('partial.harga_spesial')
    @include('partial.tentang')
    @include('partial.testimony')
    @include('partial.footer')


    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
