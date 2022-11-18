<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Test</title>
</head>
<body>

<?php
        //variable declaration
        $text = "Jabed";//string 
        $x = 20; //integer
        $y = 10.5;
        $a  = 2;
        $b = 3;

        //arithmatic operation
        $c = $a ** $b;
        $add = $x + $y;
        $sub = $x - $y;
        $mul = $x * $y;
        $div = $x / $y;
        $mod = $x % $y;

        //printing ourputs
        echo "<h1>Hello World </h1><br>";
        echo "<h1>This is ". $text."</h1><br>";
        echo "Summation of these two number is ". $add."<br>"; 
        echo "Subtraction of these two number is ". $sub."<br>";
        echo "Multiplication of these two number is ". $mul."<br>";
        echo "Division of these two number is ". $div."<br>";
        echo "Modulus ". $mod."<br>";
        echo "power ". $c."<br><br>";

        //if-else
        echo "If-else";
        if ($x>$y) {
            echo "X is greater than Y<br><br>";
        }else {
            echo "Y is greater than X <br><br>";
        }

        //for loop
        echo "for loop";
        for ($i=0; $i <= 10; $i++) { 
            if ($i==0) {
                continue;
            }
            echo " <br>". $i;
            if ($i==9) {
                break;
            }
        }

        //function
        echo "<br><br>Function";
        function message(){
            echo "Hello Motherfuckers <br><br>";
        }
        message(); //function calling

        function names($fname){
            echo "$fname <br>";
        }
        names("Jabed");
        names("Raihan");
        names("Mamun");
        echo "<br><br>";

        //array
        $names = array("Jabed","Mamun","Raihan");
        echo $names[1]." is a motherfucker <br>";
        echo "Array size = ".count($names);//aray size
        echo "<br><br>";

        
        //for-each
        foreach($names as $values){
            echo "$values <br>";

        }
        echo "<br><br><br>";

?>
</body>
</html>