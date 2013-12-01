<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function isAuthorized($user) {
	    if ($user['tipo'] == 'adminss') {
	        return true;
	    }
	    if (in_array($this->action, array('edit', 'delete'))) {
	        if ($user['id'] != $this->request->params['password'][0]) {
	            return false;
	        }
	    }
	    return true;
	}

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
        $this->Session->setFlash(__('Nombre de usuario o contraseña incorrectos, intente nuevamente'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if($this->data['User']['foto']!=null){
				$destino = WWW_ROOT.'files'.DS;
				$rand= rand(1,100000000);
				if(move_uploaded_file($this->data['User']['foto']['tmp_name'], $destino.$rand."_".$this->data['User']['foto']['name']) ){
					$this->request->data['User']['foto'] = $rand."_".$this->data['User']['foto']['name'] ; 
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__('The user has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
					}
				}else{
					$this->Session->setFlash(__('El archivo no se pudo subir, intente nuevamente'));       
		       		return $this->redirect(array('action' => 'index'));
				}
			}
			else{
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			if($this->data['User']['foto']!=null){
				$destino = WWW_ROOT.'files'.DS;
				$rand= rand(1,100000000);
				debug($this->data['User']['foto']['tmp_name']);
				if(move_uploaded_file($this->data['User']['foto']['tmp_name'], $destino.$rand."_".$this->data['User']['foto']['name']) ){
					$this->request->data['User']['foto'] = $rand."_".$this->data['User']['foto']['name'] ; 
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__('The user has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
					}
				}else{
					$this->Session->setFlash(__('El archivo no se pudo subir, intente nuevamente'));       
		       	//	return $this->redirect(array('action' => 'index'));
				}
			}else{
			if ($this->User->save($this->request->data)) {
					//$this->Session->setFlash(__('The user has been saved.'));
					return $this->redirect(array('controller'=>'productos', 'action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
