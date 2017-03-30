<?php
// start session
session_start();
 
// connect to database
require_once('database.php');


 
// initialize objects

// get database connection
        $dbConn = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// set page title
$page_title="Cart";

 
// contents will be here 
if(count($_SESSION['cart'])>0){
 
    // get the product ids
    $ids = array();
    foreach($_SESSION['cart'] as $id=>$value){
        array_push($ids, $id);
       
    }

    // query to select products
    $sql= "SELECT * FROM  product  WHERE productId IN (";
    
    for ($i = 0; $i < (sizeof($ids) - 1); $i++) {
    $sql = $sql  .$ids[$i] .",";
	}
	
    $sql = $sql . $ids[sizeof($ids) -1] .") ORDER BY name";

		echo $sql;
    // prepare query statement
    $stmt = $dbConn->prepare($sql);

    // execute query
    $stmt->execute();
 
    $total=0;
    $item_count=0;
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $quantity=$_SESSION['cart'][$id]['quantity'];
        $sub_total=$price*$quantity;
        
        // =================
        echo "<div class='cart-row'>";
            echo "<div class='col-md-8'>";
 
                echo "<div class='product-name m-b-10px'><h4>{$name}</h4></div>";
 
                // delete from cart
                echo "<a href='remove_from_cart.php?id={$id}' class='btn btn-default'>";
                    echo "Delete";
                echo "</a>";
            echo "</div>";
 
            echo "<div class='col-md-4'>";
                echo "<h4>&#36;" . number_format($price, 2, '.', ',') . "</h4>";
            echo "</div>";
        echo "</div>";
        // =================
 
        $item_count += $quantity;
        $total+=$sub_total;
    }
 
    echo "<div class='col-md-8'></div>";
    echo "<div class='col-md-4'>";
        echo "<div class='cart-row'>";
            echo "<h4 class='m-b-10px'>Total ({$item_count} items)</h4>";
            echo "<h4>&#36;" . number_format($total, 2, '.', ',') . "</h4>";
            echo "<a href='index.php' class='btn btn-success m-b-10px'>";
                echo "<span class='glyphicon glyphicon-shopping-cart'></span> Return to shop";
            echo "</a>";
        echo "</div>";
    echo "</div>";
 
}
 
// no products were added to cart
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No products found in your cart!";
        echo "</div>";
        echo "<a href='index.php' class='btn btn-default'>";
                    echo "Home";
                echo "</a>";
    echo "</div>";
}

 
?>
