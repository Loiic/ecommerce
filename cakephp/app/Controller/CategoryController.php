<?php 
	class CategoryController extends AppController 
	{
		public function index () {
			$this->set('category', $this->Category->find('all'));
		}
	}
?>