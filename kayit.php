<?php
	$herhangi = $_POST['emre'];
	include "baglan.php";
	$sql = mysqli_query($conn,"SELECT * FROM olcum_tablo where userid=".$herhangi."");
	$sqlisim = mysqli_query($conn,"SELECT adi_soyadi,mail FROM users where id=".$herhangi."");

	$sqlsonuc = mysqli_query($conn,"SELECT * FROM users INNER JOIN olcum_tablo ON users.id = olcum_tablo.userid INNER JOIN results ON results.olcum_id = olcum_tablo.id WHERE users.id = ".$herhangi."");
	$sqlsonucObject = array();
	$i = 0;
	$d = 0;
	$e = "a";
	$b = "a";
	while($sqlsonucfetched = mysqli_fetch_array($sqlsonuc))
	{
		$sqlsonucObj = new \stdClass();
		for($v=0; $v<20; $v++){
			$degisken = $e.$v;
			$sqlsonucObj->$degisken = $sqlsonucfetched[$v];
		}
		array_push($sqlsonucObject,$sqlsonucObj);
	}

	$sqlObject = array();
	$sqlisimObject = array();
	while($sqlfetched = mysqli_fetch_array($sql))
	{
		$sqlObj = new \stdClass();
		$degisken2 = $i;
		for($c = 0; $c < 8; $c++)
		{
			$degisken = $b.$c;
			$sqlObj-> $degisken = $sqlfetched[$c];
		}
		array_push($sqlObject,$sqlObj);
		$i++;
	}
	$sqlObjectJason = new \stdClass();
	$sqlObjectJason->liste = $sqlObject; 
	while($sqlisimfetched = mysqli_fetch_array($sqlisim))
	{
		$sqlisimObj = new \stdClass();
		$degiskenisim2 = $d;
		for($f = 0; $f < 2; $f++)
		{
			$degiskenisim = $e.$f;
			$sqlisimObj-> $degiskenisim = $sqlisimfetched[$f]; 
		}
		array_push($sqlisimObject,$sqlisimObj);
		$d++;
	}
	$sqlObjectJason->listeisim = $sqlisimObject;
	$sqlObjectJason->listesonuc = $sqlsonucObject;
	$myJSON = json_encode($sqlObjectJason);
	echo $myJSON;
?>