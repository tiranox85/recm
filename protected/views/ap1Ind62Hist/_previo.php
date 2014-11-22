<?php

//print_r(json_encode($model));
//die();

?>

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
<tr class="rEven">
    <td>
        % respecto al total del DF
    </td>
   
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
           $totaldf=$z[3];
           $sector_publico=($z[1]/$totaldf)*100;
           $sector_privado=($z[2]/$totaldf)*100;
           
           $edificacion=($z[4]/$totaldf)*100;
           $agua=($z[5]/$totaldf)*100;
           $electricidad=($z[6]/$totaldf)*100;
           $transporte=($z[7]/$totaldf)*100;
           $petroleo=($z[8]/$totaldf)*100;
           $otras=($z[9]/$totaldf)*100;
          
         
           
}


?>
    
    <td class="data"><?php echo $edificacion; ?></td>
    <td class="data"><?php echo $agua; ?></td>
    <td class="data"><?php echo $electricidad; ?></td>
    <td class="data"><?php echo $transporte; ?></td>
    <td class="data"><?php echo $petroleo; ?></td>
    <td class="data"><?php echo $edificacion; ?></td>
    <td class="data"><?php echo $sector_publico; ?></td>
    <td class="data"><?php echo $sector_privado; ?></td>
    
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
       