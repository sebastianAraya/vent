<?php
App::uses('CategoriasProducto', 'Model');

/**
 * CategoriasProducto Test Case
 *
 */
class CategoriasProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categorias_producto',
		'app.categoria',
		'app.subcategoria',
		'app.producto',
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
		$this->CategoriasProducto = ClassRegistry::init('CategoriasProducto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriasProducto);

		parent::tearDown();
	}

}
