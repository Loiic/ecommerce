<?php 
class CategoryController extends AppController 
{
	public function index () {
		$this->set('category', $this->Category->find('all'));
	}

	public function view ($id = null) {
		

		if (!$id) {
			throw new NotFoundException(__('Invalid Category pd'));
		}

		$category = $this->Category->find('all',
			array('join' => array(
				array(
					'table' => 'Item',
					'alias' => 'Item',
					'type' => 'left',
					'foreignKey' => false,
					'conditions'=> array('Category.id = Item.id_category')
					),
				),
			'conditions' => array('Category.id ='.$id)
			)

		);


		if (!$category) {
			throw new NotFoundException(__('Invalid Category de merde'));
		}
		$this->set('category', $category);
	}
}
?>