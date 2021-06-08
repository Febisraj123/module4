<?php
$dbconnect = mysqli_connect("localhost", "feba", "feba", "chic");
if (mysqli_connect_errno()) {
	echo "Connection failed:" . mysqli_connect_error();
	exit;
}
 