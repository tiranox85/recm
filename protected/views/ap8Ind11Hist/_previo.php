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




 
//echo "<pre>";
//print_r($model['informe']);
//echo "</pre>";
?>
            
    <?php 
    $anio=2014;
    $anio_ref=$anio-1; ?>
    <tr class="rEven"> 
        
        <td></td>
        <td colspan="10">Comercio al por mayor</td>
        
        
    </tr>
    <tr class="rEven"> 
        
        <td></td>
        <td colspan="2">Personal ocupado</td>
        <td colspan="2">Remuneraciones totales</td>
        <td colspan="2">Remuneraciones por persona</td>
        <td colspan="2">Ingreso por suministro de bienes y servicios</td>
        <td colspan="2">Comercio total</td>
        
    </tr>
    <tr class="rEven"> 
        
        <td></td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        
    </tr>
    
    
    <tr class="rEven"> 
        <td>DF</td>
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['p_ocupadas_df_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['p_ocupadas_df_ma']['total']/$datos['pormayor'][$anio_ref]['p_ocupadas_df_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['remuneraciones_df_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['remuneraciones_df_ma']['total']/$datos['pormayor'][$anio_ref]['remuneraciones_df_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['remuneraciones_pp_df_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['remuneraciones_pp_df_ma']['total']/$datos['pormayor'][$anio_ref]['remuneraciones_pp_df_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['ingreso_df_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['ingreso_df_ma']['total']/$datos['pormayor'][$anio_ref]['ingreso_df_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['compras_df_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['compras_df_ma']['total']/$datos['pormayor'][$anio_ref]['compras_df_ma']['total'])-1)*100,2); ?></td>
        <?php if($rubro=='pormayor'){$sufx="ma";}else{$sufx="me";}?>
    </tr>
    
    <tr class="rEven"> 
        
        <td>Nacional</td>
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['p_ocupadas_n_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['p_ocupadas_n_ma']['total']/$datos['pormayor'][$anio_ref]['p_ocupadas_n_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['remuneraciones_n_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['remuneraciones_n_ma']['total']/$datos['pormayor'][$anio_ref]['remuneraciones_n_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['remuneraciones_pp_n_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['remuneraciones_pp_n_ma']['total']/$datos['pormayor'][$anio_ref]['remuneraciones_pp_n_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['ingreso_df_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['ingreso_n_ma']['total']/$datos['pormayor'][$anio_ref]['ingreso_n_ma']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormayor'][$anio]['compras_n_ma']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormayor'][$anio]['compras_n_ma']['total']/$datos['pormayor'][$anio_ref]['compras_n_ma']['total'])-1)*100,2); ?></td>
        
    </tr>
    
    
    
    
    
    
    <tr class="rEven"> 
        
        <td></td>
        <td colspan="10">Comercio al por menor</td>
        
        
    </tr>
    <tr class="rEven"> 
        
        <td></td>
        <td colspan="2">Personal ocupado</td>
        <td colspan="2">Remuneraciones totales</td>
        <td colspan="2">Remuneraciones por persona</td>
        <td colspan="2">Ingreso por suministro de bienes y servicios</td>
        <td colspan="2">Comercio total</td>
        
    </tr>
    <tr class="rEven"> 
        
        <td></td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        <td>Indice</td>
        <td>Variación % anual</td>
        
    </tr>
    
    
    <tr class="rEven"> 
        <td>DF</td>
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['p_ocupadas_df_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['p_ocupadas_df_me']['total']/$datos['pormenor'][$anio_ref]['p_ocupadas_df_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['remuneraciones_df_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['remuneraciones_df_me']['total']/$datos['pormenor'][$anio_ref]['remuneraciones_df_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['remuneraciones_pp_df_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['remuneraciones_pp_df_me']['total']/$datos['pormenor'][$anio_ref]['remuneraciones_pp_df_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['ingreso_df_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['ingreso_df_me']['total']/$datos['pormenor'][$anio_ref]['ingreso_df_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['compras_df_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['compras_df_me']['total']/$datos['pormenor'][$anio_ref]['compras_df_me']['total'])-1)*100,2); ?></td>
        <?php if($rubro=='pormayor'){$sufx="ma";}else{$sufx="me";}?>
    </tr>
    
    <tr class="rEven"> 
        
        <td>Nacional</td>
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['p_ocupadas_n_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['p_ocupadas_n_me']['total']/$datos['pormenor'][$anio_ref]['p_ocupadas_n_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['remuneraciones_n_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['remuneraciones_n_me']['total']/$datos['pormenor'][$anio_ref]['remuneraciones_n_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['remuneraciones_pp_n_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['remuneraciones_pp_n_me']['total']/$datos['pormenor'][$anio_ref]['remuneraciones_pp_n_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['ingreso_df_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['ingreso_n_me']['total']/$datos['pormenor'][$anio_ref]['ingreso_n_me']['total'])-1)*100,2); ?></td>
        
        <td class="data"><?php echo number_format($datos['pormenor'][$anio]['compras_n_me']['total'],2); ?></td>
        <td class="data"><?php echo round((($datos['pormenor'][$anio]['compras_n_me']['total']/$datos['pormenor'][$anio_ref]['compras_n_me']['total'])-1)*100,2); ?></td>
        
    </tr>
    
    
    
        
    
    
    
    
        </table>
        
        
        
    
        
              
		        
        	</div>


        </div>
       