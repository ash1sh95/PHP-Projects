<?php

require_once ("dbConnExec.php");

function getActorsByMultiCriteria($lastName,$age,$gender)
{
    $query = <<<STR
Select NameFirst, NameLast, Age, Gender
From actor
Where 0=0
STR;
    if ($lastName != '')
    {
    $query .= <<<STR
 And NameLast like '%$lastName%'
STR;
    }
    if ($age != '')
    {
    $query .= <<<STR
 And Age = $age
STR;
    }
    if ($gender != '')
    {
    $query .= <<<STR
 And Gender = '$gender'
STR;
    }

return executeQuery($query);

}

?>