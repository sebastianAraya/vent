<?php
App::uses('AppController', 'Controller');


class ProductosController extends AppController {

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

	public function index($catego =null) {
		$this->Producto->recursive = 1;
		if($catego!=null){
			$this->paginate = array(
				'joins' =>
                   array(
                    array(
                        'table' => 'categorias_productos',
                        'alias' => 'categoriaProductos',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('categoriaProductos.producto_id = Producto.id',
                        	'categoriaProductos.categoria_id' => '1'
                        )
                    )
                  )
                ,'limit' => 9
			);
		}
		else{
			$this->paginate = array(
				'limit' => 9
			);
		}

		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('El producto ha sido creado'));
				return $this->redirect(array('action' => 'edit/'.$this->Producto->id.'/0'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		}
		$users = $this->Producto->User->find('list');
		$categorias = $this->Producto->Categoria->find('list');
		$solicitudes = $this->Producto->Solicitude->find('list');
		$this->set(compact('users', 'categorias', 'solicitudes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $tipo=1) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if($this->data['Foto'] != null){
				$this->Producto->Foto->create();
				$destino = WWW_ROOT.'files'.DS;
				$rand= rand(1,100000000);
				if(move_uploaded_file($this->data['Foto']['foto']['tmp_name'], $destino.$rand."_".$this->data['Foto']['foto']['name']) ){  
					$this->request->data['Foto']['imagen'] = $rand."_".$this->data['Foto']['foto']['name'] ; 
					$this->request->data['Foto']['producto_id'] = $id;   
					if ($this->Producto->Foto->save($this->request->data)) {
						$this->Session->setFlash(__('El archivo se a guardado'));
					} else {
						$this->Session->setFlash(__('Problemas al subir el archivo'));
					}
		           	return $this->redirect(array('action' => 'edit/'.$id.'/0'));
		        }
		        else{
		           	$this->Session->setFlash(__('El archivo no se pudo subir, intente nuevamente'));       
		       		return $this->redirect(array('action' => 'index'));
		        }
			}
			else{
				if ($this->Producto->save($this->request->data)) {
					$this->Session->setFlash(__('Se ha actualizado el producto.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('El producto no se puede editar, intente nuevamente.'));
				} 
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$users = $this->Producto->User->find('list');
		$categorias = $this->Producto->Categoria->find('list');
		$solicitudes = $this->Producto->Solicitude->find('list');

		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
		
		$this->set(compact('users', 'categorias', 'solicitudes','tipo'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Producto invalido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('El producto fue eliminado'));
		} else {
			$this->Session->setFlash(__('ERROR: El producto no fue eliminado. Intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
