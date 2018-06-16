<?php
session_start();

define("DIR", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);

include_once DIR.DS.'App'.DS.'loader.php';

$loader = new App\loader();
$loader->register();

$pdo               = new \PDO("mysql:host=localhost;dbname=dbloja", "root", "1234");
$productRepository = new App\model\product\productRepositoryPDO($pdo);

$page = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : 'principal';

switch($page){
  case 'cart' :
      $sessionCart = new App\model\Shopping\CartSession();
    	$cart = new App\controller\cart($productRepository, $sessionCart);
      call_user_func_array(array($cart, $action), array());
  break;
  default:
      $home = new App\controller\Home($productRepository);
      call_user_func_array(array($home, $action), array());
}


?>
