<?php
/* @var $this Ap1ind1HistJorgeController */
/* @var $model Ap1ind1HistJorge */
/* @var $form CActiveForm */
?>
<?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title'=>'Configuracion del Indicador',
        ));
        
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap1ind1-hist-jorge-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="row-left">
           
				<?php echo $form->labelEx($model,'periodo'); ?>
				<?php echo $form->textField($model,'periodo',array('class'=>'span6')); ?>
				<?php echo $form->error($model,'periodo'); ?>
			
		</div>
	</div>

	<div class="row">
        <div class="row-left">
           
		<?php echo $form->labelEx($model,'titulo1'); ?>
		<?php //echo $form->textArea($model,'titulo1', array('id'=>'detalle','class'=>'span6','rows'=>"3", 'cols'=>"500")); ?>
			<?php 
	$this->widget('ext.widgets.xheditor.XHeditor',array(
    'model'=>$model,
    'modelAttribute'=>'titulo1',
    'config'=>array(
        'id'=>'xheditor_1',
        'tools'=>'simple', // mini, simple, mfull, full or from XHeditor::$_tools, tool names are case sensitive
        'skin'=>'vista', // default, nostyle, o2007blue, o2007silver, vista
        'width'=>'740px',
        'height'=>'400px',
        //'loadCSS'=>XHtml::cssUrl('editor.css'),
      //  'upImgUrl'=>$this->createUrl('request/uploadFile'), // NB! Access restricted by IP        'upImgExt'=>'jpg,jpeg,gif,png',
    ),
));
		?>
		<?php echo $form->error($model,'titulo1'); ?>
			
		</div>
	</div>

	<div class="row">
        <div class="row-left">
            
		<?php echo $form->labelEx($model,'nota1'); ?>
		<?php //echo $form->textArea($model,'nota1', array('id'=>'detalle','class'=>'span6','rows'=>"3", 'cols'=>"500")); ?>
		<?php 
	$this->widget('ext.widgets.xheditor.XHeditor',array(
    'model'=>$model,
    'modelAttribute'=>'nota1',
    'config'=>array(
        'id'=>'xheditor_2',
        'tools'=>'simple', // mini, simple, mfull, full or from XHeditor::$_tools, tool names are case sensitive
        'skin'=>'vista', // default, nostyle, o2007blue, o2007silver, vista
        'width'=>'740px',
        'height'=>'400px',
        //'loadCSS'=>XHtml::cssUrl('editor.css'),
      //  'upImgUrl'=>$this->createUrl('request/uploadFile'), // NB! Access restricted by IP        'upImgExt'=>'jpg,jpeg,gif,png',
    ),
));
		?>
		<?php echo $form->error($model,'nota1'); ?>
			
		</div>
	</div>

		<div class="row">
        <div class="row-left">
           
		<?php echo $form->labelEx($model,'titulo1'); ?>
		<?php //echo $form->textArea($model,'titulo1', array('id'=>'detalle','class'=>'span6','rows'=>"3", 'cols'=>"500")); ?>
			<?php 
	$this->widget('ext.widgets.xheditor.XHeditor',array(
    'model'=>$model,
    'modelAttribute'=>'titulo1',
    'config'=>array(
        'id'=>'xheditor_3',
        'tools'=>'simple', // mini, simple, mfull, full or from XHeditor::$_tools, tool names are case sensitive
        'skin'=>'vista', // default, nostyle, o2007blue, o2007silver, vista
        'width'=>'740px',
        'height'=>'400px',
        //'loadCSS'=>XHtml::cssUrl('editor.css'),
      //  'upImgUrl'=>$this->createUrl('request/uploadFile'), // NB! Access restricted by IP        'upImgExt'=>'jpg,jpeg,gif,png',
    ),
));
		?>
		<?php echo $form->error($model,'titulo1'); ?>
			
		</div>
	</div>

	<div class="row">
        <div class="row-left">
            
		<?php echo $form->labelEx($model,'nota2'); ?>
		<?php //echo $form->textArea($model,'nota2', array('id'=>'detalle','class'=>'span6','rows'=>"3", 'cols'=>"500")); ?>
		<?php 
	$this->widget('ext.widgets.xheditor.XHeditor',array(
    'model'=>$model,
    'modelAttribute'=>'nota2',
    'config'=>array(
        'id'=>'xheditor_4',
        'tools'=>'simple', // mini, simple, mfull, full or from XHeditor::$_tools, tool names are case sensitive
        'skin'=>'vista', // default, nostyle, o2007blue, o2007silver, vista
        'width'=>'740px',
        'height'=>'400px',
        //'loadCSS'=>XHtml::cssUrl('editor.css'),
      //  'upImgUrl'=>$this->createUrl('request/uploadFile'), // NB! Access restricted by IP        'upImgExt'=>'jpg,jpeg,gif,png',
    ),
));
		?>
		<?php echo $form->error($model,'nota2'); ?>
			
		</div>
	</div>


<div class="row">
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar',array('class'=>'btn btn-success')); ?>
	</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


 <?php $this->endWidget();?>