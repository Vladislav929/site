
<?php
define('ROOT', __DIR__);

require_once ROOT . '/config/database.php';
require_once ROOT . '/controller/ProductController.php';
require_once ROOT . '/controller/UserController.php';
require_once 'config/database.php';
require_once 'controller/ProductController.php';
require_once 'controller/UserController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'products':
        $controller = new ProductController();
        $controller->index();
        break;
    case 'add_product':
        $controller = new ProductController();
        $controller->add();
        break;
    case 'edit_product':
        $controller = new ProductController();
        $controller->edit();
        break;
    case 'delete_product':
        $controller = new ProductController();
        $controller->delete();
        break;
    case 'users':
        $controller = new UserController();
        $controller->index();
        break;
    case 'add_user':
        $controller = new UserController();
        $controller->add();
        break;
    case 'edit_user':
        $controller = new UserController();
        $controller->edit();
        break;
    case 'delete_user':
        $controller = new UserController();
        $controller->delete();
        break;
    default:
        require_once 'view/home.php';
        break;
    case 'orders':
    (new OrderController())->index();
    break;
    case 'view_order':
        (new OrderController())->view($_GET['id']);
        break;
    case 'create_order':
        (new OrderController())->create();
        break;
    case 'update_order_status':
        (new OrderController())->updateStatus();
        break;
    case 'cancel_order':
        (new OrderController())->delete();
        break;
    case 'view_product':
        (new ProductController())->view($_GET['id']);
        break;
    case 'add_to_cart':
        // Реализуйте логику корзины
        break;
}
?>