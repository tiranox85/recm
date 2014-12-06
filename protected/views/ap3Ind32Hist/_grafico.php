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
	        type: 'bar'
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
		    categories: [ 
                        "Ene 2013",
                        "Feb 2013",
                        "Mar 2013",
                        "Abr 2013",
                        "May 2013",
                        "Jun 2013",
                        "Jul 2013",
                        "Ago 2013",
                        "Sep 2013",
                        "Oct 2013",
                        "Nov 2013",
                        "Dic 2013",
                        "Ene 2014",
                        "Feb 2014",
                        "Mar 2014",
                        "Abr 2014",
                        "May 2014",
                        "Jun 2014"

                    ]
		},
		yAxis: {
            title: 'Porcentaje',
            tickInterval: 1,
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
                        name: 'Ciudad de México',
                        color: '#0A64A4',
                        allowPointSelect: true,
                        data: []
                        },
                        {
                        name: 'Nacional',
                        color: '#000',
                        allowPointSelect: true,
                        data: []
                        }
                        
                     ]
				
	}

			$.getJSON("http://localhost/recm/index.php/api/ap2Ind5?serie=1&grafico=1", function(json) {
				options.series[0].data = json;
                                chart = new Highcharts.Chart(options);
                        
                        
                        });

                        $.getJSON("http://localhost/recm/index.php/api/ap2Ind5?serie=2&grafico=1", function(json2) {
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