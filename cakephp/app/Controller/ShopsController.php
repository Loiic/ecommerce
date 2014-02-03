<?php  
class ShopsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $layout = 'admin';

	public function index() {
		$this->layout = 'admin';
		$this->set('Shops', $this->Shops->find('all'));
	}

	public function view ($id = null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid Shops'));
		}

		$Shops = $this->Shops->findById($id);
		if (!$Shops) {
			throw new NotFoundException(__('Invalid Shops'));
		}
		$this->set('Shops', $Shops);
	}
	
	public function add () {
		if($this->request->is('post')) {
			$this->Shops->create();
			if($this->Shops->save($this->request->data)) {
				$this->Session->setFlash('Shops add !');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('Shops not add !');
			}
		}
	}

	public function add_item () {
		if($this->request->is('post')) 
		{
			$this->Shops->create();
			if($this->Shops->save($this->request->data)) 
			{
				$this->Session->setFlash('Item added on this shop !');
				return $this->redirect(array('action' => 'index'));
			}
			else 
			{
				$this->Session->setFlash('Item not add on this shop!');
			}
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Shops'));
		}

		$Shops = $this->Shops->findById($id);
		if (!$Shops) {
			throw new NotFoundException(__('Invalid Shops'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Shops->id = $id;
			if ($this->Shops->save($this->request->data)) {
				$this->Session->setFlash(__('Your Shops has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your Shops.'));
		}

		if (!$this->request->data) {
			$this->request->data = $Shops;
		}
	}

	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Shops->delete($id)) {
			$this->Session->setFlash(
				__('L\'Shops avec id : %s a été supprimé.', h($id))
				);
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>