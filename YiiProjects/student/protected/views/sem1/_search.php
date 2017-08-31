<?php
/* @var $this Sem1Controller */
/* @var $model Sem1 */
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
            <?php echo $form->label($model,'maths'); ?>
            <?php echo $form->textField($model,'maths'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'physics'); ?>
            <?php echo $form->textField($model,'physics'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'cprograming'); ?>
            <?php echo $form->textField($model,'cprograming'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'drawing'); ?>
            <?php echo $form->textField($model,'drawing'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->