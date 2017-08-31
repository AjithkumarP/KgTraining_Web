<?php
/* @var $this Sem2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sem2s',
);

$this->menu=array(
array('label'=>'Create Sem2', 'url'=>array('create')),
array('label'=>'Manage Sem2', 'url'=>array('admin')),
);
?>

<h1>Sem2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
