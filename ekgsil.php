<?php
	include "baglan.php";
	$silinenno=$_POST['ekgnomData'];
	$silsql = mysqli_query($conn,"DELETE FROM olcum_tablo WHERE id=".$silinenno."");
	$silsonucsql = mysqli_query($conn,"DELETE FROM results WHERE olcum_id=".$silinenno."");
?>