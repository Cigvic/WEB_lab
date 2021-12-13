<?php 
$tmp=file_get_contents("6lab.html");
$objects="";
$C = $_GET["C"];
  switch($C) {
    case "1": $objects=file_get_contents("faq.html"); break;
    case "2": $objects=file_get_contents("feedback.html"); break;
    case "3": $objects=file_get_contents("minigame.html"); break;
    default:  $objects=file_get_contents("faq.html");
  }
$tmp = str_replace("{objects}"), $objects, $tmp);
echo $tmp;  
?>

