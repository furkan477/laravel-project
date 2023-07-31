<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Görev Güncelleme</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css">
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
                        <h1 class="m-0">Görev Güncelleme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Görevler</a></li>
                            <li class="breadcrumb-item active">Güncelle</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            @foreach($kullanicilar as $kullanici)
            <form action="{{route('edit', ['id' => $kullanici->id])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Proje Başlığı</label>
                        <input type="text" class="form-control" name="title" value="{{ $kullanici->title }}">
                    </div>
                    <div class="form-group">
                        <label>Proje Detayları</label>
                        <textarea class="form-control" name="description">{{ $kullanici->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Başlangıç Tarihi</label>
                        <input type="date" class="form-control" name="start_date" value="{{ $kullanici->start_date }}">
                    </div>
                    <div class="form-group">
                        <label>Bitiş Tarihi</label>
                        <input type="date" class="form-control" name="end_date" value="{{ $kullanici->end_date }}">
                    </div>
                    <div class="form-group">
                        <label>İlerleyiş</label>
                        <input type="range" min="0" max="100" class="form-control" name="progress" value="{{ $kullanici->progress }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Proje Durum</label>
                        <select id="status" class="form-control">
                            <option value="{{ $kullanici->status }}">Aktif</option>
                            <option value="{{ $kullanici->status }}">Pasif</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            Patika.Dev - PhpBasics
        </div>
        We <strong><i class="fa fa-heart"></i></strong> PHP
    </footer>
</div>
</body>
</html>