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
        Tasa de Desempleo.
</p>



<div class="default">
        
                

<?php 


//aqui paso el arreglo para la primera serie de datos
foreach ($model['informe'] as $indice => $valor) {

    if (is_array($valor)){ 
        
        foreach ($valor as $indice2 => $valor2) {
            
            
            
                $datos[$indice2]= $valor2;
            
            
        
        }
                  

    }
                

}



//aqui paso el arreglo para la primera serie de datos
foreach ($model['informe2'] as $indice => $valor) {

    if (is_array($valor)){ 
        
       
            
            
            
                $datos2[$indice]= $valor;
            
            
        
        
                  

    }
                

}




                         
//Esta es la funcion para redondear las cifras con criterios especificos
function round_up ($value, $places=0) {
  if ($places < 0) { $places = 0; }
  $mult = pow(10, $places);
  return number_format(ceil($value * $mult) / $mult);
}
//echo "<pre>";
//print_r($datos2);
//echo "</pre>";


$anio=2014;
$anio_ref=$anio-1;



?>  
<table class="table_stats">
    
    
    <tr class="rEven">
        
        <td rowspan="2">Delegacion</td>
        <?php foreach($datos[2] as $trimestre=>$valor){ 
              
        ?>
        
            <?php foreach($valor as $rubro=>$valores){ ?>
                <td colspan="2">Trimestre <?php echo $trimestre; ?></td>
            <?php } ?>    
        
        <?php } ?>
    </tr>
    <tr class="rEven">
        
        
        <?php foreach($datos[2] as $trimestre=>$valor){ 
              
        ?>
        
            <?php foreach($valor as $rubro=>$valores){ ?>
                <td>Total de desocupados</td>
                <td>Tasa de desempleo</td>
            <?php } ?>    
        
        <?php } ?>
    </tr>
    
    
    <?php foreach($datos as $delegacion=>$valores){ 
    //esto es para hacer el promedio de promedios    
    $num_delegaciones = count($datos); 
    if($delegacion!=9000){
    ?>
    
    <tr class="rEven">
        <td><?php 
        $sql = "SELECT nombre from delegaciones where id =".$delegacion; 
        $nombre = Yii::app()->db->createCommand($sql)->queryRow();
            
        echo $nombre['nombre'];
           
       
        ?></td>
        
        <?php foreach($valores as $trimestre=>$valor){ ?>
        
            <?php 
            
            foreach($valor as $rubro=>$valores){ ?>
        
                <td class="data"><?php 
                
                
                echo number_format($valores['valor'],0); ?></td>
                <td class="data"><?php 
                
                
                $sql1 = "SELECT pea from ap3Ind11 where anio =".$anio." and trimestre = ".$trimestre. " and delegacion = ".$delegacion; 
                $pea = Yii::app()->db->createCommand($sql1)->queryRow();
                
                
                echo number_format(($valores['valor']/$pea['pea'])*100,2); ?>%</td>
            <?php } ?>    
        
        <?php } ?>
    </tr>
    <?php } } ?>
    <!-- esta solo es para poner eun espacio en blanco -->
    <tr class="rEven">
        <td class="invisible"></td>
      <?php foreach($datos[2] as $trimestre=>$valor){ ?>

        <?php foreach($valor as $rubro=>$valores){ ?>
            <td class="invisible"></td>
            <td class="invisible"></td>

        <?php } ?>    

    <?php } ?>  
    </tr>
    
    <!-- aca van los totales -->
    <tr class="rEven">
        <td>Total Distrito Federal</td>
        <?php foreach($datos[9000] as $trimestre=>$valor){ ?>

        <?php foreach($valor as $rubro=>$valores){ ?>
            <td><?php echo number_format($valores['valor'],0); ?></td>
            <td><?php 
                
                
                $sql1 = "SELECT pea from ap3Ind11 where anio =".$anio." and trimestre = ".$trimestre. " and delegacion = 9000"; 
                $pea = Yii::app()->db->createCommand($sql1)->queryRow();
                
                
                echo number_format(($valores['valor']/$pea['pea'])*100,2); ?>%</td>

        <?php } ?>    

    <?php } ?>  
    </tr>
    
   
    
    
    
    </table>
    
    
    <!-- aca esta la segunda tabla -->
    <table class="table_stats">
        
        <tr class="rEven">
            <td rowspan="2">Total de desempleo</td>
        <?php foreach($datos2[1] as $anio=>$trimestres){ ?>
        
            
            
        
            <td colspan="2"><?php echo $anio; ?></td>
            
            
           
        <?php } ?>
        </tr> 
        
        <tr class="rEven">
            
        <?php foreach($datos2[1] as $anio=>$trimestres){ ?>
        
            
            <?php foreach($trimestres as $trimestre=>$valores){ ?>
        
                <td >Trimestre <?php echo $trimestre; ?></td>
            
            <?php } ?>
           
        <?php } ?>
        </tr>     
    <?php foreach($datos2 as $rubro => $anios){ ?>
    
        
        
        
        
        <tr class="rEven">
            <td><?php 
            switch ($rubro){
                case 3:
                    echo "Total Distrito Federal";
                    break;
                case 1:
                    echo "Nacional";
                    break;
                case 2:
                    echo "Nacional(Áreas más urbanizadas)";
                    break;
            }
            ?></td>
        <?php foreach($anios as $anio=>$trimestres){ ?>
        
            
            <?php foreach($trimestres as $trimestre=>$valores){ ?>
        
                <td class="data"><?php echo number_format(($valores['pdes']/$valores['pea'])*100,2); ?></td>
            
            <?php } ?>
           
        <?php } ?>
        </tr> 
    
    
    
    <?php } ?>
    </table>
    
</div>

</div>