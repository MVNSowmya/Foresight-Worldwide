<?php
require('dbconnection.php');
session_start();
if(isset($_REQUEST['signup'])){
	$name = $_REQUEST['name1'];
	$email = $_REQUEST['email1'];
	$password = $_REQUEST['password1'];
	$phone = $_REQUEST['phoneno1'];
	$query1 = "SELECT * FROM dimUsers where emailid='$email' or PhoneNo='$phone'";
	$result1 = mysqli_query($con,$query1) or die(mysqli_error());
    $row = mysqli_num_rows($result1);

        if($row==0)
        {
            $addquery1="insert into dimUsers (userName,userPwd,PhoneNo,emailid,isActive) values ('$name','$password','$phone','$email','Y')";
            $addresult1=mysqli_query($con,$addquery1);
            $_SESSION['name'] = $name;
            $_SESSION['email']=$email;   
            $_SESSION['phoneno'] = $phone; 
            $query3 = "select * from dimUsers where userName = '$name' and emailid = '$email' and PhoneNo = '$phone'";
            $result3 = mysqli_query($con,$query3) or die(mysqli_error());
            while( $rows = mysqli_fetch_assoc( $result3 ) ){
            	$_SESSION['userid'] = $rows['userId'];
            }
            $x = $_SESSION['userid'];
            $y = date("Y-m-d");
            $query4 = "insert into dimuserdetails (userid,dateJoined,isActiveSubscription,BalanceAmount) values('$x','$y','N',0)";
            $result4 = mysqli_query($con,$query4) or die(mysqli_error());
            echo '<script>alert("Registration Successful");</script>';
            header("Location:subscriptionpage.php");
        }
else{echo '<script>alert("User Already Registered!");</script>';}
}
if(isset($_REQUEST['signin'])){
	$email = $_REQUEST['email2'];
	$password = $_REQUEST['password2'];
	$query2 = "SELECT * FROM dimUsers where emailid='$email' and userPwd='$password'";
	$result2 = mysqli_query($con,$query2) or die(mysqli_error());
    $rows = mysqli_num_rows($result2);
    if($rows == 1){
    	while( $rows =mysqli_fetch_assoc( $result2 ) ){
        	    $_SESSION['name'] = $rows['userName'];
                $_SESSION['email']=$email;   
                $_SESSION['phoneno'] = $rows['PhoneNo'];
                $_SESSION['userid'] = $rows['userId'];
                $id = $_SESSION['userid'];
                $q = "update dimUsers set isActive = 'Y' where userId = '$id'";
                $r = mysqli_query($con,$q) or die(mysqli_error($con));
                $q1 = "select * from dimusersubscription where userid = '$id'";
                $r1 = mysqli_query($con,$q1) or die(mysqli_error());
                while( $rows = mysqli_fetch_assoc( $r1 ) ){
            	$_SESSION['subscription1'] = $rows['SubscriptionType'];
            	$_SESSION['usersubscriptionid'] = $rows['usersubscriptionid'];
            }
                $q2 = "select BalanceAmount from dimuserdetails where userid = '$id'";
                $r2 = mysqli_query($con,$q2) or die(mysqli_error());
                while( $rows = mysqli_fetch_assoc( $r2 ) ){
            	$_SESSION['balanceamount'] = $rows['BalanceAmount'];
            }
	       }
	       if($_SESSION['balanceamount'] <= 200){
	       	echo "<script>
                  
                  	if(confirm('Your balance seems to be low. Would you like to subscribe?') == true){
                  		window.location.replace('subscriptionpage.php');

                  	}
                  	else{
                  		window.location.replace('form.php');
                  	}
                  	
	       	</script>";
    }
}
    else {
	                    echo '<script>alert("Login Credentials are incorrect!");</script>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="#" method="post">
	<img src=image1.jpg style="width:20%;height: 10%;padding-top: -5px;">
	<h3 style="color: #0f52ba;">FORESIGHT WORLDWIDE</h3>
	<h1>Create Account</h1>
	<span>Use your email for registration</span>
	<input type="text" name="name1" placeholder="Name" required>
	<input type="text" name="phoneno1" placeholder="Phone Number" required>
	<input type="email" name="email1" placeholder="Email" required>
	<!--<input type="number" name="phone1"  placeholder="Mobile Number" required style="width: 70%;margin-right:85px; ">
	<input type="button" name="sendotp"  value="Send OTP" style="padding:2px;height:5%;font-size:10px;width: 22%;background-color: white;color: black;margin-top: -35px;margin-left:220px;border:none;color: blue;"><br><br>
	<input type="text" name="otp1" placeholder="Enter OTP" required style="width: 70%;margin-right:85px;margin-top: -25px;">
	<input type="button" name="verifyotp" value="Verify OTP" style="padding:2px;height:5%;font-size:10px;width: 25%;background-color: white;color: black;margin-top: -35px;margin-left:220px;border:none;color: blue;"><br>-->
	<input type="password" name="password1" placeholder="Password" required>
	<br>
	<button name="signup">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="#" method="post">
		<img src=image1.jpg style="width:20%;height: 10%;padding-top: -5px;">
	<h3 style="color: #0f52ba;">FORESIGHT WORLDWIDE</h3>
		<h1>Sign In</h1><br>
	<span>Use your account</span>
	<input type="email" name="email2" placeholder="Email" required>
	<input type="password" name="password2" placeholder="Password" required><br>

	<button name="signin">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Don't have an account?</h1>
			<p>Enter your details</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});

</script>

</body>
</html>








