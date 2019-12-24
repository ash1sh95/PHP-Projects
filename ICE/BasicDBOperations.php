<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quick and Dirty DB Operations</title>
    </head>
    <body>
        <?php
        // put your code here
        $conn = new PDO("sqlsrv:Server=buscissql1601\cisweb; Database=RWStudios","csu","rams");
        $stmt = $conn->query("select movietitle,summary from film");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<pre>";
        print_r($results);
        echo "</pre>";
        
        foreach($results as $film)
        {
            echo $film['movietitle'] . "<br />";
        }
        
        ?>
    </body>
</html>
