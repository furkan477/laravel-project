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
            
             <form action="<?php echo e(route('taskUpdate', ['task' => $task->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label>Görev Türü</label>
                        <input type="text" class="form-control" name="task_type" value="<?php echo e($task->task_type); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev Açıklaması</label>
                        <input type="text" class="form-control" name="task_description" value="<?php echo e($task->task_description); ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Görev Başlangıç Tarihi</label>
                        <input type="date" class="form-control" name="task_start_date" value="<?php echo e($task->task_start_date); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev Bitiş Tarihi (isteğe bağlı)</label>
                        <input type="date" class="form-control" name="task_end_date" value="<?php echo e($task->task_end_date); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev İlerleyiş</label>
                        <input type="range" min="0" max="100" class="form-control" name="task_progress" value="<?php echo e($task->task_progress); ?>">
                    </div>
                    <div class="form-group">
                        <label>Görev Durum</label>
                        <select name="task_status" class="form-control" value="<?php echo e($task->task_status); ?>">
                            <option value="Aktif">Aktif</option>
                            <option value="Pasif">Pasif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Görev Güncelle</button>

                </div>
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
</html><?php /**PATH C:\xampp\htdocs\benimprojem2\resources\views/taskUpdate.blade.php ENDPATH**/ ?>