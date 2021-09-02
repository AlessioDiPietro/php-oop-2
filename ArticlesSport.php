<?php

class ArticlesSport {
  protected $name;  
  protected $price;  
  public $barcode;
  
  
  function __construct ($_name, $_price, $_barcode){
      $this->name = $_name;
      $this->price = $_price;
      $this->barcode = $_barcode;
  }

  public function getDes(){
      return $this->name . "   " . $this->price . "&euro;";
  }

}