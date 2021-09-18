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

@include('partial.navbar')


{{-- navbar --}}




    <div class="alert alert-success mt-4" role="alert">
<center><h4>PENAWARAN SPESIAL : DAPATKAN SEPATU DENGAN KUALITAS TERBAIK HANYA DI TOKOSEPATU.COM</h4></center>
      </div>

      <center>
        <div class="alert alert-dark" role="alert" style="width: 60%; margin-top: 40px;">

            <div class="container">
                <div class="row">
                  <div class="col">
                    <b><p style="font-size: 16px;"">Kirimkan alamat email anda !</p></b>
                    <p style="font-size: 13px;">Supaya kami dapat mengirimkan ada tawaran ekslusif dari website kami.</p>

                  </div>

          </div>
      </center>

      <center>

        <h4 style="margin-top: 50px;">Berikut ini merupakan Produk yang kami Tawarkan</h4>
        <p style="font-size: 15px;">Dengan harga yang terjangkau</p>
        <br><br>


        <div class="container" style="padding-bottom: 100px">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/store1.jpg" class="card-img-top" alt="..." width="100px" height="200px">
                    <div class="card-body">
                      <center>
                          <h5 class="card-title">Obral Penjualan!</h5>
                          <p class="card-text">Banyaknya pilihan Sepatu akan membuat anda lebih mudah untuk mencarinya</p>
                          <a href="/" class="btn btn-success">Dapatkan Segera !</a>
                        </center>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/store3.jpg" class="card-img-top" alt="..." width="100px" height="200px">
                    <div class="card-body">
                      <center>
                          <h5 class="card-title">Obral Penjualan!</h5>
                          <p class="card-text">Banyaknya pilihan Sepatu akan membuat anda lebih mudah untuk mencarinya</p>
                          <a href="/" class="btn btn-success">Dapatkan Segera !</a>
                        </center>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/store2.jpg" class="card-img-top" alt="..." width="100px" height="200px">
                    <div class="card-body">
                      <center>
                          <h5 class="card-title">Obral Penjualan!</h5>
                          <p class="card-text">Banyaknya pilihan Sepatu akan membuat anda lebih mudah untuk mencarinya</p>
                          <a href="/" class="btn btn-success">Dapatkan Segera !</a>
                        </center>
                    </div>
                  </div>
              </div>
            </div>
        </di>
      </center>











    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
