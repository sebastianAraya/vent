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

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
		$this->set('foto', $this->Foto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		         // Informacion del tipo de archivo subido $this->data['Upload']['archivo']['type']
                  $destino = WWW_ROOT.'uploads'.DS;
                  if(move_uploaded_file($archivo['tmp_name'], $destino.$archivo['name']))
                   {               
                      $this->Session->setFlash(__('El archivo se a guardado'));
                   }
                  else
                   {
                          $this->Session->setFlash(__('El archivo no se pudo subir, por favor intentelo de nuevo'));       
                   }
                   $this->redirect(array('action' => 'index'));
             }else{
                  $this->Session->setFlash(__('Error al intentar subir el archivo'));
              }
        }


		if ($this->request->is('post')) {
			$this->Foto->create();
			if ($this->Foto->save($this->request->data)) {
				$destino = WWW_ROOT.'uploads'.DS;
                if(move_uploaded_file($archivo['imagen'], $destino.$archivo['name'])){               
                	$this->Session->setFlash(__('El archivo se a guardado'));
                }
                else{
                	$this->Session->setFlash(__('El archivo no se pudo subir, por favor intentelo de nuevo'));       
                }
                $this->redirect(array('action' => 'index'));
				return $this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Foto->Producto->find('list');
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
		if (!$this->Foto->exists($id)) {
			throw new NotFoundException(__('Invalid foto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash(__('The foto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foto.' . $this->Foto->primaryKey => $id));
			$this->request->data = $this->Foto->find('first', $options);
		}
		$productos = $this->Foto->Producto->find('list');
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
		$this->Foto->id = $id;
		if (!$this->Foto->exists()) {
			throw new NotFoundException(__('Invalid foto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Foto->delete()) {
			$this->Session->setFlash(__('The foto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
