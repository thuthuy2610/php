<?php 
	$username = $_POST["email"];
	$pass = $_POST["pass"];
	$result = ($username == "admin@gmail.com" && $pass == "123456")? "Đăng nhập thành công":"Đăng nhập thất bại";
	echo $result;
?>