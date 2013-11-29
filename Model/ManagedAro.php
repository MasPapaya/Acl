<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Group $Group
 * @property Manager $Manager
 * @property Playsong $Playsong
 */
class ManagedAro extends AclAppModel {

    public $name = 'ManagedAro';
    public $useTable = 'aros';
    public $actsAs = array('Tree');
    public $displayField = 'alias';
    public $validate = array(
	'alias' => array(
	    'unique' => array(
		'rule' => 'IsUnique',
		'message' => 'Alias already exists',
	    //'allowEmpty' => false,
	    //'required' => false,
	    //'last' => false, // Stop validation after this rule
	    //'on' => 'create', // Limit validation to 'create' or 'update' operations
	    ),
	),
    );

}