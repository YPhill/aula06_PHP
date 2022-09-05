<?php 

$sal = 15000;
$inss = 0;
$sall = 0;
if ($sal < 1100) {
	$inss = $sal * (7.5/100);
	$sall = $sal - $inss;

	echo $inss."</br>";
	echo $sall;
}
elseif ($sal > 1100.01 && $sal <2203.48) {
		$inss = $sal * (9/100);
		$sall = $sal - $inss;

		echo $inss."</br>";
		echo $sall;
}
elseif ($sal > 2203.49 && $sal <3305.22) {
		$inss = $sal * (12/100);
		$sall = $sal - $inss;

		echo $inss."</br>";
		echo $sall;
}
elseif ($sal > 3305.23 && $sal <6433.57) {
		$inss = $sal * (14/100);
		$sall = $sal - $inss;

		echo $inss."</br>";
		echo $sall;
}
else {
	$sall = $sal - 751.97;
	echo $sall;
}
 ?>
