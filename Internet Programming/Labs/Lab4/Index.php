<!DOCTYPE html>
<html>
    <head>
        <title>Candidate Support</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <meta charset = "UTF-8" />
    </head>
    <body>
        
         <?php
        session_start();
        
        $name = $_POST['name'];
        $age = $_POST['age'];
        
        ?>
        
        
        <div>
            <h1>Support Your Presidential Candidate</h1>
        </div>

        <form action="result.php" method="POST">
          <div>
            <label>Enter your name:</label> <input type="text" name="name" value=""><br>
          </div>
          <div>
            <label>Age:</label> <input type="text" name="age" value=""> (Must be 18 or older)<br><br>
          </div>
          
          <div>
            <label>Select your Candidate: </label>
            <select name="dropDown" >
                   <option value = "Aajimu">Aajimu</option>
                   <option value = "Artorias">Artorias</option>
                   <option value = "Connor">Connor</option>
            </select>
          </div>
          <div>
            <b>Merchandise</b><br>
        <input type="checkbox" name="cbox1" value="Yes"> <label for="cbox1">Mug ($15)</label><br>
        <input type="checkbox" name="cbox2" value="Yes"> <label for="cbox2"> Cap ($20)</label>
        <input type="checkbox" name="cbox3" value="Yes"> <label for="cbox3"> Tote Bag ($10)</label>
        <input type="checkbox" name="cbox4" value="Yes"> <label for="cbox4"> Pin ($5)</label>
          </div>
          <div>
            <b>Campaign Magazine ($10 per month)</b><br>
        <input type="radio" name="sub" value="one"> 1 month 
        <input type="radio" name="sub" value="quarter"> 3 month 
        <input type="radio" name="sub" value="half"> 6 month 
        <input type="radio" name="sub" value="year"> 12 month 
          </div>
          <div>
          <input type="submit" value="Buy Now">
          </div>
        </form>
        
    </body>
</html>