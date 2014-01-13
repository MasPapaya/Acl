<?php
App::uses('AclAppController', 'Acl.Controller');

class AcosController extends AclAppController {

	public $name = 'Acos';
	public $uses = array('Acl.ManagedAco');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function admin_index() {
		$acos = $this->paginate('ManagedAco');
		$this->set(compact('acos'));
	}

	public function admin_add() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->ManagedAco->create();
			if ($this->ManagedAco->save($this->request->data)) {
				$this->Session->setFlash(__('The Aco has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Aco could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$acos = $this->ManagedAco->generateTreeList(null, null, null, '- ', null);
		$this->set(compact('acos'));
	}

	public function admin_edit($id = NULL) {
		if($id != NULL){
			if(empty($this->request->data)){
				$this->ManagedAco->id = $id;
				$aco = $this->ManagedAco->read();
				$this->request->data = $aco;
			}
			
			if ($this->request->is('post') || $this->request->is('put')) {
				
				if ($this->ManagedAco->save($this->request->data)) {
					$this->Session->setFlash(__('The Aco has been saved'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				} else {
					//pr($this->validationErrors);
					$this->Session->setFlash(__('The Aco could not be saved. Please, try again.'), 'flash/error');
				}
			}
		}
		$acos = $this->ManagedAco->generateTreeList(null, null, null, '- ', null);
		$this->set(compact('acos'));
	}
	
	public function admin_repair(){
		$this->ManagedAco->recover('parent');
		$this->redirect(array('action' => 'index'));
	}
	
	public function admin_remove($id) {
		if($id != NULL){
			if ($this->request->is('post')) {
				$this->ManagedAco->removeFromTree($id, FALSE);
				$this->Session->setFlash(__('The Aco has been removed'), 'flash/success');
				
			}
		}
		$this->redirect(array('action' => 'index'));
	}
	
	public function admin_delete($id) {
		if($id != NULL){
			if ($this->request->is('post')) {
				$this->ManagedAco->removeFromTree($id, TRUE);
				$this->Session->setFlash(__('The Aco has been deleted'), 'flash/success');
				
			}
		}
		$this->redirect(array('action' => 'index'));
	}

	public function isAuthorized() {
		return FALSE;
	}

}