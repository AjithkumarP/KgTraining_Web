<?php

echo "<form action='db.php'>
        <input type='hidden' name='formName' value='insertSem1'/>
        <h3 align = 'center'>Insert Into Sem 1</h3>
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
                <th>Maths</th>
                <td><input type = 'text' name = 'maths'/></td>
            </tr>
            <tr>
                <th>Physics</th>
                <td><input type = 'text' name = 'physics'/></td>
            </tr>
            <tr>
                <th>C Programming</th>
                <td><input type = 'text' name = 'cprograming'/></td>
            </tr>
            <tr>
                <th>drawing</th>
                <td><input type = 'text' name = 'drawing'/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type = 'submit' style = 'width:100%; color:green;' value = 'insert'/></td>
        </table>
        </form>";
