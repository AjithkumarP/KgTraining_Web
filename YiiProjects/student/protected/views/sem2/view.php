<?php
/* @var $this Sem2Controller */
/* @var $model Sem2 */

$this->breadcrumbs=array(
	'Sem2s'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Sem2', 'url'=>array('index')),
array('label'=>'Create Sem2', 'url'=>array('create')),
array('label'=>'Update Sem2', 'url'=>array('update', 'id'=>$model->id)),
array('label'=>'Delete Sem2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Sem2', 'url'=>array('admin')),
);
?>

<h1>View Sem2 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'id',
		'year',
		'algorithms',
		'electronics',
		'maths2',
		'java',
),
)); ?>
