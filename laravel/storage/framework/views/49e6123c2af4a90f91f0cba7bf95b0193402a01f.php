<?php $__env->startSection('content_header'); ?>
<h1>Incluir cardápio</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Incluir cardápio</a><li>
        

    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<html lang="pt-BR">


<head>

	<title>Importar - Exportar Arquivos Execel</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

</head>

<body>

	<nav class="navbar navbar-default">

		<div class="container-fluid">

			<div class="navbar-header">

				<a class="navbar-brand" href="#">Importar - Exportar em Excel e CSV </a>

			</div>

		</div>

	</nav>

	<div class="container">

		<a href="<?php echo e(URL::to('downloadExcel/xls')); ?>"><button class="btn btn-success">Baixar Excel xls</button></a>

		<a href="<?php echo e(URL::to('downloadExcel/xlsx')); ?>"><button class="btn btn-success">Baixar Excel xlsx</button></a>

		<a href="<?php echo e(URL::to('downloadExcel/csv')); ?>"><button class="btn btn-success">Baixar CSV</button></a>

		<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="<?php echo e(URL::to('importExcel')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>

			
			<input type="file" name="import_file" />

			<button class="btn btn-primary">Importar arquivos</button>
			
		</form>

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
	
</body>

</html>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>