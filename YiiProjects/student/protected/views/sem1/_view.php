<?php
/* @var $this Sem1Controller */
/* @var $data Sem1 */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maths')); ?>:</b>
	<?php echo CHtml::encode($data->maths); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physics')); ?>:</b>
	<?php echo CHtml::encode($data->physics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cprograming')); ?>:</b>
	<?php echo CHtml::encode($data->cprograming); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drawing')); ?>:</b>
	<?php echo CHtml::encode($data->drawing); ?>
	<br />


</div>