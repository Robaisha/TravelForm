<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:grey;
        margin:auto;
        padding:24px;
    }
  </style>
  <body>
	<div class="container">
        <h1>Lets learn PHP</h1>
        Your party Status here
    <?php
    //conditional Statement in PHP
    $age=25;
    if($age>15 && $age<30){
        echo "<br>";
        echo "You can go to the party";
    }
    else if($age>30){
        echo "<br>";
        echo "You cannot go to the party";
    }
    else{
        echo "<br>";
        echo "Please stay home...";
    }
    //Arrays in PHP
    $languages = array("Python","C++","C sharp","Java");
    echo "<br>";
    echo count($languages);
    echo $languages[1];

    //LOOPS in PHP
    $a=0;
    //While loop
    echo "<br>";
    echo "<br>";
    echo "WHILE LOOP...";
    while ($a < 4 ) {
        echo "<br>";
        echo $a; 
        echo "<br>";
        echo $languages[$a]; //while loop in array
        $a++;
    }

    //Do-while 
    echo "<br>";
    echo "<br>";
    echo "DO WHILE LOOP...";
    $a=0;
    do{
        echo "<br>";
        echo $a; //simple while loop
        echo "<br>";
        echo $languages[$a]; //while loop in array
        $a++;
    } while ($a < count($languages) );

    //For loop
    echo "<br>";
    echo "<br>";
    echo "FOR LOOP...";
    for ($a=0; $a < 10; $a++) { 
        echo "<br>";
        echo $a;
    }
    
    //Foreach loop
    echo "<br>";
    echo "<br>";
    echo "FOREACH LOOP...";
    foreach ($languages as $value ) {
        echo "<br> The value is  ";
        echo $value;
    }
 
    //FUNCTIONS
    function count1($num){
        while($num>0){
            echo "<br>HELLO";
            $num--;
        }
    }
    count1(5);

    //Strings
    

    ?>
    </div>
  </body>
</html>