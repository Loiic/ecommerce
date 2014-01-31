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

		$category = $this->Category->Items->findById($id);
		if (!$category) {
			throw new NotFoundException(__('Invalid Category de merde'));
		}
		$this->set('category', $category);
	}
	}
?>