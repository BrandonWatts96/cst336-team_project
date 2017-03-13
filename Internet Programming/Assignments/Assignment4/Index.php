<!DOCTYPE html>

<?php

$servername = getenv("IP");
$dbport = 3306;
$username = getenv("C9_USER");
$password = "";

$dbConn = new PDO("mysql:host=$host;dbname=otter-express", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>

<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?php
        
        
        $sql = "SELECT cl.otterId,p.productId, o.orderId 
                FROM Client cl, Product p, `Order` o";
        
        $stmt = $dbConn->prepare($sql);
        $stmt -> execute (  array ($sql)  );

        
        
        
        echo "Fetching Rows... <br>";
        while($row = $stmt->fetch()){
            echo "<div>";
            echo "ID: " . $row["otterId"] . ", Name: " . $row["productId"];
            echo "</div>";
        }
        
        
        
        ?>
        

    </body>
</html>