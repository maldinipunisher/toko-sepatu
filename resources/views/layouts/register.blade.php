<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
    <title>Daftar</title>
</head>

<body>
    <form action="{{ route('register_action') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem; height: 37rem; ">
            <div class="card-body ">
                <b>
                    <h5 class="start-50 position-absolute translate-middle text-dark mt-3">Halaman Daftar</h5>
                </b>
                <div class="start-50 mt-n1 start-0 w-100 px-5 p-5">
                    <label for="name" class="form-label">Nama Pengguna</label>
                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1"
                        value="{{ old('name') }}" placeholder="Name" required>
                    <label for="address" class="form-label">Alamat Rumah</label>
                    <input type="address" name="address" class="form-control" id="exampleFormControlInput1"
                        value="{{ old('address') }}" placeholder="Borobudur Road number 1, Yogyakarta" required>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="exampleFormControlInput1" value="{{ old('email') }}" placeholder="name@example.com"
                        required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="password" class="form-label mt-2">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="exampleFormControlInput1" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="phone" class="form-label">No HP</label>
                    <input type="phone" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }} " placeholder="No Handphone" required>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="profilepic" class="form-label">Profile Picture</label>
                    <input type="file" accept="image/*" name="profilepic" class="form-control" id="profilepic"
                        value="{{ old('profilepic') }}" placeholder="Upload your image here">
                </div>

                <button type="submit"
                    class="start-50 position-absolute bottom-0  translate-middle btn btn-primary text-light"
                    style="margin-bottom:5%;">Sign Up</button>
                {{-- <a href="index.html" class="position-absolute bottom-0 end-0 px-5 p-5 mt-1">Menu</a> --}}
            </div>
        </div>
    </form>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>

</html>
