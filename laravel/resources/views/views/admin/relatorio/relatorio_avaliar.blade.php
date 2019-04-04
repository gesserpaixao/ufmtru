
@extends('adminlte::page')

@section('title', 'Relatório')

@section('content_header')
<h1>Relatório Avaliar</h1>

    <ol class="breadcrumb">
        <li><a href="">Home</a><li>
        <li><a href="">Relatório</a><li>
        

    </ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h3>Filtar por data</h3>
        </div>   
        <div class="box-body">
           
                <form method="POST" action="{{route('relatorio/avaliar/busca')}}">
                    {!! csrf_field()!!}

                    
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
   @if(!empty($user))
   
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
 <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total de Avaliações</span>
            <span class="info-box-number">{{$total_valor }}</span>
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
                          <th>Avaliação</th> 
                          <th>Usuário</th>

                            <th>questão_01</th>
                            <th>questão_02</th>
                            <th>questão_03</th>
                            <th>questão_04</th>
                            <th>questão_05</th>
                            
                        
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $Item)
                            <tr>
                                <td>{{date('d-m-Y', strtotime(str_replace('/','-',$Item->date)))}}</td>
                                <td>{{$Item->id}}</td>
                                <td>{{$Item->user_id}}</td>
                                <td>{{$Item->questao_01}}</td>
                                <td>{{$Item->questao_02}}</td>
                                <td>{{$Item->questao_03}}</td>
                                <td>{{$Item->questao_04}}</td>
                                <td>{{$Item->questao_05}}</td>
                                
                                
                             
                        @empty
                        @endforelse 
                        
                    </tbody>
                </table>
                
            </div>  
        </div>
        
         
       
@endif  

@stop
