<?php
class handphone { // ini adalah class
  var $jml_pulsa; // ini adalah property == variabel
  function __construct($pulsa){
    $this->jml_pulsa = $pulsa;
  }
  function mengirim_pesan($tarif, $jml_pesan=1){ // ini adalah method == function
    $this->jml_pulsa -= $tarif*$jml_pesan; // variabel $this dapat mengakses property dan method
  }
  function __destruct(){
    echo "Jumlah pulsa sekarang ";
    echo "$this->jml_pulsa";
  }
}
//$handphone_faqih adalah variabel
$handphone_faqih = new handphone(2000); // ini adalah objek

echo "Jumlah pulsa hp faqih ";
echo "$handphone_faqih->jml_pulsa"; // mengakses property
echo "<br>";

$handphone_faqih->mengirim_pesan(150);
?>
