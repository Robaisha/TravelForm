<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is my First php website</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div>
        This is my first website
    <?php
    $var1=34;  //variable in php
    $var2=45;
    echo $var1;
    echo $var2;
    echo "<br>";
    echo $var1 + $var2;
    echo "<br>";
    echo "Hello world and this is printed using php";
    
    //operators in PHP
    echo "The value of variable 1 + variable 2 is ";
    echo $var1/$var2; //arthimetic operator
    $newvar=$var1; //assignment operator
    echo"<br>";
    echo $newvar;
    echo "<br>";
    echo var_dump(1<4); //bool Data type
    echo "<br>";
    echo var_dump(1>4);
    echo "<br>";
    echo var_dump(1!=4);
    echo "<br>";
    
    $var1++; //increment
    echo $var1;
    echo "<br>"; //decrement
     $var2--;
    echo $var2;
    //logical Operators in PHP
    // and(&&)
    // or(||)
    // xor
    // !
    $myvar= (true) and (true);
    echo var_dump($myvar);
    //Datat types in PHP
    // 1.string
    // 2.integer
    // 3.float
    // 4.boolean
    // 5.array
    // 6.object
    $var="This is a string";
    $into =67;
    echo var_dump($var);
    echo var_dump($into);

    //constants
    define('PI',3.14);
    echo "<br>";
    echo PI;


    ?>
    </div>
	<script src="index.js"></script>
  </body>
</html>