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




 
//echo "<pre>";
//print_r($datos[2011]);
//echo "</pre>";
?>

    <tr class="rEven"> 
        
        <td colspan="2" rowspan="2">Periodo</td>
        <td colspan="2">Indice General</td>
        <td colspan="2">Distrito federal</td>
      
    </tr>
    
    <tr class="rEven"> 
        
        
        <td>Comercio al por mayor</td>
        <td>Comercio al por menor</td>
        <td>Comercio al por mayor</td>
        <td>Comercio al por menor</td>
      
    </tr>
    
    
    <?php 
    foreach($datos as $anio=>$dat){
    
    foreach($dat as $mes=>$dato){ ?>
    <tr class="rEven"> 
        <?php 
        $columna = count($datos[$anio]);
        
        if($mes==1){
        ?>
        <td rowspan="<?php echo $columna; ?>"><?php echo $anio; ?></td>
        <?php } ?>
        <td><?php switch ($mes){
                    
                    case 1:
                       $mesd='Ene';
                       break;
                   case 2:
                       $mesd='Feb';
                       break;
                   case 3:
                       $mesd='Mar';
                       break;
                   case 4:
                       $mesd='Abr';
                       break;
                   case 5:
                       $mesd='May';
                       break;
                   case 6:
                       $mesd='Jun';
                       break;
                   case 7:
                       $mesd='Jul';
                       break;
                   case 8:
                       $mesd='Ago';
                       break;
                   case 9:
                       $mesd='Sep';
                       break;
                   case 10:
                       $mesd='Oct';
                       break;
                   case 11:
                       $mesd='Nov';
                       break;
                   case 12:
                       $mesd='Dic';
                       break;
                }  echo $mesd; ?></td>
        <td class="data"><?php echo number_format($dato['compras_n_ma'],2); ?></td>
        <td class="data"><?php echo number_format($dato['compras_n_me'],2); ?></td>
        <td class="data"><?php echo number_format($dato['compras_df_ma'],2); ?></td>
        <td class="data"><?php echo number_format($dato['compras_df_me'],2); ?></td>
    </tr>
    <?php
        }
    }
    
    ?>
    
    
    </table>
        
        
        
    
        
              
		        
        	</div>


        </div>
       