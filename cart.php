<?php
//Add Item to Cart
function addItem($key, $quantity) {
    global $products;
    if($quanity < 1) return;

    //If item already exists in cart, update quanity. 
 if (isset($_SESSION['cart']['$key'])) {
     $quanity += $_SESSION['cart']['$key']['qty'];
     updateItem($key, $quantity);
     return;
}

//Add Item
$cost = $products[$key]['cost'];
$total = $cost * $quanity;
$item = array(
    'name' => $products[$key]['name'],
    'cost' => $cost,
    'qty'  => $quantity,
    'total' => $total 
    );
    $_SESSION['cart'][$key] = $item;
}

//Update an item in the cart
function updateItem($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cart'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cart'][$key]);
        } else {
            $_SESSION['cart'][$key]['qty'] = $quantity;
            $total = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['qty'];
            $_SESSION['cart'][$key]['total'] = $total;
        }
    }
}

//Get cart subtotal
function subTotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}
?>