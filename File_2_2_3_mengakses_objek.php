<?php
class handphone { // ini adalah class
  var $merk; // ini adalah property
  var $tipe; // ini adalah property
  var $jml_pulsa; // ini adalah property == variabel
  function mengirim_pesan(){ // ini adalah method == function
    $this->jml_pulsa -= 500; // ini adalah isi function
  }
}

//$handphone_faqih adalah variabel
$handphone_faqih = new handphone(); // ini adalah objek
$handphone_faqih->jml_pulsa = 1500; // mengisi nilai property

echo "Jumlah pulsa hp faqih ";
echo "$handphone_faqih->jml_pulsa"; // mengakses property
echo "<br>";

$handphone_faqih->mengirim_pesan(); // mengakses method

echo "Jumlah pulsa hp faqih sekarang ";
echo "$handphone_faqih->jml_pulsa";

$handphone_daffa = new handphone();
 ?>
