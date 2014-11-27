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
        Cuentas de Producción en el sector servicios
</p>



<div class="default">
        <table class="table_stats">
                



               

   
			     <?php 
                             
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
                    

                if (is_array($valor2)){ 
                    foreach ($valor2 as $indice3 => $valor3) {
                        
                       
                        
                            $sql = "SELECT titulo from relaciones where indicador='ap1Ind9' and columna = $indice3 "; 
                            $rubro = Yii::app()->db->createCommand($sql)->queryRow();
                            
                            
                            $rubros[$indice3]=utf8_encode($rubro['titulo']);
                            
                            $datos[$indice3]= $valor3;
                            
                            
                            
                            
                            
                            

                    }

                }

            }

    }
                

}




                

?>
    <tr>
        <td class="invisible"></td>
        <td class="invisible"></td>
        <td colspan="4" class="span_time">Distrito Federal</td>
        <td colspan="4" class="span_time">Total de los estados (nacional)</td>
    </tr>
    <tr  class="rEven">
        <td colspan="2"></td>
        
        <?php foreach($datos[1] as $anio=>$dato){
            echo "<td>".$anio."</td>";
        }
        ?>
        <?php foreach($datos[13] as $anio=>$dato){
            echo "<td>".$anio."</td>";
        }
        ?>
        
        
    </tr>
    
    
    <tr class="rEven">
      <td  colspan="2"><?php echo $rubros[1];?></td>
      <?php 
      foreach($datos[1] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[13] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>

    </tr>

    
    <tr  class="rEven">
      <td  rowspan="3">&nbsp;&nbsp;</td>
      <td ><?php echo $rubros[2]?></td>
      <?php 
      foreach($datos[2] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[14] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td ><?php echo $rubros[3]?></td>
      <?php 
      foreach($datos[3] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[15] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td ><?php echo $rubros[4]?></td>
      <?php 
      foreach($datos[4] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[16] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td  colspan="2"><?php echo $rubros[5];?></td>
      <?php 
      foreach($datos[5] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[17] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td  rowspan="3">&nbsp;&nbsp;</td>
      <td ><?php echo $rubros[6]?></td>
      <?php 
      foreach($datos[6] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[18] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td ><?php echo $rubros[7]?></td>
      <?php 
      foreach($datos[7] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[19] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td ><?php echo $rubros[8]?></td>
      <?php 
      foreach($datos[8] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[20] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td colspan="2"><?php echo $rubros[9];?></td>
      <?php 
      foreach($datos[9] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[21] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td  rowspan="3">&nbsp;&nbsp;</td>
      <td ><?php echo $rubros[10]?></td>
      <?php 
      foreach($datos[10] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[22] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td ><?php echo $rubros[11]?></td>
      <?php 
      foreach($datos[11] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[23] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    <tr class="rEven">
      <td ><?php echo $rubros[12]?></td>
      <?php 
      foreach($datos[12] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      foreach($datos[24] as $dato){
          echo "<td class=\"data\">".$dato['valor']."</td>";
      } 
      ?>
    </tr>
    

                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       