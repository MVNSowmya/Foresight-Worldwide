<?php 
require('dbconnection.php');
$query1 = "select potentialanswers from alg where questions='age'";
$resultSet1 = mysqli_query($con,$query1) or die(mysqli_error($con));

$query2 = "select potentialanswers from alg where questions='sex'";
$resultSet2 = mysqli_query($con,$query2) or die(mysqli_error($con));

$query3 = "select potentialanswers from alg where questions='religion'";
$resultSet3 = mysqli_query($con,$query3) or die(mysqli_error($con));

$query4 = "select potentialanswers from alg where questions='laterality'";
$resultSet4 = mysqli_query($con,$query4) or die(mysqli_error($con));

$query5 = "select potentialanswers from alg where questions='onset'";
$resultSet5 = mysqli_query($con,$query5) or die(mysqli_error($con));

$query6 = "select potentialanswers from alg where questions='progression'";
$resultSet6 = mysqli_query($con,$query6) or die(mysqli_error($con));

$query7 = "select potentialanswers from alg where questions='pain around the eye'";
$resultSet7 = mysqli_query($con,$query7) or die(mysqli_error($con));

$query8 = "select potentialanswers from alg where questions='headache'";
$resultSet8 = mysqli_query($con,$query8) or die(mysqli_error($con));

$query9 = "select potentialanswers from alg where questions='disc'";
$resultSet9 = mysqli_query($con,$query9) or die(mysqli_error($con));

$query10 = "select potentialanswers from alg where questions='rapd'";
$resultSet10 = mysqli_query($con,$query10) or die(mysqli_error($con));

$query11 = "select potentialanswers from alg where questions='color vision loss'";
$resultSet11 = mysqli_query($con,$query11) or die(mysqli_error($con));

$query12 = "select potentialanswers from alg where questions='fields'";
$resultSet12 = mysqli_query($con,$query12) or die(mysqli_error($con));


if(isset($_REQUEST["age"])){
    $var13 = $_REQUEST["age"];
    $query13 = "select * from alg where questions='age' and potentialanswers='$var13'";
    $resultSet13 = mysqli_query($con,$query13) or die(mysqli_error($con));

}
if(isset($_REQUEST["sex"])){
    $var14 = $_REQUEST["sex"];
    $query14 = "select * from alg where questions='sex' and potentialanswers='$var14'";
    $resultSet14 = mysqli_query($con,$query14) or die(mysqli_error($con));

}
//if(isset($_REQUEST["religion"])){
//    $var15 = $_REQUEST["religion"];
//    $query15 = "select * from alg where questions='religion' and potentialanswers='$var15'";
//    $resultSet15 = mysqli_query($con,$query15) or die(mysqli_error($con));

//}
if(isset($_REQUEST["Laterality"])){
    $var16 = $_REQUEST["Laterality"];
    $query16 = "select * from alg where questions='laterality' and potentialanswers='$var16'";
    $resultSet16 = mysqli_query($con,$query16) or die(mysqli_error($con));

}
if(isset($_REQUEST["Onset"])){
    $var17 = $_REQUEST["Onset"];
    $query17 = "select * from alg where questions='onset' and potentialanswers='$var17'";
    $resultSet17 = mysqli_query($con,$query17) or die(mysqli_error($con));

}
if(isset($_REQUEST["Progression"])){
    $var18 = $_REQUEST["Progression"];
    $query18 = "select * from alg where questions='progression' and potentialanswers='$var18'";
    $resultSet18 = mysqli_query($con,$query18) or die(mysqli_error($con));

}
if(isset($_REQUEST["Painaroundtheeye"])){
    $var19 = $_REQUEST["Painaroundtheeye"];
    $query19 = "select * from alg where questions='pain around the eye' and potentialanswers='$var19'";
    $resultSet19 = mysqli_query($con,$query19) or die(mysqli_error($con));

}

if(isset($_REQUEST["Headache"])){
    $var20 = $_REQUEST["Headache"];
    $query20 = "select * from alg where questions='headache' and potentialanswers='$var20'";
    $resultSet20 = mysqli_query($con,$query20) or die(mysqli_error($con));

}
if(isset($_REQUEST["Disc"])){
    $var21 = $_REQUEST["Disc"];
    $query21 = "select * from alg where questions='disc' and potentialanswers='$var21'";
    $resultSet21 = mysqli_query($con,$query21) or die(mysqli_error($con));

}
if(isset($_REQUEST["Rapd"])){
    $var22 = $_REQUEST["Rapd"];
    $query22 = "select * from alg where questions='rapd' and potentialanswers='$var22'";
    $resultSet22 = mysqli_query($con,$query22) or die(mysqli_error($con));

}
if(isset($_REQUEST["ColorVisionloss"])){
    $var23 = $_REQUEST["ColorVisionloss"];
    $query23 = "select * from alg where questions='color vision loss' and potentialanswers='$var23'";
    $resultSet23 = mysqli_query($con,$query23) or die(mysqli_error($con));

}
if(isset($_REQUEST["Fields"])){
    $var24 = $_REQUEST["Fields"];
    $query24 = "select * from alg where questions='fields' and potentialanswers='$var24'";
    $resultSet24 = mysqli_query($con,$query24) or die(mysqli_error($con));

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
      body{
       font-size:20px;
        
}
        .division1{
    margin: 5px 0px 0px 100px;
    
    float: left;
    width: 500px;
    padding: 5px;
}
.division2{
    margin: 5px 0px 0px 200px;
    background-color: rgb(15,82,186);
    color: white;
    float: left;
    width: 200px;
    padding: 5px;
}

input,select{
     margin:5px 5px 5px 5px;
    border:none;
    border-bottom: 1px solid black;
}
.submit{
    background-color: rgb(15,82,186); 
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
}

h3{
    text-align: center;
   
}
#results{
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
}
img{
  width:150px;
  position: fixed;
  bottom: 0px;
  right: 0px;
}
    </style>


</head>
<body>
    <img src="logo.png"></img>
        <h3>FORESIGHT WORLDWIDE</h3>
      

    
    <div class="division1">
    <h3>Patient Details</h3>
    
     <form action="#" class="inputform">
        <label for="age">Age:</label>
        <select id="age" name="age" >
          <?php 
              while($rows = $resultSet1->fetch_assoc()){
              $age = $rows['potentialanswers'];
              echo strtoupper("<option value='$age'>$age</option>");
            }
          ?>
        </select>
        <br>
          <label for="sex">Sex:</label>
          <select id="sex" name="sex">
             <?php 
              while($rows = $resultSet2->fetch_assoc()){
              $sex = $rows['potentialanswers'];
              echo strtoupper("<option value='$sex'>$sex</option>");
            }
          ?>
          </select>

        <br>

        <label for="religion">Ehnitycity/Religion:</label>
        <select id="religion" name="religion">
           <?php 
              while($rows = $resultSet3->fetch_assoc()){
              $religion = $rows['potentialanswers'];
              echo strtoupper("<option value='$religion'>$religion</option>");
            }
          ?>
        </select>

        <br>

        <label  >If other religion :</label>
        <input id="textbox" type="text" placeholder="Enter your Religion">
        <br>

        <selct>
        <label for="Laterality">Laterality:</label>
        <select id="Laterality" name="Laterality">
           <?php 
              while($rows = $resultSet4->fetch_assoc()){
              $laterality = $rows['potentialanswers'];
              echo strtoupper("<option value='$laterality'>$laterality</option>");
            }
          ?>
        </select>

        <br>

        <selct >
        <label for="Onset">Onset:</label>
        <select id="Onset" name="Onset">
           <?php 
              while($rows = $resultSet5->fetch_assoc()){
              $onset = $rows['potentialanswers'];
              echo strtoupper("<option value='$onset'>$onset</option>");
            }
          ?>
        </select>

        <br>

        <label > Duration : </label>
        <input type="number" placeholder="Enter Duration">
        <br>

        <selct >
            <label for="Progression">Progression:</label>
            <select id="Progression" name="Progression">
             <?php 
              while($rows = $resultSet6->fetch_assoc()){
              $progression = $rows['potentialanswers'];
              echo strtoupper("<option value='$progression'>$progression</option>");
            }
          ?>  
        </select>
       <br>
        <selct>
            <label for="Painaroundtheeye">Pain around the eye:</label>
            <select id="Painaroundtheeye" name="Painaroundtheeye">
                <?php 
              while($rows = $resultSet7->fetch_assoc()){
              $paineye = $rows['potentialanswers'];
              echo strtoupper("<option value='$paineye'>$paineye</option>");
            }
          ?>   
          </select>
          
            <br>
          
          <selct>
            <label for="Headache">Headache:</label>
            <select id="Headache" name="Headache">
               <?php 
              while($rows = $resultSet8->fetch_assoc()){
              $headache = $rows['potentialanswers'];
              echo strtoupper("<option value='$headache'>$headache</option>");
            }
          ?>
           </select>

        <br>

      <selct>
          <label for="Disc">Disc:</label>
          <select id="Disc" name="Disc">
              
 <?php 
              while($rows = $resultSet9->fetch_assoc()){
              $disc = $rows['potentialanswers'];
              echo strtoupper("<option value='$disc'>$disc</option>");
            }
          ?>
      </select>

    `<br>
<selct>
    <label for="Rapd">Rapd:</label>
    <select id="Rapd" name="Rapd">
         <?php 
              while($rows = $resultSet10->fetch_assoc()){
              $rapd = $rows['potentialanswers'];
              echo strtoupper("<option value='$rapd'>$rapd</option>");
            }
          ?>
    </select>

<br>
<selct>
    <label for="ColorVisionloss">Color Vision loss:</label>
    <select id="ColorVisionloss" name="ColorVisionloss">
         <?php 
              while($rows = $resultSet11->fetch_assoc()){
              $colorvision = $rows['potentialanswers'];
              echo strtoupper("<option value='$colorvision'>$colorvision</option>");
            }
          ?>
    </select>

<br>
<selct>
    <label for="Fields">Fields:</label>
    <select id="Fields" name="Fields" >
         <?php 
              while($rows = $resultSet12->fetch_assoc()){
              $fields = $rows['potentialanswers'];
              echo strtoupper("<option value='$fields'>$fields</option>");
            }
          ?>
    </select>

<br>
<br>
<input type="submit" value="Submit" class="submit">
<input type="reset" value="Reset" class="submit">

      </form>

    </div>
<div class="division2">
    <h3>Results</h3>
    <select id="results">
       
            <?php 
              while($rows = $resultSet13->fetch_assoc()){
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
          
              while($rows = $resultSet14->fetch_assoc()){
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
          
              //while($rows = $resultSet15->fetch_assoc()){
              //$opticneurtitis = $rows['opticneurtitis'];
              //$naaion = $rows['naaion'];
              //$aaion = $rows['aaion'];
              //$lhon = $rows['lhon'];
              //$compressive = $rows['compressive'];
              //$nutritional = $rows['nutritionaltoxic'];
              //$papilloedema = $rows['papilloedema'];
              //$hereditary = $rows['hereditary'];
              //$chiasmal = $rows['chiasmal'];
             
            //}
          
              while($rows = $resultSet16->fetch_assoc()){
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
         
              while($rows = $resultSet17->fetch_assoc()){
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
          
              while($rows = $resultSet18->fetch_assoc()){
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
         
              while($rows = $resultSet19->fetch_assoc()){
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
          
              while($rows = $resultSet20->fetch_assoc()){
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
          
              while($rows = $resultSet21->fetch_assoc()){
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
         
              while($rows = $resultSet22->fetch_assoc()){
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
           
              while($rows = $resultSet23->fetch_assoc()){
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
          
              while($rows = $resultSet24->fetch_assoc()){
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
?>
          </select>
           <ol>
          <?php
              $i = 0;
              foreach($order as $x=>$x_value){
                if($i == 3){
                  break;
                }
                else{
                  $i = $i + 1;
                  echo "<li value='$x'>$x</li>";
                }
              }
            ?>
          </ol>
        </div>
        
    
</body>
</html>