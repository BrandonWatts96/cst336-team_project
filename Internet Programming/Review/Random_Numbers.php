<!DOCTYPE html>
<html>
    <head>
        <title>Randomization</title>
    </head>
    <body>
        
        <div>
            <h1>
                <?php
                    $name = 'Gacha Roll';
                    echo $name;
                ?>
            </h1>
        </div>
        
        <div>
            <table>
            <?php
                echo "<tr>";
                    echo "<td>";
                        $name = rand(1,100);
                        echo $name;
                    echo "</td>";
                    
                    echo "<td>";
                        if($name <= 5)
                        {
                            echo "\n5 star";
                        }
                        else if($name > 5 && $name <= 20)
                        {
                            echo "\n4 star";
                        }
                        else if($name > 20 && $name <= 50)
                        {
                            echo "\n3 star";
                        }
                        else if($name > 50 && $name <= 80)
                        {
                            echo "\n2 star";
                        }
                        else if($name > 80)
                        {
                            echo "\n1 star";
                        }
                        else
                        {
                            echo 'Failure';
                        }
                    echo "</td>";
                echo "</tr>";
            ?>
            </table>
        </div>
        
        <div>
            <table>
            <?php
                $total = 0;
                $count = 0;
            
                for($i = 0; $i < 9; $i++)
                {
                    $track = rand(1,100);
                    
                    $total += $track;
                    $count++;
                    
                    echo "<tr>";
                    
                        echo "<td>";
                            echo $track . "\n";
                        echo "</td>";
                        
                        echo "<td>";
                            if($track % 2 == 0)
                            {
                                echo "\nEven\n";
                            }
                            else
                            {
                                echo "\nOdd\n";
                            }   
                        echo "</td>";
                    
                    echo "</tr>";
                }
                echo "<tr>";
                    echo "<td>";
                        echo "Total: ".$total;
                    echo "</td>";
                    echo "<td>";
                        echo "Average: ".$total/$count."\n";
                    echo "</td>";
                echo "</tr>";
            ?>
            </table>
        </div>

    </body>
</html>