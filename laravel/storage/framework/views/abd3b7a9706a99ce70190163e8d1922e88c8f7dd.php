<style>
    .image {opacity: 1;display: block;width: 100%;height: auto;transition: .5s ease;backface-visibility: hidden;
    }
    .container {position: relative;width: 100%;}
    .middle {opacity: 1;position: absolute;top: 0%;left: 32%;width: 62%;}
    .container:hover .image {opacity: 0.3;}
    .container:hover .middle {opacity: 1;}
    .container:hover .Tm {opacity: 1;}
    .text {width:100%; background-color: #0080FF;color: white;font-size: 16px;padding: 14px 32px}
    .text2 {padding: 16px 32px; width:100%; background-color: #0080FF;color: white;font-size: 16px;}
    .Tm {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: -10%;
      transform: translate(-70%, -70%);-ms-transform: translate(-70%, -70%)
    }
    
    </style>
    


<?php $__env->startSection('title', 'ufmt-home'); ?>

<div>	
	<?php $__env->startSection('content_header'); ?>
				<div class="container">
				  <img src="..\imagem\prato.jpg" alt="Restaurante" class="image" style="width:30%">
				  <div class="middle">
					<div class="text">
					  <h1>Restaurante Universitário</h1>
						<p><h2>Bem Vindo!! </h2>
						<h3 style="text-transform: uppercase;"> <?php echo e(Auth::user()->name); ?> </h3> 
					Você está logado no Sistema UFMT-RU</p>										
					</div>
					<div class="Tm">
						<div class="text2">
						  Sirva-se Bem!
						</div>
					</div>
				  </div>
				
				</div> 		
	<?php $__env->stopSection(); ?>	
	<?php $__env->startSection('content'); ?>
		<p><h5 style="position: absolute; top:95%;  float: right;">@APSII  - Sistema Restaurante Universitario - UFMT | 
		@Desenvolvido  por: Tiago Arruda, Gesser Paixão e André Sant'ana.</h5></p>
	<?php $__env->stopSection(); ?>
	
</div>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>