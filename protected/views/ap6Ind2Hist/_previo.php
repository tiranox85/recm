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
        Formación Bruta de Capital Fijo
</p>



<div class="default">
        <table class="table_stats">
                



               

   
<?php 

$anio = 2014;
$anio_ant=$anio-1;
$trim_inicio=1;
$trim_fin=6;

                             
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

//echo "<pre>";
//print_r($datos['anio']);
//echo "</pre>";
                

?>
   <tr class="cell_label"> 
            <td class="invisible"></td>
            <td colspan="2">Área Metropolitana de la Ciudad de México</td>
            <td colspan="2">Nacional</td>
           
    </tr>
    <tr class="cell_label"> 
            <td><?php echo $anio; ?></td>
            <td>Absoluto</td>
            <td>Variación % anual</td>
            <td>Absoluto</td>
            <td>Variación % anual</td>
           
    </tr>
   
    <tr>
        <?php 
        //este es el numero de ciclos para hacer la division ***********checar si son todos incluyendo el nulo??
        $divisor=count($datos['anio']);
        $divisor=$divisor-1;
        $dividendodf=0;
        $dividendonal=0;
        foreach($datos['anio'] as $anio=>$valor){
           
           if($anio!='promediodf' or $anio!='promnal') {
           //estos son los meses
            echo "<tr class='rEven'><td>".$anio."</td>";
                $anio_ref=$anio-1;
                $df_val=round((($datos['anio'][$anio]['df']/$datos['anio'][$anio_ref]['df'])-1)*100,2);
                if($df_val==-100){ $df_val="";}
                
                $nal_val=round((($datos['anio'][$anio]['nacional']/$datos['anio'][$anio_ref]['nacional'])-1)*100,2);
                if($nal_val==-100){ $nal_val="";}
                //esta es la sumatoria de los promedios del df
                $dividendodf+=$df_val;
                
                //esta es la sumatoria de los promedios de nacionales
                $dividendonal+=$nal_val;
                echo "<td class='data'>".number_format($datos['anio'][$anio]['df'],0)."</td><td class='data'>".$df_val."</td><td class='data'>".number_format($datos['anio'][$anio]['nacional'],0)."</td><td class='data'>".$nal_val."</td>";
            echo "</tr>";
           }
        }
            
            $promedio_nacional=($dividendonal/$divisor);
            $promedio_df=($dividendodf/$divisor);
//******estos son los promedios del periodo a consultar
            echo "<tr class='rEven'><td>Promedio</td>";
                echo "<td class='data'>".number_format($datos['promedios']['promdf'],0)."</td><td class='data'>".round($promedio_df,2)."</td><td class='data'>".number_format($datos['promedios']['promnal'],0)."</td><td class='data'>".round($promedio_nacional,2)."</td>";
            echo "</tr>";
        
        
        ?>
   
    </tr>    
        
   
    

                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       