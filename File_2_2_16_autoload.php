<?php
function __autoload($className){
  require_once "library/$className.php";
}

$hpku = new Handphone();
$hpku->isi_pulsa();
 ?>
