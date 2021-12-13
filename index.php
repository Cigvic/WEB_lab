<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Основы web-технологий</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
  </head>
  <body> 
    
<?php 
$tmp=file_get_contents("6lab.html");
$objects="";
function load_content($s)
{
  $GLOBALS['content'].=$s;
}
$C = $_GET["C"];
  switch($C) {
    case "1": $objects=file_get_contents("faq.html"); break;
    case "2": $objects=file_get_contents("feedback.html"); break;
    case "3": $objects=file_get_contents("minigame.html"); break;
  }
$tmp = str_replace("{objects}"), $objects, $tmp);
echo $tmp;  

?>

  </body>
</html>
