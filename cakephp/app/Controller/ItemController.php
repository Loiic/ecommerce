<?php  
class ItemController extends AppController {
	public $helpers = array('Html', 'Form');
	public $layout = 'admin';

	public function index() {
		$this->layout = 'admin';
		$this->set('items', $this->Item->find('all'));
	}

	public function view ($id = null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid Item'));
		}

		$item = $this->Item->findById($id);
		if (!$item) {
			throw new NotFoundException(__('Invalid Item'));
		}
		$this->set('items', $item);
	}

	public function add () {

		if($this->request->is('post')) {

			$this->Item->create();

			if(is_uploaded_file($this->request->data['Item']['img']['tmp_name'])) {

				move_uploaded_file(
					$this->request->data['Item']['img']['tmp_name'],
					WWW_ROOT.'/img/' . $this->request->data['Item']['img']['name']
					);

				$this->request->data['Item']['img'] = $this->request->data['Item']['img']['name'];
				$Itemsave = $this->Item->save($this->request->data);

				if($Itemsave) {
				
					$this->Session->setFlash('Item add !');
					return $this->redirect(array('action' => 'index'));
				}
				else {	
					$this->Session->setFlash('Item not add !');
				}
			}
			else {
				$this->Session->setFlash('You must upload an image !');
			}
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Item'));
		}

		$item = $this->Item->findById($id);
		if (!$item) {
			throw new NotFoundException(__('Invalid Item'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Item->id = $id;
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('Your Item has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your Item.'));
		}

		if (!$this->request->data) {
			$this->request->data = $item;
		}
	}

	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Item->delete($id)) {
			$this->Session->setFlash(
				__('L\'item avec id : %s a été supprimé.', h($id))
				);
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>