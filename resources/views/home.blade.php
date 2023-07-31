<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BiletBayisi Görevleri</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css ">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
@include('static.sidebar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Görev Listele</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Görev</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 40px">id</th>
                      <th>Başlık</th>
                      <th>Açıklama</th>
                      <th>Durum</th>
                      <th>İlerleyiş</th>
                      <th style="width: 40px"><center>İşlem</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                      <td><p>{{ $user->id }}</p></td>
                      <td><p>{{ $user->title }}</p></td>
                      <td><p>{{ $user->description }}</p></td>
                      <td><p>{{ $user->status }}</p></td>
                      <td><p>{{"% ".$user->progress }}</p></td>

                      
                      <td>
                        <div class="btn-group btn-group-md">
                          <button class="btn btn-md btn-info">Tamamlandı</button>
                          <a href="{{route('delete',['id' => $user->id])}}" class="btn btn-md btn-danger">Sil</a>
                          <a href="{{route('update')}}" class="btn btn-md btn-warning">Güncelle</a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
      </table>
    </div>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
</body>
</html>