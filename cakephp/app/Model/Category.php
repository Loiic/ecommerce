<?php  
class Category extends AppModel
{
	public $actAs = array('Containable');
	public $hasMany = array('Item' => array(
		'className' => 'Item',
		'foreignKey' => 'id_category',
		'dependent' => true
		)
	);
}
?>