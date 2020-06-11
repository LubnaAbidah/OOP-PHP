<?php
class handphone {
  public $merk;
  protected $os;
  private $tahun_produksi;
}

class smartphone extends handphone{
  public function info_hp(){
    return "Merk: $this->merk, OS: $this->os";
  }
  public function tahun_produksi(){
    return "Tahun produksi : $this->tahun_produksi";
  }
}

$hp_nabil  = new smartphone();

$hp_nabil->merk = "Samsung";

echo $hp_nabil->info_hp();
echo "<br>";
echo $hp_nabil->tahun_produksi();
