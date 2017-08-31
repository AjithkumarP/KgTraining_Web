<?php
/* @var $this Sem1Controller */
/* @var $model Sem1 */

$this->breadcrumbs=array(
	'Sem1s'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Sem1', 'url'=>array('index')),
array('label'=>'Manage Sem1', 'url'=>array('admin')),
);
?>

<h1>Create Sem1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>