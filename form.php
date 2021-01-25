<?php
require('dbconnection.php');
if(isset($_REQUEST['submit'])){
	
	if(isset($_REQUEST['age'])){
		$age1 = $_REQUEST['age'];
		$agequery = "select * from alg where questions='age' and potentialanswers='$age1'";
        $ageresultSet = mysqli_query($con,$agequery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['sex'])){
		$sex1 = $_REQUEST['sex'];
		$sexquery = "select * from alg where questions='sex' and potentialanswers='$sex1'";
        $sexresultSet = mysqli_query($con,$sexquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['laterality'])){
		$laterality1 = $_REQUEST['laterality'];
		$lateralityquery = "select * from alg where questions='laterality' and potentialanswers='$laterality1'";
        $lateralityresultSet = mysqli_query($con,$lateralityquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['onset'])){
		$onset1 = $_REQUEST['onset'];
		$onsetquery = "select * from alg where questions='onset' and potentialanswers='$onset1'";
        $onsetresultSet = mysqli_query($con,$onsetquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['progression'])){
		$progression1 = $_REQUEST['progression'];
		$progressionquery = "select * from alg where questions='progression' and potentialanswers='$progression1'";
        $progressionresultSet = mysqli_query($con,$progressionquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['pain'])){
		$pain1 = $_REQUEST['pain'];
		$painquery = "select * from alg where questions='pain around the eye' and potentialanswers='$pain1'";
        $painresultSet = mysqli_query($con,$painquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['headache'])){
		$headache1 = $_REQUEST['headache'];
		$headachequery = "select * from alg where questions='headache' and potentialanswers='$headache1'";
        $headacheresultSet = mysqli_query($con,$headachequery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['disc'])){
		$disc1 = $_REQUEST['disc'];
		$discquery = "select * from alg where questions='disc' and potentialanswers='$disc1'";
        $discresultSet = mysqli_query($con,$discquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['rapd'])){
		$rapd1 = $_REQUEST['rapd'];
		$rapdquery = "select * from alg where questions='rapd' and potentialanswers='$rapd1'";
        $rapdresultSet = mysqli_query($con,$rapdquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['colorvision'])){
		$colorvision1 = $_REQUEST['colorvision'];
		$colorvisionquery = "select * from alg where questions='color vision loss' and potentialanswers='$colorvision1'";
        $colorvisionresultSet = mysqli_query($con,$colorvisionquery) or die(mysqli_error($con));
	}
	if(isset($_REQUEST['fields'])){
		$fields1 = $_REQUEST['fields'];
		$fieldsquery = "select * from alg where questions='fields' and potentialanswers='$fields1'";
        $fieldsresultSet = mysqli_query($con,$fieldsquery) or die(mysqli_error($con));
	}
	
	
              while($rows = $ageresultSet->fetch_assoc()){
              $opticneurtitis1 = $rows['opticneurtitis'];
              $naaion1 = $rows['naaion'];
              $aaion1 = $rows['aaion'];
              $lhon1 = $rows['lhon'];
              $compressive1 = $rows['compressive'];
              $nutritional1 = $rows['nutritionaltoxic'];
              $papilloedema1 = $rows['papilloedema'];
              $hereditary1 = $rows['hereditary'];
              $chiasmal1 = $rows['chiasmal'];
              
            }
          
              while($rows = $sexresultSet->fetch_assoc()){
              $opticneurtitis2 = $rows['opticneurtitis'];
              $naaion2 = $rows['naaion'];
              $aaion2 = $rows['aaion'];
              $lhon2 = $rows['lhon'];
              $compressive2 = $rows['compressive'];
              $nutritional2 = $rows['nutritionaltoxic'];
              $papilloedema2 = $rows['papilloedema'];
              $hereditary2 = $rows['hereditary'];
              $chiasmal2 = $rows['chiasmal'];
              
            }
            while($rows = $lateralityresultSet->fetch_assoc()){
              $opticneurtitis4 = $rows['opticneurtitis'];
              $naaion4 = $rows['naaion'];
              $aaion4 = $rows['aaion'];
              $lhon4 = $rows['lhon'];
              $compressive4 = $rows['compressive'];
              $nutritional4 = $rows['nutritionaltoxic'];
              $papilloedema4 = $rows['papilloedema'];
              $hereditary4 = $rows['hereditary'];
              $chiasmal4 = $rows['chiasmal'];
              
            }
         
              while($rows = $onsetresultSet->fetch_assoc()){
              $opticneurtitis5 = $rows['opticneurtitis'];
              $naaion5 = $rows['naaion'];
              $aaion5 = $rows['aaion'];
              $lhon5 = $rows['lhon'];
              $compressive5 = $rows['compressive'];
              $nutritional5 = $rows['nutritionaltoxic'];
              $papilloedema5 = $rows['papilloedema'];
              $hereditary5 = $rows['hereditary'];
              $chiasmal5 = $rows['chiasmal'];
              
            }
          
              while($rows = $progressionresultSet->fetch_assoc()){
              $opticneurtitis6 = $rows['opticneurtitis'];
              $naaion6 = $rows['naaion'];
              $aaion6 = $rows['aaion'];
              $lhon6 = $rows['lhon'];
              $compressive6 = $rows['compressive'];
              $nutritional6 = $rows['nutritionaltoxic'];
              $papilloedema6 = $rows['papilloedema'];
              $hereditary6 = $rows['hereditary'];
              $chiasmal6 = $rows['chiasmal'];
              
            }
         
              while($rows = $painresultSet->fetch_assoc()){
              $opticneurtitis7 = $rows['opticneurtitis'];
              $naaion7 = $rows['naaion'];
              $aaion7 = $rows['aaion'];
              $lhon7 = $rows['lhon'];
              $compressive7 = $rows['compressive'];
              $nutritional7 = $rows['nutritionaltoxic'];
              $papilloedema7 = $rows['papilloedema'];
              $hereditary7 = $rows['hereditary'];
              $chiasmal7 = $rows['chiasmal'];
              
            }
          
              while($rows = $headacheresultSet->fetch_assoc()){
              $opticneurtitis8 = $rows['opticneurtitis'];
              $naaion8 = $rows['naaion'];
              $aaion8 = $rows['aaion'];
              $lhon8 = $rows['lhon'];
              $compressive8 = $rows['compressive'];
              $nutritional8 = $rows['nutritionaltoxic'];
              $papilloedema8 = $rows['papilloedema'];
              $hereditary8 = $rows['hereditary'];
              $chiasmal8 = $rows['chiasmal'];
              
            }
          
              while($rows = $discresultSet->fetch_assoc()){
              $opticneurtitis9 = $rows['opticneurtitis'];
              $naaion9 = $rows['naaion'];
              $aaion9 = $rows['aaion'];
              $lhon9 = $rows['lhon'];
              $compressive9 = $rows['compressive'];
              $nutritional9 = $rows['nutritionaltoxic'];
              $papilloedema9 = $rows['papilloedema'];
              $hereditary9 = $rows['hereditary'];
              $chiasmal9 = $rows['chiasmal'];
              
            }
         
              while($rows = $rapdresultSet->fetch_assoc()){
              $opticneurtitis10 = $rows['opticneurtitis'];
              $naaion10 = $rows['naaion'];
              $aaion10 = $rows['aaion'];
              $lhon10 = $rows['lhon'];
              $compressive10 = $rows['compressive'];
              $nutritional10 = $rows['nutritionaltoxic'];
              $papilloedema10 = $rows['papilloedema'];
              $hereditary10 = $rows['hereditary'];
              $chiasmal10 = $rows['chiasmal'];
              
            }
           
              while($rows = $colorvisionresultSet->fetch_assoc()){
              $opticneurtitis11 = $rows['opticneurtitis'];
              $naaion11 = $rows['naaion'];
              $aaion11 = $rows['aaion'];
              $lhon11 = $rows['lhon'];
              $compressive11 = $rows['compressive'];
              $nutritional11 = $rows['nutritionaltoxic'];
              $papilloedema11 = $rows['papilloedema'];
              $hereditary11 = $rows['hereditary'];
              $chiasmal11 = $rows['chiasmal'];
              
            }
          
              while($rows = $fieldsresultSet->fetch_assoc()){
              $opticneurtitis12 = $rows['opticneurtitis'];
              $naaion12 = $rows['naaion'];
              $aaion12 = $rows['aaion'];
              $lhon12 = $rows['lhon'];
              $compressive12 = $rows['compressive'];
              $nutritional12 = $rows['nutritionaltoxic'];
              $papilloedema12 = $rows['papilloedema'];
              $hereditary12 = $rows['hereditary'];
              $chiasmal12 = $rows['chiasmal'];
             
            }
            $opticneurtitis = $opticneurtitis1 + $opticneurtitis2 + $opticneurtitis4 + $opticneurtitis5 + $opticneurtitis6 + $opticneurtitis7 + $opticneurtitis8 + $opticneurtitis9 + $opticneurtitis10 + $opticneurtitis11 + $opticneurtitis12;
           

            
              $naaion = $naaion1 + $naaion2 + $naaion4 + $naaion5 + $naaion6 + $naaion7 + $naaion8 + $naaion9 + $naaion10 + $naaion11 + $naaion12;
            

            
              $aaion = $aaion1 + $aaion2 + $aaion4 + $aaion5 + $aaion6 + $aaion7 + $aaion8 + $aaion9 + $aaion10 + $aaion11 + $aaion12;
            

            
              $lhon = $lhon1 + $lhon2 + $lhon4 + $lhon5 + $lhon6 + $lhon7 + $lhon8 + $lhon9 + $lhon10 + $lhon11 + $lhon12;
            

           
              $compressive = $compressive1 + $compressive2 + $compressive4 + $compressive5 + $compressive6 + $compressive7 + $compressive8 + $compressive9 + $compressive10 + $compressive11 + $compressive12;
            

            
              $nutritional = $nutritional1 + $nutritional2 + $nutritional4 + $nutritional5 + $nutritional6 + $nutritional7 + $nutritional8 + $nutritional9 + $nutritional10 + $nutritional11 + $nutritional12;
            

           
              $papilloedema = $papilloedema1 + $papilloedema2 + $papilloedema4 + $papilloedema5 + $papilloedema6 + $papilloedema7 + $papilloedema8 + $papilloedema9 + $papilloedema10 + $papilloedema11 + $papilloedema12;
            

           
              $hereditary = $hereditary1 + $hereditary2 + $hereditary4 + $hereditary5 + $hereditary6 + $hereditary7 + $hereditary8 + $hereditary9 + $hereditary10 + $hereditary11 + $hereditary12;
            

           
            
              $chiasmal = $chiasmal1 + $chiasmal2 + $chiasmal4 + $chiasmal5 + $chiasmal6 + $chiasmal7 + $chiasmal8 + $chiasmal9 + $chiasmal10 + $chiasmal11 + $chiasmal12;
            

            $order = array('OpticNeurtitis'=>$opticneurtitis,'NAAION'=>$naaion,'AAION'=>$aaion,'LHON'=>$lhon,'Compressive'=>$compressive,'NutritionalToxic'=>$nutritional,'Papilloedema'=>$papilloedema,'Hereditary'=>$hereditary,'Chiasmal'=>$chiasmal);
            arsort($order);
    
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>ForeSight WorldWide</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		
		.division1{
			
			height:250px;
			width: 100%;
			background-color:rgb(15,82,186);
			top: 0px;
			left: 0px;
			position: fixed;
		}
		img{
			width:100px;
			margin-top: 20px;
			margin-left: 50px;
			border-radius: 10%;
			border:5px solid white;
		}
		.heading{
			margin-left: 50px;
			color: white;
			font-size: 35px;
			font-family: sans-serif;
			font-weight: bold;
		}
		.division2{
			position: absolute;
			background-color: white;
			width:50%;
			margin-left: 15%;	
			margin-top: 215px;
			padding: 30px;
			border-radius: 1%;
			height:1200px;
			border:1px solid rgb(186,181,181);
		}
		.results{
			position: fixed;
			background-color:rgb(15,82,186);
			width:15%;
			margin-left: 77%;	
			margin-top: 350px;
			padding-top: 10px;
			border-radius: 2%;
			height:175px;
			border:1px solid rgb(186,181,181);
		}
		h3{
			color: rgb(92,89,83);
		}
		[type=text]{
			width:60%;
			height: 30px;
			border:none;
			border-bottom: 1px solid;
			border-bottom-color:rgb(155,163,157); 
		}
		input[type=text]:focus{
             outline: 1px solid rgb(15,82,186);   
        }
		label{
			color: rgb(92,89,83);
			font-weight:bold;
		}
		.btn-group{
			margin-left: 100px; 
			padding-bottom: 150px;
		}
	.btn-group button {   
  border: 1px solid rgb(15,82,186); 
  border-radius: 3%;
  color: rgb(15,82,186);
  height:40px;
  width: 40%;
  cursor: pointer;
  float: left;
  font-size: 20px;
}
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}
.btn-group button:not(:last-child) {
  border-right: none; 
}
.btn-group button:hover {
 color: rgb(126,184,194);
			border-color: rgb(126,184,194);
}
		.footer{
			position: fixed;
			bottom: 0px;
			left:0px;
			background-color: white;
			width:100%;
			z-index: 2;
		}
		.footing{
			margin-left: 600px;
			font-family: sans-serif;
		}

	</style>
</head>
<body>
    <div class="division1">
    	<img src="image1.jpg">
    	<p class="heading">FORESIGHT WORLDWIDE</p>
    	
    </div>
    <div class="division2" id="division2">
    	<form method="post" id="form">
    		<h3>Fill Your Details</h3><br>
    		<input type="text" name="name" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
    		<br><br>
    		<label>Age</label><br><br>
    		<input type="radio" name="age" class="age" value="below 40" <?php if(isset($_POST['age']) && $_POST['age'] =='below 40' ){echo "checked";}?>>Below 40
    		<input type="radio" name="age" class="age" value="41 to 60" <?php if(isset($_POST['age']) && $_POST['age'] =='41 to 60' ){echo "checked";}?>>41 to 60
    		<input type="radio" name="age" class="age" value="above 60" <?php if(isset($_POST['age']) && $_POST['age'] =='above 60' ){echo "checked";}?>>Above 60
    		<br><br>
    		<label>Sex</label><br><br>
    		<input type="radio" name="sex" value="male" <?php if(isset($_POST['sex']) && $_POST['sex'] =='male' ){echo "checked";}?>>Male
    		<input type="radio" name="sex" value="female" <?php if(isset($_POST['sex']) && $_POST['sex'] =='female' ){echo "checked";}?>>Female
    		<br><br>
    		<label>Religion</label><br><br>
    		<input type="radio" name="religion" value="hindu" <?php if(isset($_POST['religion']) && $_POST['religion'] =='hindu' ){echo "checked";}?>>Hindu
    		<input type="radio" name="religion" value="muslim" <?php if(isset($_POST['religion']) && $_POST['religion'] =='muslim' ){echo "checked";}?>>Muslim
    		<input type="radio" name="religion" value="christian" <?php if(isset($_POST['religion']) && $_POST['religion'] =='christian' ){echo "checked";}?>>Christian
    		<input type="radio" name="religion" value="white" <?php if(isset($_POST['religion']) && $_POST['religion'] =='white' ){echo "checked";}?>>White
    		<input type="radio" name="religion" value="african" <?php if(isset($_POST['religion']) && $_POST['religion'] =='african' ){echo "checked";}?>>African
    		<input type="radio" name="religion" value="others" <?php if(isset($_POST['religion']) && $_POST['religion'] =='others' ){echo "checked";}?>>Others
    		<br><br>
    		If others enter religion
    		<input type="text" name="religion1" placeholder="Your Religion" value="<?php echo isset($_POST['religion1']) ? $_POST['religion1'] : '' ?>">
    		<br><br>
    		<label>Laterality</label><br><br>
    		<input type="radio" name="laterality" value="unilateral" <?php if(isset($_POST['laterality']) && $_POST['laterality'] =='unilateral' ){echo "checked";}?>>Unilateral
    		<input type="radio" name="laterality" value="bilateral" <?php if(isset($_POST['laterality']) && $_POST['laterality'] =='bilateral' ){echo "checked";}?>>Bilateral
    		<input type="radio" name="laterality" value="sequential" <?php if(isset($_POST['laterality']) && $_POST['laterality'] =='sequential' ){echo "checked";}?>>Sequential
    		<br><br>
    		<label>Onset</label><br><br>
    		<input type="radio" name="onset" value="acute" <?php if(isset($_POST['onset']) && $_POST['onset'] =='acute' ){echo "checked";}?>>Acute
    		<input type="radio" name="onset" value="subacute" <?php if(isset($_POST['onset']) && $_POST['onset'] =='subacute' ){echo "checked";}?>>SubAcute
    		<input type="radio" name="onset" value="gradual" <?php if(isset($_POST['onset']) && $_POST['onset'] =='gradual' ){echo "checked";}?>>Gradual
    		<br><br>
    		Enter Duration
    		<input type="text" name="duration" placeholder="Duration" value="<?php echo isset($_POST['duration']) ? $_POST['duration'] : '' ?>">
    		<br><br>
    		<label>Progression</label><br><br>
    		<input type="radio" name="progression" value="initial progression and stabilisation" <?php if(isset($_POST['progression']) && $_POST['progression'] =='initial progression and stabilisation' ){echo "checked";}?>>Initial Progression and Stabilisation
    		<input type="radio" name="progression" value="stable" <?php if(isset($_POST['progression']) && $_POST['progression'] =='stable' ){echo "checked";}?>>Stable
    		<input type="radio" name="progression" value="worsening after 2 weeks" <?php if(isset($_POST['progression']) && $_POST['progression'] =='worsening after 2 weeks' ){echo "checked";}?>>Worsening after 2 weeks
    		<br><br>
    		<label>Pain around the eye</label><br><br>
    		<input type="radio" name="pain" value="yes" <?php if(isset($_POST['pain']) && $_POST['pain'] =='yes' ){echo "checked";}?>>Yes
    		<input type="radio" name="pain" value="no" <?php if(isset($_POST['pain']) && $_POST['pain'] =='no' ){echo "checked";}?>>No
    		<br><br>
    		<label>Headache</label><br><br>
    		<input type="radio" name="headache" value="yes" <?php if(isset($_POST['headache']) && $_POST['headache'] =='yes' ){echo "checked";}?>>Yes
    		<input type="radio" name="headache" value="no" <?php if(isset($_POST['headache']) && $_POST['headache'] =='no' ){echo "checked";}?>>No
    		<br><br>
    		<label>Disc</label><br><br>
    		<input type="radio" name="disc" value="normal" <?php if(isset($_POST['disc']) && $_POST['disc'] =='normal' ){echo "checked";}?>>Normaldisc
    		<input type="radio" name="disc" value="edema" <?php if(isset($_POST['disc']) && $_POST['disc'] =='edema' ){echo "checked";}?>>Edema
    		<input type="radio" name="disc" value="pale" <?php if(isset($_POST['disc']) && $_POST['disc'] =='pale' ){echo "checked";}?>>Pale
    		<br><br>
    		<label>Rapd</label><br><br>
    		<input type="radio" name="rapd" value="yes" <?php if(isset($_POST['rapd']) && $_POST['rapd'] =='yes' ){echo "checked";}?>>Yes
    		<input type="radio" name="rapd" value="no" <?php if(isset($_POST['rapd']) && $_POST['rapd'] =='no' ){echo "checked";}?>>No
    		<br><br>
    		<label>Color Vision Loss</label><br><br>
    		<input type="radio" name="colorvision" value="mild" <?php if(isset($_POST['colorvision']) && $_POST['colorvision'] =='mild' ){echo "checked";}?>>Mild
    		<input type="radio" name="colorvision" value="profound" <?php if(isset($_POST['colorvision']) && $_POST['colorvision'] =='profound' ){echo "checked";}?>>Profound
    		<input type="radio" name="colorvision" value="nil" <?php if(isset($_POST['colorvision']) && $_POST['colorvision'] =='nil' ){echo "checked";}?>>Nil
    		<br><br>
    		<label>Fields</label><br><br>
    		<input type="radio" name="fields" value="generalised reduction" <?php if(isset($_POST['fields']) && $_POST['fields'] =='generalised reduction' ){echo "checked";}?>>Generalised Reduction
    		<input type="radio" name="fields" value="central scotoma" <?php if(isset($_POST['fields']) && $_POST['fields'] =='central scotoma' ){echo "checked";}?>>Central Scotoma
    		<input type="radio" name="fields" value="ceco central" <?php if(isset($_POST['fields']) && $_POST['fields'] =='ceco central' ){echo "checked";}?>>Ceco Central
    		<input type="radio" name="fields" value="altudinal" <?php if(isset($_POST['fields']) && $_POST['fields'] =='altudinal' ){echo "checked";}?>>Altudinal
    		<input type="radio" name="fields" value="hemianopia" <?php if(isset($_POST['fields']) && $_POST['fields'] =='hemianopia' ){echo "checked";}?>>Hemianopia
    		<br><br><br>
    		<div class="btn-group">
    		<button name="submit"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Submit</button>
    		<button type="reset" name="reset" class="reset" onclick="document.location='form.php'">Reset</button>
            </div>
    	</form>
    </div>
<br><br>
    <div class="footer">
    	<p class="footing">We're <i class="fa fa-bolt" aria-hidden="true" style="color: orange;"></i> by Foresight Worldwide</p>
    </div>

    <div class="results">
    <p style="text-align: center;color: white;font-weight: bold;font-size: 20px;">Results</p>
    <ol id="result">
          <?php
          if(isset($order)){
              $i = 0;
              foreach($order as $x=>$x_value){
                if($i == 3){
                  break;
                }
                else{
                  $i = $i + 1;
                  echo "<li value='$x' style='padding:2px;color:white;'>$x</li>";
                }
              }
          }
            ?>
          </ol>
   </div>
   <script type="text/javascript">

   </script>
</body>
</html>