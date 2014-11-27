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
        Valor de Producción de productos elaborados
</p>



<div class="default">
        <table class="table_stats">
                <tr>
                        <td class="invisible"></td>
                        <td colspan="19" class="span_time">Exportaciones de mercancías por entidad federativa</td>
                </tr>



                <tr class="cell_label">
                        <td>Entidad Federativa</td>


                        <td>Exportaciones en miles de dolares</td>
                        <td>% respecto al total nacional</td>


                </tr>

   
			     <?php 

//print_r($actividad);

//echo "<pre>";
//print_r($model);
//echo "</pre>";
foreach ($model as $indice => $valor) {
$gran_total=$valor['gran_total'];
    if (is_array($valor)){ 
            foreach ($valor as $indice2 => $valor2) {
                    //echo ("El indice2 $indice2 tiene el valor: $valor2<br>");

                if (is_array($valor2)){ 
                    foreach ($valor2 as $indice3 => $valor3) {
                           //echo ("El indice3 $indice3 tiene el valor: $valor3<br>");
                       
                            $sql = "SELECT nombre from entidades where id= $indice3 "; 
                            $rubro = Yii::app()->db->createCommand($sql)->queryRow();
                            
                            if($indice3==9){ $clase_df='df'; }else{ $clase_df='no-df'; }
                            echo"<tr class='rEven'><td class='".$clase_df."'>".  utf8_encode($rubro['nombre'])."</td><td class='data'>".number_format($valor3['total'],0)."</td><td  class='data'>".round((($valor3['total']/$gran_total)*100),2)."</td></tr>";
                            

                    }

                }

            }

    }
                

}
                
echo "<tr class='rEven'><td >Nacional</td><td  class='data'>".round_up($gran_total,2)."</td><td class='data'>100%</td></tr>";


?><?php 

                             
//$anio=2014;
//$anio_anterior=$anio-1;


                             
                             

        
        
foreach($model as $mod){
        
        
         
        $x=0; 
       
        //arranco el arreglo de las sumas
        $sumas=array(); 
      
        foreach($mod as $value){
        
       
        
        
            $x++;   

            //aqui le hago un push a cada sumatoria para luego poder ordenarla   
            foreach($value as $val){
                $s_actual[$x]+= $val['valor'];
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
       