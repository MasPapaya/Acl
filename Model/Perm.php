<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Group $Group
 * @property Manager $Manager
 * @property Playsong $Playsong
 */
class Perm extends AclAppModel {

	public $name = 'Perm';
	public $useTable = 'aros_acos';
	public $validate = array();

}