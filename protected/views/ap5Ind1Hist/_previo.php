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
        Registro de avisos de apertura.
</p>



<div class="default">
        <table class="table_stats">
                



               

   
<?php 


                             
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
                    
                foreach ($valor2 as $indice3 => $valor3) {
                    
                    foreach ($valor3 as $indice4 => $valor4) {

                        $datos[$indice4]= $valor4;
                    }

                }

               

            }

    }
                

}
//echo "<pre>";
//print_r($datos[10]);
//echo "</pre>";






function mes($mes){
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
 

?>
           
    <?php 
    $i=0;
    foreach ($datos as $entidad=>$rubros){
    $i++;    
    
    if($i==1){
    ?>   
    <tr class="rEven">
        <td rowspan="2">Delegación</td>
        <?php foreach($datos[$entidad]['rubro'] as $rubro=>$d){ ?>
        
            <td colspan="6"><?php 
            
            if($rubro==1){ echo "Registros de solicitudes de permisos de impacto vecinal autorizados (numero)"; }
            if($rubro==2){ echo "Registros de establecimientos mercantiles de bajo impacto (numero)"; }
            ?></td>
            
        <?php } ?>
    </tr> 
    <tr class="rEven">
        
        <?php foreach ($datos[$entidad]['rubro'][1]['mes'] as $mes=>$d){ ?>
        
            <td ><?php mes($mes); ?></td>
            
        <?php } ?>
        <?php foreach ($datos[$entidad]['rubro'][2]['mes'] as $mes=>$d){ ?>
        
            <td ><?php mes($mes); ?></td>
            
        <?php } ?>
    </tr>  
    <?php } ?>
    <tr class="rEven">
        <td><?php 
        $sql1 = "SELECT nombre from delegaciones where id =".$entidad; 
        $ent = Yii::app()->db->createCommand($sql1)->queryRow();
            
        
        if($entidad!=9000){
            echo $ent['nombre'];
        }else{
            echo "Total Distrito Federal";
        }
        
        ?></td>
        <?php foreach($rubros['rubro'] as $rubro=>$meses){ ?>
        
            <?php foreach ($meses['mes'] as $mes=>$dato){ ?>
                <td class="data"><?php echo $dato['valor']; ?></td>
            <?php } ?>
                
        <?php } ?>
    </tr>
    <?php } ?>
    
    
        
   
    

                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       