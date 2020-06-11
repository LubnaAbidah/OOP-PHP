<?php
class handphone { // ini adalah class
  var $jml_pulsa; // ini adalah property == variabel
  function mengirim_pesan($tarif, $jml_pesan=1){ // ini adalah method == function
    $this->jml_pulsa -= $tarif*$jml_pesan; // variabel $this dapat mengakses property dan method
  }
}

//$handphone_faqih adalah variabel
$handphone_faqih = new handphone(); // ini adalah objek
$handphone_faqih->jml_pulsa = 2000; // mengisi nilai property

echo "Jumlah pulsa hp faqih ";
echo "$handphone_faqih->jml_pulsa"; // mengakses property
echo "<br>";

$handphone_faqih->mengirim_pesan(150);

echo "Jumlah pulsa hp faqih sekarang ";
echo "$handphone_faqih->jml_pulsa";
echo "<br>";

$handphone_faqih->mengirim_pesan(100,2);

echo "Jumlah pulsa hp faqih sekarang ";
echo "$handphone_faqih->jml_pulsa";
echo "<br>";
?>
