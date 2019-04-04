

<?php $__env->startSection('title', 'Nova Recarga'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Debitar</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href=""></a><li>
        <li><a href="">Debitar</a><li>

    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="box">
        <div class="box-header">
            <h3>Insira o valor do Debito</h3>
        </div>   
        <div class="box-body">
           <?php echo $__env->make('admin.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <form method="POST" action="<?php echo e(route('deposit.sacar')); ?>" >
                    <?php echo csrf_field(); ?>


                    <div class="form-group">
                        <input type="text" name="value"  placeholder="Ex: 10.00" class="form-control">
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-flat" nome="btn-busca">Debitar  <span class="glyphicon glyphicon-money">
                                </span>
                            </button>
                        <!--<button type="submit" class="btn btn-success">Recarregar<button>-->
                                
                    </div>
                </form>
                
        </div>  
    </div>
    <!--<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
     NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO 
    <input type="hidden" name="code" value="7131C4703333AD5FF41C3F9618452A88" />
    <input type="hidden" name="iot" value="button" />
    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-pagar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
     FINAL FORMULARIO BOTAO PAGSEGURO -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>