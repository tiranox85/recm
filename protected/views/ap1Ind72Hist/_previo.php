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
        	</p>
		        
		        <p class="table_title default">
		        	Valor de Producción de productos elaborados
		        </p>
		        
		        
		        
		        <div class="default">
		        	<table class="table_stats">
			        	<tr>
			        		<td class="invisible"></td>
			        		<td colspan="19" class="span_time">Valor agregado censal bruto</td>
			        	</tr>



			        	<tr class="cell_label">
			        		<td></td>
                                                
                                                
                                                <td>Ene-May 2014</td>
                                                <td>%respecto al nacional</td>
                                               
                                                
			        	</tr>

   
			     <?php 

                             
$anio=2014;
$anio_anterior=$anio-1;
$trim_inicio=1;
$trim_fin=6+1;

 $sql = "SELECT * from relaciones where indicador='ap1Ind72' ORDER BY orden ASC"; 
	$actividad = Yii::app()->db->createCommand($sql)->queryAll();
        //print_r($actividad);
        
        
foreach($model as $mod){
        
        //aca calculo el total del df con la sumatoria de la primera columna y los agrego a una variable
        for($t=$trim_inicio;$t<=$trim_fin;$t++){
               
                $total_df += $mod[1][$anio][$t]['valor'];
                $total_df_pasado += $mod[1][$anio_anterior][$t]['valor'];
                
        }
         
        $x=0; 
       
        //arranco el arreglo de las sumas
        $sumas=array(); 
      
        foreach($mod as $key=>$value){
            
            $x++;   

            //aqui le hago un push a cada sumatoria para luego poder ordenarla   
            for($i=$trim_inicio;$i<=$trim_fin;$i++){
                $s_actual[$x]+= $value[$anio][$i]['valor'];
            }
            array_push($sumas, $s_actual[$x]);
        }


        //aqui creo un arreglo ordenado en base a los valores
        $orden = array();
        foreach ($sumas as $key => $row)
            {
                $orden[$key] = $row;
            } 
        //aca ordeno el arreglo sumatorias y lo regreso acomodado   
        array_multisort($orden, SORT_DESC, $sumas);
        //echo "<pre>";
        //print_r($sumas);
        //echo "</pre>";

        //aca despliego el arreglo para la tabla y le agrego el rubo o el estado    
        foreach($sumas as $key => $row){
            if($key>0){
            echo "<tr class='rEven'><td >".utf8_encode($actividad[$key]['titulo'])."</td><td class='data'>".round_up($row,2)."</td>";

            //operacion de totales
            $operacion1[$o] = ($row/$total_df)*100;

            echo "<td class='data'>".round($operacion1[$o], 2)."</td><tr>";

        }



   }

           
           
       echo "<tr class='rEven'><td >Nacional</td><td  class='data'>".round_up($total_df,2)."</td><td class='data'>".round((($total_df/$total_df))*100 , 2)."</td></tr>";
           
}

//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}


?>
                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       