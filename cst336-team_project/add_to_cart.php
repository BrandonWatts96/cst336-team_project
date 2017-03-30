<?php
// start session 
session_start();
 
// get the product id
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $quantity =  1;
 
// make quantity a minimum of 1
$quantity=$quantity<=0 ? 1 : $quantity;
 
// add new item on array
$cart_item=array(
    'quantity'=>$quantity
);
 
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
 
// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $_SESSION['cart'])){
    $quantity++;
}
 
// else, add the item to the array
$_SESSION['cart'][$id]=$cart_item;
header('Location:index.php');
?>