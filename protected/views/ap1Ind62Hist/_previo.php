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
		        	Valor agregado censal bruto en el Distrito Federal por delegación y subsector de actividad económica, 2009
		        </p>
		        
		        <p class="table_title option_1">
		        	Valor agregado censal bruto en el Distrito Federal por delegación, 2009
		        </p>
		        
		        <div class="default">
		        	<table class="table_stats">
			        	<tr>
			        		<td class="invisible"></td>
			        		<td colspan="19" class="span_time">Valor agregado censal bruto</td>
			        	</tr>



			        	<tr class="cell_label">
			        		<td></td>
                                                
                                                
                                                <td>Edificación Distrito Federal</td>
                                                <td>Agua, riego y saneamiento Distrito Federal</td>
                                                <td>Electricidad y comunicaciones Distrito Federal</td>
                                                <td>Transporte Distrito Federal</td>
                                                <td>Petróleo y petroquímica Distrito Federal</td>
                                                <td> Otras construcciones Distrito Federal</td>
                                                <td>Sector público Distrito Federal</td>
                                                <td>Sector privado Distrito Federal</td>
			        	</tr>

   
			     <?php 
                        
foreach($model as $mod){

       $x=0;
       //(dato del df por tipo / valor de construcción del df)*100
       foreach($mod as $value){
       $x++;   
           for($i=0;$i<=8;$i++){
                $z[$x]+= $value[$i]['valor']; 
                
            }
            
            
           
        }
        
           //porcentajes
           $totaldf=$z[3];
           $sector_publico=($z[1]/$totaldf)*100;
           $sector_privado=($z[2]/$totaldf)*100;
           
           $edificacion=($z[4]/$totaldf)*100;
           $agua=($z[5]/$totaldf)*100;
           $electricidad=($z[6]/$totaldf)*100;
           $transporte=($z[7]/$totaldf)*100;
           $petroleo=($z[8]/$totaldf)*100;
           $otras=($z[9]/$totaldf)*100;
           
           
           //absolutos
           $sector_publico_abs=($z[1]);
           $sector_privado_abs=($z[2]);
           
           $edificacion_abs=($z[4]);
           $agua_abs=($z[5]);
           $electricidad_abs=($z[6]);
           $transporte_abs=($z[7]);
           $petroleo_abs=($z[8]);
           $otras_abs=($z[9]);
          
         
           
}

function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return ceil($value * $mult) / $mult;
}


?>
<tr class="rEven">
    <td>
       Absoluto
    </td>    
    <td class="data"><?php echo round_up($edificacion_abs, 2); ?></td>
    <td class="data"><?php echo round_up($agua_abs, 2); ?></td>
    <td class="data"><?php echo round_up($electricidad_abs, 2); ?></td>
    <td class="data"><?php echo round_up($transporte_abs, 2); ?></td>
    <td class="data"><?php echo round_up($petroleo_abs, 2); ?></td>
    <td class="data"><?php echo round_up($edificacion_abs, 2); ?></td>
    <td class="data"><?php echo round_up($sector_publico_abs, 2); ?></td>
    <td class="data"><?php echo round_up($sector_privado_abs, 2); ?></td>
    
</tr>
<tr class="rEven">
    <td>
        % respecto al total del DF
    </td>    
    <td class="data"><?php echo round_up($edificacion, 2); ?>%</td>
    <td class="data"><?php echo round_up($agua, 2); ?>%</td>
    <td class="data"><?php echo round_up($electricidad, 2); ?>%</td>
    <td class="data"><?php echo round_up($transporte, 2); ?>%</td>
    <td class="data"><?php echo round_up($petroleo, 2); ?>%</td>
    <td class="data"><?php echo round_up($edificacion, 2); ?>%</td>
    <td class="data"><?php echo round_up($sector_publico, 2); ?>%</td>
    <td class="data"><?php echo round_up($sector_privado, 2); ?>%</td>
    
</tr>
		
			        </table>
			        
			        <div class="table_explanation">
				        <p class="table_exp_source"><span>Fuente:</span>INEGI, Censo Económico 2009, consulta electrónica en: http://www.inegi.org.mx/est/contenidos/espanol/proyectos/censos/ce2009/default.asp?s=est&c=14220</p>
			        </div>
		        </div>

		        <div class="option_1">
		        	<div id="valor_censal">
		        
		        	</div>
		        	<div class="table_explanation">
		        		<p class="table_exp_title">Nota: Milpa Alta aparece con un valor de 429,646.</p>
				        <p class="table_exp_source"><span>Fuente: </span>Elaboración con base en datos de INEGI, Censo Económico 2009</p>
		        	</div>
		        </div>
		        
		        
        	</div>


        </div>
       