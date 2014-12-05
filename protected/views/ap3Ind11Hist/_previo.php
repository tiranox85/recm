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
$anio=2014;
$anio_ref=$anio-1;
//aqui paso el arreglo para la primera serie de datos
foreach ($model['informe'] as $indice => $valor) {

    if (is_array($valor)){ 
        
        foreach ($valor as $indice2 => $valor2) {
            
                $datos[$indice2]= $valor2;
            
        }
                  

    }
                

}




                         
//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}
echo "<pre>";
print_r($datos);
echo "</pre>";

//es la sumatoria de todos los rubros para el periodo actual



    



?>  
<table class="table_stats">
    <tr class="rEven">
        <td rowspan="3">Delegacion</td>
        
        <?php foreach($datos[2] as $trimestre=>$valor){ ?>
        <td colspan="3">Trimestre <?php echo $trimestre; ?></td>
        <?php } ?>
    </tr>
    <tr class="rEven">
        
        
        <?php foreach($datos[2] as $trimestre=>$valor){ ?>
        <td >PEA</td>
        <td colspan="2">Poblacion Ocupada</td>
        <?php } ?>
    </tr>
    <tr class="rEven">
        
        
        <?php foreach($datos[2] as $trimestre=>$valor){ ?>
        <td>Absoluto</td>
        <td>Absoluto</td>
        <td>% Respecto a la PEA delegacional</td>
        <?php } ?>
    </tr>
    
    <?php foreach($datos as $delegacion=>$valores){ ?>
    
    <tr class="rEven">
        <td><?php 
        $sql = "SELECT nombre from delegaciones where id =".$delegacion; 
        $nombre = Yii::app()->db->createCommand($sql)->queryRow();
            
        if($delegacion==9000){
            echo "Total Distrito Federal";
        }else{
            echo $nombre['nombre'];
        }
        ?></td>
        
        <?php foreach($valores as $trimestre=>$valor){ ?>
        <td class="data"><?php echo number_format($valor['pea'],0); ?></td>
        <td class="data"><?php echo number_format($valor['po'],0); ?></td>
        
        <td class="data">
            <?php echo number_format(($valor['po']/$valor['pea'])*100,1);?>%
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
    
<table class="table_stats">
    
    <tr class="rEven">
        <td rowspan="2"></td>
        <td colspan="2">Población económica activa</td>
        <td colspan="2">Población ocupada</td>
    </tr>
    <tr class="rEven">
        
        <td>Total 1er Semestre <?php echo $anio; ?></td>
        <td>Var. % respecto al mismo periodo de <?php echo $anio_ref; ?></td>
        
        <td>Total 1er Semestre <?php echo $anio; ?></td>
        <td>Var. % respecto al mismo periodo de <?php echo $anio_ref; ?></td>
        
    </tr>
    <?php 
    
    //checar si siempre son semestres********
    
    
    //*****nacionales
    //
    //pea año actual
    $pea_act_n=$model['informe2'][1][$anio][1]['pea'] + $model['informe2'][1][$anio][2]['pea'];
    //pea año anterior
    $pea_ant_n=$model['informe2'][1][$anio_ref][2]['pea'] + $model['informe2'][1][$anio_ref][2]['pea'];
    
    //po año actual
    $po_act_n=$model['informe2'][1][$anio][1]['po'] + $model['informe2'][1][$anio][2]['po'];
    //pea año anterior
    $po_ant_n=$model['informe2'][1][$anio_ref][2]['po'] + $model['informe2'][1][$anio_ref][2]['po'];
    
    
    
    //*****df
    //
    //pea año actual
    $pea_act_df=$model['informe2'][2][$anio][1]['pea'] + $model['informe2'][2][$anio][2]['pea'];
    //pea año anterior
    $pea_ant_df=$model['informe2'][2][$anio_ref][2]['pea'] + $model['informe2'][2][$anio_ref][2]['pea'];
    
    //po año actual
    $po_act_df=$model['informe2'][2][$anio][1]['po'] + $model['informe2'][2][$anio][2]['po'];
    //pea año anterior
    $po_ant_df=$model['informe2'][2][$anio_ref][2]['po'] + $model['informe2'][2][$anio_ref][2]['po'];
    
    
    
    
    
    ?>
    <tr class="rEven">
        <td>Distrito Federal</td>
        <td class="data"><?php echo number_format($pea_act_df,0); ?></td>
        <td class="data"><?php echo number_format((($pea_act_df/$pea_ant_df)-1)*100,2); ?></td>
        <td class="data"><?php echo number_format($po_act_df,0); ?></td>
        <td class="data"><?php echo number_format((($po_act_df/$po_ant_df)-1)*100,2); ?></td>
    </tr>
    <tr class="rEven">
        <td>Nacional</td>
        <td class="data"><?php echo number_format($pea_act_n,0); ?></td>
        <td class="data"><?php echo number_format((($pea_act_n/$pea_ant_n)-1)*100,2); ?></td>
        <td class="data"><?php echo number_format($po_act_n,0); ?></td>
        <td class="data"><?php echo number_format((($po_act_n/$po_ant_n)-1)*100,2); ?></td>
    </tr>
    
</table>
    
</div>
   