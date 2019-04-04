<?php $__env->startSection('title', 'ru-cardápio'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>CARDÁPIO DA SEMANA</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Cardápio</a><li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header">
            
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead class="thead thead-dark">
                    <tr>
                        <th>Data</th>
                        <th>Café da manhã</th>
                        <th>Almoço</th>
                        <th>Almoço Vegetariano</th>
                        <th>Jantar</th>
                        <th>Jantar Vegetariano</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $itemsshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e(date('d-m-Y', strtotime(str_replace('/','-',$Item->data)))); ?></td>
                            <td><?php echo e($Item->cafe); ?></td>
                            <td><?php echo e($Item->almoco); ?></td>
                            <td><?php echo e($Item->almoco_vegetariano); ?></td>
                            <td><?php echo e($Item->jantar); ?></td>
                            <td><?php echo e($Item->jantar_vegetariano); ?></td>
                        
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?> 
                </tbody>
            </table>
            
        </div>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>