  <?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
	"Previo"=>array('previo','id'=>$model->id),
	'Gráfico',
);

?>


  <script type="text/javascript">
		$(document).ready(function() {
                Highcharts.theme = {
                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', 
                         '#FF9655', '#FFF263', '#6AF9C4'],
                }
                 
                Highcharts.setOptions(Highcharts.theme);
                
		var options = {
		credits: false,
                chart: {
                    renderTo: 'valor_censal',
                    type: 'column'
                },
                title: {
                    text: ''
                    },
                    xAxis: {
                            title: {
                    text: 'Entidad'
                },
            
                labels: {
                    rotation: -25,
                    y: 10
                },
                categories: [ 
                    "DF",
                    "Nuevo León",
                    "Chihuahua",
                    "Guanajuato",
                    "Puebla",
                    "Jalisco"

                ]
		},
		yAxis: {
                    title: 'Valor',
                    tickInterval: 5000,
                    gridLineWidth: 2
                },
                scrollbar: {
                        height: 15
                    },

                    rangeSelector: {
                        selected: 1
                    },

                    series: [
                                {
                                name: 'Entidad',
                                color: '#0A64A4',
                                allowPointSelect: true,
                                data: []
                                }

                             ]

                }

                $.getJSON("http://localhost/recm/index.php/api/ap6Ind12?serie=1&grafico=1", function(json) {
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
		        		<p class="table_exp_title">Nota: Milpa Alta aparece con un valor de 429,646.</p>
				        <p class="table_exp_source"><span>Fuente: </span>Elaboración con base en datos de INEGI, Censo Económico 2009</p>
		        	</div>
		        </div> 