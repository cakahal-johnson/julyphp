<?php

//Echo - output
echo 'Hello world!';

echo '<br>';
echo 123456;
echo '<br>';


echo '<h1>This is our first class</h1>';

// Print - is also similar to echo, but a bit slower
print 'Cakahal Johnson';
echo '<br>';


// print_r Gives a bit more info, which can be used to print arrays
print_r('Hello world');
echo '<br>';


//var_dump - Even more info like data-type and length
var_dump('Hello World');
echo '<br>';
var_dump([1,23,4]);

echo '<br>';

// Escaping characters with a backslash
echo 'Is your name 0\'really?';
echo '<br>';

echo "Is your name 0\<h1> really?";

// single and multi-line comments /* */

// concatination uses dot .

?> <!-- php ends here -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Php Class</title>
    </head>
    <body>
        <h1>Hello <?php echo 'Cakahal  Johnson'; ?> </h1>

        <?php
        $name = 'Cakahal johnson'; // Strings single or double quotes
        $age = 70; // Integer
        $hasKIds = true; // Boolean
        $cashonHand = 10.5; // float

        var_dump($cashonHand);
        echo '<br>';

        // adding variables to strings
        echo "$name is $age years old";
        echo '<br>';

        // or more better to do this
        echo "${name} is ${age} years old";

        // concatenation Strings
        echo '<h3>' . $name . ' is ' . $age . ' years old </h3>';

        // Aritmetic Operators
        echo 70 + 70;
        echo '<br>';

        echo 70 - 20;
        echo '<br>';
    
        echo 70 * 20;
        echo '<br>';
    
        echo 70 / 20;
        echo '<br>';
    
        echo 70 % 20;
        echo '<br>';

        // Constants - connot be changed
        define('HOST', 'localhost');
        define('USER', 'root');

        printf(HOST);
        echo '<br>';

        var_dump(USER);

        //  Is Case-insensitive
       // define("Greetings", 'Hello world', TRUE);

       // echo Greetings;

 
       echo '<br>';

        //Creating an Array
        define("cars", [
            "Benz",
            "lexus",
            "RX 350"
        ]);

        echo cars[0];
        echo '<br>';

        echo cars[1];
        echo '<br>';

        echo cars[2];
        echo '<br>';

        // Creating as an Object class OOP
        define("HI", "Php is awesome!!");

        function myOBJ(){
            echo HI;
        }

        // calling out as an Object
        myOBJ();
        echo '<br>';

        echo HI;




        
        ?>
    </body>
</html>







