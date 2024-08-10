<?php
if (isset($_POST['confirm'])) {
	$Fullname = $_POST['fullname'];
	$Email = $_POST['emailaddress'];
	$Phone = $_POST['phonenumber'];
	$Password = $_POST['password'];
	$Region = $_POST['region'];

	//start db connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "zenithminddb";

	//check connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	 //check connection
	if (!$conn) {
		die("connection failed:" .mysqli_connect_error());
	}else{
		echo "success";
	}
	 //end db
	if (empty($Fullname) && empty($Email) && empty($Phone) && empty($Password) && empty($Region)) {
		echo "provide details";
	}else{
		$sql = "INSERT INTO `signuptbl`(`fullname`, `emailaddress`, `phonenumber`, `region`, `password`) VALUES ('$Fullname','$Email','$Phone','$Region','$Password')";
		if (mysqli_query($conn,$sql) == true ) {
			header("location:screen6.php");
		}else{
			echo "oops";
		}
	}
}//else{
		//echo "submit";
	//}
  ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith mind</title>
</head>
<body>
<img src="images/ZENITH.PNG" style="width: 200px; height: 200px; margin-top: 15px; text-align: center;">
<form action="" method="POST">
	
<label><input type="text" name="fullname" placeholder="fullname"  id="nam"></label>
<br>

<label><input type="email" name="emailaddress" placeholder="emailaddress" id="ema" ></label>
<br>

<label><input type="tell" name="phonenumber" placeholder="phonenumber" id="tell" ></label>
<br>

<label><input type="password" name="password" placeholder="password" id="pass" ></label>
<br>

<label><input type="text" name="region" placeholder="region" id="reg" ></label>
<br>
<a href="screen6.php">
<input type="submit" name="confirm" value ="submit"
id="sub"></a>
</form>
</body>
<style type="text/css">
	body{
		background-color: #962EFF;
		text-align: center;
	}
	#nam{
		width: 270px;
		height: 40px;
		border-radius: 50px;
		margin-top: 4%;
		text-align: center;
		border-color: red;
	}
	#reg{
		width: 270px;
		height: 40px;
		border-radius: 50px;
		margin-top: 4%;
		text-align: center;
		border-color: red;
	}
	#ema{
		width: 270px;
		height: 40px;
		border-radius: 50px;
		margin-top: 4%;
		text-align: center;
		border-color: red;
	}
	#tell{
		width: 270px;
		height: 40px;
		border-radius: 50px;
		margin-top: 4%;
		text-align: center;
		border-color: red;
	}
	#sub{
		width: 100px;
		height: 30px;
		border-radius: 50px;
		margin-top: 4%;
		text-align: center;
		border-color: red;
	}
	#pass{
		width: 270px;
		height: 30px;
		border-radius: 50px;
		margin-top: 4%;
		text-align: center;
		border-color: red;
	}
</style>
</html>