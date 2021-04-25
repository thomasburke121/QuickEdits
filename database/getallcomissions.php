<?php
session_start();
include 'database.php';

$result = mysqli_query($connection, "SELECT * FROM commisions");
if ($connection->error != null) {
    echo("Error description: " . $connection->error);//Needs error handler
} else {
    echo "<table width='100%'>
    <tr>
    <th>id</th>
    <th>itemtype</th>
    <th>userdesc</th>
    <th>email</th>
    <th>userfile</th>
    <th>Done</th>
    </tr>";

    // Filling table with data
    while ($row = mysqli_fetch_array($result)) {

        $id = $row['completepath'];
        $iduser = $row['path'];
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['itemtype'] . "</td>";
        echo "<td>" . $row['userdesc'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . " <a href='../../file/$iduser' download>Download user file </a>" . "</td>";
        echo "<td>" . " <a href='../../file/$id' download>Download finished commission</a>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";

}
