<?php
class handphone { // ini adalah class
  var $merk; // ini adalah property
  var $tipe; // ini adalah property
  var $jml_pulsa; // ini adalah property
  function mengirim_pesan(){ // ini adalah method
    $this->jml_pulsa -= 500; // ini adalah isi function
  }
}

//$handphone_faqih adalah variabel
$handphone_faqih = new handphone(); // ini adalah objek
$handphone_daffa = new handphone();
 ?>
