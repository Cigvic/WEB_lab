<?
  echo (file_get_contents("Site.html"))
  $C=$_GET["C"];
  switch($C){
    case "1": echo(file_get_contents("faq.html")); break;
    case "2": echo(file_get_contents("feedback.html")); break;
  }
?>
