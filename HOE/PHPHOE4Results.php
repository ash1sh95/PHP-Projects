<?php

require_once ("siteCommon.php");
require_once ("PHPHOE4SQL.php");

// $_POST is an associative array of the values passed via the HTTP POST method

$lastName = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gen'];

// remove any potentially malicious characters

$lastName = preg_replace("/[^a-zA-Z0-9\s]/", '', $lastName);

// call the displayPageHeader method in siteCommon.php

$heading = <<<ABC
You searched for<br />
Actor LastName: '$lastName' <br />
Actor Age: '$age' <br />
Actor Gender: '$gender'
ABC;

displayPageHeader($heading);

//Call the getActorsByMultiCriteria method

$actorList = getActorsByMultiCriteria($lastName,$age,$gender);

// get a count of the number of actors returned by the method

$matchingRecords = count($actorList);

echo "<section>";

if ($matchingRecords == 0)
{
   echo "<h3>No matches found for the search term(s)</h3>";
}
else
{   
// prepare the output using heredoc syntax

$output = <<<ABC
<table>
   <caption>$matchingRecords actor(s) found</caption>
   <tbody>
        <colgroup>
                <col class="firstcol" />
            </colgroup>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                </tr>
            </thead>
ABC;

    foreach ($actorList as $actor)
    {
        extract($actor);
        $output .= <<<ABC
                
        <tr>
            <td> $actor[NameFirst] </td>
            <td> $actor[NameLast] </td>
            <td> $actor[Age] </td>
            <td> $actor[Gender]</td>
      
ABC;
    }
    
    $output .= "<tbody></table>";
}
$output .= <<<ABC
<p style="text-align: center">
    <a href="PHPHOE4Search.php">[Back to Search Page]</a>
</p></section>
ABC;

// display the output

echo $output;

// call the displayPageFooter method in siteCommon.php

displayPageFooter();
?>
