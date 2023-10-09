<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sorgulamax | BiletBayisi</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css ">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/sweetalert2/sweetalert2.css ">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Bilet</b>Bayisi</a><br>
  </div>
  <div class="card">
  @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div class="card-body login-card-body">
      <p class="login-box-msg">Türkiye'nin en ucuz uçak bileti sitesine kayıt olun </p>
      <form action="{{route('register')}}" method="post">
        @csrf
       <div class="input-group mb-3">
          <input type="text" name="adsoyad" class="form-control" placeholder="Ad Soyad">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div> 
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Password Again">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div> 
          </div>
        </div>

        <button type="submit" name="register" class="btn btn-primary btn-block">Kayıt Ol</button>
        <div class="text-center mt-2">
          <p>- Veya -</p>
        </div>      
      </form>
      <a href="{{route('login_')}}" type="submit" name="login" class="btn btn-primary btn-block">Giriş Yap</a>

  </div>
</div>
</body>
</html>