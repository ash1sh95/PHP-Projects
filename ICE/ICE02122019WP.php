<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Language Basics</title>
    </head>
    <body>
        <?php
        // put your code here
        echo "Look I can code in PHP";
        echo "<br /><br />";
        //declare variables
        $favBook = "Fountain Head";
        echo "Veena's favourite book is $favBook";
        //single quotes
        echo "<br /><br />";
        echo 'Veenas favourite book is $favBook';
        //escaping double quotes
        echo "<br /><br />";
        echo "To quote Veena, \"$favBook is the best novel i have read in my life!\""; 
        //heredoc syntax
        echo "<br /><br />";
        $output = <<<ABC
                To quote Veena,"$favBook is the best novel i have read in years!" 
ABC;
        echo $output;
        //constants
        
        define('VEENAQUOTE','Be Simple and Sample');
        echo "<br /><br />";
        echo VEENAQUOTE;
        //use built-in methods
        echo "<br /><br />";
        echo str_repeat('I will not resist the future' . '<br />' , 20);
        //array
        $starBucks = array(3.20,5.95,7.89);
        echo "The price of a grande coffee is $starBucks[1]";
        //associative array
        $coffeePrices = array('tall' => 3.20,'grande' => 5.95,'venti' => 7.89);
        echo "<br /><br />";
        echo "The price of a tall coffee is {$coffeePrices['tall']}";
        echo "<br /><br />";
        foreach ($coffeePrices as $aPrice)
        {
            echo $aPrice . "<br />";
        }
        echo "<br /><br />";
        foreach($coffeePrices as $aSize => $aPrice)
        {
            echo $aSize . " " . $aPrice . "<br />";
        }
        //print_r function
        echo "<br /><br />";
        
        echo "<pre>";
        print_r($coffeePrices);
        echo "</pre>";
        
        #include file with function
        include ("funDemo.php");
         echo "<br /><br />";
         echo multiplyTwoNumbers(34,56);
         //if statements
         echo "<br /><br />";
         $starSign = "Aquarius";
         if($starSign == "Aries")
         {
             echo 'You are the greatest';
         }
         elseif ($starSign == "Gemini") 
         {
          echo 'You are rich';    
          }
          elseif($starSign == "Libra")
          {
              echo 'You are social';
          }
          else
          {
              echo 'You are smart';
          }
          //switch statement
         echo "<br /><br />";
          Switch($starSign)
          {
              case "Libra":
                  echo 'You are good';
                  break;
              case "Aries":
                  echo 'You are great';
                  break;
              case "Aquarius":
                  echo 'You are best';
                  break;
              default :
                  echo 'Enjoy!!';
          }
          //while loop
           echo "<br /><br />";
           $numTimes = 10;
           while($numTimes >=0)
           {
               echo "as you sow; so you reap <br />";
               $numTimes--;
           }
           //do loop
           echo "<br /><br />";
           $numTimes = 10;
           do
           {
                echo "practice makes man perfect <br />";
                $numTimes--;
           }
           while ($numTimes >=0);
            //for loop
           echo "<br /><br />";   
           for($i=0;$i <= 10; $i++)
           {
               echo "be simple and a sample <br />";
           }
        ?>
    </body>
</html>
