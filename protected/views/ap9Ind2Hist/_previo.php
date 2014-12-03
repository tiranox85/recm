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
//print_r($datos[1]);
//echo "</pre>";


?>

    <p class="table_title default">
        Cuartos y establecimientos de hospedaje.
    </p>
    <table class="table_stats">
        
         
            <tr class="rEven"> 
                <td rowspan="2">Mes</td>
                    <?php foreach($datos[1]['anio'] as $anio=>$dat){  ?>
                        <td colspan="2"><?php echo $anio;?></td>

                    <?php } ?>  
            </tr>
            <tr class="rEven"> 
                    <?php foreach($datos[1]['anio'] as $anio=>$dat){  ?>
                        <td>Nacionales</td>
                        <td>Internacionales</td>

                    <?php } ?> 
            </tr>
            
            
            
            <?php foreach($datos as $mes=>$dato){ ?>
            <tr class="rEven"> 
                <?php if($mes!=13){ ?>
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
                   case 13:
                       $mesd='Total';
                       break;
                } 
                echo $mesd;
                ?></td>
                
                <?php foreach($dato['anio'] as $anio=>$dat){ ?>
                <td class="data"><?php echo number_format($dat['rubro'][1]['valor'],0); ?></td>
                <td class="data"><?php echo number_format($dat['rubro'][2]['valor'],0); ?></td>
                <?php } ?>
            </tr>
           
            <?php } 
            
            }?>
             <tr class="rEven">
                 <td rowspan="2">Total</td>
                    <?php foreach($datos[1]['anio'] as $anio=>$dat){  ?>
                        <td><?php echo number_format($datos[13]['anio'][$anio]['rubro'][1]['valor'],0); ?></td>
                        <td><?php echo number_format($datos[13]['anio'][$anio]['rubro'][2]['valor'],0); ?></td>

                    <?php } ?> 
            </tr>
            <tr class="rEven"> 
                
                    <?php foreach($datos[1]['anio'] as $anio=>$dat){  ?>
                        <td colspan="2"><?php echo number_format($datos[13]['anio'][$anio]['total'],0); ?></td>

                    <?php } ?>  
            </tr>
           
             
            
    </table>
    
        
        
        
    
        
              
		        
        	</div>


        </div>
       