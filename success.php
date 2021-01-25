<?php
require('dbconnection.php');
session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". </h4>";

          $x = $_SESSION['userid'];
          $y = date("Y-m-d");
          $z = $_SESSION['subscription2'];
          $dt = date("Y-m-d h:i:sa");
          $c = $_SESSION['count']; 
          $amt = $_SESSION['amount'];
          $query1 = "select * from dimusersubscription where userid = '$x' and SubscriptionType = '$z'";
          $result1 = mysqli_query($con,$query1) or die(mysqli_error());
          $row = mysqli_num_rows($result1);
          if($row == 0){
                $query2 = "insert into dimusersubscription (userid,SubscriptionType,SubscriptionActivationDate) values('$x','$z','$y')";
                $result2 = mysqli_query($con,$query2) or die(mysqli_error()); 
          }
          else{
               $query3 = "update dimusersubscription set SubscriptionActivationDate = '$y' where userid = '$x' and SubscriptionType = '$z'";
               $result3 = mysqli_query($con,$query3) or die(mysqli_error());
          }
          $am = $_SESSION['balanceamount'] + $_SESSION['amount'];
          $query4 = "update dimuserdetails set isActiveSubscription = 'Y', BalanceAmount = '$am' where userid = '$x'";
          $result4 = mysqli_query($con,$query3) or die(mysqli_error());

          $query5 = "select usersubscriptionid from dimusersubscription where userid = '$x' and SubscriptionType = '$z'";
          $result5 = mysqli_query($con,$query5) or die(mysqli_error());
          while($rows =mysqli_fetch_assoc( $result5)){
                  $k = $rows['usersubscriptionid'];
          }
         $query6 = "insert into dimSubscriptionDetails (usersubscriptionid , Datetime , serviceaccessed , Countofservices , Costperservice , AmountPaid) values('$k','$dt','$z','$c',100,'$amt')";
         $result6 = mysqli_query($con,$query6) or die(mysqli_error());
          header("Location:localhost/projectfile/form.php");
		   }
?>	