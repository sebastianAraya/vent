<?php
App::uses('AppController', 'Controller');
/**
 * CategoriasProductos Controller
 *
 * @property CategoriasProducto $CategoriasProducto
 * @property PaginatorComponent $Paginator
 */
class CategoriasProductosController extends AppController {

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
		$this->CategoriasProducto->recursive = 0;
		$this->set('categoriasProductos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriasProducto->exists($id)) {
			throw new NotFoundException(__('Invalid categorias producto'));
		}
		$options = array('conditions' => array('CategoriasProducto.' . $this->CategoriasProducto->primaryKey => $id));
		$this->set('categoriasProducto', $this->CategoriasProducto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriasProducto->create();
			if ($this->CategoriasProducto->save($this->request->data)) {
				$this->Session->setFlash(__('The categorias producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorias producto could not be saved. Please, try again.'));
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
		if (!$this->CategoriasProducto->exists($id)) {
			throw new NotFoundException(__('Invalid categorias producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriasProducto->save($this->request->data)) {
				$this->Session->setFlash(__('The categorias producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorias producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriasProducto.' . $this->CategoriasProducto->primaryKey => $id));
			$this->request->data = $this->CategoriasProducto->find('first', $options);
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
		$this->CategoriasProducto->id = $id;
		if (!$this->CategoriasProducto->exists()) {
			throw new NotFoundException(__('Invalid categorias producto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoriasProducto->delete()) {
			$this->Session->setFlash(__('The categorias producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categorias producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
