<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {

	public $displayField = 'nombre';
	
	public $validate = array(

		'password'=>array(
		    'Not empty'=>array(
		        'rule'=>'notEmpty',
		        'message'=>'Por favor ingrese su contraseña'
		    ))
	);
	public function beforeSave($options = array()) {
    if(!empty($this->data['User']['password'])) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
    } else {
        unset($this->data['User']['password']);
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
