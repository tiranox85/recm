<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'aspirante-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Favor de desplazarse entre los campos con los tabuladores y solo
        utilizar "enter" al terminar</p>

    <p class="note">Campos con<span class="required">*</span> son obligatorios.</p>


    <div class="row-fluid">
        <div class="span12">
            <div class="well">

            	<div class="row">
					<?php echo $form->labelEx($model,'titulo1'); ?>
					<?php echo $form->textArea($model,'titulo1', array('id'=>'detalle','class'=>'row','rows'=>"2", 'cols'=>"230")); ?>
					<?php echo $form->error($model,'titulo1'); ?>
				</div>

                <div class="row-fluid">
                    
                 
                    
                    <div class="span3">
                        <?php echo $form->labelEx($model, 'titulo1'); ?>
                        <?php echo $form->textField($model, 'titulo1', array('class'=>'uppercase','placeholder' => 'Nombre ...')); ?>
                        <?php echo $form->error($model, 'titulo1'); ?>
                    </div>
                    
                    <div class="span3">
                        <?php echo $form->labelEx($model, 'nota1'); ?>
                        <?php echo $form->textField($model, 'nota1', array('class'=>'uppercase','placeholder' => 'Instituto ...')); ?>
                        <?php echo $form->error($model, 'nota1'); ?>
                    </div>
                    
                    
                    
                </div>


                <hr />
    
                <div class="row" style="margin-top:20px">
                    <div class="span12" style="text-align: center;">
                        <button class="btn btn-success" type="submit"><i class="icon-ok icon-white"></i> Guardar</button>
                        <?php if (!$model->isNewRecord) { ?>
                            <a href="<?php echo CController::createUrl('view', array('aspirante/view', 'id'=>$model->id)); ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Cancelar</a>
                        <?php } else { ?>
                            <a href="<?php echo CController::createUrl('index'); ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Cancelar</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->

<script>
 
    $('#codigo_postal').keydown(function() {
        $('#direccion').html('');
    });
 
    $('.uppercase').blur(function() {
        $(this).val($(this).val().toUpperCase());
    });
 
    $('.lowercase').blur(function() {
        $(this).val($(this).val().toLowerCase());
    });
</script>