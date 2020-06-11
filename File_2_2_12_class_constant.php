<?php
class handphone {
  const OS = "Android";
}
//mengakses dengan nama class
echo handphone::OS;

//mengakses dengan objek
$hp_daffa = new handphone();
echo $hp_daffa::OS;

//mengakses dengan variabel
$hp = "handphone";
echo $hp_daffa::OS;
 ?>
