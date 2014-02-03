<?php  
class Item extends AppModel {

	public $actAs = array('Containable');
	public $hasMany = array('Category' => array(
		'className' => 'Category',
		'foreignKey' => 'id',
		'dependent' => true
		)
	);
}
?>