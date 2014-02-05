<?php

class RecettesController extends AppController
{
	public function index()
	{
		$recettes = $this->Recette->find('all');
		$this->set('recettes', $recettes);
	}

	public function view($id)
	{
		if(!$id)
		{
            throw new NotFoundException(__('Invalid recette'));
        }

        $recette = $this->Recette->findById($id);
        if(!$recette)
        {
            throw new NotFoundException(__('Invalid recette'));
        }
        $this->set('recette', $recette);
    }

    public function add()
    {
    	if($this->request->is('post'))
    	{
            $this->Recette->create();
            if($this->Recette->save($this->request->data))
            {
                $this->Session->setFlash(__('Your recette has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your recette.'));
        }
	}

	public function edit($id = null)
	{
	    if(!$id)
	    {
	        throw new NotFoundException(__('Invalid recette'));
	    }

	    $recette = $this->Recette->findById($id);
	    if(!$recette)
	    {
	        throw new NotFoundException(__('Invalid recette'));
	    }

	    if($this->request->is(array('recette', 'put')))
	    {
	        $this->Recette->id = $id;
	        if ($this->Recette->save($this->request->data))
	        {
	            $this->Session->setFlash(__('Your recette has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your recette.'));
	    }

	    if(!$this->request->data)
	    {
	        $this->request->data = $recette;
	    }
	}

	public function delete($id)
	{
	    if($this->request->is('get'))
	    {
	        throw new MethodNotAllowedException();
	    }
	    if($this->Recette->delete($id))
	    {
	        $this->Session->setFlash(
	            __('Le recette avec id : %s a été supprimé.', h($id))
	        );
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}
?>