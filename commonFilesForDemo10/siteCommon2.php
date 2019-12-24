<?php
   /* 
    Purpose: Methods to render Common Site Header and Footer
    Author: LV
    Date: March 2019
     */
        
function displayPageHeader($pageTitle)
{
   $output = <<<ABC
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <title>Rockwell Studios</title>
      <link rel="stylesheet" href="../commonFilesForDemo10/stylesCommon2.css" type="text/css" />
   </head>

   <body>
      <header>
         <h2>Rockwell Studios - $pageTitle </h2>
      </header>
      <nav>
         <ul>
            <li><a href="d10home.php">Home</a></li>
            <li><a href="d10search.php">Search Movies</a></li>
            <li><a href="d10myreviews.php">My Reviews</a></li>
ABC;

// the session array element "userInfo" will be set (see d8loginform.php) if the user has been authenticated

$logStatus = (isset($_SESSION['userInfo']));   

// if the user is authenticated, display "Log Out", else Log In"

    if ($logStatus)
    {
        $output .= '<li><a href="d10logout.php">Log Out</a></li>';
    }
    else
    {
        $output .= '<li><a href="d10loginform.php">Log In</a></li>';
    }
  
    $output .= "</ul></nav>";

   echo $output;
}
   
function displayPageFooter()
{
   $year = date('Y');
   $output = <<<ABC
   <footer>
      <address>
         &copy $year Rockwell Studios
      </address>
   </footer>   
 </body>
</html>
ABC;
   echo $output;
}
?>