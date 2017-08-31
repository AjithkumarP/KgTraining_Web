<?php
/* @var $this Sem1Controller */
/* @var $model Sem1 */

$this->breadcrumbs=array(
	'Sem1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List Sem1', 'url'=>array('index')),
array('label'=>'Create Sem1', 'url'=>array('create')),
array('label'=>'View Sem1', 'url'=>array('view', 'id'=>$model->id)),
array('label'=>'Manage Sem1', 'url'=>array('admin')),
);
?>

<h1>Update Sem1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>