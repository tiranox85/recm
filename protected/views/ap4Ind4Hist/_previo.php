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
        Índice de la tendencia laboral de la pobreza
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






 

?>
   <tr class="rEven"><td></td>
    <?php 
        foreach($datos[1] as $an=>$dat){
        $cols1=count($datos[1][$an]['mes']);
       
        ?> 
        <td colspan="<?php echo $cols1; ?>"><?php echo $an;?></td>
    <?php } ?>
   <tr>
    <?php 
    $x=0;
    foreach($datos as $col => $v){  
    $x++;    
        ?>  
    <tr class="rEven">
        <?php 
        $i=0;
        foreach($datos[$col] as $key => $value){ 
        $i++;     
        ?>  
    
        
            <?php if($col==1 and $i==1){
                echo "<td></td>";
            }
            ?>
            <?php foreach ($value as $r=>$valor){ ?>
        
        
        
                <?php foreach($valor as $ind=>$val){
                    
                    //***********verificar si se van a comsultar todos los estados
                    if($x==1){
                    
                        switch ($ind){
                            case 1:
                                $trimestre_romano="I";
                                break;
                            case 2:
                                $trimestre_romano="II";
                                break;
                            case 3:
                                $trimestre_romano="III";
                                break;
                            case 4:
                                $trimestre_romano="IV";
                                break;
                                
                        }
                    
                    ?>
                    <td ><?php echo $trimestre_romano;?></td> 
                <?php } } ?>
            <?php } ?>
       
        
        <?php } ?>
      </tr>
    
    <?php } ?>
            
    <?php foreach($datos as $col => $v){  ?>  
    <tr class="rEven">
        <?php 
        $i=0;
        foreach($datos[$col] as $key => $value){ 
        $i++;     
        ?>  
        
            <?php if($i==1){
                $sql1 = "SELECT nombre from entidades where id=".$col; 
                $nombre = Yii::app()->db->createCommand($sql1)->queryRow();
                
                if($col<35){
                echo "<td>".$nombre['nombre']."</td>";
                }else{
                    if($col==40){ echo "<td>Nacional</td>"; }
                    if($col==41){ echo "<td>Urbano</td>"; }
                    if($col==42){ echo "<td>Rural</td>"; }
                    
                }
            }
            ?>
            <?php foreach ($value as $valor){ ?>
           
            
          
                <?php 
                
                
                foreach($valor as $ind=>$val){ 
                
                    
                    
                    ?>
                    
                    <td class="data"><?php echo round($val['valor'],2); ?></td> 
                <?php } ?>
            
            
          
            
            <?php } ?>
       
        
        <?php } ?>
      </tr>
    
    <?php } ?>
        
   
    

                               
		
			        </table>
			        
			        
		        
		        
        	</div>


        </div>
       