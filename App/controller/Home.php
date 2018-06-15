<?php
namespace App\controller;
use App\mvc\controller;
use App\model\product\productRepository;

class Home extends Controller{

  private $product;

  public function __construct(ProductRepository $product){
    parent::__construct();
    $this->product = $product;
  }
    public function principal(){
      $this->view->set('products', $this->product->getProducts());
      $this->view->render('home');
    }
}
 ?>
