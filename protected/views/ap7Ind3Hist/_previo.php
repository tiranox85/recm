<div id="main_content">
        	
        	<br>
        	<br>
        	<br>	
        	<p>

        	<p class="table_title default">
		        	Vista Previa del Indicador
		        </p>
        		<div>
        	  	<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'Regresar'.$registro['periodo'].'',
						'caption'=>'Regresar',
						'value'=>'Regresar',
						'htmlOptions'=>array('class'=>'btn btn-gray','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>
	  	<?php
				  if($autoriza){
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'datos'.$registro['periodo'].'',
						'caption'=>'Autorizar',
						'value'=>'Autorizar',
						'htmlOptions'=>array('class'=>'btn btn-success','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
				}
			?>

			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'validar'.$registro['periodo'].'',
						'caption'=>'Validar',
						'value'=>'Validar',
						'htmlOptions'=>array('class'=>'btn btn-info','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>
			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'Grafico'.$registro['periodo'].'',
						'caption'=>'Mostrar Grafico',
						'value'=>'Grafico',
						'htmlOptions'=>array('class'=>'btn btn-warning','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>

			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'pedf'.$registro['periodo'].'',
						'caption'=>'Exportar PDF',
						'value'=>'pedf',
						'htmlOptions'=>array('class'=>'btn btn-primary','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>

			<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'link',
						'name'=>'Excel'.$registro['periodo'].'',
						'caption'=>'Exportar Excel',
						'value'=>'Excel',
						'htmlOptions'=>array('class'=>'btn btn-primary','style'=>'padding: 0px;'),


						//'url' => array('apa1ind1/admin/'.$registro['id'].''),
						'onclick'=>new CJavaScriptExpression('function(){alert("Al autorizar se publicara en la pagina web"); this.blur(); return false;}'),
				  ));
			?>
</div>
        	
		        
<p class="table_title default">
       Servicio de la deuda pública.
</p>



<div class="default">
        <table class="table_stats">
                



               

   
<?php 

$anio = 2014;
$anio_ant=$anio-1;
$trim_inicio=1;
$trim_fin=5;

                             
//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}

//print_r($actividad);

foreach ($model as $indice => $valor) {

    if (is_array($valor)){ 
            foreach ($valor as $indice2 => $valor2) {
                    

                
                        $datos[$indice2]= $valor2;
                      
                   

               

            }

    }
                

}




$anio=2014;
$anio_ref=$anio-1;
$maximo = count($datos[2014]);
 
//echo "<pre>";
//print_r($datos[$anio]['rubro']);
//echo "</pre>";
?>
    <tr  class="rEven">
        <td rowspan="2">Concepto</td>
        <td rowspan="2">Saldo al 31 de Dic. de 2013</td>
        <td colspan="2">enero-marzo</td>
        <td colspan="3">abril-junio</td>
        <td rowspan="2">Saldo al 30 de junio de 2014</td>
        <td rowspan="2">Endeudamiento neto enero-junio</td>
    </tr>
    <tr class="rEven"> 
        
        <td>Colocación</td>
        <td>Amortización</td>
        <td>Colocación</td>
        <td>Amortización</td>
        <td>Actualizacion</td>
        
    </tr>
    <tr class="rEven">
        <td>Gobierno del Distrito federal</td>
        <td class="data">65592.80</td>
        <td class="data">0/td>
        <td class="data">875</td>
        <td class="data">0</td>
        <td class="data">684.7</td>
        <td class="data">0</td>
        <td class="data">64033.10</td>
        <td class="data">-1559.70</td>
    </tr>
    <tr class="rEven">
        <td>Sector gobierno</td>
        <td class="data">64498.80</td>
        <td class="data">0</td>
        <td class="data">678.2</td>
        <td class="data">0</td>
        <td class="data">684.7</td>
        <td class="data">0</td>
        <td class="data">63135.90</td>
        <td class="data">-1362.90</td>
    </tr>
    <tr class="rEven">
        <td>Sector paraestatal no financiero</td>
        <td class="data">1094.00</td>
        <td class="data">0</td>
        <td class="data">196.8</td>
        <td class="data">0</td>
        <td class="data">0</td>
        <td class="data">0</td>
        <td class="data">897.2</td>
        <td class="data">-196.8</td>
    </tr>
    
        
    
    
    
    
        </table>
        
        
        
    
        
              
		        
        	</div>


        </div>
       