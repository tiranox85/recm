<div class="row-fluid">
    <div class="span12">
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'menus-form',
                    /* 'enableClientValidation' => true,
                      'clientOptions' => array(
                      'validateOnSubmit' => true,
                      ), */
                    ));
            ?>
            <h3 id="myModalLabel">Agregar Nuevo Menú Principal</h3>
            Campos con <span class="required">*</span> son obligatorios.
            <?php echo $form->errorSummary($model); ?>
            <table class="table table-condensed table-striped">

                <tr>
                    <td><?php echo $form->labelEx($model, 'label'); ?></td>
                    <td><?php echo $form->textField($model, 'label'); ?></td>
                    <td><?php echo $form->error($model, 'label'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'link'); ?></td>
                    <td><?php echo $form->textField($model, 'link'); ?></td>
                    <td><?php echo $form->error($model, 'link'); ?></td>
                </tr>
                 <tr>
                    <td><?php echo $form->labelEx($model, 'position'); ?></td>
                    <td><?php echo $form->textField($model, 'position'); ?></td>
                    <td><?php echo $form->error($model, 'position'); ?></td>
                </tr>
            </table>

            <?php
            if (!$model->isNewRecord) {
                echo CHtml::ajaxSubmitButton('Borrar', CController::createUrl('/menus/borrarMenu', array('id' => $model->id)), array('update' => '#contenido_menus_2'), array('class' => "btn", 'id' => 'B2' . time()));
            }
            ?>
            <?php echo CHtml::ajaxSubmitButton('Guardar', '', array('update' => '#contenido_menus_2'), array('class' => "btn", 'id' => 'G2' . time())); ?>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
<hr />
<?php if (!$model->isNewRecord) { ?>
    <div class="row-fluid">
        <div class="span12">
            <?php echo CHtml::ajaxLink('<i class="icon-refresh"></i>', CController::createUrl('/menus/actualizarMenu', array("nivel"=>3, 'parent_id'=>$model->id)), array('update' => '#menu_3'), array("id" => "R3" . time())); ?>
            <ul class="nav nav-tabs nav-stacked" id="menu_3" name="menu_3">
                <?php $menus_nivel3 = Menus::model()->findAll('nivel=3 AND parent_id= ' . $model->id . ' ORDER BY id'); ?>
                <?php echo $this->renderPartial('_Menu3', array('menus_nivel3'=>$menus_nivel3, 'parent_id'=>$model->id), false, false); ?>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12" id="contenido_menus_3">
    <?php //$model=new Menus; echo $this->renderPartial('_formMenuPrincipal', array('model'=>$model));  ?>
        </div>
    </div>
<?php } ?>