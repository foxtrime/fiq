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
                <div class="card-header">{{ __('Dashboard') }}</div>


                <div class="container">
    <div class="row">
        <div class="col-content">
            <div class="col item-2">
             
            
         
                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'></script>
                
                
                
  <!-- Carregando a API AJAX -->
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     
      // Carregando a API Visualization e os pacotes de gráficos
      google.load('visualization', '1.0', {'packages':['corechart']});
       
      // Configurando o método que será executado quando a API for carregada
      google.setOnLoadCallback(drawChart);
 
      // Método onde será criado o DataTable,
      // configurado e inicializado o gráfico.
      function drawChart() {
 
          // Criando o DataTable
          var data = new google.visualization.DataTable();
            data.addColumn('string', 'Lista');
            data.addColumn('number', 'Abertos');
            data.addColumn('number', 'Qntd');
            data.addColumn('number', 'Solucionados');
            data.addColumn('number', 'Fechados');
            data.addColumn('number', 'Evolução');
            data.addRows([
             ['Dia', 5, 6, 5, 5, 4],
             ['Semana', 6, 7, 6 , 6, 6],
             ['Mês', 5, 7, 5, 4, 5],
             ['Ano', 8, 6, 7, 6, 7],
             ['Total', 8, 9, 10, 9, 8]
          ]);
     
          // Opções de customização
          var options = {
            'legend':'right',
            'title':'CHECKLIST',
            'is3D':true,
            'width':600,
            'height':300,
            seriesType: "bars",
            series: {4: {type: "line"}}
          };
             
          // Instanciando e desenhando o gráfico, passando algunas opções
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
          chart.draw(data, options);
     
      }
    </script>
     <!-- Div onde será criado o gráfico -->
     <div id="chart_div" style="width:700; height:300"></div>

            
            </div>
            <div class="col item-3">
            

 <canvas id="myChartline" width="500" height="250"></canvas>
<script>
var ctx = document.getElementById('myChartline');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['internet', 'Estoque', 'Remédio', 'Hardware', 'Não liga', 'Cabeamento'],
        datasets: [{
            label: 'Observações',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 69, 255, 255)',
                'rgba(54, 162, 235, 232)',
                'rgba(255, 206, 86, 222)',
                'rgba(75, 192, 192, 222)',
                'rgba(153, 102, 255, 222)',
                'rgba(255, 159, 64, 222)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

            </div>
        </div>
        <div class="col-section">
            
        <div class='chartdout'>



 
        <canvas id="myChart2" width="350" height="250"></canvas>
<script>
var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Ti', 'Atenção Básica', 'Infraestrutura predial', 'Almoxarifado', 'Ondotologia', 'Farmácia'],
        datasets: [{
            label: 'Estatística',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255,69,0)',
                'rgba(54, 162, 235, 222)',
                'rgba(255, 206, 86, 222)',
                'rgba(75, 192, 192, 222)',
                'rgba(153, 102, 255, 222)',
                'rgba(255, 159, 64, 222)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<div class="col-section2">
            
            <div class='chartdout2'>
    
    
            <canvas id="bar-chart-horizontal" width="350" height="250"></canvas>
<script>
new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Internet não funciona", "Estoque minimo", "Problemas na Infratrutura", "Equipamento quebrado", "Computador Ruim", "Sistema fora do Ar"],
      datasets: [
        {
          label: "Detalhes",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#f85450"],
          data: [247,126,134,184,143,112]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Detalhes'
      }
    }
});
</script>
     
       

        </div>
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

                    {{ __('You are logged in!') }}

                    {{-- {{ $titulo}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


