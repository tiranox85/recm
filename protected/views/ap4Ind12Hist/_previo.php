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
         Ingreso promedio por hora trabajada de la población ocupada, trimestre I y II de 2014
</p>



<div class="default">
        
                



               

   
<?php 

//aqui paso el arreglo para la primera serie de datos
foreach ($model['informe'] as $indice => $valor) {

    if (is_array($valor)){ 
            
        $datos[$indice]= $valor;
                  

    }
                

}

//aqui paso el arreglo para la segunda serie de datos
foreach ($model['informe2'] as $indice => $valor) {

    if (is_array($valor)){ 
            
        $datos2[$indice]= $valor;
                  

    }
                

}


                         
//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}
//echo "<pre>";
//print_r($datos2);
//echo "</pre>";

//es la sumatoria de todos los rubros para el periodo actual

$anio=2014;
$anio_ref=$anio-1;

    

foreach ($model['informe'] as $trimestre=>$d){

?>  <table class="table_stats">
    <tr class="rEven">
        <td rowspan="3">Promedio según posición en la ocupación Trimestre <?php echo $trimestre; ?></td>
        <td colspan="3">Distrito Federal</td>
        <td rowspan="3">% de variacion del total respecto al Trimestre <?php echo $trimestre. " de ".$anio_ref; ?></td>
        <td colspan="6">Nacional</td>
        <td colspan="2" rowspan="2">% de variacion del total respecto al Trimestre <?php echo $trimestre. " de ".$anio_ref; ?></td>
    </tr>   
    <tr class="rEven">
        <td rowspan="2">Total</td>
        <td rowspan="2">Hombres</td>
        <td rowspan="2">Mujeres</td>
        
        <td rowspan="2">Total</td>
        <td rowspan="2">Áreas más urbanizadas</td>
        
        <td colspan="2">Hombres</td>
        <td colspan="2">Mujeres</td>
    </tr>
    <tr class="rEven">
        <td>Total</td>
        <td>Áreas más urbanizadas</td>
        
        <td>Total</td>
        <td>Áreas más urbanizadas</td>
        
        <td>Total</td>
        <td>Áreas más urbanizadas</td>
    </tr>
    <?php 
    
    foreach ($datos[$trimestre][$anio]['rubro'] as $rubro=>$dato){ 
        
    ?>
    <tr class="rEven">
        
        <td><?php 
        
        //esta info sale del primer arreglo del json, y trae los rubros para desplegar, y los tres valores para df
        $sql = "SELECT titulo from relaciones where indicador = 'ap4Ind12' and columna =".$rubro; 
        $rubro1 = Yii::app()->db->createCommand($sql)->queryRow();
            
        echo utf8_encode($rubro1['titulo']); ?></td>
        
        
        <td class="data"><?php echo number_format($dato['columna'][1]['valor'],2); ?></td>
        <td class="data"><?php echo number_format($dato['columna'][2]['valor'],2); ?></td>
        <td class="data"><?php echo number_format($dato['columna'][3]['valor'],2); ?></td>
       
        
        <td class="data"><?php echo number_format((($dato['suma']/$datos[1][$anio_ref]['rubro'][$rubro]['suma'])-1)*100,2); ?></td>
        
        <?php 
        //este es el segundo arreglo del json y contiene en orden los datos para nacionales, se dividen en apartados para nacional, hombre y mujeres
        ?>
        
        <td class="data"><?php echo number_format($datos2[1][$trimestre][$anio]['rubro'][$rubro]['columna'][1]['valor'],2); ?></td>
        <td class="data"><?php echo number_format($datos2[1][$trimestre][$anio]['rubro'][$rubro]['columna'][2]['valor'],2); ?></td>
        
        <td class="data"><?php echo number_format($datos2[2][$trimestre][$anio]['rubro'][$rubro]['columna'][1]['valor'],2); ?></td>
        <td class="data"><?php echo number_format($datos2[2][$trimestre][$anio]['rubro'][$rubro]['columna'][2]['valor'],2); ?></td>
        
        <td class="data"><?php echo number_format($datos2[3][$trimestre][$anio]['rubro'][$rubro]['columna'][1]['valor'],2); ?></td>
        <td class="data"><?php echo number_format($datos2[3][$trimestre][$anio]['rubro'][$rubro]['columna'][2]['valor'],2); ?></td>
        
        <?php
        
        //operacion final pata la columan totales
        
        $sumatoria_totales[$trimestre] = $datos2[1][$trimestre][$anio]['rubro'][$rubro]['columna'][1]['valor'] + $datos2[2][$trimestre][$anio]['rubro'][$rubro]['columna'][1]['valor'] + $datos2[3][$trimestre][$anio]['rubro'][$rubro]['columna'][1]['valor'];
        $sumatoria_totales_pasado[$trimestre] = $datos2[1][$trimestre][$anio_ref]['rubro'][$rubro]['columna'][1]['valor'] + $datos2[2][$trimestre][$anio_ref]['rubro'][$rubro]['columna'][1]['valor'] + $datos2[3][$trimestre][$anio_ref]['rubro'][$rubro]['columna'][1]['valor'];
        
        $total_n[$trimestre]=(($sumatoria_totales[$trimestre]/$sumatoria_totales_pasado[$trimestre])-1)*100;
        
        
        //operacion final para la columna urbanizadas
        
        $sumatoria_ur[$trimestre] = $datos2[1][$trimestre][$anio]['rubro'][$rubro]['columna'][2]['valor'] + $datos2[2][$trimestre][$anio]['rubro'][$rubro]['columna'][2]['valor'] + $datos2[3][$trimestre][$anio]['rubro'][$rubro]['columna'][2]['valor'];
        $sumatoria_ur_pasado[$trimestre] = $datos2[1][$trimestre][$anio_ref]['rubro'][$rubro]['columna'][2]['valor'] + $datos2[2][$trimestre][$anio_ref]['rubro'][$rubro]['columna'][2]['valor'] + $datos2[3][$trimestre][$anio_ref]['rubro'][$rubro]['columna'][2]['valor'];
        
        
        $urbanizadas_n[$trimestre]=(($sumatoria_ur[$trimestre]/$sumatoria_ur_pasado[$trimestre])-1)*100;
        
        ?>
        <td class="data"><?php echo number_format($total_n[$trimestre],2); ?></td>
        <td class="data"><?php echo number_format($urbanizadas_n[$trimestre],2); ?></td>
        
        
        
        
    </tr>
    <?php } ?>
   
</table>
		
<?php } ?>
			        
		        
		        
        	</div>


        </div>
       