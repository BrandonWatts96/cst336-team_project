<!DOCTYPE html>
<html>
    <head>
        <title>Candidate Support</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>

        <div>
    
            <?php
                session_start();
                
                if($_POST["age"] >= 18)
                {
                
                $price = 0;

            	//The value of the variable name is found
            	echo "Dear, <b>" . $_POST["name"] . "</b><br><br>";
            	 
            	//The value of the variable age is found
            	echo "Thank you for supporting your candidate, <b>". $_POST["dropDown"] . "</b><br><br><br>";
            	
            	echo "You ordered these products:<br>";
            	
            	if($_POST["cbox1"] == 'Yes')
            	{
            	    echo "Mug (\$15)<br>";
            	    $price += 15;
            	}
            	if($_POST["cbox2"] == 'Yes')
            	{
            	    echo "Cap (\$20)<br>";
            	    $price += 20;
            	}
            	if($_POST["cbox3"] == 'Yes')
            	{
            	    echo "Tote Bag (\$10)<br>";
            	    $price += 10;
            	}
            	if($_POST["cbox4"] == 'Yes')
            	{
            	    echo "Pin (\$5)<br>";
            	    $price += 5;
            	}
            	
            	if(radio != null){
            	    switch($_POST["sub"]){
            	        case("one"):
            	            echo "One Month of Campaign Magazine (\$10)<br>";
            	            $price += 10;
            	            break;
            	        case("quarter"):
            	            echo "Three Months of Campaign Magazine (\$30)<br>";
            	            $price += 30;
            	            break;
            	        case("half"):
            	            echo "Six Months of Campaign Magazine (\$60)<br>";
            	            $price += 60;
            	            break;
            	        case("year"):
            	            echo "Twelve Months of Campaign Magazine (\$120)<br>";
            	            $price += 120;
            	            break;
            	    }
            	}
            	echo "<br>";
            	echo "Total: $". $price;
            	
                }
                else {
                    echo "Sorry, you're not old enough.";
                }
        
        	?>
            
        </div>    

    </body>
</html>