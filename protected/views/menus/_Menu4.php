<li class="nav-header">Menú Nivel 4</li>
<?php $i = 0 ?>
<?php foreach ($menus_nivel4 as $menu_nivel4) { ?>
    <li><?php echo CHtml::ajaxLink($menu_nivel4->label, CController::createUrl("/menus/editarMenu", array("nivel" => 4, "id" => $menu_nivel4->id, 'parent_id'=>$parent_id)), array('update' => '#contenido_menus_4'), array("id" => "E4" . time() . $i)); ?></li>
    <?php $i++;
} ?>
<li><?php echo CHtml::ajaxLink('Agregar Nuevo', CController::createUrl('/menus/nuevoMenu', array("nivel" => 4, 'parent_id'=>$parent_id)), array('update' => '#contenido_menus_4'), array("id" => "N4" . time() . $i)); ?></li>