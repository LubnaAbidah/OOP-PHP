<?php
class handphone { // ini adalah class
  var $jml_pulsa; // ini adalah property == variabel
  function mengirim_pesan(){ // ini adalah method == function
    $this->jml_pulsa -= 500; // variabel $this dapat mengakses property dan method
  }
}

//$handphone_faqih adalah variabel
$handphone_faqih = new handphone(); // ini adalah objek
$handphone_faqih->jml_pulsa = 1500; // mengisi nilai property


$handphone_daffa = new handphone();
$handphone_daffa->jml_pulsa = 3000;

echo "Jumlah pulsa hp faqih ";
echo "$handphone_faqih->jml_pulsa"; // mengakses property
echo "<br>";

$handphone_daffa->mengirim_pesan(); // mengakses method

echo "Jumlah pulsa hp faqih sekarang ";
echo "$handphone_faqih->jml_pulsa";

?>
