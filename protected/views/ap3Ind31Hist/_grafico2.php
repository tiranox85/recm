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
	        type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45,
                        beta: 0
                    }
	    },
	    title: {
	    	text: 'Porcentaje de nuevos empleos formales, entidades federativas seleccionadas, enero a junio 2014'
		},
		xAxis: {
			title: {
                text: 'Delegación'
            },
            
            
            labels: {
                rotation: -25,
                y: 10
            },
		    
		},
		yAxis: {
            title: 'Porcentaje',
            tickInterval: .5,
            gridLineWidth: 1
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        scrollbar: {
	    	height: 15
	    },
	    
	    rangeSelector: {
	    	selected: 1
	    },

	    series: [
                        {
                             type: 'pie',
                        name: 'Ciudad de México',
                        color: '#ffc000',
                        allowPointSelect: true,
                        data: []
                        }
                        
                     ]
				
	}

			$.getJSON("http://localhost/recm/index.php/api/ap3Ind31g2?serie=1&grafico=1", function(json) {
				options.series[0].data = json;
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
		        		
				        <p class="table_exp_source">Estimaciones con datos de la Secretaría del Trabajo y Previción Social</p>
		        	</div>
		        </div> 