<?php
session_start();
$MERCHANT_KEY = "rjQUPktU";
$SALT = "e5iIg1jwi8";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://test.payu.in";    // For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <style type="text/css">
  	.parameters{
  		text-align: center;
  	}
  	h2{
  		text-align: center;
  		color: rgb(15,82,186);
  	}
  	h4{
  		color: red;
  	}
  	mark.red{
  		color: red;
  		background-color: white;
  	}
  	input{
  		margin: 10px;
  		border:none;
  		border-bottom: 1px solid black;
  		height: 20px;
  		padding: 10px;
  	}
  	input:focus{
  		outline: 1px solid grey;
  	}
  	[type=submit]{
  		border: 1px solid rgb(15,82,186); 
  border-radius: 3%;
  color: rgb(15,82,186);
  height:40px;
  width: 20%;
  cursor: pointer;
  float: center;
  font-size: 20px;
  	}
  	[type=submit]:hover{
  		color: rgb(126,184,194);
		border-color: rgb(126,184,194);
  	}
     
  </style>
  </head>
  <body onload="submitPayuForm()">
    <h2>PayU Form</h2>
	  <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="surl" value="C:\wamp64\www\projectfile\success.php"/>
      <input type="hidden" name="furl" value="C:\wamp64\www\projectfile\failure.php"/>
      <input type="hidden" name="curl" value="" />
      <input type="hidden" name="service_provider" value="payu_paisa"/>
      <h4>* mark are mandatory</h4>
      <div class="parameters">
      	First Name <mark class="red">&#42;</mark> : <input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"/>
      	Last Name  : <input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>"/><br>
      	Email <mark class="red">&#42;</mark> : <input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>"/><br>
      	Phone <mark class="red">&#42;</mark> : <input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>"/><br>
      	Subscription Pack <mark class="red">&#42;</mark> : <input name="productinfo" id="productinfo" value="<?php echo $_SESSION['subscription2']; ?>"/><br>
        Amount <mark class="red">&#42;</mark> : <input name="amount" value="<?php echo $_SESSION['amount']; ?>" /><br>
      	Address 1 : <input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>"/>
      	Address2 : <input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>"/><br>
      	City : <input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>"/><br>
      	State : <input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>"/><br>
      	Country : <input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>"/><br>
      	Pincode : <input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>"/><br>
      	<input type="hidden" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>"/>
      	<input type="hidden" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>"/>
      	<input type="hidden" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>"/>
      	<input type="hidden" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>"/>
      	<input type="hidden" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>"/>
      	<input type="hidden" name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>"/><br><br>
        <?php if(!$hash) { ?>
      	<input type="submit" name="submit" value="Submit" />
        <?php } ?>
      </div>
     
    </form>
  </body>
</html>
