<?php
/* @var $this Sem2Controller */
/* @var $model Sem2 */

$this->breadcrumbs=array(
	'Sem2s'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Sem2', 'url'=>array('index')),
array('label'=>'Manage Sem2', 'url'=>array('admin')),
);
?>

<h1>Create Sem2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>