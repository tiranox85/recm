
	<?php
	ini_set('memory_limit', '2048M');
	set_time_limit('600'); 

		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Importar Archivo de excel",
		));
		
	?>






<div class="form">

<?php echo CHtml::form('','post',array('enctype'=>'multipart/form-data')); ?>
<input type="file" name ="excel" class="filestyle" data-buttonName="btn-primary">


<input type="hidden" value="upload" name="action" />
	<?php
				  $this->widget('zii.widgets.jui.CJuiButton', array(
				  	    'buttonType'=>'submit',
						'name'=>'importar',
						'caption'=>'Importar',
						'value'=>'Importar',
						'htmlOptions'=>array('class'=>'btn btn-info','style'=>'padding: 0px;'),


						//'url' => array('ap1Ind1/config/'.$registro['id'].''),
						//'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
				  ));
			?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


<?php $this->endWidget();?>


<!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->

<?php 
extract($_POST);
if ($action == "upload"){
//cargamos el archivo al servidor con el mismo nombre
//solo le agregue el sufijo bak_ 

	$path = realpath( dirname(Yii::app()->request->scriptFile).Yii::app()->params['uploads'] ).DIRECTORY_SEPARATOR;

	$archivo = $_FILES['excel']['name'];
	$tipo = $_FILES['excel']['type'];
	$destino = $path."bak_".$archivo;

	//echo $destino;
	if (copy($_FILES['excel']['tmp_name'],$destino)) echo "Archivo Cargado Con Éxito";
	else echo "Error Al Cargar el Archivo";
////////////////////////////////////////////////////////
if (file_exists ($path."bak_".$archivo)){ 
/** Clases necesarias */

Yii::import('application.vendor.*');
require_once('Classes/PHPExcel.php');
require_once('Classes/PHPExcel/Reader/Excel2007.php');

// Cargando la hoja de cálculo
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load($path."bak_".$archivo);
$objFecha = new PHPExcel_Shared_Date();       

// Asignar hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);

//conectamos con la base de datos 
//$cn = mysql_connect ("localhost","root","pass") or die ("ERROR EN LA CONEXION");
//$db = mysql_select_db ("escuela",$cn) or die ("ERROR AL CONECTAR A LA BD");

$Contar = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow(); 
        // Llenamos el arreglo con los datos  del archivo xlsx
for ($i=1;$i<=$Contar;$i++){
	$_DATOS_EXCEL[$i]['entidad'] = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['municipio'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['actividad'] = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['valoragregado']= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
	
}		
}
//si por algo no cargo el archivo bak_ 
else{echo "Necesitas primero importar el archivo";}
$errores=0;
//recorremos el arreglo multidimensional 
//para ir recuperando los datos obtenidos
//del excel e ir insertandolos en la BD
foreach($_DATOS_EXCEL as $campo => $valor){
	$sql = "INSERT INTO ap1ind1 VALUES ($id,'";
	foreach ($valor as $campo2 => $valor2){
		$campo2 == "valoragregado" ? $sql.= $valor2."');" : $sql.= $valor2."','";
	}
	//$result = mysql_query($sql);
	echo $sql;

 $cmd = Yii::app()->db->createCommand($sql);
 $cmd->execute();
echo "<br>";
	//if (!$result){ echo "Error al insertar registro ".$campo;$errores+=1;}
}	
/////////////////////////////////////////////////////////////////////////

echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";
//una vez terminado el proceso borramos el 
//archivo que esta en el servidor el bak_
unlink($destino);
} else {

	echo "No existe archivos";
}

?>