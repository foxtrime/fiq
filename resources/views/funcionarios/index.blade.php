@extends('layouts.app')
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        color: ;
    }
    
    body, html{
        width: 100%;
        height: 100%;
        background-color: ;
    }
        
        .container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            
        }
        
        .row {
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        
        .col-content {
            width: 590px;
            height: 200px;
        }
        
        .chartdout {
            width: 390px;
            height: 610px;
        }
        .chart3 {
            width: 390px;
            height: 610px;
        }

        .col {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 280px;
            color: ;
        }
        
        .item-2 {
            background-color: ;
        }
        .item-3 {
            background-color: ;
        }
        .item-4 {
            background-color: ;
        }

    
        .col-section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 600px;
            background-color:# ;
            color:;
        }

      
        
      
</style>
@section('content')
<div class="row">


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-success card-header-icon">
            <div class="card-icon" style="background: linear-gradient(60deg, #BFA15F, #ad7909);box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(191, 161, 95, 0.4);">
					<i class="material-icons">person_add</i>
				</div><h4 class="card-title">Funcionários</h4></div>
                


                <div class="container">
    <div class="row">
        <div class="col-content">
            <div class="col item-2">
             
  
 
 
 <div class="">
                    <form method="post" action="">
                        <div class="form-group">
                    
                            <label for="name">Nome:</label>
                            <input id="name" name="name" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="funcao">Função:</label>
                            <input name="funcao" id="funcao" class="form-control">                   </textarea>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
        
    </div>


    <div class="form-group">
  <label for="type" class="col-md-4 control-label">Unidade:</label>
  <div class="col-md-6">
    <select class="form-control" name="type" style="width:350px">
      <option value="1">Unidade X</option>
      <option value="2">Unidade Z</option>
      <option value="3">Unidade F</option>
    </select>
 </div>
 
</div>
</div>
</div>




                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                    {{-- {{ $titulo}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


