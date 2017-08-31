<?php
/* @var $this Sem1Controller */
/* @var $model Sem1 */

$this->breadcrumbs=array(
	'Sem1s'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Sem1', 'url'=>array('index')),
array('label'=>'Create Sem1', 'url'=>array('create')),
array('label'=>'Update Sem1', 'url'=>array('update', 'id'=>$model->id)),
array('label'=>'Delete Sem1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Sem1', 'url'=>array('admin')),
);
?>

<h1>View Sem1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'id',
		'year',
		'maths',
		'physics',
		'cprograming',
		'drawing',
),
)); ?>
