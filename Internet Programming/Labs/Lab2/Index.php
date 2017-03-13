<!DOCTYPE html>
<html>
    
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>LED Project</title>
  <style type="text/css">
    /* NO REPEAT PAGE BACKGROUND!
 * html and body rules make it possible for gradient to 
 * extend through the whole page 
 */
 
  </style>
  
  <link rel="stylesheet" type="text/css" href="style.css"/>
  
</head>

<body class="purple-gradient">
    
    <?php
        //Creates a random color.
        $rand = dechex(rand(0x000000, 0xFFFFFF));
        
        //Take the string to be drawn and calls for each letter.
        function draw($string, $color)
        {
            //Runs the draw for each letter.
            for($i = 0; $i < strlen($string); $i++)
            {
                //Determines if the letters are supposed to be rainbow
                if($color == "rainbow")
                {
                    //Creates a new random color for each iteration.
                    $rand = dechex(rand(0x000000, 0xFFFFFF));
                    drawLetter($string[$i], "#$rand");
                }
                else {
                drawLetter($string[$i], $color);
                }
            }
        }
        
        //Draws a letter
        function drawLetter($letter, $color)
        {
            $letter = strtoupper($letter);
            echo "<table border=1>";
            for($i = 0; $i < 8; $i++) //Handles rows
            {
                echo "<tr>";
                for($j = 0; $j < 8; $j++) //handles columns
                {
                    //sets the default case to white
                    $colorDisp = "white";
                    //sets the default case to empty letter
                    $letterDisp = "";
                    //Picks the letter to draw
                    switch($letter)
                    {
                        case("A"):
                        {
                            if($i < 2 || $j < 2 || $j > 5 || $i == 4){
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                        case("E"):
                        {
                            if($j < 2 || $i < 2 || ($i >= 3 && $i <= 4) || $i > 5)
                            {
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                        case("K"):
                        {
                           if($j== 0 || $j==1 || $j==2 && $i == 3 || $j==2 && $i == 4 || $j==3 && $i == 4 || $j==3 && $i ==3  || $j==5 && $i == 2  || $j==4 && $i == 2  || $j==5 && $i == 1  || $j==6 && $i == 1 ||  $j==7 && $i == 0 ||  $j==6 && $i == 0
					|| $j==4 && $i == 5 || $j==5 & $i == 5 || $j==6 & $i == 6 || $j==5 & $i == 6 || $j==7 & $i == 7 || $j==6 & $i == 7)
                            {
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                        case("M"):
                        {
                            if(!($i == 0 && $j == 3) && !($i == 0 && $j == 4) && !($i > 2 && $j > 1) 
					&& !($i == 2 && $j == 2) && !($i == 2 && $j == 5) || ($i > 2 && $j > 5) 
					|| ($i == 3 && $j == 3) || ($i == 3 && $j == 4))
                            {
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                        case("N"):
                        {
                            if($j < 2 || $j > 5 || $i < 2 && $j < 3 || $i >= 2 && $i <= 3 && $j == 3 || $i >= 4 && $i <= 5 && $j == 4 || $i >= 6 && $i <= 7 && $j == 5)
                            {
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                        case("O"):
                        {
                            if($i < 2 || $j < 2 || $j > 5 || $i > 5)
                            {
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                        case("T"):
                        {
                            if($i < 2 || ($j >= 3 && $j <=4))
                            {
                                $colorDisp = $color;
                                $letterDisp = $letter;
                            }
                            break;
                        }
                    }
                    
                    echo "<td style = 'background-color: $colorDisp'>";
                        echo " ";
                    echo "</td>";
                }
                
                
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
    <main>
        
        <?=draw("Take", "blue")?>
        <br>
        <?=draw("On", "#$rand")?>
        <br>
        <?=draw("Me", "rainbow")?>

     
     </main>
  <!--   </div> -->
</body>

</html>