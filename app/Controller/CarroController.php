<?php
App::uses('AppController', 'Controller');
class CarroController extends AppController {


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
        
		if($this->Session->check('Producto'))
        {
           $carroProductos = $this->Session->read('Producto');
        }
        else{
            $carroProductos = null;
        }
        $this->set('carrito',$carroProductos);
	}


	public function carrito_compra_add($id = null, $cantidad = 1)
        {
        if($this->Session->check('Producto'))
        {
           $carroProductos = $this->Session->read('Producto');
        }
        $this->id = $id;

        $carroProductos[$id] = $this->Producto->read(array
        ('Producto.id','Producto.nombre'));
        $produ= $this->Producto->find('first', array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id)));
        $carroProductos[$id]['cantidad'] = $cantidad;
        $carroProductos[$id]['producto'] = $produ;

        $this->Session->write('Producto',$carroProductos);
        $this->set('carrito',$carroProductos);
        return $this->redirect(array('controller'=>'carro','action' => 'index'));
    }

    public function carrito_compra_delete($id = null){
		if (!$id)
		{
		    $this->Session->setFlash('id Invalido');
		    $this->redirect(array('action'=>'carrito_compra'), null, true);
		}
		$productos = $this->Session->read('Producto');
		unset($productos[$id]);

		$this->Session->write('Producto',$productos);
        $this->set('carrito',$productos);
	    return $this->redirect(array('controller'=>'carro','action' => 'index'));
  
		//$this->render();
	}


}
