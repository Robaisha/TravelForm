<?php
$insert=false;
if(isset($_POST['Name'])){
    
    $server="localhost";
    $username="root";
    $password="";
    $dbname="travelform";
    $con = mysqli_connect($server,$username,$password,$dbname);

    if(!$con){
        die("Connection to this database failed due to".mysqli_connect());
    }
    //  echo "Success connecting to the db";
    $Name= $_POST['Name'];
    $Age= $_POST['Age'];
    $Gender= $_POST['Gender'];
    $Email= $_POST['Email'];
    $Phone= $_POST['Phone'];
    $desc= $_POST['Other'];
    $sql = "INSERT INTO `trip`(`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$Name','$Age','$Gender','$Email','$Phone','$desc',current_timestamp());";
    //echo $sql;

    if($con->query($sql)==true){
        $insert=true;
        //echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        //$insert=false;
    }

        $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <img class="bg" src="image.jpg" alt="FAST">
	<div class="container">
        <h3>Welcome to Trip Form</h3>
        <p>Enter your details to confirm your participation..</p>
        <?php 
            if($insert == true){
                echo "<p class='submitMSG'>Thanks for submitting your form</p>";
                
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="Name" id="name" placeholder="Enter your Name">
            <input type="text" name="Age" id="age" placeholder="Enter your Age">
            <input type="text" name="Gender" id="sex" placeholder="Enter your Gender">
            <input type="text" name="Email" id="email" placeholder="Enter your email">
            <input type="text" name="Phone" id="phone" placeholder="Enter your phone">
            <textarea name="Other" id="desc" cols="10" rows="10" placeholder="Enter any other information.."></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>

  </body>
</html>