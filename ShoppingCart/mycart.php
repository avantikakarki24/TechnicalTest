<?php 
include('products.php');
session_start();

$price = 0;

if($_SESSION['product_count'] != null){
    $product_count = $_SESSION['product_count'];
}
if(isset($_POST['add'])){
    $cart = $_SESSION['cart'];
    $price = $_SESSION['price'];
    foreach ($products as $product) {
        if($product['name'] == $_POST['product_name']){
            array_push($cart, $product); 
        }
    }

    $product_count = $_SESSION['product_count'];
    
    foreach(array_keys($product_count) as $count){
        if($count == $_POST['product_name']){
            $product_count[$count] += 1;
        }
    }

    foreach($product_count as $product){
        $price += $product;
    }

    $cart = array_unique($cart, SORT_REGULAR);
    $_SESSION['cart'] = $cart;
}

if(isset($_POST['remove']))
{
    foreach($_SESSION['cart'] as $key => $c)
    {
        if($c['name']==$_POST['name'])
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo"<script>
                alert('Item is removed from the cart')
                window.location.href='manage_cart.php';

            </script>";
        }
    }  
}
$_SESSION['price'] = $price;
$_SESSION['product_count'] = $product_count;

?>