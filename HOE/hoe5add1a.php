<?php

require_once ("siteCommon.php");
require_once ("hoe5sql.php");

// Call the addMovie method

addActor($_POST['firstname'], $_POST['lastname'], (int) $_POST['age'],
   $_POST['gen'], $_POST['actoragent']);

displayPageHeader("New Actor {$_POST['firstname']} added");
?>

<p style="text-align: center">
    <a href="hoe5add1.php">[Add another actor]</a>
</p>

<?php
displayPageFooter();
?>
