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
               
                
		var options = {
		credits: false,
                chart: {
                    renderTo: 'valor_censal',
                    type: 'column'
                },
                title: {
                    text: 'Ingresos por impuesto por Servicios de Hospedaje, Enero - Junio de 2014 <br> (Millones de pesos 2014)'
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
                    "1998",
                    "1999",
                    "2000",
                    "2001",
                    "2002",
                    "2003",
                    "2004",
                    "2005",
                    "2006",
                    "2007",
                    "2008",
                    "2009",
                    "2010",
                    "2011",
                    "2012",
                    "2013",
                    "2014"


                ]
		},
		yAxis: {
                    title: 'Valor',
                    tickInterval: 200,
                    gridLineWidth: 1
                },
                scrollbar: {
                        height: 15
                    },

                    rangeSelector: {
                        selected: 1
                    },

                    series: [
                                {
                                    name: 'Años',
                                    color: '#ffc000',
                                    allowPointSelect: true,
                                    data: [],
                                    dataLabels: {
                                        enabled: true,

                                        color: '#000',
                                        align: 'right',

                                        style: {
                                            fontSize: '10px',
                                            fontFamily: 'Verdana, sans-serif',

                                        }
                                    }
                                }
                                

                             ],
                    

                }

                $.getJSON("http://localhost/recm/index.php/api/ap7Ind14?serie=1&grafico=1", function(json) {
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
		        		<p class="table_exp_title">Cifras preliminares</p>
				        <p class="table_exp_source"><span>Fuente: </span>Secretaría de Finanzas del Distrito Federal. Informe de avance al segundo trimestre del 2014</p>
		        	</div>
		        </div> 