<?php
App::uses('AppController', 'Controller');
/**
 * Fotos Controller
 *
 * @property Foto $Foto
 * @property PaginatorComponent $Paginator
 */
class FotosController extends AppController {

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
		$this->Foto->recursive = 0;
		$this->set('fotos', $this->Paginator->paginate());
	}

	public function delete($id = null) {
		$temp = $this->Foto->findById($id);
		debug($temp);
		
		$this->Foto->id = $id;
		if (!$this->Foto->exists()) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Foto->delete()) {
			$this->Session->setFlash(__('La imagen ha sido eliminada'));
		} else {
			$this->Session->setFlash(__('La imagen no pudo ser eliminada. Intente nuevamente'));
		}
		return $this->redirect(array('controller'=>'productos','action' => 'edit/'.$temp['Producto']['id'].'/0'));
	}}
