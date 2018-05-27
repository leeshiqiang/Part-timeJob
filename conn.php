<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpwd="root";
	$dbname="parttime";
	$conn=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("连接数据库服务器失败！".mysql_error());
	mysqli_query($conn, "set names utf8");
?>