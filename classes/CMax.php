<?php

class CMax {

public $maxvalue;
public $maxarray = [];

public function __construct($arr) {

	foreach ($arr as $key => $value) {
		$maxarray[$key] = $value;
	}
	$this->maxvalue = $this->GetMax($maxarray);
	echo "MAXVALCONSTRUC = $this->maxvalue";
}

public function ShowMax() {
	echo $this->maxvalue;
}

public static function GetMax($arr) {
	if (isset($arr)) {
		$max = $arr[0];
		foreach ($arr as $key => $value) {
		if ($value > $max) {
			$max = $value;
			}
		};
		return $max;
	} else echo "GetMax function - Argument is not given!";
  }
}


?>