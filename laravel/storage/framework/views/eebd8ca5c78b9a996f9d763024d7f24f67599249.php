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
           
                <form method="POST" action="<?php echo e(route('admin.cadastro.cadindex')); ?>">
                    <?php echo csrf_field(); ?>


                    
                        <div class="input-group margin">
                        <input type="text" name="p_nome"  placeholder="Digite o nome" class="form-control">
                                    <span class="input-group-btn">
                                      <button type="submit" class="btn btn-info btn-flat" nome="btn-busca">buscar  <span class="glyphicon glyphicon-search">
                                        </span>
                                      </button>
                                    </span>
                        </div>
                    
                    
                </form>
        </div>  
    </div>
    <?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
    <?php endif; ?>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
  <?php endif; ?>
  
   <?php if(!empty($user)): ?> 
        <div class="box">
            <div class="box-header">
                
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead thead-dark">
                        <tr>
                            
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Categoria</th>
                            <th>Tipo</th>
                          
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($Item->name); ?></td>
                                <td><?php echo e($Item->cpf); ?></td>
                                <td><?php echo e($Item->categoria); ?></td>
                                <?php if($Item->isadmin == 1): ?>
                                <td><?php echo e('Administrador'); ?></td>
                                <?php endif; ?>
                                <?php if($Item->isadmin == 0): ?>
                                <td><?php echo e('Usuario'); ?></td>
                                <?php endif; ?>
                            </tr>
                             
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?> 
                        
                    </tbody>
                </table>
                
            </div>  
        </div>
        
         
        <form style="display:inline-block; width:100px;" method="GET" action="<?php echo e(route('cadastroup')); ?>">
                <?php echo csrf_field(); ?>

                <input style="display:none;"  type="text" name="nome" value="<?php echo e($user[0]->id); ?>" placeholder="Digite o nome" class="form-control">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-success" name="btn-add">Add <span class="fa fa-plus">
              </span>
            </button>
          </span>
        </form>

          <form style="display:inline-block; width:50px;" method="GET" action="<?php echo e(route('cadastrodown')); ?>">
            <?php echo csrf_field(); ?>

            <input style="display:none;"  type="text" name="nome" value="<?php echo e($user[0]->id); ?>" placeholder="Digite o nome" class="form-control">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-danger">Remover  <span class="fa fa-times">
              </span>
            </button>
          </span>
        </form>
<?php endif; ?>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>