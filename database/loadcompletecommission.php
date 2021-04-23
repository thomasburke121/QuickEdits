<?php
session_start();
include 'database.php';
$id=$_SESSION['user_id'];

$result = mysqli_query($connection,"SELECT * FROM commisions where users_id ='$id' and Finished=1");
if($connection -> error!=null){
    echo("Error description: " . $connection -> error);//Needs error handler
}else{
    echo "<table width='100%'>
    <tr>
    <th>itemtype</th>
    <th>userdesc</th>
    <th>file</th>
    </tr>";

    // Filling table with data
    while($row = mysqli_fetch_array($result))
    {

        $id=$row['completepath'];

        echo "<tr>";
        echo "<td>" . $row['itemtype'] . "</td>";
        echo "<td>" . $row['userdesc'] . "</td>";

        echo "<td>" . " <a href='../../file/$id' download>Download </a>" . "</td>";

        echo "</tr>";
    }
    echo "</table>";

}
