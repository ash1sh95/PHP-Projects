<?php


require_once ("siteCommon.php");
require_once ("hoe5sql.php");

// declare and initialize Add/Edit flag variable

$editmode = false;

// if a numeric filmid was passed through the URL

if ((isset($_GET['actorpk'])) && (is_numeric($_GET['actorpk'])))
{
    // get the details for the actor to be edited
    
    $actorDetails = getActorDetailsByID((int)$_GET['actorpk']);
    
    // if actor details are returned for the actorid, set $editmode to true
    
    $editmode = (count($actorDetails) == 1);
}

// if mode is $editmode is true

if ($editmode)
{
   extract($actorDetails[0]);

    $formtitle = 'Update an Actor';
    $buttontext = 'Update';
 }
else  //otherwise, set the column variables to ""
{
    $namefirst = '';
    $namelast = '';
    $age = '';
    $gender = '';
    $actoragent = '';
   

    $formtitle = 'Add an Actor';
    $buttontext = 'Insert';
}

// call the displayPageHeader method in siteCommon.php

displayPageHeader($formtitle);
?>

<script src="hoe5jsLibrary.js" type="text/javascript"></script>

<form name ="addEditForm" id="addEditForm" action="hoe6edit1a.php" method="post" onsubmit="return checkForm(this)">

<?php
    if ($editmode)  //put the actorpk in a hidden field
    {
        echo '<input type="hidden" name="actorpk" value="' . $actorpk . '" />';
        
    }
    
    
?>

    <label for="firstname">First Name:</label>   
    <input type="text" name="firstname" id="firstname" maxlength="100" value="<?php echo $namefirst; ?>" autofocus required pattern="^[a-zA-Z0-9][\w\s\&,]*[a-zA-Z0-9\!\?\.]$" title="Actor first name has invalid characters" />
    <label for="lastname">Last Name:</label>         
    <input type="text" name="lastname" id="lastname" maxlength="100" value="<?php echo $namelast; ?>" required pattern="^[a-zA-Z0-9][\w\s\&,]*[a-zA-Z0-9\!\?\.]$" title="Actor last name has invalid characters" />
    <label for="age">Age:</label>        
    <input type="number" name="age" id="age" class="sm" value="<?php echo $age; ?>" required min="20" max="100" step="1"  />
    <legend>Gender: </legend>
    <label for="male">Male</label>
    <input type="radio" name="gen" value="M" <?php if ($gender=='M') { echo 'checked'; } ?> /> 
    <label for="female">Female</label>
    <input type="radio" name="gen" value="F" <?php if ($gender=='F') { echo 'checked'; } ?> /> <br />
    <label for="actoragent">ActorAgent:</label>   
    <input type="text" name="actoragent" id="actoragent" maxlength="100" value="<?php echo $actoragent; ?>" disabled required pattern="^[a-zA-Z0-9][\w\s\&,]*[a-zA-Z0-9\!\?\.]$" title="Actor Agent has invalid characters" />
    <p>
      <input type="submit" value="<?php echo $buttontext ?>" />
      <a href="hoe6all.php">Cancel</a>
    </p> 
</form>

<?php
// call the displayPageFooter method in siteCommon.php

displayPageFooter();
?>