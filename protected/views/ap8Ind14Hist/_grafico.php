<?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
	"Previo"=>array('previo','id'=>$model->id),
	'Gráfico',
);

?>

<script>
/*$(document).ready(function(){
  $("button").click(function(){
    $.getJSON("http://localhost/recm/index.php/api/ap1Ind1Grafico/1",function(result){
      $.each(result, function(i, field){
        $("#div").append(field + " ");
      });
    });
  });
});*/
</script>



  <script type="text/javascript">
		$(document).ready(function() {

		var options = {
		credits: false,
	    chart: {
	        renderTo: 'valor_censal',
	        type: 'spline'
	    },
	    title: {
	    	text: 'Comercio al por menor <br> (Indice 2008=100)'
		},
		xAxis: {
			title: {
                text: 'Año'
            },
            labels: {
                rotation: -25,
                y: 10
            },
		    categories: [ 
                        "2008",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2009",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2010",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2011",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2012",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2013",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2014",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "2014"


                    ],
                    overflow: 'justify'
		},
		yAxis: {
            title: 'Porcentaje',
            tickInterval: 10,
            gridLineWidth: 1
        },
        scrollbar: {
	    	height: 1
	    },
	    
	    rangeSelector: {
	    	selected: 1
	    },

	    series: [
                        {
                        name: 'Distrito Federal',
                        color: '#ffc000',
                        allowPointSelect: true,
                        data: []
                        },
                        {
                        name: 'Nacional',
                        color: '#787878',
                        allowPointSelect: true,
                        data: []
                        }
                        
                     ]
				
	}

			$.getJSON("http://localhost/recm/index.php/api/ap8Ind14?serie=1&grafico=1", function(json) {
				options.series[0].data = json;
                                chart = new Highcharts.Chart(options);
                        
                        
                        });

                        $.getJSON("http://localhost/recm/index.php/api/ap8Ind14?serie=2&grafico=1", function(json2) {
                                options.series[1].data = json2;
                                chart = new Highcharts.Chart(options);


                        });
	        
	        	
	        });
	        /*
	        
	    chart = new Highcharts.Chart(options);    
	        
      	}); */  
		</script>


   <div class="option_1">
		        	<div id="valor_censal">
		        
		        	</div>
		        	<div class="table_explanation">
		        		<p class="table_exp_title">Nota: Milpa Alta aparece con un valor de 429,646.</p>
				        <p class="table_exp_source"><span>Fuente: </span>Elaboración con base en datos de INEGI, Censo Económico 2009</p>
		        	</div>
		        </div> 