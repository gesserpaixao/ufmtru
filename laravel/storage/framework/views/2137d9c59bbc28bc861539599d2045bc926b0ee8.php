<?php $__env->startSection('title', 'Lotação'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lotação</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Lotação</a><li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="box">
  <div class="box-header">
            
        </div>  
        <?php if($cor == 'green'): ?>
        <div class="box-body">
         <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo e($gera); ?></h3>

              <p>Pessoas no Momento</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              Vazio !! Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>             
        </div>  
        <?php endif; ?>
       
      <?php if($cor == 'yellow'): ?>
      <div class="box-body">
       <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo e($gera); ?></h3>

            <p>Pessoas no Momento</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            Moderado !! Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
          </a>
      </div>             
      </div>  
      <?php endif; ?>
     
    <?php if($cor == 'red'): ?>
    <div class="box-body">
     <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo e($gera); ?></h3>

          <p>Pessoas no Momento</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
    
            <a href="#" class="small-box-footer">
              Lotado!! Capacidade Maxima de 300 Pessoas<i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>             
        </div>  
        <?php endif; ?>
    </div>
    
    <p></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>