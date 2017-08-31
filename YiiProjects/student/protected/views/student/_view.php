<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('joining')); ?>:</b>
    <?php echo CHtml::encode($data->joining); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
    <?php echo CHtml::encode($data->phone); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
    <?php echo CHtml::encode($data->age); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
    <?php echo CHtml::encode($data->gender); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('father')); ?>:</b>
    <?php echo CHtml::encode($data->father); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('mother')); ?>:</b>
      <?php echo CHtml::encode($data->mother); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('town')); ?>:</b>
      <?php echo CHtml::encode($data->town); ?>
      <br />

     */ ?>

</div>