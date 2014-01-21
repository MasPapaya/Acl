<?php

App::uses('AclAppController', 'Acl.Controller');

class PermissionsController extends AclAppController {
	
	
	public $name = 'Permissions';
	public $uses = array('Acl.Perm', 'Acl.ManagedAro', 'Acl.ManagedAco');
	
//	public $helpers = array('Paginator');
//	public $components = array('');
	
	public $paginate = array(
		'Perm' => array(
			'limit' => 25,
			'order' => array(
				'Post.title' => 'asc'
			)
		)
	);

	
	public function beforeFilter() {
		parent::beforeFilter();
	}
	
	public function index() {
		
	}
	
	public function admin_index(){
		$perms = $this->paginate('Perm');
		$this->set(compact('perms'));
	}
	
	public function admin_add(){
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->ManagedAro->id = $this->request->data['Perm']['aro_id'];
			$aro_obj = $this->ManagedAro->read();
			
			$this->ManagedAco->id = $this->request->data['Perm']['aco_id'];
			$aco_obj = $this->ManagedAco->read();
			
			if($this->request->data['Perm']['access'] == 'allow'){
				$this->Acl->allow($aro_obj['ManagedAro']['alias'], $aco_obj['ManagedAco']['alias'], $this->request->data['Perm']['action']);
			} elseif($this->request->data['Perm']['access'] == 'deny'){
				$this->Acl->deny($aro_obj['ManagedAro']['alias'], $aco_obj['ManagedAco']['alias'], $this->request->data['Perm']['action']);
			}
			
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash(__('The Perm no has been saved.'), 'flash/error');
		}
		$aros = $this->ManagedAro->generateTreeList(NULL, NULL, NULL, '- ', NULL);
		$acos = $this->ManagedAco->generateTreeList(NULL, NULL, NULL, '- ', NULL);
		$this->set(compact('aros', 'acos'));
	}
	
	public function admin_edit($id = NULL) {
		if($id != NULL){
			
			if(empty($this->request->data)){
				$this->Perm->id = $id;
				$perm = $this->Perm->read();
				$this->request->data = $perm;
			}
			
			if ($this->request->is('post') || $this->request->is('put')) {
				$this->ManagedAro->id = $this->request->data['Perm']['aro_id'];
				$aro_obj = $this->ManagedAro->read();

				$this->ManagedAco->id = $this->request->data['Perm']['aco_id'];
				$aco_obj = $this->ManagedAco->read();

				if($this->request->data['Perm']['access'] == 'allow'){
					$this->Acl->allow($aro_obj['ManagedAro']['alias'], $aco_obj['ManagedAco']['alias'], $this->request->data['Perm']['action']);
				} elseif($this->request->data['Perm']['access'] == 'deny'){
					$this->Acl->deny($aro_obj['ManagedAro']['alias'], $aco_obj['ManagedAco']['alias'], $this->request->data['Perm']['action']);
				}
				$this->Session->setFlash(__('The Perm has been saved.'), 'flash/error');
				$this->redirect(array('action' => 'index'));
			}
			$aros = $this->ManagedAro->generateTreeList(NULL, NULL, NULL, '- ', NULL);
			$acos = $this->ManagedAco->generateTreeList(NULL, NULL, NULL, '- ', NULL);
			$this->set(compact('aros', 'acos'));
		} else {
			$this->Session->setFlash(__('Perm id not set.'), 'flash/warning');
			$this->redirect(array('action' => 'index'));
		}
		
	}
	
	public function admin_delete($id = NULL) {
		if($id != NULL){
			if ($this->request->is('post')) {
				$this->Perm->delete($id);
				$this->Session->setFlash(__('The Perm has been deleted'), 'flash/success');
				
			}
		}
		$this->redirect(array('action' => 'index'));
	}
}