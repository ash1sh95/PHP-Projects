<?php

function displayPageHeader($pageTitle)
{
   $output = <<<ABC
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <title>Rockwell Studios</title>
      <link rel="stylesheet" href="stylesCommon.css" type="text/css" />
   </head>

   <body>
      <header>
         <h2>Rockwell Studios - $pageTitle </h2>
      </header>
ABC;
   echo $output;
}
   
function displayPageFooter()
{
   $year = date('Y');
   $output = <<<ABC
   <footer>
      <address>
         &copy; $year Rockwell Studios
      </address>
   </footer>   
 </body>
</html>
ABC;
   echo $output;
}
?>