<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ auth()->user()->email}} Kullanıcıya Ait Yapılacaklar</title>

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
            <h1 class="m-0">Yapılacakları Listele</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Yapılcaklar</li>
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
                      <th>Görev Türü</th>
                      <th>Görev Açıklaması</th>
                      <th>Göreve Başlangıç Tarihi</th>
                      <th>Görevin Bitiş Tarihi</th>
                      <th>Görevin Durum</th>
                      <th>Görevin İlerleyişi</th>
                      <th style="width: 40px"><center>İşlem</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($task as $duty)
                    @if (auth()->check() && auth()->user()->id == $duty->user_id)
                     <tr>
                      <td><p>{{ $duty->id }}</p></td>
                      <td><p>{{ $duty->task_type }}</p></td>
                      <td><p>{{ $duty->task_description }}</p></td>
                      <td><p>{{ $duty->task_start_date }}</p></td>
                      <td><p>{{ $duty->task_end_date }}</p></td>
                      <td><p>{{ $duty->task_status }}</p></td>
                      <td><p>{{ $duty->task_progress }}</p></td>
                    

                      <td>
                        <div class="btn-group btn-group-md">
                          <button class="btn btn-md btn-info">Tamamlandı</button>
                          <a href="{{route('delete',['id' => $duty->id])}}" class="btn btn-md btn-danger">Sil</a>
                          <a href="{{route('taskUpdate_')}}" class="btn btn-md btn-warning">Güncelle</a>
                        </div>
                      </td>
                     </tr>
                    @endif
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