<?php

switch ($_REQUEST['formname']) {
    case 'addrecord':
        run("INSERT INTO users(name,age,phone) VALUES('" . $_REQUEST["uname"] . "'," . $_REQUEST["uage"] . "," . $_REQUEST["uphone"] . ")");
        header("location:index.php");
        break;
    case 'deleterow':
        run("delete from users where serial = " . $_REQUEST["rowNumber"]);
        header("location:index.php");
        break;
    case 'update':
        run("update users set name ='" . $_REQUEST['name'] . "', age = '" . $_REQUEST['age'] . "', phone ='" . $_REQUEST['phone'] . "' WHERE serial=" . $_REQUEST['serial']);
        header('location:index.php');
        break;
    default:
        echo 'something is wrong';
        break;
}

function run($query) {
    if (!mysqli_connect_errno($link = mysqli_connect('localhost', 'root', '', 'testphp'))) {
        mysqli_query($link, $query);
        mysqli_close($link);
    } else {
        die('Could not connect: ' . mysql_error());
    }
}
