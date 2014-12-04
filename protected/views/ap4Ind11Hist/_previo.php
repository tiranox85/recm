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
echo "<pre>";
print_r($datos);
echo "</pre>";

//es la sumatoria de todos los rubros para el periodo actual
$total=$datos['suma'];

//echo $total;

    



?>  
    <tr class="rEven">
        <td rowspan="2">Delegación / Tamaño de empresa</td>
    <?php  foreach($datos['delegacion'][2]['rubro'] as $rubro=>$valores){ ?>
    
        <td  colspan="2"><?php 
        
    switch ($rubro){
        case 1:
            echo "Hasta un salario mínimo";
            break;
        case 2:
            echo "Más de 1 hasta 2 salarios mínimos";
            break;
        case 3:
            echo "Más de 2 hasta 3 salarios mínimos";
            break;
        case 4:
            echo "Más de 3 hasta 5 salarios mínimos";
            break;
        case 5:
            echo "Más de 5 salarios mínimos";
            break;
        case 6:
            echo "No recibe ingresos y/o no se especifica";
            break;
    }
        
        ?></td>
    
    <?php } ?>
        <td rowspan="2">Total</td>
    </tr>         
    <tr class="rEven">
        
    <?php  foreach($datos['delegacion'][2]['rubro'] as $rubro=>$valores){ ?>
    
        
        
        <td >Absoluto</td>
        <td >%</td>
        
        
        
        
    
    <?php } ?>
    </tr> 
    
    <?php foreach($datos['delegacion'] as $delegacion=>$dato){ ?>
    <tr class="rEven">
        <td><?php 
        $sql = "SELECT nombre from delegaciones where id =".$delegacion; 
        $nombre = Yii::app()->db->createCommand($sql)->queryRow();
            
        if($delegacion==9000){
            echo "Total";
        }else{
            echo $nombre['nombre'];
        }?></td>
        <?php foreach($dato['rubro'] as $rubro=>$valores){ ?>
        
        <td class="data"><?php echo number_format($valores['valor'],0); ?></td>
        <td class="data"><?php echo number_format((($valores['valor']/$datos['delegacion'][$delegacion]['total'])*100),2); ?>%</td>
        
        <?php } ?>
        <td class="data"><?php echo $datos['delegacion'][$delegacion]['total'];?></td>
    </tr> 
    <?php } ?>
    
    
   
    
    
        
   
    

                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       