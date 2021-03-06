<?php
/* @var $this TbltestController */
/* @var $model Tbltest */

$this->breadcrumbs=array(
	'Tbltests'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Tbltest', 'url'=>array('index')),
	array('label'=>'Create Tbltest', 'url'=>array('create')),
	array('label'=>'Update Tbltest', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Tbltest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbltest', 'url'=>array('admin')),
);
?>

<h1>View Tbltest #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Description',
	),
)); ?>
