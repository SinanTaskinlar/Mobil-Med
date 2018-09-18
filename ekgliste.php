<?php
	include 'baglan.php';
	$herhangi2 = $_POST['ekgnumrv'];
	$herhangi1 = $_POST['insafsiz'];
	$b = "a";
	$sqlmfo = mysqli_query($conn, "SELECT * FROM olcum_tablo where id=".$herhangi1."");
	while($sqlmfofetched = mysqli_fetch_array($sqlmfo))
	{
		$mfo = $sqlmfofetched[1];
	}

	$sqlsonuc = mysqli_query($conn,"SELECT * FROM users INNER JOIN olcum_tablo ON users.id = olcum_tablo.userid INNER JOIN results ON results.olcum_id = olcum_tablo.id WHERE olcum_tablo.userid=".$mfo." AND olcum_tablo.id LIKE '%".$herhangi2."%'");
	$sqlsonucObject = array();
	while($sqlsonucfetched = mysqli_fetch_array($sqlsonuc))
	{
		$sqlsonucObj = new \stdClass();
		for($v=0; $v<20; $v++){
			$degisken = $b.$v;
			$sqlsonucObj->$degisken = $sqlsonucfetched[$v];
		}
		array_push($sqlsonucObject,$sqlsonucObj);
	}

	$sqlekglist= mysqli_query($conn,"SELECT * FROM olcum_tablo where userid=".$mfo." AND id LIKE '%".$herhangi2."%'");
	$sqlekgObject = array();
	while($sqlekglistfetched = mysqli_fetch_array($sqlekglist))
	{
		$sqlekgObj = new \stdClass();
		for($f=0; $f<8; $f++){
			$degisken = $b.$f;
			$sqlekgObj->$degisken = $sqlekglistfetched[$f];
		}
		array_push($sqlekgObject,$sqlekgObj);
	}
	$sqlObjectekgJason = new \stdClass();
	$sqlObjectekgJason->ekgliste = $sqlekgObject; 
	$sqlObjectekgJason->sonucliste = $sqlsonucObject;
	$mylisteJSON = json_encode($sqlObjectekgJason);
	echo $mylisteJSON;
?>