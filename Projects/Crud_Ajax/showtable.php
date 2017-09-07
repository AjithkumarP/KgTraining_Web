<<<<<<< HEAD
<?php

$conn = mysqli_connect('localhost', 'admin', 'password', 'testphp') or die('could not connect to data-base');
if (isset($_REQUEST['column'])) {
    $column = $_REQUEST['column'];
} else {
    $column = 'serial';
}
$query = "select * from users order by " . $column;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    echo "
        <br/><br/>
        <div class='w3-container w3-animate-opacity w3-responsive w3-mobile'>
        <table class='w3-table-all w3-card-4 w3-small'>
        <tr class='w3-red'>
        <td colspan='5'>
        <h3 align='center'>Records in Table</h3>
        </td>
        </tr>
        <tr class='w3-cyan'>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(1)'>Name</button></th>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(2)'>Age</button></th>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(3)'>Phone</button></th>
        <th></th>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(0)'>Reload</button></th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <tr id='rowId" . $row['serial'] . "' class='w3-white'>
                <td>" . $row['name'] . "</td>
                    <td>" . $row['age'] . "</td>
                        <td>" . $row['phone'] . "</td>
                            <td>
                            <button style='width:100%;' id='deleteId" . $row['serial'] . "' class='w3-button w3-hover-red' onclick='deleteRow(" . $row['serial'] . ")'>delete</button>
                                </td>
                                <td>
                                <button style='width:100%;' id='editId" . $row['serial'] . "' class='w3-button w3-hover-blue' onclick='editRow(" . $row['serial'] . ")'>edit</button>
                                    </td>
                                    </tr>";
    }
    echo "</table></div>";
} else {
    echo "<h3 align='center'>No Data in existing Records</h3></div>";
}
mysqli_close($conn);
=======
<?php

$conn = mysqli_connect('localhost', 'admin', 'password', 'testphp') or die('could not connect to data-base');
if (isset($_REQUEST['column'])) {
    $column = $_REQUEST['column'];
} else {
    $column = 'serial';
}
$query = "select * from users order by " . $column;
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    echo "
        <br/><br/>
        <div class='w3-container w3-animate-opacity w3-responsive w3-mobile'>
        <table class='w3-table-all w3-card-4 w3-small'>
        <tr class='w3-red'>
        <td colspan='5'>
        <h3 align='center'>Records in Table</h3>
        </td>
        </tr>
        <tr class='w3-cyan'>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(1)'>Name</button></th>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(2)'>Age</button></th>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(3)'>Phone</button></th>
        <th></th>
        <th><button style='width:100%;' class='w3-button w3-hover-pink w3-cyan' onclick='showTable(0)'>Reload</button></th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <tr id='rowId" . $row['serial'] . "' class='w3-white'>
                <td>" . $row['name'] . "</td>
                    <td>" . $row['age'] . "</td>
                        <td>" . $row['phone'] . "</td>
                            <td>
                            <button style='width:100%;' id='deleteId" . $row['serial'] . "' class='w3-button w3-hover-red' onclick='deleteRow(" . $row['serial'] . ")'>delete</button>
                                </td>
                                <td>
                                <button style='width:100%;' id='editId" . $row['serial'] . "' class='w3-button w3-hover-blue' onclick='editRow(" . $row['serial'] . ")'>edit</button>
                                    </td>
                                    </tr>";
    }
    echo "</table></div>";
} else {
    echo "<h3 align='center'>No Data in existing Records</h3></div>";
}
mysqli_close($conn);
>>>>>>> 6707dfeea8114975d6ac63287bcdb266676714b0
