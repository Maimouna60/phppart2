<?php
$age = 8;
$gendre = "femme";
if ($age >= 18 AND $gendre =='homme') 
{
 echo "Vous etes un $gendre et vous etes majeur";
}
 elseif($age <18 AND $gendre =='homme')
 {
 echo "Vous etes un $gendre et vous etes mineur";
 }
 elseif ($age >=18 AND $gendre !='homme')
 {
 echo "Vous etes  une femme et vous etes majeur";
}
elseif($age <18 AND $gendre !='homme')
{
echo "Vous etes une femme et vous etes mineur";
}
?>


