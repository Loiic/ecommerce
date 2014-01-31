<?php  
class Category extends AppModel
{
	public $hasMany = array(
		'Items' => array(
			'className' => 'Items',
			'foreignKey' => 'id_category',
			'order' => 'Items.id DESC',
			'limit' => '5',
			'dependent' => true
			)
		);
}
?>