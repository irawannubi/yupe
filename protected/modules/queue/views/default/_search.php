<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'action'      => Yii::app()->createUrl($this->route),
    'method'      => 'get',
    'type'        => 'vertical',
    'htmlOptions' => array('class' => 'well form-vertical'),
));

Yii::app()->clientScript->registerScript('fieldset', "
    $('document').ready(function () {
        $('.popover-help').popover({ trigger : 'hover', delay : 500 });
    });
");
?>
    <fieldset class="inline"> 
        <?php echo $form->textFieldRow($model, 'id', array('class' => 'span5', 'maxlength'=> 10)); ?>
        <?php echo $form->textFieldRow($model, 'worker', array('class' => 'span5', 'maxlength'=> 300)); ?>
        <?php echo $form->textFieldRow($model, 'create_time', array('class'=> 'span5')); ?>
        <?php echo $form->textAreaRow($model, 'task', array('rows' => 6, 'cols' => 50, 'class'=> 'span8')); ?>
        <?php echo $form->textFieldRow($model, 'start_time', array('class'=> 'span5')); ?>
        <?php echo $form->textFieldRow($model, 'complete_time', array('class'=> 'span5')); ?>
        <?php echo $form->textFieldRow($model, 'status', array('class'=> 'span5')); ?>
        <?php echo $form->textFieldRow($model, 'notice', array('class' => 'span5', 'maxlength'=> 300)); ?>
    </fieldset>

    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'        => 'primary',
        'encodeLabel' => false,
        'buttonType'  => 'submit',
        'label'       => '<i class="icon-search icon-white">&nbsp;</i> ' . Yii::t('queue', 'Искать задание'),
    )); ?>

<?php $this->endWidget(); ?>
