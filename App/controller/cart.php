<?php
namespace App\controller;
use App\mvc\controller;

class Cart extends Controller{
  public function principal(){
    $this->view->render('cart');
  }
}
 ?>
