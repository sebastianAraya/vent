<?php
/**
 * CategoriasProductoFixture
 *
 */
class CategoriasProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('producto_id', 'categoria_id'), 'unique' => 1),
			'fk_relationship_4' => array('column' => 'categoria_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'producto_id' => 1,
			'categoria_id' => 1
		),
	);

}
