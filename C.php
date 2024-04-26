<?php
use DB\Cortex;

class C extends Cortex {

	protected $db = "db";
	public $table = "C";
	
	protected $fieldConf = [
		'bs' => [
			'has-many' => [B::class, 'c_id'],
		],
	];
}
