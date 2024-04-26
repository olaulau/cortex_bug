<?php
use DB\Cortex;

class B extends Cortex {

	protected $db = "db";
	public $table = "B";
	
	protected $fieldConf = [
		'a_id' => [ // can't rename that virtual field
			'has-many' => [A::class, 'b_id', "AB"],
		],

		'c_id' => [
			'belongs-to-one' => C::class,
		],
	];
}
