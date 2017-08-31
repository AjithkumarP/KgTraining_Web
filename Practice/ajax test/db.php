<?php

function run($query) {
    if (!mysqli_connect_errno($link = mysqli_connect('localhost', 'root', '', 'testphp'))) {
        $result = mysqli_query($link, $query);
        mysqli_close($link);
    } else {
        die('Could not connect: ' . mysql_error());
    }
}

switch ($_REQUEST['formName']) {
    case 'insertStudent':
        $query = "INSERT INTO student(id,joining,name,phone,age,gender,father,mother,town) VALUES('" . $_REQUEST['id'] . "','" . $_REQUEST['name'] . "','" . $_REQUEST['age'] . "','" . $_REQUEST['phone'] . "','" . $_REQUEST['gender'] . "','" . $_REQUEST['father'] . "','" . $_REQUEST['mother'] . "','" . $_REQUEST['town'] . "','" . $_REQUEST['joining'] . "')";
        run($query);
        header("location:index.php");
        break;
    case 'insertSem1':
        $query = "INSERT INTO sem1(id,year,maths,physics,cprograming,drawing) VALUES('" . $_REQUEST['id'] . "','" . $_REQUEST['year'] . "','" . $_REQUEST['maths'] . "','" . $_REQUEST['physics'] . "','" . $_REQUEST['cprograming'] . "','" . $_REQUEST['drawing'] . "') ";
        run($query);
        header("location:index.php");
        break;
    case 'insertSem2':
        $query = "INSERT INTO sem2(id,year,algorithms,electronics,maths2,java) VALUES('" . $_REQUEST['id'] . "','" . $_REQUEST['year'] . "','" . $_REQUEST['algorithms'] . "','" . $_REQUEST['electronics'] . "','" . $_REQUEST['maths2'] . "','" . $_REQUEST['java'] . "')";
        run($query);
        header("location:index.php");
        break;
    case 'insertStudentForm':
        echo "<form action='db.php'>
        <input type='hidden' name='formName' value='insertStudent'/>
        <h3 align = 'center'>Insert Into Table</h3>
        <table align = 'center' border = '1px'>
            <tr>
                <th>Id</th>
                <td><input type = 'text' name = 'id'/></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type = 'text' name = 'name'/></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type = 'text' name = 'age'/></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type = 'text' name = 'gender'/></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type = 'text' name = 'phone'/></td>
            </tr>
            <tr>
                <th>Father</th>
                <td><input type = 'text' name = 'father'/></td>
            </tr>
            <tr>
                <th>Mother</th>
                <td><input type = 'text' name = 'mother'/></td>
            </tr>
            <tr>
                <th>Town</th>
                <td><input type = 'text' name = 'town'/></td>
            </tr>
            <tr>
                <th>Year of Joining</th>
                <td><input type = 'text' name = 'joining'/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type = 'submit' style = 'width:100%; color:green;' value = 'insert'/></td>
        </table>
        </form>";
        break;
    default:
        echo "something is wrong";
        break;
}