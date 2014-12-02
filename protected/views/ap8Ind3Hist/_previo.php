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
        	
		        




<div class="default">
        
                



               

   
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
                
            }
                foreach ($valor2 as $indice3 => $valor3) {
                    
                        $datos[$indice3]= $valor3;
                     

            }

    }
                

}




 
//echo "<pre>";
//print_r($datos);
//echo "</pre>";
$anio_tiendas=2012;
$anio=2014;
?>

    <p class="table_title default">
        Ventas de tiendas de autoservicio y departamentales.
    </p>
    <table class="table_stats">
        <tr class="rEven"> 
                <td>Mes</td>
                <td>Área Metropolitana de la Ciudad de México</td>
                <td>Nacional</td>
            </tr>
            <?php foreach($datos as $mes=>$valor){ ?>
            <tr class="rEven"> 
                <td><?php 
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
                
                ?></td>
                <td class="data"><?php echo number_format($valor['df'],1); ?></td>
                <td class="data"><?php echo number_format($valor['nacional'],1); ?></td>
            </tr>
            <?php } ?>
            
    </table>
    
        
        
        
    
        
              
		        
        	</div>


        </div>
       