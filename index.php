<?
  echo (file_get_contents("Site.html"))
   $C=$_GET["C"];
   switch($C){
    case "1": echo("faq.html"); break;   
    case "2": echo(file_get_contents("faq.html")); break;
    case "3": echo(file_get_contents("feedback.html")); break;
    default: echo("magic");  
  }
 
   $O=$_GET["O"];
   switch($O){
    case "1": echo("minigame.html"); break;   
    case "2": echo(file_get_contents("minigame.html")); break;
    default: echo("magic");   
  }
?>
