<?php


require_once ("hoe5sql.php");

// if $_POST has a actorpk element, call the update method

if (isset($_POST['actorpk']))
{
    updateActor((int)$_POST['actorpk'], $_POST['firstname'], $_POST['lastname'], (int)$_POST['age'],
            $_POST['gen']);
}
else //call the add method
{
    addActor($_POST['firstname'], $_POST['lastname'], (int)$_POST['age'], 
             $_POST['gen'], $_POST['actoragent']);
}

header("Location: hoe6all.php");
exit;

?>
