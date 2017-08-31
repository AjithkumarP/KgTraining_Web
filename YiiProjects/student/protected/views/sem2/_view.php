<?php
/* @var $this Sem2Controller */
/* @var $data Sem2 */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('algorithms')); ?>:</b>
	<?php echo CHtml::encode($data->algorithms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('electronics')); ?>:</b>
	<?php echo CHtml::encode($data->electronics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maths2')); ?>:</b>
	<?php echo CHtml::encode($data->maths2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('java')); ?>:</b>
	<?php echo CHtml::encode($data->java); ?>
	<br />


</div>