<?php

App::uses('AppController', 'Controller');

class AclAppController extends AppController {

//	var $components = array('Acl', 'Auth', 'Session', 'RequestHandler', 'Acl.Acl', 'Acl.AclReflector');
//	var $components = array(
//		'Acl',
//		'Auth',
//		'Session',
//		'RequestHandler');
//
	function beforeFilter() {
		parent::beforeFilter();
		if(Configure::read('debug') == 2){
			$this->Auth->allow();
		}
	}
}