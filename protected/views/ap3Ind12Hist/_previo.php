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
        Población ocupada por posición en la ocupación.
</p>



<div class="default">
        
                



               

   
<?php 
$anio=2014;
$anio_ref=$anio-1;
//aqui paso el arreglo para la primera serie de datos
foreach ($model as $indice => $valor) {

    if (is_array($valor)){ 
        
        foreach ($valor as $indice2 => $valor2) {
            
            foreach ($valor2 as $indice3 => $valor3) {
            
                $datos[$indice3]= $valor3;
            
            }
        
        }
                  

    }
                

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

//es la sumatoria de todos los rubros para el periodo actual



    



?>  
<table class="table_stats">
    
    <tr class="rEven">
        <td rowspan="2">Delegación</td>
        
        <?php foreach($datos[2] as $trimestre=>$valor){
            $colspan=count($datos[2]);
            ?>
        
            <?php foreach($valor as $rubro=>$valores){ 
                
     switch ($rubro){
         case 1: 
             $rubro="Trabajadores remunerados y subordinados";
             break;
         case 2: 
             $rubro="Empleadores";
             break;
         case 3: 
             $rubro="Trabajadores por cuenta propia";
             break;
         case 4: 
             $rubro="Trabajadores no remunerados";
             break;
     }
                
                
                
                ?>
                <td colspan="<?php echo $colspan; ?>"><?php echo $rubro; ?></td>
            <?php } ?>    
        
        <?php } ?>
    </tr>
    <tr class="rEven">
        
        
        <?php foreach($datos[2] as $trimestre=>$valor){ ?>
        
            <?php foreach($valor as $rubro=>$valores){ ?>
                <td>Trimestre<?php echo $trimestre; ?></td>
            <?php } ?>    
        
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
        
            <?php foreach($valor as $rubro=>$valores){ ?>
                <td class="data"><?php echo number_format($valores['valor'],0); ?></td>
            <?php } ?>    
        
        <?php } ?>
    </tr>
    <?php } ?>
    
    
    
    
    
    
</table>
   
    
</div>