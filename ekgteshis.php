<?php
	include 'baglan.php';
	$teshisdata = $_POST["olcumid"];
	$sqlteshis = mysqli_query($conn,"SELECT * FROM results INNER JOIN olcum_tablo ON olcum_tablo.id = results.olcum_id WHERE olcum_tablo.id=".$teshisdata."");

	$sqlteshisObject = Array();
	$i=0;
	$a="a";
	while($sqlteshisfetch = mysqli_fetch_array($sqlteshis))
	{
		$sqlteshisObj = new \stdClass();
		for($c=0; $c<11; $c++){
			$degisken = $a.$c;
			$sqlteshisObj ->$degisken = $sqlteshisfetch[$c];
		}
		array_push($sqlteshisObject,$sqlteshisObj);
	}
	$sqlObjectteshisJason = new \stdClass();
	$sqlObjectteshisJason->teshisliste = $sqlteshisObject; 
	$myteshisJSON = json_encode($sqlObjectteshisJason);
	echo $myteshisJSON;
?>