@extends('adminlte::page')

@section('content_header')
<h1>Incluir cardápio</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Incluir cardápio</a><li>
        

    </ol>
@stop

@section('content')
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

		<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Baixar Excel xls</button></a>

		<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Baixar Excel xlsx</button></a>

		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Baixar CSV</button></a>

		<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">{!! csrf_field()!!}
			
			<input type="file" name="import_file" />

			<button class="btn btn-primary">Importar arquivos</button>
			
		</form>

	</div>
	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
	@endif
 
	@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
	@endif
	
</body>

</html>
@endsection

