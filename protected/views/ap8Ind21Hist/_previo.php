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
//print_r($model['u_comercio'][2014]);
//echo "</pre>";
$anio_tiendas=2012;
$anio=2014;
?>

    <p class="table_title default">
       Numero de tiendas departamentales establecidas <br>al 31 de diciembre de 2012 en el Distrito federal
    </p>
    <table class="table_stats">
            <tr class="rEven"> 
                <td>Total</td>
                <td class="data"><?php echo number_format($model['tiendas'][$anio_tiendas][1]['valor'],0); ?></td>
            </tr>
            <tr class="rEven"> 
                <td>Tiendas que se aperturaron en el <?php echo $anio_tiendas; ?></td>
                <td class="data" ><?php echo number_format($model['tiendas'][$anio_tiendas][2]['valor'],0); ?></td>
            </tr>
    </table>
    <p class="table_title default">
      Unidades de comercio y de abasto en operación <br>al 31 de diciembre de 2013 en el Distrito federal
    </p>
    <table class="table_stats">
            <tr class="rEven"> 

                <td>Canal de distribución</td>
                <td>No. de unidades</td>
                <td>Personal que operan</td>

            </tr>



            <?php 


            foreach($model['u_comercio'][$anio] as $rubro=>$dato){ ?>
            <tr class="rEven"> 

                <td><?php 
                switch ($rubro){
                    case 1:
                        $rubro="Tianguis";
                        break;
                    case 2:
                        $rubro="Mercados públicos";
                        break;
                    case 3:
                        $rubro="Mercados sobre ruedas";
                        break;
                    case 4:
                        $rubro="Concentraciones";
                        break;
                }
                echo $rubro; ?></td>


                <td class="data"><?php echo number_format($dato['unidades'],2); ?></td>
                <td class="data"><?php echo number_format($dato['personal'],2); ?></td>

            </tr>
            <?php  } ?>
    
    
    </table>
        
        
        
    
        
              
		        
        	</div>


        </div>
       