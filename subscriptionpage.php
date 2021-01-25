<?php
require('dbconnection.php');
session_start();
if(isset($_REQUEST['submit'])){
	$subscriptionpackage = $_REQUEST['subscriptionpackage'];
	$numberofconsultations1 = $_REQUEST['numberofconsultations1'];
	$numberofconsultations2 = $_REQUEST['numberofconsultations2'];
	$_SESSION['count'] = $numberofconsultations1 + $numberofconsultations2;
	$price1 = $numberofconsultations1 * 100;
	$price2 = $numberofconsultations2 * 100;
	if($subscriptionpackage == 'Video Consultation'){
		$amount = $price1;
		$_SESSION['subscription2'] = 'Video Consultation';
	}
	elseif ($subscriptionpackage == 'AI Consultation') {
		$amount = $price2;
		$_SESSION['subscription2'] = 'AI Consultation';
	}
	else{
		$amount = $price1 + $price2;
		$_SESSION['subscription2'] = 'Video Consultation and AI Consultation';
	}
//	if(isset($_REQUEST['coupon'])){}
	$_SESSION['amount'] = $amount;
	header("Location:PayUMoney_form.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subscription</title>
	<style type="text/css">
		h1,h3{
			color:rgb(15,82,186);
			text-align: center;
		}
		body{
			font-family: sans-serif;
		}
		.subscription{
			margin-left: 75px;
		}
		input{
			margin: 10px;
			padding: 10px;
		}
		#input1,#input2,#coupon{
            border-radius: 5px;
		}
		#vcprice,#aicprice{
			border:none;
			border-bottom: 1px solid blue;
		}
		button{
			background-color: blue;
			width:15%;
			height: 50px;
			color: white;
			font-size: 18px;
			border-radius: 6px;
			border-color: grey;
			margin-right: 10px;
		}
		#form{
			border:1px solid grey;
			padding: 10px;
			width: 60%;
			margin-left: 240px;
			border-radius: 10px;
			box-shadow: 1px 1px 1px 1px;
		}
		button:hover{
			background-color: white;
			color: rgb(15,82,186);
			border-color: rgb(15,82,186);
		}
	</style>
	<script type="text/javascript">
            function vc(){
            	document.getElementById("input1").disabled = false;
            	document.getElementById("input2").disabled = true;
            	document.getElementById("vcprice").disabled = false;
            	document.getElementById("aicprice").disabled = true;
            }
            function aic(){
            	document.getElementById("input2").disabled = false;
            	document.getElementById("input1").disabled = true;
            	document.getElementById("aicprice").disabled = false;
            	document.getElementById("vcprice").disabled = true;
            }
            function both() {
    	        document.getElementById("input1").disabled = false;
                document.getElementById("input2").disabled = false;
                document.getElementById("vcprice").disabled = false;
            	document.getElementById("aicprice").disabled = false;
            }
            function pricevc(){
            	document.getElementById("vcprice").value = document.getElementById("input1").value * 100;
            }
            function priceaic(){
            	document.getElementById("aicprice").value = document.getElementById("input2").value * 100;
            }
	</script>
</head>
<body>
<h1>Subscription</h1>
<h3><i>Foresight Worldwide</i></h3>
<p>Welcome <?php echo $_SESSION['name']; ?> <br><br><i style="font-size: 14px;"> Subscribe to us and get your consultations done.</i> <br><br> 
<div id="form">
Select your subscription package -</p>
<form method="post" id="subscription" class="subscription">
	<input type="radio" name="subscriptionpackage" id="videoconsultation" value="Video Consultation" onclick="vc()">Video Consultation
	<input type="number" name="numberofconsultations1" id="input1" placeholder="Enter no. of consultations" disabled>
	<input type="number" name="price1" id="vcprice" onclick="pricevc()" placeholder="Click here to get Amount" disabled>
	<br>
	<input type="radio" name="subscriptionpackage" value="AI Consultation" onclick="aic()">AI Consultation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="number" name="numberofconsultations2" id="input2" placeholder="Enter no. of consultations" disabled>
	<input type="number" name="price2" id="aicprice" onclick="priceaic()" placeholder="Amount" disabled>
	<br>
	<input type="radio" name="subscriptionpackage" value="Both" onclick="both()">Both
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Discount Coupon <input type="text" name="coupon" id="coupon" value=""><br><br><br>
	<button type="submit" name="submit" value="submit">Submit</button>
	<button value="cancel" name="cancel">Cancel</button>
	<button type="reset" name="reset" value="reset" onclick="document.location = 'subscriptionpage.php'">Reset</button>
</form>
</div>
</body>
</html>