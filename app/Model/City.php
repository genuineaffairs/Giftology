<?php
App::uses('AppModel', 'Model');
/**
 * CitySegment Model
 *
 * @property Product $Product
 */
class City extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'city';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	/*public $hasMany = array(
		'Product' => array(
			'className' => 'City',
			'foreignKey' => '',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);*/

}
