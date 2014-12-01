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
	        type: 'column'
	    },
	    title: {
	    	text: ''
		},
		xAxis: {
			title: {
                text: 'Delegación'
            },
            labels: {
                rotation: -25,
                y: 10
            },
		    categories: [	'Chihuahua',
                                        'Baja California',
                                        'Coahuila de Zaragoza',
                                        'Nuevo Leon',
                                        'Tamaulipas',
                                        'Jalisco',
                                        'Sonora',
                                        'Mexico',
                                        'Puebla',
                                        'Guanajuato',
                                        'Aguascalientes',
                                        'Queretaro',
                                        'San Luis Potosi',
                                        'Veracruz',
                                        'Distrito Federal',
                                        'Morelos',
                                        'Zacatecas',
                                        'Hidalgo',
                                        'Yucatan',
                                        'Chiapas',
                                        'Michoacan',
                                        'Oaxaca',
                                        'Durango',
                                        'Tlaxcala',
                                        'Tabasco',
                                        'Sinaloa',
                                        'Campeche',
                                        'Colima',
                                        'Nayarit',
                                        'Quintana Roo',
                                        'Baja California Sur',
                                        'Guerrero'
]
		},
		yAxis: {
            title: 'Porcentaje',
            tickInterval: 10000000,
            gridLineWidth: 1
        },
        scrollbar: {
	    	height: 15
	    },
	    
	    rangeSelector: {
	    	selected: 1
	    },

	    series: [{
				       name: 'Valor Censal Bruto',
				       color: '#0A64A4',
				       allowPointSelect: true,
				       data: []
					}]
				
	}

			$.getJSON("http://localhost/recm/index.php/api/ap1Ind81?anios=2007,2008,2009,2010,2011,2012&grafico=1", function(json) {
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