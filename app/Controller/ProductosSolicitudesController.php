<?php
App::uses('AppController', 'Controller');
/**
 * ProductosSolicitudes Controller
 *
 * @property ProductosSolicitude $ProductosSolicitude
 * @property PaginatorComponent $Paginator
 */
class ProductosSolicitudesController extends AppController {

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
		$this->ProductosSolicitude->recursive = 0;
		$this->set('productosSolicitudes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductosSolicitude->exists($id)) {
			throw new NotFoundException(__('Invalid productos solicitude'));
		}
		$options = array('conditions' => array('ProductosSolicitude.' . $this->ProductosSolicitude->primaryKey => $id));
		$this->set('productosSolicitude', $this->ProductosSolicitude->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductosSolicitude->create();
			if ($this->ProductosSolicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The productos solicitude has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The productos solicitude could not be saved. Please, try again.'));
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
		if (!$this->ProductosSolicitude->exists($id)) {
			throw new NotFoundException(__('Invalid productos solicitude'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductosSolicitude->save($this->request->data)) {
				$this->Session->setFlash(__('The productos solicitude has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The productos solicitude could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductosSolicitude.' . $this->ProductosSolicitude->primaryKey => $id));
			$this->request->data = $this->ProductosSolicitude->find('first', $options);
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
		$this->ProductosSolicitude->id = $id;
		if (!$this->ProductosSolicitude->exists()) {
			throw new NotFoundException(__('Invalid productos solicitude'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductosSolicitude->delete()) {
			$this->Session->setFlash(__('The productos solicitude has been deleted.'));
		} else {
			$this->Session->setFlash(__('The productos solicitude could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
