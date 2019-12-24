<?php

require_once ("siteCommon.php");
require_once ("PHPHOE4SQL.php");

// call the displayPageHeader method in siteCommon.php

displayPageHeader("<br />Search for Actor(s) by lastname,age and/or gender <br />");
?>

<section>
    <form action="PHPHOE4Results.php" method = "post" name="SearchByActorMultiCriteria" id="SearchByActorMultiCriteria">
   <label for="lastname"> Last Name:  </label>
   <input type="text" name="lastname" id="lastname" maxlength="50" /><br /><br />
   <label for="age">Age:   </label>
   <input name="age" id="age" type="number" min="20" max="100" step="1" /><br /><br />
            <legend>Gender: </legend>
            <label for="male">Male</label>
            <input name="gen" id="gen" type="radio" value="M"/>
            <label for="female">Female</label>
            <input name="gen" id="gen" type="radio" value="F" />
              <label for="nogender">No Gender Selected</label>
              <input name="gen" id="gen" type="radio" value="" checked/>
            

   <p>
      <input name = "submit" type="submit" value="Search" />
   </p>      

</form>
</section>
<?php

// call the displayPageFooter method in siteCommon.php

displayPageFooter();
?>
