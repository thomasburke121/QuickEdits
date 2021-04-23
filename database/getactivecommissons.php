<?php
include 'database.php';
$result = mysqli_query($connection,"SELECT * FROM commisions where finished =0");
if ($connection->error != null) {
    echo("Error description: " . $connection->error);//Needs error handler
} else {
    echo "<table width='100%'>
    <tr>
    <th>id</th>
    <th>itemtype</th>
    <th>userdesc</th>
    <th>email</th>
    <th>file</th>
    </tr>";

    // Filling table with data
    while ($row = mysqli_fetch_array($result)) {

        $id = $row['path'];

        echo "<tr>";
        echo "<td>" . $row['users_id'] . "</td>";
        echo "<td>" . $row['itemtype'] . "</td>";
        echo "<td>" . $row['userdesc'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . " <a href='../../file/$id' download>Download </a>" . "</td>";

        echo "</tr>";
    }
    echo "</table>";

}
