<?php

class CMin {

public $minvalue;
public $minarray = [];

public function __construct($arr) {
	$i=0;
	foreach ($arr as $key => $value) {
		$minarray[$i] = $value;
		$i+=1;
	}
		$this->minvalue = $this->GetMin($minarray);

	echo "MINVALCONSTRUC = $this->minvalue";
}

public function ShowMin() {
	echo $this->minvalue;
}

public static function GetMin($arr) {
	$i=0;
	foreach ($arr as $key => $value) {
		$minarray[$i] = $value;
		$i+=1;
	}
	if (isset($minarray)) {
		$min = $minarray[0];
		foreach ($minarray as $key => $value) {
		if ($value < $min) {
			$min = $value;
			}
		};
	
		return $min;
	} else echo "GetMin function - Argument is not given!";
  }
}


?>