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
        Trabajadores asegurados en el IMSS.
</p>



<div class="default">
        
                

<?php 






//aqui paso el arreglo para la primera serie de datos
foreach ($model['informe'] as $indice => $valor) {

    if (is_array($valor)){ 
        
       
            
            
            
                $datos[$indice]= $valor;
            
            
        
        
                  

    }
                

}


function meses($mes){
     switch ($mes){
                    
                    case 1:
                       $mesd='Enero';
                       break;
                   case 2:
                       $mesd='Febrero';
                       break;
                   case 3:
                       $mesd='Marzo';
                       break;
                   case 4:
                       $mesd='Abril';
                       break;
                   case 5:
                       $mesd='Mayo';
                       break;
                   case 6:
                       $mesd='Junio';
                       break;
                   case 7:
                       $mesd='Julio';
                       break;
                   case 8:
                       $mesd='Agosto';
                       break;
                   case 9:
                       $mesd='Septiembre';
                       break;
                   case 10:
                       $mesd='Octubre';
                       break;
                   case 11:
                       $mesd='Noviembre';
                       break;
                   case 12:
                       $mesd='Diciembre';
                       break;
                } 
                echo $mesd;
}

                         
//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}
//echo "<pre>";
//print_r($datos);
//echo "</pre>";


$anio=2014;
$anio_ref=$anio-1;



?>  
<table class="table_stats">
    <tr class="rEven">
        <td>Entidad</td>
        <td>Trabajadores asegurados en el IMSS</td>
        <td>Variación anual respecto al mismo periodo del <?php echo $anio_ref; ?></td>
        <td>% de registros respecto al nacional</td>
    </tr>
    <?php foreach($datos[$anio] as $entidad=>$valores){  ?>
    <tr class="rEven">
        
        <?php 

         
        if($entidad==9000){
            echo "<td>Nacional</td>";
        }else{
            
            $sql = "SELECT nombre from entidades where id =".$entidad; 
            $nombre = Yii::app()->db->createCommand($sql)->queryRow();
             echo "<td>".$nombre['nombre']."</td>";
        }
        ?>           
        
        
        <td class="data"><?php echo number_format($valores['promedio'],0); ?></td>
        <td class="data"><?php echo number_format((($valores['promedio']/$datos[$anio_ref][$entidad]['promedio'])-1)*100,2)?></td>
        <td class="data"><?php echo number_format(($valores['promedio']/$datos[$anio][9000]['promedio'])*100,2); ?></td>
        
       
    </tr> 
    
    
    
    <?php } ?>
</table>
    
    
<table class="table_stats">
    <tr class="rEven">
        <td>Entidad</td>
        <td>Registro de nuevos empleos de enero a junio</td>
        <td>% de registros respecto al nacional</td>
        
    </tr>
    <?php foreach($datos[$anio] as $entidad=>$valores){  ?>
    <tr class="rEven">
        
        <?php 

         
        if($entidad==9000){
            echo "<td>Nacional</td>";
        }else{
            
            $sql = "SELECT nombre from entidades where id =".$entidad; 
            $nombre = Yii::app()->db->createCommand($sql)->queryRow();
             echo "<td>".$nombre['nombre']."</td>";
        }
        ?>           
        
        
        <td class="data"><?php echo number_format($valores['resta'],0); ?></td>
        <td class="data"><?php echo number_format(($valores['resta']/$datos[$anio][9000]['resta'])*100,2); ?></td>
        
    </tr> 
    
    
    
    <?php } ?>
    </table>
    
</div>

</div>