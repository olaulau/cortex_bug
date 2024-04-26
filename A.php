<?php
use DB\Cortex;

class A extends Cortex {

	protected $db = "db";
	public $table = "A";
	
	protected $fieldConf = [
		'b_id' => [ // can't rename that virtual field
			'has-many' => [B::class, 'a_id', "AB"]
		],
	];
}
