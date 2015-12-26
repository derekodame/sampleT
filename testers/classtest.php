<?php
class Test{
public $cd;
public $d;
private $oo=2;
protected $wow=7;

public static $bb = "bod";

function  __ss(){
	
	$r = $this->oo+5;
	return $r ;
	}

function __gg(){
	
	return $this->__ss();
	}
}

$d = new Test;

/*echo $d->d="sorry page not found, <a href='http://www.stecks.bugs3.com'>click here</a> to be redirected to the homepage. glasia";*/
?>