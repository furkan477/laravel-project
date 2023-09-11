<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(auth()->user()->email); ?> Kullanıcıya Ait Görevi Güncelle</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php echo $__env->make('static.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Görev Güncelle</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Görevlerim</a></li>
                            <li class="breadcrumb-item active">Görev Ekle</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
        <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gorev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('flightUpdate', ['id' => $gorev->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label>Görev Türü</label>
                        <input type="text" class="form-control" name="nereden" value="<?php echo e($gorev->nereden); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev Açıklaması</label>
                        <input type="text" class="form-control" name="nereye" value="<?php echo e($gorev->nereye); ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Görev Başlangıç Tarihi</label>
                        <input type="date" class="form-control" name="gidis_tarihi" value="<?php echo e($gorev->gidis_tarihi); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev Bitiş Tarihi (isteğe bağlı)</label>
                        <input type="date" class="form-control" name="gelis_tarihi" value="<?php echo e($gorev->gelis_tarihi); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev İlerleyiş</label>
                        <input type="range" min="0" max="100" class="form-control" name="progress" value="<?php echo e($gorev->progress); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev Durum</label>
                        <select name="status" class="form-control" $value="<?php echo e($gorev->status); ?>">
                            <option value="Aktif">Aktif</option>
                            <option value="Pasif">Pasif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Görev Güncelle</button>

                </div>
                
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH C:\xampp\htdocs\benimprojem2\resources\views/flightUpdate.blade.php ENDPATH**/ ?>