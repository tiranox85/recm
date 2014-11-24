<?php
/* @var $this Ap1ind1HistJorgeController */
/* @var $model Ap1ind1HistJorge */

$this->breadcrumbs=array(
    'Ap1ind1 Hist Jorges'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'List Ap1ind1HistJorge', 'url'=>array('index')),
    array('label'=>'Create Ap1ind1HistJorge', 'url'=>array('create')),
    array('label'=>'Update Ap1ind1HistJorge', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Ap1ind1HistJorge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Ap1ind1HistJorge', 'url'=>array('admin')),
        array('label'=>'Ver Preview', 'url'=>array('preview', 'id'=>$model->id)),
);
?>

<h2>Datos del indicador</h2>


<table class="table table-bordered table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th style="width:5%">ID</th>
            <th style="width:25%">Entidad</th>
            <th style="width:25%">Municipio</th>
            <th style="width:25%">Actividad</th>
            <th style="width:20%">Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($registros as $item){ ?>
        <tr>
            <td><?=$item->id?><br /><?=CHtml::link('<i class="icon-pencil"></i>', CController::createUrl("Ap1Ind1/update", array("id"=>$item->id)))?></td>
            <td><?=utf8_encode($item->entidad)?></td>
            <td><?=utf8_encode($item->municipio) ?></td>
            <td><?=utf8_encode($item->actividad)?></td>
            <td><?=$item->valor?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>