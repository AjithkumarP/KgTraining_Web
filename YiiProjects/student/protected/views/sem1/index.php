<?php
/* @var $this Sem1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sem1s',
);

$this->menu=array(
array('label'=>'Create Sem1', 'url'=>array('create')),
array('label'=>'Manage Sem1', 'url'=>array('admin')),
);
?>

<h1>Sem1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
