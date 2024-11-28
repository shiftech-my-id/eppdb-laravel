<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk {{ env('APP_NAME') }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-muted text-center">
        <div>
          <span>Masuk <b>{{ env('APP_NAME') }}</b><sup><small> v{{ env('APP_VERSION_STR') }}</sup></small></span>
        </div>
        <div class="h6"><a href="{{ url('/') }}"><b>{{ e(env('SCHOOL_NAME')) }}</b></a></div>
      </div>
      <div class="card-body">
        @if (Session::has('error'))
          <p class="login-box-msg text-danger">{{ Session::get('error') }}</p>
        @endif
        @if (Session::has('success'))
          <p class="login-box-msg text-success">{{ Session::get('success') }}</p>
        @endif
        <form action="{{ route('staff.authenticate') }}" method="post">
          @csrf
          <div class="my-3">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              <input type="text" name="username" autofocus value="{{ old('username') }}" class="form-control"
                placeholder="ID Pengguna">
            </div>
            @error('username')
              <p class="text-danger"><small>{{ $message }}</small></p>
            @enderror
          </div>
          <div class="my-3">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              <input type="password" name="password" value="" class="toggle-password-target form-control"
                placeholder="Kata Sandi" id="password">
              <div class="input-group-append">
                <div class="input-group-text toggle-password">
                  <span class="fa fa-eye"></span>
                </div>
              </div>
            </div>
            @error('password')
              <p class="text-danger"><small>{{ $message }}</small></p>
            @enderror
          </div>
          <div class="my-3">
            <div class="form-group clearfix">
              <div class="icheck-primary d-inline">
                <input name="remember" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="font-weight-normal">Ingat saya di perangkat ini</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 my-3">
              <button type="submit" class="btn btn-primary btn-block">
                <i class="fa fa-right-to-bracket mr-2"></i>Masuk
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 my-2">
              <div class="text-gray text-sm">Silahkan hubungi admin untuk membuat akun atau mengatur ulang kata sandi.
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="text-muted mt-4">&copy; {{ env('DEV_ID') }} 2024</div>
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      initToggleablePassword();
    });
  </script>
</body>

</html>
