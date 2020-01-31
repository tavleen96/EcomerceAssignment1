<html>
<body>
   <?php 
    $a= 5;
    $b=10;
     $area=($a * $b)/2; //here variable a and b are base and heights
    $area = number_format($area, 2);  //rounded the area 
    
    echo '<p> The area of triangle is <Strong>' . $area . '</strong></p>' ; //display the area with concatination
    
    $MY_NAME = 'Karamjit Singh' ;
      
    $MY_NAME = strtoupper($MY_NAME); // Convering to uppercase letters

echo '<p>My first name is <strong>' . $MY_NAME . '</strong></p>'; // Display that name in uppercase
    
    
    
    ?>
    </body>
</html>
