<?
  echo (file_get_contents("Site.html"))
   $C=$_GET["C"];
   switch($C){
    case "1": echo "faq.html"; break;
    case "2": echo "faq.html"; break; 
    default: echo "magic";  
  }
 
   $O=$_GET["O"];
   switch($O){
    case "1": echo "minigame.html"; break;   
    default: echo "magic";   
  }
?>
