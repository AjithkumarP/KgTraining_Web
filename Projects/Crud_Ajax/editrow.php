<html>
<body>
<table class='w3-table-all w3-card-4 w3-small'>
    <tr class='w3-red'>
        <td colspan='4'>
            <h3 align='center'>Row Updation</h3>
        </td>
    </tr>
    <tr class='w3-orange'>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th></th>
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'admin', 'password', 'testphp');
    if ($conn) {
        $query = "select * from users where serial =" . $_REQUEST["rowNumber"];
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
						
			<td>
			<input type='text' class='textinput' style='width:100%;' id='editName' name='name' value='" . $row['name'] . "' required='yes' autofocus='yes'/>
			</td>
			
			<td>
			<input type='text' style='width:100%;' id='editAge' name='age' class='textinput' value='" . $row['age'] . "' required='yes'/>
			</td>
			
			<td>
			<input type='text' style='width:100%;' id='editPhone' class='textinput' name='phone' value='" . $row['phone'] . "' required='yes'/>
			</td>
			
			<td>
			<button style='width:100%; color:blue;' class='w3-button w3-hover-blue' onclick='editPush(" . $row['serial'] . ")'>Edit Record</button>
			</td>
			
			</tr>";
            }
            echo "</table>";
        } else {
            echo "<h3 align='center'>No Data in existing Records</h3>";
        }
        mysqli_close($conn);
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
</body>
</html>