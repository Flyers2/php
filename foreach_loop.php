<html style=color:green;text-align:center;>


<div style=vertical-align:middle;>
<?php

$items= array('knife','canteen','gun','puzzle');
	foreach($items as $in_use){
		echo "i am using a $in_use<br>";
	}
	
// foreach loop using associative array
$my_colors=array('car'=>'black',
				 'barn'=>'red',
				 'shirt'=>'white');
	

	foreach($my_colors as $item => $color){
		echo "my $item is a very nice $color<br>";
	}
?>
</div>
</html>