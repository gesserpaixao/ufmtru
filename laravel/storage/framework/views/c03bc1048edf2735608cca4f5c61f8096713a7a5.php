<?php $__env->startSection('title', 'Histórico de Movimentações'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Histórico de Movimentacões</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Historico de Movimentações</a><li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header">
            
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Recarga</th>
                        <th>Saldo Anterior</th>
                        <th>Saldo Atual</th>
                        <th>Tipo</th>
                        <th>Data</th>
                    <tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $historics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($historic->id); ?></td>
                        <td><?php echo e(number_format($historic->amount, 2 ,',', '.')); ?></td>
                        <td><?php echo e(number_format($historic->total_before, 2 ,',', '.')); ?></td>
                        <td><?php echo e(number_format($historic->total_after, 2 ,',', '.')); ?></td>
                        <td><?php echo e($historic->type($historic->type)); ?></td>
                        <td><?php echo e($historic->date); ?></td>
                        
                    <tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php echo $historics->links(); ?>

        </div>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>