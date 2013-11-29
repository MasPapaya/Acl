<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Group $Group
 * @property Manager $Manager
 * @property Playsong $Playsong
 */
class ManagedAco extends AclAppModel {

	public $name = 'ManagedAco';
	public $useTable = 'acos';
	public $actsAs = array('Tree');
	public $displayField = 'alias';
	public $validate = array();

}