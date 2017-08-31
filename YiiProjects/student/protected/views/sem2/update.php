<?php
/* @var $this Sem2Controller */
/* @var $model Sem2 */

$this->breadcrumbs=array(
	'Sem2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List Sem2', 'url'=>array('index')),
array('label'=>'Create Sem2', 'url'=>array('create')),
array('label'=>'View Sem2', 'url'=>array('view', 'id'=>$model->id)),
array('label'=>'Manage Sem2', 'url'=>array('admin')),
);
?>

<h1>Update Sem2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>