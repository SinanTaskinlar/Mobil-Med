	<?php
		$servername = "localhost";
		$username = "root";
		$pass = "";
		$dbName = "mobilmeddb";
		$conn = new mysqli($servername,$username,$pass,$dbName);
		if(!$conn)
		{
			die("Bağlantı hatası!" . $conn->connect_error);
		}
	?>