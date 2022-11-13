<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
  <?php endif; ?>
    <table border=3>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($isi -> id); ?>

            </td>
            <td>
                <?php echo e($isi -> title); ?>

            </td>
            <td>
                <?php echo e($isi -> description); ?>

            </td>
            <td class="table-info">
                <a href="/delete/<?php echo e($isi -> id); ?>">
                    <button typer="submit" class="btn btn-danger">Hapus</button>
                </a>
            </td>
        </tr>
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\Users\TILA\LaravelForm\resources\views/tampil.blade.php ENDPATH**/ ?>