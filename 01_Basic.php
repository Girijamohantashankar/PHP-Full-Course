<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>✅ PHP FULL COURSE</h1>









    <?php
    // ❌In php variable is not assign like [var a= 10; , const b = "string"]
    
    //✅ In php we are directly diclear the variable
    
    echo "hello";
    $var1 = 10;
    $var2 = 20;

    // 😊Php Operators
    
    // ✅Arithmetic Operator
    echo "<h1>✅Arithmetic Operator</h1>";
    echo "<br>";
    echo $var1 + $var2;
    echo "<br>";
    echo $var1 - $var2;
    echo "<br>";
    echo $var1 / $var2;
    echo "<br>";
    echo $var1 * $var2;
    echo "<br>";



    // ✅Assignment Operator
    echo "<h1>✅Assignment Operator</h1>";
    $var1 += 2;
    echo $var1;
    echo "<br>";
    $var1 -= 2;
    echo $var1;
    echo "<br>";
    $var1 /= 2;
    echo $var1;
    echo "<br>";
    $var1 *= 2;
    echo $var1;
    echo "<br>";





    // ✅Compairson  Operator
    echo "<h1> ✅Compairson Operator</h1>";

    echo var_dump(1 == 4);
    echo "<br>";
    echo var_dump(1 != 4);
    echo "<br>";
    echo var_dump(1 >= 4);
    echo "<br>";
    echo var_dump(1 <= 4);
    echo "<br>";


    // ✅Icrement/Decrement  Operator
    echo "<h1>✅Icrement/Decrement Operator</h1>";
    echo "<br>";
    echo $var1;
    echo "<br>";

    $var1++;
    echo $var1;
    echo "<br>";

    $var1--;
    echo $var1;
    echo "<br>";

    ++$var1;
    echo $var1;
    echo "<br>";

    --$var1;
    echo $var1;
    echo "<br>";


    // ✅Logical  Operator
    echo "<h1>✅Logical Operator</h1>";
    echo "<br>";

    echo "✔ && -> And";
    echo "<br>";

    echo "✔ || -> OR";
    echo "<br>";

    echo "✔ && !- > Not Equal";
    echo "<br>";
    echo "✔ && xor- > xor";
    echo "<br>";

    $myvar = (true and true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false and true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false and false);
    echo var_dump($myvar);
    echo "<br>";


    $myvar = (false or false);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (true or true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (true xor true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false xor true);
    echo var_dump($myvar);
    echo "<br>";



    echo "<h1> ✅ DATA Types In PHP</h1>";
    // ✅ DATA Types In PHP
    
    // 1. String
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Array
// 6. Object
    
    $var = "This is a String";
    echo var_dump($var);
    echo "<br>";

    $var = 67;
    echo var_dump($var);
    echo "<br>";

    $var = 67.12;
    echo var_dump($var);
    echo "<br>";

    $var = true;
    echo var_dump($var);
    echo "<br>";

    // How to make Constant in PHP
    
    echo "<h1>✅Make A Constant</h1>";
    define("GI", 4544);
    echo GI;
    echo "<br>";





























    ?>
</body>

</html>