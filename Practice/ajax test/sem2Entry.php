<?php

echo "<form action='db.php'>
        <input type='hidden' name='formName' value='insertSem2'/>
        <h3 align = 'center'>Insert Into Sem 2</h3>
        <table align = 'center' border = '1px'>
            <tr>
                <th>Id</th>
                <td><input type = 'text' name = 'id' value='" . $_REQUEST['id'] . "' /></td>
            </tr>
            <tr>
                <th>Year</th>
                <td><input type = 'text' name = 'year'/></td>
            </tr>
            <tr>
                <th>algorithms</th>
                <td><input type = 'text' name = 'algorithms'/></td>
            </tr>
            <tr>
                <th>electronics</th>
                <td><input type = 'text' name = 'electronics'/></td>
            </tr>
            <tr>
                <th>maths2</th>
                <td><input type = 'text' name = 'maths2'/></td>
            </tr>
            <tr>
                <th>java</th>
                <td><input type = 'text' name = 'java'/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type = 'submit' style = 'width:100%; color:green;' value = 'insert'/></td>
        </table>
        </form>";
