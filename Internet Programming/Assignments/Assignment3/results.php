<!DOCTYPE html>
<html>
    <head>
        <title>Results</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        
        <p>
            YO 
            <?php
            if($_POST["name"] != null)
            {
                echo $_POST["name"]; 
            }
            else
            {
                echo "<br>You didn't give me your name.  Anyways...";
            }
            ?>
        
        
        </p>
        <p>
            <?php
                if($_POST["age"] != null)
                {
                    echo "You were " , $_POST["age"] , " years old right?";
                }
                else
                {
                    echo "How old were you again?";
                }
            ?>
        </p>
        <p>
            You voted for <?php echo $_POST["dropDown"]; ?> as the best Noble Sentinel?<br>Good choice there.
        </p>
        <p>
            <?php
            if($_POST["num1"] != null && $_POST["num2"] != null)
            {
            echo "So you entered " , $_POST["num1"] , " and ", $_POST["num2"] , ".<br>";
            echo "And you wanted to use ";
            
                switch($_POST["rad"])
                {
                    
                 case("add"):
                     $hold = "addition";
                     $res = $_POST["num1"] + $_POST["num2"];
                     break;
                 case("sub"):
                     $hold = "subtraction";
                     $res = $_POST["num1"] - $_POST["num2"];
                     break;
                 case("mult"):
                     $hold = "multiplication";
                     $res = $_POST["num1"] * $_POST["num2"];
                     break;
                 case("div"):
                     $hold = "division";
                     $res = $_POST["num1"] / $_POST["num2"];
                     break;
                 default:
                     echo "your own math because none of these options appealed to you huh?  Well to each their own.";
                     break;
                }
                echo $hold;
                if($hold != null)
                {
                echo " on it if I'm not mistaken?<br>";
                echo "Well the result of that is $res if you wanted to know.<br>";
                }
            }
            else
            {
                echo "You didn't fill out one (or both) of the numbers, so I can't do the math for you here.  Sorry, this is all on you here!<br>";
            }
            echo "Also, your note \"", $_POST["note"], "\" was recieved.";
            ?>
        </p>
        <div>
            <li><a class="c9option" href="Index.html">Return</a></li>
        </div>


    </body>
</html>