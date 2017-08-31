<?php

$conn = mysqli_connect('localhost', 'root', '', 'testphp') or die('could not connect to data-base');


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
} else {
    $id = 'id';
}

$query = "select * from sem1 where id = " . $id;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
    echo "
        <h3 align='center'>Semister 1 Marks</h3>
        <table align='center' border='1px'>
        <tr>
        <th>Id</th>
        <th>Year</th>
        <th>maths</th>
        <th>Physics</th>
        <th>Programming in C</th>
        <th>Drawing</th>
        </tr>
        <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['year'] . "</td>
                <td>" . $row['maths'] . "</td>
                <td>" . $row['physics'] . "</td>
                <td>" . $row['cprograming'] . "</td>
                <td>" . $row['drawing'] . "</td>
        </tr>
        </table>";
} else {
    echo "<h3 align='center'>No Data in existing Records</h3></div>";
}
include 'sem1Entry.php';

$query = "select * from sem2 where id = " . $id;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
    echo "
        <h3 align='center'>Semister 2 Marks</h3>
        <table align='center' border='1px'>
        <tr>
        <th>Id</th>
        <th>Year</th>
        <th>Algorithms</th>
        <th>Electronics</th>
        <th>Maths - 2</th>
        <th>Java - OOPs</th>
        </tr>
        <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['year'] . "</td>
                <td>" . $row['algorithms'] . "</td>
                <td>" . $row['electronics'] . "</td>
                <td>" . $row['maths2'] . "</td>
                <td>" . $row['java'] . "</td>
        </tr>
        </table>";
} else {
    echo "<h3 align='center'>No Data in existing Records</h3></div>";
}
include 'sem2Entry.php';
mysqli_close($conn);
