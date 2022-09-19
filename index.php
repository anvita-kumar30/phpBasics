<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website
    <?php
    
        echo "Hello world and this is printed using PHP";
        // Single line comment
        /*
            This
            is 
            a
            multi
            line
            comment
        */
        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable2;

        //Arithmetic Operators 
        echo "<br>";
        echo "The value of varible1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of varible1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of varible1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "The value of varible1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
        //Assignment Operators
        echo "<br>";
        $variable1 = 100;
        $variable2 =$variable1;
        echo "the value of the variable now is ";
        echo $variable2;
        echo "<br>";
        $variable2 +=10;
        echo "the value of the variable now is ";
        echo $variable2; 
        echo "<br>";
        $variable2 -=10; 
        echo "the value of the variable now is ";
        echo $variable2; 
        echo "<br>";
        $variable2 *=10; 
        echo "the value of the variable now is ";
        echo $variable2; 
        echo "<br>";
        $variable2 /=10;
        echo "the value of the variable now is ";
        echo $variable2; 
        echo "<br>";
        // Comparison Operators
        echo "<br>";
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        // Increment/Decrement Operators 
        echo "<br>";
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";
        echo $variable1;
        // Logical Operator
        // and (&&)
        // or (||)
        // xor 
        // not (!)
        // $myVar = (true and true);
        // $myVar = (false and true);
        // $myVar = (false and false);
        // $myVar = (true and false);
        // $myVar = (true or false);
        // $myVar = (true xor true);
        // $myVar = (false and true);
        // $myVar = (false xor false);
        echo "<br>";
        $myVar = (true and false);
        echo "<br>";
        echo var_dump($myVar);
        echo "<br>";
        

    ?>

    <?php
    // define('PI', 3.14);
        // Data types in php
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean 
        // 5. Array
        // 6. Object
        echo "<br>Data types <br>";
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";
        $var = 67;
        echo var_dump($var);
        echo "<br>"
        // $var = 67.1; 
        // echo var_dump($var);    output:float(67.1)
        // echo "<br>";    
        // $var = true;    
        // echo var_dump($var);    output:bool(true)
        // echo "<br>"
        // echo PI;
    ?> 
    </div>
</body>
</html>