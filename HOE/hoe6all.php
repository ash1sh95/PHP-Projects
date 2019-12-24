<?php

require_once ("siteCommon.php");
require_once ("hoe5sql.php");

// call the displayPageHeader method in siteCommon.php

displayPageHeader("Add/Update/Delete an Actor");

$actorList = getActorList();  //gets the list of actors

$output = <<<HTML
<section><table id="Actors with Specific ActorAgent">
HTML;

// display each actor with links to edit or delete it

foreach ($actorList as $actor)
{
    extract($actor);
    $output .= <<<HTML
    <tr>
        <td>
            $namefirst
        </td>
        <td>
            <a href="hoe6edit1.php?actorpk=$actorpk">[Edit]</a>
        </td>
        <td>
            <a href="hoe6delete1.php?actorpk=$actorpk">[Delete]</a>
        </td>
    </tr>
HTML;
}

$output .= <<<HTML
    <tr>
        <td colspan="3" align="center">
            <a href="hoe5add1.php">[Add an Actor]</a>
        </td>
    </tr>
</table></section>
HTML;

echo $output;

// call the displayPageFooter method in siteCommon.php

displayPageFooter();

?>
