<?php

require_once 'dbConnExec.php';

function addActor($firstName, $lastName, $age, $gender, $actorAgent)
{
    // escape single quotes within the string (e.g., "Schindler's List" is escaped as "Schindler''s List" 
    
    $firstName = str_replace('\'', '\'\'', trim($firstName));
    $lastName = str_replace('\'', '\'\'', trim($lastName));
     $actorAgent = str_replace('\'', '\'\'', trim($actorAgent));
   
    
    $query = <<<STR
Insert Into actor(namefirst,namelast,age,gender,actoragent)
Values('$firstName','$lastName',$age,'$gender','$actorAgent')
STR;

    executeQuery($query);
}

function getActorList()
{
    $query = <<<STR
Select actorpk, namefirst
From actor
where actorAgent = 'veenagogireddy'
Order by namefirst
STR;
    
    return executeQuery($query);
}

function getActorDetailsByID($actorPK)
{
   $query = <<<STR
Select actorpk, namefirst, namelast, age, gender,actoragent
From actor
Where actorpk = $actorPK
STR;
    
    return executeQuery($query);
}

function updateActor($actorPK, $firstName, $lastName, $age, $gender)
{
    $firstName = str_replace('\'', '\'\'', trim($firstName));
    $lastName = str_replace('\'', '\'\'', trim($lastName));
    
    $query = <<<STR
Update actor
Set namefirst = '$firstName', namelast = '$lastName', age = $age,gender = '$gender'
Where actorpk = $actorPK
STR;

    executeQuery($query);
}

function deleteActor($actorPK)
{
    $query = <<<STR
Delete
From actor
Where actorpk = $actorPK
STR;

    executeQuery($query);
}


?>
