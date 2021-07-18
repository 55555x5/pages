<!DOCTYPE html>
<html lang="es">
  <head>
    <title>7ort Pages</title>
  </head>
  <body>
    <header></header>
<?php exec("curl -O https://raw.githubusercontent.com/7ort/pages/main/db.php");
include "db.php";
$countp=1;echo("Se viene 7ort Pages!!!!");
$pageco=0;
while($countp <= count($pages)){
  $path = parse_url($pages[$pageco], PHP_URL_PATH);
  $filename = pathinfo($path, PATHINFO_FILENAME);
  exec("rm -r --force ".$filename);
  exec("git clone ".$pages[$pageco]);
  exec("rm -r --force ".$filename."/.git");
  $countp++;$pageco++;
} ?>

  </body>
</html>
