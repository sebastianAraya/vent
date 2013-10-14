<?php
App::uses('Producto', 'Model');

/**
 * Producto Test Case
 *
 */
class ProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.producto',
		'app.categoria',
		'app.subcategoria',
		'app.categorias_producto',
		'app.solicitude',
		'app.productos_solicitude'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Producto = ClassRegistry::init('Producto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Producto);

		parent::tearDown();
	}

}
