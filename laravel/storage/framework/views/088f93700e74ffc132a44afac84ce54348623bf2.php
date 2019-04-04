<?php $__env->startSection('title', 'Cadastro'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Cadastro de Administrador</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Administrador</a><li>
        

    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="box">
        <div class="box-header">
            <h3>Pesquisar por nome</h3>
        </div>   
        <div class="box-body">
           <?php echo $__env->make('admin.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <form method="POST" action="<?php echo e(route('deposit.store')); ?>">
                    <?php echo csrf_field(); ?>


                    <div class="form-group">
                        <input type="text" name="value" placeholder="Digite o nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Tornar Administrador<button>
                    </div>
                </form>
        </div>  
    </div>
<?php $__env->stopSection(); ?>

<!-- Pagina criada e adiciona por @tiago, para ser tela principal da parte de cadastro do projeto.>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>