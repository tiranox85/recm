

<div class="page-header">
    <h3>Privilegios</h3>
         <?php
     echo CHtml::ajaxButton('Actualizar Menus',
        '',
        array(
        'dataType' => 'html',
        'type' => 'get',
       // 'update' => '#req_res'.$id_menu.'',
         
        ), // ajax
        array(
                                            //coloco la clase que quiero que tenga el boton y listo
                                            'class'=>'btn btn-info',
                                            "onclick"=>"javascript:location.reload()",
                                        )

); // script
?>
</div>

<div class="row-fluid">
 
  <div class="span8">
  
  <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title'=>"Privilegios del Sistema",
        ));
        
    ?>
    <div class="accordion" id="accordion2">
      <?php foreach ($menus_principales as $menu_principal) { ?>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $menu_principal->id; ?>">
            <?php echo $menu_principal->label; ?>
          </a>
        </div>
        <div id="<?php echo $menu_principal->id; ?>" class="accordion-body collapse">
          <div class="accordion-inner">
                        <div class="row-fluid">
                            <div class="span5"><?php echo $menu_principal->label; ?></div>
                            <div id="permiso<?php echo $menu_principal->id?>">
                                <?php echo $this->renderPartial('_status', array('id_menu'=>$menu_principal->id,'id_perfil'=>$id_perfil), false, false); ?>
                            </div>
                        </div>
                          <?php $menus_nivel1 = Menus::model()->findAll('nivel=1  AND parent_id= ' . $menu_principal->id . '  ORDER BY position'); ?>
                        <?php foreach ($menus_nivel1 as $menu_nivel1) {  //nivel 1?>
                            <div class="row-fluid">
                                <div class="span1"><i class="icon-chevron-right pull-right"></i></div>
                                <div class="span5"><?php echo $menu_nivel1->label; ?></div>
                                <div id="permiso<?php echo $menu_nivel1->id; ?>">
                                    <?php echo $this->renderPartial('_status', array('id_menu'=>$menu_nivel1->id, 'id_perfil'=>$id_perfil), false, false); ?>
                                </div>
                            </div>
                        <?php $menus_nivel2 = Menus::model()->findAll('nivel=2  AND parent_id= ' . $menu_nivel1->id . '  ORDER BY position'); ?>
                            <?php foreach ($menus_nivel2 as $menu_nivel2) { //nivel 2?>
                                <div class="row-fluid">
                                    <div class="span2"><i class="icon-chevron-right pull-right"></i></div>
                                    <div class="span5"><?php echo $menu_nivel2->label; ?></div>
                                    <div id="permiso<?php echo $menu_nivel2->id . $id_persona; ?>">
                                        <?php echo $this->renderPartial('_status', array('id_menu'=>$menu_nivel2->id, 'id_perfil'=>$id_perfil), false, false); ?>
                                    </div>
                                </div>
                        <?php $menus_nivel3 = Menus::model()->findAll('nivel=3  AND parent_id= ' . $menu_nivel2->id . '  ORDER BY position'); ?>
                            <?php foreach ($menus_nivel3 as $menu_nivel3) { //nivel 3?>
                                <div class="row-fluid">
                                    <div class="span3"><i class="icon-chevron-right pull-right"></i></div>
                                    <div class="span5"><?php echo $menu_nivel3->label; ?></div>
                                    <div id="permiso<?php echo $menu_nivel3->id . $id_persona; ?>">
                                        <?php echo $this->renderPartial('_status', array('id_menu'=>$menu_nivel3->id, 'id_perfil'=>$id_perfil), false, false); ?>
                                    </div>
                                </div>
                        <?php $menus_nivel4 = Menus::model()->findAll('nivel=4  AND parent_id= ' . $menu_nivel3->id . '  ORDER BY position'); ?>
                            <?php foreach ($menus_nivel4 as $menu_nivel4) { //nivel 4?>
                                <div class="row-fluid">
                                    <div class="span4"><i class="icon-chevron-right pull-right"></i></div>
                                    <div class="span5"><?php echo $menu_nivel4->label; ?></div>
                                    <div id="permiso<?php echo $menu_nivel4->id . $id_persona; ?>">
                                        <?php echo $this->renderPartial('_status', array('id_menu'=>$menu_nivel4->id, 'id_perfil'=>$id_perfil), false, false); ?>
                                    </div>
                                </div>
                         <?php $menus_nivel5 = Menus::model()->findAll('nivel=5  AND parent_id= ' . $menu_nivel4->id . '  ORDER BY position'); ?>
                            <?php foreach ($menus_nivel5 as $menu_nivel5) { //nivel 4?>
                                <div class="row-fluid">
                                    <div class="span4"><i class="icon-chevron-right pull-right"></i></div>
                                    <div class="span5"><?php echo $menu_nivel5->label; ?></div>
                                    <div id="permiso<?php echo $menu_nivel5->id . $id_persona; ?>">
                                        <?php echo $this->renderPartial('_status', array('id_menu'=>$menu_nivel5->id, 'id_perfil'=>$id_perfil), false, false); ?>
                                    </div>
                                </div>
                            
                         <?php } ?>
                            
                         <?php } ?>
                            
                         <?php } ?>

                         <?php } ?>
                        <?php } ?>
          </div>
        </div>
      </div>
        <?php } ?>

    </div>
    
    
    <?php $this->endWidget();?>
  </div>
</div>


