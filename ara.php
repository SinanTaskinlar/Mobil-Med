	<?php 
		include "baglan.php";
		$aranan = $_POST["aranankisiData"];
		$arasql = mysqli_query($conn,"SELECT * FROM users WHERE adi_soyadi LIKE '%".$aranan."%'");
	    $i = 0;
	    $a = "a";
	    $sqlaraObject = Array();
	    while($arasqlfetch = mysqli_fetch_array($arasql))
	    {
	    	$sqlaraObj = new \stdClass();
	    	for($s = 0; $s < 9; $s++)
	    	{
	    		$degisken = $a.$s;
	    		$sqlaraObj -> $degisken = $arasqlfetch[$s];
	    	}
	    	if($i%2==0){
	    		$renk = "kisilistebg2";
	    	}else{
	    		$renk = "kisilistebg1";
	    	}
	    	$yas = "2018-1-1" - $arasqlfetch[4];
	    	$sqlaraObj->b1 = $yas;		    
	    	$sqlaraObj->b2 = $renk;
	    	array_push($sqlaraObject,$sqlaraObj);
	    	$i++;
		}
		$sqlaraJasonObject = new \stdClass();
		$sqlaraJasonObject->arananliste = $sqlaraObject;
		$myaraJSON = json_encode($sqlaraJasonObject);
		echo $myaraJSON;
 	?>