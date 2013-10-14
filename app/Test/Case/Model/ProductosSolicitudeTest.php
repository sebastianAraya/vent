<?php
App::uses('ProductosSolicitude', 'Model');

/**
 * ProductosSolicitude Test Case
 *
 */
class ProductosSolicitudeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productos_solicitude',
		'app.producto',
		'app.categoria',
		'app.subcategoria',
		'app.categorias_producto',
		'app.solicitude'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductosSolicitude = ClassRegistry::init('ProductosSolicitude');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductosSolicitude);

		parent::tearDown();
	}

}
