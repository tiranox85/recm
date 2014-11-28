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
       Histórico Índice General de Precios al consumidor.
</p>



<div class="default">
        <table class="table_stats">
                



               

   
<?php 


$anio=2014;
                             
//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}

//print_r($actividad);

//echo "<pre>";
//print_r($model);
//echo "</pre>";
foreach ($model as $indice => $valor) {

    if (is_array($valor)){ 
            foreach ($valor as $indice2 => $valor2) {
                    

                if (is_array($valor2)){ 
                    foreach ($valor2 as $indice3 => $valor3) {
                        $datos[$indice3]= $valor3;
                      
                    }

                }

            }

    }
                

}

//echo "<pre>";
//print_r($datos[$anio]);
//echo "</pre>";
                

?>
   <tr class="cell_label"> 
            <td>Periodo</td>
            <td>Área Metropolitana de la Ciudad de México</td>
            <td>Nacional</td>
           
    </tr>
   
    <tr>
        <?php 
        $primer_anio=$anio-6;
        for($i=1;$i<=6;$i++){
            $anio_ref=$primer_anio+$i;
            
            foreach($datos[$anio_ref]['mes'] as $mes=>$valor){

               if($mes!='promediodf' or $mes!='promnal') {
               //estos son los meses
               switch ($mes){
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
                       
               }   
                echo "<tr class='rEven'><td>".$mesd." ".$anio_ref."</td>";
                    echo "<td class='data'>".round($valor['df'],2)."</td><td class='data'>".round($valor['nacional'],2)."</td>";
                echo "</tr>";
               }
            }

        }
        
        
        ?>
   
    </tr>    
        
   
    

                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       