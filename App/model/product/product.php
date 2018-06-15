<?php
namespace App\model\product;

class Product{
  private $id;
  private $name;
  private $price;

  public function setId($id){
    if(!is_int($id)){
      throw new \InvalidArgumentExcption("Id precisa ser inteiro");
    }
    $this->id =$id;
  }

  public function setName($name){
    if(empty($name)){
      throw new \InvalidArgumentExcption("É obrigatorio ter nome");
    }
    $this->name =$name;
  }

  public function setPrice($price){
    if(!is_float($price)){
      throw new \InvalidArgumentExcption("Precisa ser float");
    }
    $this->price = $price;
  }

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }



}
 ?>
