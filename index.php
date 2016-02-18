<?php

include __DIR__.'/views/header.php';
require __DIR__.'/autoload.php';

$numarray = [ ];

if(isset($_POST['send']))  {
   foreach ($_POST as $key => $value) {
          // Можно использовать регулярные выражение, но я буду использовать ctype_digit
          // if (!preg_match("/[^0-9]/", strval($value))) {
          // 	$numarray[$key]=$value;
          // }
          if (is_numeric($value)) {
               $numarray[$key]=$value;
              }
        }
 }

echo '<br>';
echo "Here is your numbers: ";
foreach ($numarray as $key=>$value) {
	echo "  $value";
}
echo '<br>';
$max = new CMax($numarray);

echo "<br>";
echo "Figure 1 call method GetMax from class =  ";
echo $max->GetMax($numarray);
echo '<br>';
echo "Figure 2 call static GetMax from class =  ";
echo CMax::GetMax($numarray);
echo '<br>';
echo 'Figure 3 get MaxValue from CMax  class =  ';
echo $max->maxvalue;
echo '<br>';
echo '<br>';
$min = new CMin($numarray);
echo "<br>";
echo "Figure 1 call method GetMin from class =  ";
echo $min->GetMin($numarray);
echo '<br>';
echo "Figure 2 call static GetMin from class =  ";
echo CMin::GetMin($numarray);
echo '<br>';
echo 'Figure 3 get MinValue from CMin  class =  ';
echo $min->minvalue;

include __DIR__.'/views/footer.php';
?>