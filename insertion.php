<?php
require('dbconnection.php');
$query = "insert into alg values ('age','below 40',9,0,0,7,8,5,7,8,6),('age','41 to 60',0,9,0,5,5,5,5,2,8),('age','above 60',0,0,9,0,5,5,4,1,8),
('sex','male',4,5,5,9,5,5,5,5,6),('sex','female',8,5,5,1,5,5,9,5,5),
('religion','hindu',0,0,0,0,0,0,0,0,0),('religion','muslim',0,0,0,0,0,0,0,0,0),('religion','christian',0,0,0,0,0,0,0,0,0),('religion','white',0,0,0,0,0,0,0,0,0),('religion','african',0,0,0,0,0,0,0,0,0),('religion','others',0,0,0,0,0,0,0,0,0),
('laterality','unilateral',9,9,9,9,9,1,3,1,1),('laterality','bilateral',4,2,2,1,1,9,9,9,9),('laterality','sequential',7,7,7,9,1,1,1,1,0),
('onset','acute',9,9,9,6,4,0,0,0,9),('onset','subacute',4,1,0,8,1,0,0,0,4),('onset','gradual',0,0,0,0,9,9,9,9,0),
('progression','initial progression and stabilisation',9,3,0,9,0,0,0,0,4),('progression','stable',4,9,9,0,0,0,0,0,8),('progression','worsening after 2 weeks',0,0,0,0,9,9,9,9,3),
('pain around the eye','yes',9,0,0,4,4,0,0,0,0),('pain around the eye','no',0,9,9,0,0,9,9,9,9),
('headache','yes',0,0,9,0,0,0,9,0,7),('headache','no',9,9,0,9,9,9,0,9,0),
('disc','normal',7,0,0,0,6,0,0,0,9),('disc','edema',4,9,9,6,6,0,9,0,0),('disc','pale',7,6,7,0,6,8,0,8,6),
('rapd','yes',9,9,9,9,9,0,0,0,4),('rapd','no',0,0,0,0,0,9,9,9,9),
('color vision loss','mild',0,9,0,4,6,4,5,4,5),('color vision loss','profound',9,0,9,8,6,8,0,8,1),('color vision loss','nil',0,4,0,0,0,0,8,0,8),
('fields','generalised reduction',9,7,7,5,7,7,7,4,0),('fields','central scotoma',9,5,0,3,7,7,0,7,0),('fields','ceco central',2,5,0,8,7,8,0,9,0),('fields','altudinal',6,9,9,2,4,0,0,0,0),('fields','hemianopia',0,0,0,0,0,0,0,0,9)";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
?>