<?php

$conn = mysqli_connect('localhost', 'admin', 'password', 'Angeliaforos') or die('could not connect to data-base');
$query = "select * from messages_table order by senttime";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$user = "manoj";
echo "<html><link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
if (mysqli_num_rows($result) > 0) {
    echo "<body><div class='w3-container'><table width='100%'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        if ($row['sender'] == $user)
            echo "<td><div align='right'><p class='w3-btn w3-round-xxlarge w3-blue'>" . $row['sentmessage'] . "</p></div></td></tr>";
        else
            echo "<td><div align='left'><p class='w3-btn w3-round-xxlarge w3-text-grey w3-light-gray'>" . $row['sentmessage'] . "</p></div></td></tr>";
    }
    echo "</table></div>";
} else {
    echo "<h3 align='center'>No Data in existing Records</h3></div>";
}
mysqli_close($conn);