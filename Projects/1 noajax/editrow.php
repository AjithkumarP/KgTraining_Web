<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Person Details</title>
        <link rel="stylesheet" href="w3.css">
    </head>
    <body>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'testphp') or die("Connection failed: " . mysqli_connect_error());
        $query = "select * from users where serial =" . $_REQUEST["rowNumber"];

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<h3 align='center'>Row Updation</h3>
		<div class='w3-container w3-responsive'>
		<form action='db.php' method='post'>
        <input type='hidden' name='formname' value='update'/>
		<table class='w3-table-all w3-card-4 w3-small'>
		<tr class='w3-red'>
		<th>Serial</th>
		<th>Name</th>
		<th>Age</th>
		<th>Phone</th>
		<th></th>
		</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
			<td><input type='text' style='width:100%' name='serial' value='" . $row['serial'] . "' readonly/></td>
			<td><input type='text' style='width:100%;' name='name' value='" . $row['name'] . "'/></td>
			<td><input type='text' style='width:100%;' name='age' value='" . $row['age'] . "'/></td>
			<td><input type='text' style='width:100%;' name='phone' value='" . $row['phone'] . "'/></td>
			<td><input type='submit' style='width:100%;' value='update'></td></tr>";
            }
            echo "</table></form></div>";
        } else {
            echo "<h3 align='center'>No Data in existing Records</h3>";
        }
        mysqli_close($conn);
