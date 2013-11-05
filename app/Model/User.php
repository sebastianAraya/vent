<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Producto $Producto
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
public function beforeSave($option = login) {
	    if (isset($this->data['User']['password'])) {
	        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	    }
	    return true;
	}
	public $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
