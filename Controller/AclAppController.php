<?php

App::uses('AppController', 'Controller');

class AclAppController extends AppController {

	function beforeFilter() {
		parent::beforeFilter();
		if (Configure::read('debug') == 2) {
			$this->Auth->allow();
		}
	}

}