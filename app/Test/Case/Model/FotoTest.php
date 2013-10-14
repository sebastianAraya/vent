<?php
App::uses('Foto', 'Model');

/**
 * Foto Test Case
 *
 */
class FotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foto',
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
		$this->Foto = ClassRegistry::init('Foto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foto);

		parent::tearDown();
	}

}
