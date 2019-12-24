<?php
require_once ("siteCommon.php");
require_once ("hoe5sql.php");

// call the displayPageHeader method in siteCommon.php

displayPageHeader("Add an Actor");
?>

<script src="hoe5jsLibrary.js" type="text/javascript"></script>

<form name ="addForm" id="addForm" action="hoe5add1a.php" method="post" onsubmit="return checkForm(this)">

   <label for="firstname">First Name:</label>   
   <input type="text" name="firstname" id="firstname" maxlength="100" autofocus required pattern="^[a-zA-Z0-9][\w\s\&,]*[a-zA-Z0-9\!\?\.]$" title="Actor first name has invalid characters"/>
    <label for="lastname">Last Name:</label>   
   <input type="text" name="lastname" id="lastname" maxlength="100" autofocus required pattern="^[a-zA-Z0-9][\w\s\&,]*[a-zA-Z0-9\!\?\.]$" title="Actor last name has invalid characters"/>
   <label for="age">Age:</label>        
   <input type="number" name="age" id="age" required min="20" max="100" step="1"  class="sm" />
   <legend>Gender: </legend>
    <label for="male">Male</label>
    <input name="gen" id="gen" type="radio" value="M" checked/>
            <label for="female">Female</label>
            <input name="gen" id="gen" type="radio" value="F" />
             <label for="actoragent">Actor Agent:</label>   
   <input type="text" name="actoragent" id="actoragent" maxlength="100" autofocus required pattern="^[a-zA-Z0-9][\w\s\&,]*[a-zA-Z0-9\!\?\.]$" title="Actor agent has invalid characters"/>
    <p>
      <input type="submit" value="Add Actor" />
    </p>        
</form>

<?php

// call the displayPageFooter method in siteCommon.php

displayPageFooter();
?>