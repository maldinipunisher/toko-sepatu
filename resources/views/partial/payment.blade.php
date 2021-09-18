<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem; height: 33rem; ">
        <div class="card-body">
            <center>
                <p class="mt-4" style="font-size: 17px;">Jumlah Harga :</p>
                <h2>Rp 300.000</h2>

                <!-- Example single danger button -->
                <div class="btn-group mt-4">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Detail Tranksaksi
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Transfer</a></li>
                        <li><a class="dropdown-item" href="#">Cash on Delivery</a></li>
                        <li><a class="dropdown-item" href="#">Cicilan</a></li>
                    </ul>
                </div>
            </center>
            <p class="mt-4 my-4" style="font-size: 16px;">Metode Pembayaran :</p>
            <hr class="mt-4">
            <div class="form-check mt-4 ms-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Gerai Retail / Tunai
                </label>
            </div>
            <table class="table mt-4 table-borderless" style="width: 60%;">
                <tbody>
                    <tr>
                        <td>
                            <img src="https://1000logos.net/wp-content/uploads/2020/10/Alfamart-Logo-2003.jpg"
                                width="60px" height="30px">
                        </td>
                        <td>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Logo_of_Giant_Hypermarket.svg/1200px-Logo_of_Giant_Hypermarket.svg.png"
                                width="60px" height="30px">
                        </td>
                        <td>
                            <img src="https://upload.wikimedia.org/wikipedia/id/0/04/Logo_Indomaret.svg" width="60px"
                                height="30px">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4" style="font-size: 14px;">Periksa kembali data pembayaran anda sebelum melanjutkan tranksaksi.</p>
            <center>
            <a href="pengiriman">
            <button type="button" class="btn btn-success mt-4">Pilih Ekspedisi Pengiriman</button></a></center>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
