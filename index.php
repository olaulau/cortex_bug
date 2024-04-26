<?php
require 'vendor/autoload.php';

$f3 = \Base::instance();

$db = new DB\SQL(
	'mysql:host=localhost;port=3306;dbname=cortex-bug',
	'cortex-bug', 'cortex-bug'
);
$f3->set("db", $db);

$a = new A;
$id_tested = 1;

// this works
$c1 = (new C)->find(["id = ?", $id_tested])[0];
// var_dump($c1->cast());
$b1 = $c1->bs[0];
// var_dump($b1->cast());
$a1 = $b1->a_id[0];
var_dump($a1->cast());

// this works
$sql = "
	SELECT		A.*
	FROM		A
	INNER JOIN	AB
		ON		AB.a_id = A.id
	INNER JOIN	B
		ON		AB.b_id = B.id
	INNER JOIN	C
		ON		B.c_id = C.id
	WHERE		C.id = ?
";
$as = $a->findByRawSQL($sql,[$id_tested])[0];
var_dump($as->cast());

// this doesn't work
$a->has("b_id.c_id", ["id = ?", $id_tested]);
$as = $a->find();
var_dump($as);
