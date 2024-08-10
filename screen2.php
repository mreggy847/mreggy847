<?php
session_start();
if(isset($_SESSION['userid'])){
	header('location:screen6.php');
	exit();
}
$msg = null;
include'dbconfig.php';
if(isset($_POST['login'])){
	//submited user data
    $Fullname = $_POST['fullname'];
	$Email = $_POST['emailaddress'];
	$Password = $_POST['password'];
	if (empty($Fullname) && empty($Email)  && empty($Password)) {
		echo "provide all details";	

		// serch database records 
		$sql="SELECT * FROM `signuptbl` WHERE fullname ='$Fullname',emailaddress = $Email";
		$query = mysql_query($conn,$sql);

		//records found
		$count = mysquli_num_rows($query);
		if($count < 1){
			
			$msg = "<spanclass='danger'>no records found...</span>";
			echo "no records found";
		}else{
			// call records from database
			foreach ($query as $key => $userdata) {
				$userID = $userdata['id'];
				$username = $userdata['fullname'];
				$useremail = $userdata['email'];
				$userpass = $userdata['password'];
				}

				//compare password and verify
				if($useremail === $user_Email && $userpassword === $userpass){
					//$msg= "*<span class='success'>"."you signed in successfully.</span>";
					//store i sessions
					$_SESSION['username']= $userName;
					$_SESSION['userid'] = $userID;
					$_SESSION['useremail'] = $userEmail;

					header('location:screen6.php');
					exit();
				}else{
				$msg="<spanclass='danger'>Loginfailed.Please try again....</span>";


				}
				
		}
}

}

 ?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenith mind</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<img src="images/ZENITH.PNG" id="ges">
	<button id="sgn"><h3><b>Log in</b></h3></button>
	<div>
		<input id="jina" type="enter name" name="name"  placeholder="Enter name" maxlength="13px" required>
	</div>
	<div>
		<input id="ingia" type="password" name="password" placeholder="Enter password" maxlength="13px" required>
	</div>
	<a href="screen6.php">	<div>
		<input id="con" type="submit" name="confirm" name="confirm" placeholder="confirm">
	</div></a>

</body>
</html>
<style type="text/css">
	body{
		background-color: #962EFF;
	}
	#ges{
		width: 200px;
		height: 200px;
		margin-top: 15;
		margin-left: 45%;

	}
	#sgn{
		width: 200px;
		height: 40px;
		border-radius: 50px;
		border-color: black;
		text-align: center;
		margin-top: 1%;
		margin-left: 45%;
	}
	#jina{
		margin-top: 4%;
		margin-left: 45%;
		width: 200px;
		height: 30px;
		border-radius: 50px;
		text-align: center;
		border-color: red;

	}
	#ingia{
		width: 200px;
		height: 30px;
		border-radius: 50px;
		margin-top: 2%;
		margin-left: 45%;
		text-align: center;
		border-color: red;
	}
	#con{
		width: 150px;
		height: 30px;
		margin-top: 5%;
		margin-left: 47%;
		border-radius: 50px;
		border-color: red;
	}

	}
</style>