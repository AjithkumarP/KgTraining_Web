<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Person Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-responsive w3-mobile w3-animate-opacity">
    <h3 align='center'>Add new Records</h3>
    <form action='db.php' method='post'>
        <input type='hidden' name='formname' value='addrecord'/>
        <table class='w3-table-all w3-card-4 w3-small '>
            <tr class='w3-red'>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
            </tr>

            <tr>
                <td><input style='width:100%;' type='text' class='textinput' name='uname' placeholder='your name'
                           id='uname' required autofocus/></td>
                <td><input style='width:100%;' type='text' class='textinput' name='uage' placeholder='your age'
                           id='uage' required/></td>
                <td><input style='width:100%;' type='text' class='textinput' name='uphone'
                           placeholder='your phone number' id='uphone' required/></td>
            </tr>

            <tr>
                <td><input class='w3-button w3-hover-red' style='width:100%; color:red' type='button' onclick='reset()'
                           value='reset'/></td>
                <td></td>
                <td><input class='w3-button w3-hover-green' style='width:100%; color:green' type='submit'
                           value='submit'/></td>
            </tr>

        </table>
    </form>
</div>

<?php
if (!mysqli_connect_errno($conn = mysqli_connect('localhost', 'admin', 'password', 'testphp'))) {

    isset($_REQUEST['column']) ? $column = $_REQUEST['column'] : $column = 'serial';

    $result = mysqli_query($conn, 'SELECT * FROM users order by ' . $column);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='w3-container w3-animate-opacity w3-responsive w3-mobile'>
		<h3 align='center'>Contents in Table</h3>
		<table class='w3-table-all w3-card-4 w3-small' align='center'>
		<tr class='w3-red'>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=name'>Name</a></th>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=age'>Age</a></th>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=phone'>Phone</a></th>
		<th></th>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=serial'>Re-Load</a></th>
		</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
			<tr>
			<td>" . $row['name'] . "</td>
			<td>" . $row['age'] . "</td>
			<td>" . $row['phone'] . "</td>
			<td><a style='width:100%;' class='w3-button w3-hover-red' href='db.php?formname=deleterow&rowNumber=" . $row['serial'] . "'readonly>delete</a></td>
			<td><a style='width:100%;' class='w3-button w3-hover-blue' href='editrow.php?rowNumber=" . $row['serial'] . "'>edit</a></td>
			</tr>";
        }
        echo '</table></div>';
    } else {
        echo "<h3 align='center'>No Data in existing Records</h3></div>";
    }
    mysqli_close($conn);
} else {
    die('Could not connect: ' . mysql_error());
=======
<!DOCTYPE html>
<html>
<head>
    <title>Person Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-responsive w3-mobile w3-animate-opacity">
    <h3 align='center'>Add new Records</h3>
    <form action='db.php' method='post'>
        <input type='hidden' name='formname' value='addrecord'/>
        <table class='w3-table-all w3-card-4 w3-small '>
            <tr class='w3-red'>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
            </tr>

            <tr>
                <td><input style='width:100%;' type='text' class='textinput' name='uname' placeholder='your name'
                           id='uname' required autofocus/></td>
                <td><input style='width:100%;' type='text' class='textinput' name='uage' placeholder='your age'
                           id='uage' required/></td>
                <td><input style='width:100%;' type='text' class='textinput' name='uphone'
                           placeholder='your phone number' id='uphone' required/></td>
            </tr>

            <tr>
                <td><input class='w3-button w3-hover-red' style='width:100%; color:red' type='button' onclick='reset()'
                           value='reset'/></td>
                <td></td>
                <td><input class='w3-button w3-hover-green' style='width:100%; color:green' type='submit'
                           value='submit'/></td>
            </tr>

        </table>
    </form>
</div>

<?php
if (!mysqli_connect_errno($conn = mysqli_connect('localhost', 'admin', 'password', 'testphp'))) {

    isset($_REQUEST['column']) ? $column = $_REQUEST['column'] : $column = 'serial';

    $result = mysqli_query($conn, 'SELECT * FROM users order by ' . $column);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='w3-container w3-animate-opacity w3-responsive w3-mobile'>
		<h3 align='center'>Contents in Table</h3>
		<table class='w3-table-all w3-card-4 w3-small' align='center'>
		<tr class='w3-red'>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=name'>Name</a></th>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=age'>Age</a></th>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=phone'>Phone</a></th>
		<th></th>
		<th><a style='width:100%;' class='w3-button w3-hover-orange w3-red' href='index.php?column=serial'>Re-Load</a></th>
		</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
			<tr>
			<td>" . $row['name'] . "</td>
			<td>" . $row['age'] . "</td>
			<td>" . $row['phone'] . "</td>
			<td><a style='width:100%;' class='w3-button w3-hover-red' href='db.php?formname=deleterow&rowNumber=" . $row['serial'] . "'readonly>delete</a></td>
			<td><a style='width:100%;' class='w3-button w3-hover-blue' href='editrow.php?rowNumber=" . $row['serial'] . "'>edit</a></td>
			</tr>";
        }
        echo '</table></div>';
    } else {
        echo "<h3 align='center'>No Data in existing Records</h3></div>";
    }
    mysqli_close($conn);
} else {
    die('Could not connect: ' . mysql_error());
>>>>>>> 6707dfeea8114975d6ac63287bcdb266676714b0
}