<?php
App::uses('Solicitude', 'Model');

/**
 * Solicitude Test Case
 *
 */
class SolicitudeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitude',
		'app.producto',
		'app.categoria',
		'app.subcategoria',
		'app.categorias_producto',
		'app.productos_solicitude'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Solicitude = ClassRegistry::init('Solicitude');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Solicitude);

		parent::tearDown();
	}

}
