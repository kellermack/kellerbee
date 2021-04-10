<?php
// Start session with persistant cookie
$lifetime = 60 * 60 * 24 * 14; // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

//Create a cart array if needed
if (empty($_SESSION['cart'])) { $_SESSION['cart'] = array(); }

//Include Cart functions
require_once('cart.php');

//Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

//Add or Update cart as needed 
switch($action) {
    case 'add':
        $productKey = filter_input(INPUT_POST, 'productKey');
        $itemQty = filter_input(INPUT_POST, 'itemQty');
        add_item($productKey, $itemQty);
        include('cartView.php');
        break;
    case 'update':
        $newQtyList = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($newQtyList as $key => $qty) {
            if ( $_SESSION['cart'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        include('cartView.php');
        break;
    case 'showCart';
        include('addItemViewPage.php');
        break;
    case 'emptyCart';
        unset($_SESSION['cart']);
        include('cartView.php');
        break;
 }