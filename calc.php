<!DOCTYPE html>

<html>
    <head>
        <title>Binary Calculator</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css"> 
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <script src="effects.js"></script>
    </head>

    <body onload="typeWriter()">
        <h1 id="pageHeading">Binary Calculator</h1>
        <h3 id="signed" ></h3>

        <form action="calc.php" method="GET">
            <input type="text" name="number" id="number">
            <br>
            <br>
            <input type="submit" value="Submit" id="submitbutton">
        </form>

        <?php 
            $numToCalc = $_GET["number"];

            checkLength($numToCalc);

            function calcNumber($arr) {
                $result = bindec($arr);
                echo $result;
                
            }

            function checkLength($string) {
                if (strlen($string) < 8) {
                    echo "Sorry, your number is too short.";
                } elseif (strlen($string) > 8) {
                    echo "Sorry, your number is too long.";
                } elseif (strlen($string) == 8) {
                    $newNum = str_split($string);
                    checkNum($newNum);
                }   
            }

            function checkNum($arr) {
                for ($x = 0; $x <= sizeof($arr); $x++) {
                    if ($arr[$x] > 1 || $arr[$x] < 0) {
                        echo "Sorry, all numbers must be either 1 or 0";
                    break;
                    }
                }

                $newstring = implode(" ", $arr);
                
                calcNumber($newstring);

            }
            
        ?>

        
    </body>
</html>