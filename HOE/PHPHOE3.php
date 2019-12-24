<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $conn = new PDO("sqlsrv:Server=buscissql1601\cisweb; Database=RWStudios","csu","rams");
        $stmt = $conn->query("select NameFirst, NameLast, Age , Gender from Actor");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<section>';
        echo
        '<table>
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
            <tbody>';
        foreach ($results as $Actor)
        {
            echo
            '<tr>
                <td>' . $Actor['NameFirst']  . '</td>
                <td>' . $Actor['NameLast'] . '</td>
                <td>' . $Actor['Age'] . '</td>
                <td>' . $Actor['Gender'] . '</td>    
            </tr>';
        }
        echo  '</tbody> </table> </section>';
        ?>
    </body>
</html>
