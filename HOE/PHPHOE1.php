<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $var1 = "HandsOnExercise";
         echo $var1;
         echo "<br/><br/>";
         $substring1= substr($var1, 0,3);
         $substring2= substr($var1, -3);
         $var2 = $substring1.$substring2;
         echo $var2;
         #include file with function
         include("PHPHOEFunction.php");
         echo "<br /><br />";
         $var3 = "tenstrings";
         echo $var3;
         echo "<br /><br />";
         echo stringLengthOddOrEven($var3);
         echo "<br /><br />";
         $var4 = "thirteenchars";
         echo $var4;
         echo "<br /><br />";
         echo stringLengthOddOrEven($var4);
        ?>
    </body>
</html>
