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
height: 520px;
width: 0px;
margin-top: 20px;
}


</style>

<body>


{{-- navbar --}}

@include('partial.navbar')


{{-- navbar --}}






  <div class="card mt-4" style="width: 65rem; height: 35rem; margin-left: 250px;">
    <div class="container ">
        <div class="row">
          <div class="col" style="margin-top : 30px ;">


            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/merk1.jpg" class="d-block w-100" alt="..." width="430" height="500" style="margin-left: 25px;">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/merk2.jpg" class="d-block w-100" alt="..." width="430" height="500" style="margin-left: 25px;">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/merk4.jpg" class="d-block w-100" alt="..." width="430" height="500" style="margin-left: 25px;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


            {{-- <img src="/images/merk4.jpg" alt="sepatu" width="430" height="500" style="margin-left: 25px;" > --}}
          </div>
          <div class="garis_verikal"></div>
          <div class="col" style="margin-top : 30px ;">
            <center><h4 class="mb-4">Ada berbagai tipe sepatu di toko kami !</h4>
            <br>
            <h6 class="mb-4">Tipe-tipe nya dapat dipilih oleh sang pembeli, Meliputi :</h6>
                <h3 class="text-primary">Sepatu Lari </h3>
                <h3 class="text-success">Sepatu Gaya </h3>
                <h3 class="text-dark">Sepatu Kerja </h3>
            <br>
            <h7 class="mt-4">Dan untuk merk sepatu nya, dapat dilihat sebagai berikut</h7>
        </center>

        <table class="table table-striped mt-4 mb-4">
            <thead>
              <tr>
                <th scope="col">Merek</th>
                <th scope="col">Jenis</th>
                <th scope="col">Ketersediaan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nike</td>
                <td>Lari, Kerja, Road</td>
                <td class="text-primary">Tersedia</td>
              </tr>
              <tr>
                <td>Adidas</td>
                <td>Lari, Futsal</td>
                <td class="text-primary">Tersedia</td>
              </tr>
              <tr>
                <td>Puma</td>
                <td>Berenang</td>
                <td class="text-primary">Tersedia</td>
              </tr>
            </tbody>
          </table>
            <center>
                <a href="/">
                    <button type="button" class="btn btn-primary text-light mb-4" >Kunjungi</button>
                </a>
            </center>


              <br><br><br>
              {{-- <a href="/" style="margin-left: 420px;">Kembali</a> --}}
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
