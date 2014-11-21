<div class="row-fluid" style="margin-bottom: 30px;">
    <div class="span12">
        <h1>
            Administración de Menús
        </h1>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo CHtml::ajaxLink('<i class="icon-refresh"></i>', CController::createUrl('/menus/actualizarMenu'), array('update' => '#menu_principal'), array("id" => "R" . time())); ?>
        <ul class="nav nav-tabs nav-stacked" id="menu_principal" name="menu_principal">
            <?php echo $this->renderPartial('_MenuPrincipal', array('menus_principales'=>$menus_principales), false, false); ?>
        </ul>
    </div>
    <div class="span9" id="contenido_menus">
        <?php //$model=new Menus; echo $this->renderPartial('_formMenuPrincipal', array('model'=>$model)); ?>
    </div>
</div>