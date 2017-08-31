<?php
/* @var $this Sem2Controller */
/* @var $model Sem2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'id'); ?>
            <?php echo $form->textField($model,'id'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'year'); ?>
            <?php echo $form->textField($model,'year'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'algorithms'); ?>
            <?php echo $form->textField($model,'algorithms'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'electronics'); ?>
            <?php echo $form->textField($model,'electronics'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'maths2'); ?>
            <?php echo $form->textField($model,'maths2'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'java'); ?>
            <?php echo $form->textField($model,'java'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->