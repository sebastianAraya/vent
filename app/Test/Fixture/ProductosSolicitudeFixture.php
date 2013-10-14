<?php
/**
 * ProductosSolicitudeFixture
 *
 */
class ProductosSolicitudeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'solicitude_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('solicitude_id', 'producto_id'), 'unique' => 1),
			'fk_relationship_2' => array('column' => 'producto_id', 'unique' => 0)
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
			'solicitude_id' => 1,
			'producto_id' => 1
		),
	);

}
