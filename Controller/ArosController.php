<?php

App::uses('AclAppController', 'Acl.Controller');

class ArosController extends AclAppController {

	public $name = 'Aros';
	public $uses = array('Acl.ManagedAro');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function admin_index() {
		$aros = $this->paginate('ManagedAro');
		$this->ManagedAro->recover('parent');
		$this->set(compact('aros'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ManagedAro->create();
			if ($this->ManagedAro->save($this->request->data)) {
				$this->Session->setFlash(__d('acl','The ARO has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('acl','The ARO could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$aros = $this->ManagedAro->generateTreeList(null, null, null, '- ', null);
		$this->set(compact('aros'));
	}

	public function admin_edit($id = NULL) {
		if (!$this->ManagedAro->exists($id)) {
			throw new NotFoundException(__d('acl','Invalid ManagedAro'));
		}

		if ($this->request->isPost()) {
			// debug($this->request->data);

			if ($this->ManagedAro->save($this->request->data)) {
				$this->Session->setFlash(__d('acl','The ManagedAro has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('acl','The ManagedAro could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ManagedAro.' . $this->ManagedAro->primaryKey => $id));
			$this->request->data = $this->ManagedAro->find('first', $options);
		}
		$aros = $this->ManagedAro->generateTreeList(null, null, null, '- ', null);
		$this->set(compact('aros'));
	}

}