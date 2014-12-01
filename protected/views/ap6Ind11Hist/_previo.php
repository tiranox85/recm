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
        Inversión Extranjera Directa Trimestral
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

//echo "<pre>";
//print_r($model);
//echo "</pre>";
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
 

?>
   
    <tr class="cell_label"> 
        <td rowspan="2">IED por tipo de inversión</td>
        <td colspan="3">Distrito Federal</td>
        <td colspan="3">Nacional</td>
    </tr>
    <tr class="cell_label"> 
        
        <?php foreach($datos[$anio][1] as $key => $value){ 
        if($key<=$maximo){ 
            
            switch ($key){
                            case 1:
                                $trimestre_romano="I";
                                break;
                            case 2:
                                $trimestre_romano="II";
                                break;
                            case 3:
                                $trimestre_romano="III";
                                break;
                            case 0:
                                $trimestre_romano="Total";
                                break;
                                
                        }
        ?>   
        
        <td > <?php echo $trimestre_romano; ?></td>
        
        <?php }} ?>
        <?php foreach($datos[$anio][1] as $key => $value){ 
        if($key<=$maximo){   
            
            switch ($key){
                            case 1:
                                $trimestre_romano="I";
                                break;
                            case 2:
                                $trimestre_romano="II";
                                break;
                            case 3:
                                $trimestre_romano="III";
                                break;
                            case 0:
                                $trimestre_romano="Total";
                                break;
                                
                        }
        ?>   
        
        <td ><?php echo $trimestre_romano; ?></td>
        
        <?php }} ?>
    </tr>
    
    <?php foreach($datos[$anio] as $rubro=>$da){ ?>
    <tr class="rEven">
        
        
        <?php foreach($datos[$anio][$rubro] as $key => $value){ 
            
        if($key==1){
           $sql1 = "SELECT titulo from relaciones where indicador='ap6Ind11' and columna=".$rubro; 
           $nombre = Yii::app()->db->createCommand($sql1)->queryRow(); 
           
           echo "<td>".utf8_encode($nombre['titulo'])."</td>";
        }    
        if($key<=$maximo){      
        ?>  
        <td class="data"><?php echo number_format($datos[$anio][1][$key]['df'],0); ?></td>
        
        <?php }} ?>
    
        
        <?php foreach($datos[$anio][$rubro] as $key => $value){ 
        if($key<=$maximo){    
        ?>  
        <td class="data"><?php echo number_format($datos[$anio][1][$key]['nacional'],0); ?></td>
       
        <?php }} ?>
    </tr>   
    <?php } ?>
        
   
    

                               
	<tr class='rEven'> 
            <td  class="invisible"></td>
                <?php 
                foreach($datos[$anio][1] as $key => $value){ 
                    echo "<td class='invisible'>";
                    
                    echo "</td>";
                } ?>

                <?php 
                foreach($datos[$anio][1] as $key => $value){ 
                    echo "<td class='invisible'>";
                    
                    echo "</td>";
                } ?>
        </tr>	
    
        <tr class='rEven'> 
            <td >Var. % anual total</td>
                <?php 
                foreach($datos[$anio][1] as $key => $value){ 
                    echo "<td class='data'>";
                    if($key==0){  
                    echo $model['informe']['df_total']; 
                    } 
                    echo "</td>";
                } ?>

                <?php 
                foreach($datos[$anio][1] as $key => $value){ 
                    echo "<td class='data'>";
                    if($key==0){  
                    echo $model['informe']['nacional_total']; 
                    } 
                    echo "</td>";
                } ?>
        </tr>
        <tr class='rEven'> 
            <td  class="invisible"></td>
                <?php 
                foreach($datos[$anio][1] as $key => $value){ 
                    echo "<td class='invisible'>";
                    
                    echo "</td>";
                } ?>

                <?php 
                foreach($datos[$anio][1] as $key => $value){ 
                    echo "<td class='invisible'>";
                    
                    echo "</td>";
                } ?>
        </tr>	
        <tr class='rEven'> 
            <td>% de IED del Distrito Federal</td>
            <td class="data"><?php echo (($model['informe']['df_total']/$model['informe']['nacional_total'])*100)?> %</td>
        </tr>
         
    </table>
			        
			        
		        
		        
        	</div>


        </div>
       