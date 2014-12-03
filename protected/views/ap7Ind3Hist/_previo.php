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
//print_r($datos);
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
    <?php foreach ($datos['rubro'] as $rubro=>$dato){ ?>
    <tr class="rEven">
        
        
        <td><?php 
            switch ($rubro){
                case 1:
                    echo "Gobierno del Distrito federal";
                    break;
                case 2:
                    echo "Sector gobierno";
                    break;
                case 3:
                    echo "Sector paraestatal no financiero";
                    break;
            }
        
        ?></td>
        <td class="data"><?php echo number_format($dato['saldo1'],2); ?></td>
        <td class="data"><?php echo number_format($dato['colocacion1'],2); ?></td>
        <td class="data"><?php echo number_format($dato['amortizacion1'],2); ?></td>
        <td class="data"><?php echo number_format($dato['colocacion2'],2); ?></td>
        <td class="data"><?php echo number_format($dato['amortizacion2'],2); ?></td>
        <td class="data"><?php echo number_format($dato['actualizacion2'],2); ?></td>
        <td class="data"><?php echo number_format($dato['saldo2'],2); ?></td>
        <td class="data"><?php echo number_format($dato['endeudamiento'],2); ?></td>
    </tr>
    <?php } ?>
   
    
        
    
    
    
    
        </table>
        
        
        
    
        
              
		        
        	</div>


        </div>
       