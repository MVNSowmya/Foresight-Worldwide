<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE project";
if ($conn->query($sql) === TRUE) {
  //pass
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

//create tables
$con = mysqli_connect("localhost","root","","project");//All communication between PHP and the MySQL database server takes place through this connection.
// Check connection
if (mysqli_connect_errno())//The mysqli_connect_errno() function returns the error code from the last connection error, if any.
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
	$sql1 = "create table alg(questions varchar(50),potentialanswers varchar(50), opticneurtitis int(1), naaion int(1), aaion int(1), lhon int(1), compressive int(1), nutritionaltoxic int(1), papilloedema int(1), hereditary int(1), chiasmal int(1))";
	if ($con->query($sql1) === TRUE) {
  //pass
    } else {
    	echo "Error creating table: " . $con->error;
    }

    $sql2 = "create table dimUsers(userId int unique auto_increment, userName varchar(200), userPwd varchar(20), PhoneNo varchar(20) unique, emailid varchar(50) unique, isActive char(1), isDoctor char(1) , primary key (userId))";
  if ($con->query($sql2) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql3 = "create table dimuserdetails(userdetailsid int unique auto_increment, userid int, dateJoined date, isActiveSubscription char(1),BalanceAmount int, primary key (userdetailsid), foreign key (userid) references dimUsers(userId))";
  if ($con->query($sql3) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql4 = "create table dimusersubscription(usersubscriptionid int unique auto_increment, userid int, SubscriptionType varchar(20), SubscriptionActivationDate date, primary key (usersubscriptionid), foreign key (userid) references dimUsers(userId))";
  if ($con->query($sql4) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql4 = "create table dimSubscriptionDetails(usersubscriptiondetailsid int unique auto_increment, usersubscriptionid int, Datetime datetime, serviceaccessed varchar(20), countofservices int, costperservice int default 100, amountpaid int)";
  if ($con->query($sql4) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql5 = "create table invoice(branch_id varchar(255), dept_id varchar(255), acct_code varchar(255), acct_name varchar(255), party_id varchar(255), credit_period varchar(255), credit_limit varchar(255), outstanding varchar(255), osstatus varchar(255), party_name varchar(255), party_nickname varchar(255), salesperson_id varchar(255), salesperson varchar(255), voucher_type varchar(255), voucher_number varchar(255), voucher_date varchar(255), serial_no varchar(255),voucher_amount varchar(255), allocated varchar(255), inv_os varchar(255), rcpt_os varchar(255), os_amt varchar(255), os_days varchar(255), job_ref_no varchar(255), job_ref_date varchar(255), shipper_invoice varchar(255), po_number varchar(255), ageing varchar(255), ageing_grp varchar(255), ageing_dtl varchar(255))";
  if ($con->query($sql5) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql6 = "create table dimServicetype(servicetypeid int unique auto_increment, Servicetype varchar(20) unique,servicedescription varchar(200) unique, baseprice decimal unique, primary key (servicetypeid))";
  if ($con->query($sql6) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql7 = "create table dimdoctor(doctorid int unique auto_increment,doctorname varchar(100),speciality varchar(100),PhoneNo varchar(20),emailid varchar(100),hospital varchar(100),address varchar(1000),location varchar(100),pincode varchar(10),isActive char(1),isAdmin char(1), primary key (doctorid))";
  if ($con->query($sql7) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql8 = "create table factcalllog(calllogid int unique auto_increment,datetime datetime,userId int,technicianid int,doctorid int,starttime time,endtime time,numberofmins int,servicetypeid int, primary key (calllogid), foreign key (userId) references dimUsers(userId), foreign key (servicetypeid) references dimServicetype(servicetypeid))";
  if ($con->query($sql8) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }

    $sql9 = "create table factservicelog(servicelogid int unique auto_increment,servicetypeid int,userid int,technicianid int, primary key (servicelogid), foreign key (servicetypeid) references dimServicetype(servicetypeid), foreign key (userid) references dimUsers(userId), foreign key (technicianid) references factcalllog(technicianid))";
  if ($con->query($sql9) === TRUE) {
  //pass
    } else {
      echo "Error creating table: " . $con->error;
    }
    
}
$con->close();
?>