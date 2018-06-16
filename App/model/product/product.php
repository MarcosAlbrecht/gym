<?php

namespace App\Model\Product;

class Product
{
    private $id;
    private $name;
    private $price;
    private $image;
    private $description;

    public function setId($id){
        if (!is_int($id)) {
            throw new \InvalidArgumentException("Id precisa ser inteiro");
        }
        $this->id = $id;
    }

    public function setName($name){
        if (empty($name)) {
            throw new \InvalidArgumentException("È obrigatório ter o nome");
        }
        $this->name = $name;
    }

    public function setPrice($price){
        if (!is_float($price)) {
            throw new \InvalidArgumentException("Preço precisar ser um float");
        }
        $this->price = $price;
    }

    public function setImage($image){
        if (empty($image)) {
            throw new \InvalidArgumentException("É obrigatório ter imagem");
        }
        $this->image = $image;
    }

    public function setDescription($description){
        if (empty($description)) {
            throw new \InvalidArgumentException("É obrigatório ter descrição");
        }
        $this->description = $description;
    }

    public function getId(){
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getDescription(){
        return $this->description;
    }
}
