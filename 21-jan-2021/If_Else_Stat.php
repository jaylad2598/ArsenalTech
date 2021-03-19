<?php 
$month = date('F', time());

echo "Current Month is :-  $month<br>";
   if($month == "August")
   {
       echo "It's August, so it's really hot.";
   }
   else{
       echo " Not August, so at least not in the peak of the heat.";
   }   
?>