<?php
App::uses('AppController', 'Controller');
/**
 * Solicitudes Controller
 *
 * @property Solicitude $Solicitude
 * @property PaginatorComponent $Paginator
 */
class SolicitudesController extends AppController {

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
	public function index() {
		$this->Solicitude->recursive = 0;
		$this->set('solicitudes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Solicitude->exists($id)) {
			throw new NotFoundException(__('Invalid solicitude'));
		}
		$options = array('conditions' => array('Solicitude.' . $this->Solicitude->primaryKey => $id));
		$this->set('solicitude', $this->Solicitude->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Solicitude->create();
			if ($this->Solicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitude has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitude could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Solicitude->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Solicitude->exists($id)) {
			throw new NotFoundException(__('Invalid solicitude'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Solicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitude has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitude could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Solicitude.' . $this->Solicitude->primaryKey => $id));
			$this->request->data = $this->Solicitude->find('first', $options);
		}
		$productos = $this->Solicitude->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Solicitude->id = $id;
		if (!$this->Solicitude->exists()) {
			throw new NotFoundException(__('Invalid solicitude'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Solicitude->delete()) {
			$this->Session->setFlash(__('The solicitude has been deleted.'));
		} else {
			$this->Session->setFlash(__('The solicitude could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
