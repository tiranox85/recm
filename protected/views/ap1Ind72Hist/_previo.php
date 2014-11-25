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

 $sql = "SELECT * from relaciones where indicador='ap1Ind72'"; 
	$actividad = Yii::app()->db->createCommand($sql)->queryAll();
        //print_r($actividad);
        
        
foreach($model as $mod){

       for($t=$trim_inicio;$t<=$trim_fin;$t++){
               
                $total_df += $mod[0][$anio][$t]['valor'];
                $total_df_pasado += $mod[0][$anio_anterior][$t]['valor'];
                
            }
         
       $x=0;
       //(dato del df por tipo / valor de construcción del df)*100
       foreach($mod as $value){
        /*echo "<pre>";
        print_r($value);
        echo "</pre>";*/
       
       $sumas=array();    
       $x++;   
       
           
           for($i=$trim_inicio;$i<=$trim_fin;$i++){
                $s_actual[$x]+= $value[$anio][$i]['valor'];
            }
            array_push($sumas, $s_actual[$x]);
         
            //print_r($sumas);
           
           
        }
        
       $estados = array(
           
           
       );
       
       
        
        $orden = array();
        foreach ($sumas as $key => $row)
            {
                $orden[$key] = $row['value'];
            } 
        array_multisort($orden, SORT_DESC, $sumas);
        print_r($orden);
        
            
        for($o=2;$o<=20;$o++){
           
           echo "<tr class='rEven'><td >".utf8_encode($actividad[$o-1]['titulo'])."</td><td class='data'>".round_up($s_actual[$o],2)."</td>";
           
      
           
            $operacion1[$o] = ($s_actual[$o]/$total_df)*100;
            
            echo "<td class='data'>".round($operacion1[$o], 2)."</td><tr>";
            
            
            
            
           
       }
       
           
           
       echo "<tr class='rEven'><td >Nacional</td><td  class='data'>".round_up($total_df,2)."</td><td class='data'>".round((($total_df/$total_df))*100 , 2)."</td></tr>";
           
}

function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}


?>
                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       