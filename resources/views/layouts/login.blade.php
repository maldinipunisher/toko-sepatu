<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
  <title>Masuk</title>
</head>

<body>
        @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif
  <div class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem; height: 30rem; ">
    <div class="card-body ">

      <b>
        <h5 class="start-50 position-absolute translate-middle text-dark mt-3">Halaman Login</h5>
      </b>
      <div class=" start-50  position-absolute translate-middle rounded-circle bg-primary" style="height: 8em; width: 8em; margin-top: 8em; z-index: 0;">
        <b><i class="text-light bi bi-shield-lock start-50 position-absolute" style="font-size: 5em;transform: translate(-50%, 5%) ; z-index: 1;"></i></b>
      </div>
      <form action="{{ route('login_action') }}" method="post">
        @csrf
        <div class="top-50 mt-n4 start-0 w-100 px-5 position-absolute">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com">
                @error('email')
                <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                @enderror
                <label for="password" class="form-label mt-2">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <button type="submit" class="start-50 position-absolute bottom-0 my-3 translate-middle btn btn-primary text-light">Login</button>
              <a href="{{ route('register') }}" class="position-absolute bottom-0 end-0 px-5 p-5 mt-1">Sign Up</a>
    </form>
    </div>
  </div>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>

</html>
