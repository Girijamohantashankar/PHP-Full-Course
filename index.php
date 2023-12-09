<?php
    if(isset($_POST["name"])) {
$insert = false;
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if(!$con) {
            die("connection to this database failed due to".
                mysqli_connect_error());
        }
        // echo "database connect sucessfull";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $sql = "INSERT INTO `travel_trip`.`trip` (`name`, `email`, `phone`, `age`) VALUES ( '$name', '$email', '$phone', '$age');";
        echo $sql;
        if($con->query($sql) === TRUE) {
           $insert == true;
        } else {
            echo " ERROR: $sql <br> $con->error";
        }
        $con->close();
    }
    ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turist Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="conatiner">
        <h3>Welcome to our Turist Page</h3>
        <p> This Page is Basically for Turist Details and you fill the all field as our Requirement. Thank You!! </p>
       <?php
if($insert == true){
    echo "<h2 class='thanks'>Thanks For Submiting the Form we will get back to you soon !!!</h2>";
}
?>

       ?>
        <form action="index.php" method="POST">
            <input type="name" name="name" id="name" placeholder="Enter Your Name">
            <input type="email" name="email" id="email" placeholder="Enter Your email is">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <input type="number" name="age" id="age" placeholder="Enter Your Age">
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>





  


    <script src="index.js"></script>
    <!--   -->
</body>

</html>