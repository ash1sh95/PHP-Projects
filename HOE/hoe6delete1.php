
<?php


include_once ("hoe5sql.php");

if ((isset($_GET['actorpk'])) && (is_numeric($_GET['actorpk'])))
{
    deleteActor((int)$_GET['actorpk']);
}

header("Location: hoe6all.php");
exit;

?>
