<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<style>
    .container {
        color: black;
        background-color: grey;
        text-align: center;
    }

    h1 {
        color: blueviolet;
    }
</style>

<body>
    <div class="container">
        <h1>This is a Container</h1>



        <?php
        // if/else
        echo "<h1>if/else Condition</h1>";
        $age = 7;
        if ($age > 18) {
            echo "You can go to the party";
        } elseif ($age == 7) {
            echo "You are just 7 years Old";
        } else {
            echo "You can not go to the party";
        }
        echo "<br>";


        // Array
        echo "<h1>Array</h1>";
        $language = array("python", "HTML", "JQuery", "CSS", "JAVSCRIPT", "JAVA", "C++");
        echo count($language) . "<br>";
        echo $language[1];
        echo "<br>";



        // Loops
        echo "<h1>Loops</h1>";
        $a = 0;
        while ($a <= 10) {
            echo "<br> The value of a is: ";
            echo $a;
            $a++;
        }


        // Iterating arrays in php
        echo "<br>";
        echo "<h1>Iterating arrays in php using while loop</h1>";
        $a = 0;
        while ($a < count($language)) {
            echo "<br> The Value OF language is: ";
            echo $language[$a];
            $a++;

        }
        // Do While Loop
        echo "<br>";
        echo "<h1>Do While Loop</h1>";
        $a = 10;
        do {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        } while ($a < 10);

        // For Loop
        echo "<br>";
        echo "<h1>For Loop</h1>";
        $a = 40;
        for ($a = 0; $a <= 10; $a++) {
            echo "<br> The Value of a is: ";
            echo $a;
        }


        // For Each Loop
        
        echo "<br>";
        echo "<h1>For Each Loop</h1>";
        foreach ($language as $value) {
            echo "<br> The value of Foreach is: ";
            echo $value;
        }

        // Function in php
        echo "<br>";
        echo "<h1>Function in php</h1>";

        function output()
        {
            echo "Girija";
        }
        output();




        function number_print($num)
        {
            echo "<br>The value of Number is: ";
            echo $num;
        }
        number_print(42);
        ?>
    </div>
</body>

</html>