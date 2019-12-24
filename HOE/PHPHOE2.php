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
        $localBigMacPrice = array('South Africa' => 1.77,'United States' => 4.93,'Ukraine' => 1.54,'Australia' => 3.74,'China' => 2.72, 'Denmark' => 4.32, 'New Zealand' => 3.91, 'Ireland' => 4.25, 'United Kingdom' => 4.22, 'Israel' => 4.29);
        $averageBigMacPrice = array_sum($localBigMacPrice)/count($localBigMacPrice);
        echo "Average BigMacPrice is " . $averageBigMacPrice;
        echo "<br /><br />";
        $closest = null;
        foreach ($localBigMacPrice as $aCountryName => $aPrice) 
        {
            if ($closest == null || abs($averageBigMacPrice - $closest) > abs($aPrice - $averageBigMacPrice)) 
            {
                $closest = $aPrice;
            }
        }
        $countryName = array_search($closest, $localBigMacPrice);
        echo $countryName ." ".$closest;
        ?>
    </body>
</html>
