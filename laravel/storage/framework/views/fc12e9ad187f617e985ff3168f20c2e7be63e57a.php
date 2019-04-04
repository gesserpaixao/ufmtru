<?php $__env->startSection('title', 'Relatório'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Relatório Financeiro</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Relatório</a><li>
        

    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box">
        <div class="box-header">
            <h3>Filtar por data</h3>
        </div>   
        <div class="box-body">
           
                <form method="POST" action="<?php echo e(route('relatorio/relatorio')); ?>">
                    <?php echo csrf_field(); ?>


                    
                   <!-- <div class="form-group">
                      <label>Date:</label>
      
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                      </div>
                     
                    </div>-->

                        <label>Data inicio:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                        <input type="date" name="data_inicio" value ="Data inicio"  placeholder="Data inicio" class="form-control pull-right " id="datepicker">
                            </div>
                        </br>

                        
                        <label>Data final:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                        <input type="date" name="data_final" value ="Data final"  placeholder="Data final" class="form-control pull-right " id="datepicker">
                        

                       <!-- <input type="date" name="data_final" value ="Data final"  placeholder="Data final" class="form-control">-->
                                    
                        </div>
                      </br>
                      </br>
                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat" nome="btn-busca">buscar  <span class="glyphicon glyphicon-search">
                            </span>
                          </button>
                        </div>
                    
                    
                </form>
        </div>  
    </div>
   <?php if(!empty($user)): ?>
   
   <?php if(session('success')): ?>
   <div class="alert alert-success">
       <?php echo e(session('success')); ?>

   </div>
 <?php endif; ?>

 <?php if(session('error')): ?>
   <div class="alert alert-danger">
       <?php echo e(session('error')); ?>

   </div>
 <?php endif; ?> 
 <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total de Vendas</span>
            <span class="info-box-number"><?php echo e(number_format($total_valor, 2 ,',', '.')); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>  
    </br> 
</br>
</br>
</br>
</br>

        <div class="box">
            <div class="box-header">
                
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead thead-dark">
                        <tr>
                            <th>Data</th>
                          <th>Venda</th> 
                          <th>Usuário</th>

                            <th>Valor</th>
                            
                        
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e(date('d-m-Y', strtotime(str_replace('/','-',$Item->date)))); ?></td>
                                <td><?php echo e($Item->id); ?></td>
                                <td><?php echo e($Item->user_id); ?></td>
                                <td><?php echo e(number_format($Item->amount, 2 ,',', '.')); ?></td>
                                
                                
                             
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?> 
                        
                    </tbody>
                </table>
                
            </div>  
        </div>
        
         
       
<?php endif; ?>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>