<?php $__env->startSection('title', 'Avaliação'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Deixe sua Avaliação</h1>
    <style>.labelt{width: 100%; background-color:#A9E2F3;}</style>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Avaliação</a><li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

</br>
</br>
<div class="box">
        
    <div class="box-body">
        <div class="form-group">
            <form method="POST" action="<?php echo e(route('admin.avaliar.store')); ?>">
                 <?php echo csrf_field(); ?>

                
            
            <label class="labelt"><h4>Como você avalia a qualidade da refeição servida no restaurante?</h4></label>
            </br>
            
            <label>
                <input type="radio" name="questao_01" id="questao_01" value="Pessimo">
                Péssimo
            </label>
            <label>
                <input type="radio" name="questao_01" id="questao_01" value="Ruin">
                Ruim
            </label>
            <label>
                <input type="radio" name="questao_01" id="questao_01" value="Regular">
                Regular
            </label>
            <label>
                <input type="radio" name="questao_01" id="questao_01" value="Bom">
                Bom
            </label>
            <label>
                <input type="radio" name="questao_01" id="questao_01" value="Otimo">
                Ótimo
            </label>
            <hr/>   
        
        
        
       
         <label class="labelt"><h4>Como você avalia o cardápio oferecido no Restaurante?</h4></label>
            </br>
            
            <label>
                <input type="radio" name="questao_02" id="questao_02" value="Pessimo">
                Péssimo
            </label>
            <label>
                <input type="radio" name="questao_02" id="questao_02" value="Ruin">
                Ruim
            </label>
            <label>
                <input type="radio" name="questao_02" id="questao_02" value="Regular">
                Regular
            </label>
            <label>
                <input type="radio" name="questao_02" id="questao_02" value="Bom">
                Bom
            </label>
            <label>
                <input type="radio" name="questao_02" id="questao_02" value="Otimo">
                Ótimo
            </label>
    
            <hr/>

        <label class="labelt"><h4>Como você avalia a qualidade dos serviços prestados no restaurante?</h4></label>
        </br>
        <label>
            <input type="radio" name="questao_03" id="questao_03" value="Pessimo">
            Péssimo
        </label>
        <label>
            <input type="radio" name="questao_03" id="questao_03" value="Ruin">
            Ruim
        </label>
        <label>
            <input type="radio" name="questao_03" id="questao_03" value="Regular">
            Regular
        </label>
        <label>
            <input type="radio" name="questao_03" id="questao_03" value="Bom">
            Bom
        </label>
        <label>
            <input type="radio" name="questao_03" id="questao_03" value="Otimo">
            Ótimo
        </label>
        
        
        <hr/>

        <label class="labelt"><h4>Como você avalia as instalações do restaurante ?</h4></label>
    </br>
    
    <label>
        <input type="radio" name="questao_04" id="questao_04" value="Pessimo">
        Péssimo
    </label>
    <label>
        <input type="radio" name="questao_04" id="questao_04" value="Ruin">
        Ruim
    </label>
    <label>
        <input type="radio" name="questao_04" id="questao_04" value="Regular">
        Regular
    </label>
    <label>
        <input type="radio" name="questao_04" id="questao_04" value="Bom">
        Bom
    </label>
    <label>
        <input type="radio" name="questao_04" id="questao_04" value="Otimo">
        Ótimo
    </label>
            
    
    <hr/>
        
        <label class="labelt"><h4>Como você avalia o sistema de venda de créditos online?</h4></label>
    </br>
    
    <label>
        <input type="radio" name="questao_05" id="questao_05" value="Pessimo">
        Péssimo
    </label>
    <label>
        <input type="radio" name="questao_05" id="questao_05" value="Ruin">
        Ruim
    </label>
    <label>
        <input type="radio" name="questao_05" id="questao_05" value="Regular">
        Regular
    </label>
    <label>
        <input type="radio" name="questao_05" id="questao_05" value="Bom">
        Bom
    </label>
    <label>
        <input type="radio" name="questao_05" id="questao_05" value="Otimo">
        Ótimo
    </label>
        
            
    <hr/>
        </div>  
    </div>
</div>     
<div class="form-group">
        <button type="submit" class="btn btn-info btn-flat">Enviar<button>
</div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>