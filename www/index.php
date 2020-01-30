<?php

$comPort = "/dev/rfcomm0"; //Port com arduino

if (isset($_POST["rcmd"])) {
$rcmd = $_POST["rcmd"];
switch ($rcmd) {
     case Allumer:
        $fp = fopen($comPort, "w+");
        if($fp) {
          fwrite($fp, 'h');
          fclose($fp);
        } else {
          die('pas de comm avec l\'arduino');
        }
        break;
     case Eteindre:
        $fp = fopen($comPort, "w+");
        if($fp) {
          fwrite($fp, 'l');
          fclose($fp);
         } else {
          die('pas de comm avec l\'arduino');
        }
  break;
  default:
  die('Quelque chose ne vas pas...');
  }
}
?>

<html>
<head>
<title>Contrôle des lampes</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<h1>Contrôle des lampes</h1>

<form method="post" action="<?php echo $PHP_SELF;?>">
<input type="submit" value="Allumer" name="rcmd">
<input type="submit" value="Eteindre" name="rcmd">
</form>
</body>
</html>
