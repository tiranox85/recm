
<div class="row-fluid">
    <div class="span12">
       <?php
                  $this->widget('zii.widgets.jui.CJuiButton', array(
                        'buttonType'=>'link',
                        'name'=>'editar',
                        'caption'=>'<i class="icon-pencil"></i>Editar',
                        'value'=>'editar',
                        'htmlOptions'=>array('class'=>'btn btn-success pull-right','style'=>'padding: 0px;'),


                        'url' => array('ap1Ind1Hist/modconfig/'.$model->id.''),
                        //'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
                  ));
            ?>
        <br />
        <? if (!empty($data)) { ?>
            <table class="table table-striped table-bordered table-condensed">
             
                <?php
                foreach ($data as $key => $value) {
                    echo '<tr>';
                    echo '<td>';
                    echo CHtml::encode($model->getAttributeLabel($key));
                    echo '</td>';
                    echo '<td>';
                    echo utf8_encode($value);
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        <?php } else { ?>
            <div class="alert alert-danger">No hay configuracion para este indicador</div>
        <?php } ?>
    </div>
</div>