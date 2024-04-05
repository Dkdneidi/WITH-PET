<?php
	$con=mysqli_connnect("localhost", "root", "1234") or die("MariaDB 접속 실패");
	phpinfo()_;
	mysql_close($con);
?>