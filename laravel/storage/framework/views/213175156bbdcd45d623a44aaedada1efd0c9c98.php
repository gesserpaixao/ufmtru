

<?php $__env->startSection('title', 'Saldo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Saldo</a><li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header">
            <a href="<?php echo e(route('balance.deposit')); ?>" class="btn btn-primary"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Recarregar</a>
        </div>   
        <div class="box-body">
            <div class="small-box bg-green">
                <?php echo $__env->make('admin.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
                <div class="small-box bg-green">
                        <div class="inner">
                          <h3>R$<?php echo e(number_format($amount, 2, ',','.')); ?></h3>
            
                          <p></p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-cash"></i>
                        </div>
                        <a href="historic" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
        </div>  
    </div>
    <p>Meu Saldo</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>