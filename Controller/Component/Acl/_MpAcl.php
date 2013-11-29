<?php

App::uses('AclInterface', 'Controller/Component/Acl');
App::uses('ClassRegistry', 'Utility');

class MpAcl extends Object implements AclInterface {
	
	public function allow($aro, $aco, $action = "*") {
		return TRUE;
	}

	public function check($aro, $aco, $action = "*") {
		return TRUE;
	}

	public function deny($aro, $aco, $action = "*") {
		return TRUE;
	}

	public function inherit($aro, $aco, $action = "*") {
		return TRUE;
	}

	public function initialize(Component $component) {
		// pr($component->_Collection);
		return TRUE;
	}	
}