<?php

$conn = mysqli_connect('localhost', 'root', '', 'testphp') or die('could not connect to data-base');

$query = "select * from student order by id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    echo "
        <h3 align='center'>Records in Table</h3>
        <table align='center' border='1px'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Father</th>
        <th>Mother</th>
        <th>Town</th>
        <th>Year of Joining</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <tr>
                <td><a href='sem.php?id=" . $row['id'] . "'>" . $row['id'] . "</a></td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['age'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['father'] . "</td>
                <td>" . $row['mother'] . "</td>
                <td>" . $row['town'] . "</td>
                <td>" . $row['joining'] . "</td>
        </tr>";
    }
    echo "</table></div>";
} else {
    echo "<h3 align='center'>No Data in existing Records</h3></div>";
}
$query = "select * from student order by id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

echo "<form action='sem.php'>";

echo "<select name='id'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option><a href = sem.php?id = " . $row['id'] . ">" . $row['id'] . "</a></option>";
}
echo "</select>"
 . "<input type='submit'/>"
 . "</form>";

mysqli_close($conn);
