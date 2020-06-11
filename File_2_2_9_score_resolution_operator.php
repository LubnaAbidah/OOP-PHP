<?php
class handphone {
  public function info_hp($merk) {
    return "Merk HP : $merk";
  }
}

//echo handphone::info_hp("OPPO");
 $hp_nabil = new handphone();
 echo $hp_nabil->info_hp("Oppo");
?>
