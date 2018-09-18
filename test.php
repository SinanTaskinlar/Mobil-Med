<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'baglan.php';
		$no = 1;
		$sql = mysqli_query($conn,"SELECT * FROM olcum_tablo INNER JOIN results ON olcum_tablo.id = results.olcum_id");
	?>
</body>
</html>