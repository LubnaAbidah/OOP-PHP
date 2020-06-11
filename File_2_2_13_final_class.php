<?php
class handphone {
  final public function hidupkan(){
    return "Handphone dihidupkan";
  }
}

final class smartphone extends handphone{
  public function hidupkan(){
    return "Smartphone dihidupkan";
  }
}

class hp_second extends smartphone{
  public function hidupkan(){
    return "Handphone tidak dapat hidup";
  }
}
 ?>
