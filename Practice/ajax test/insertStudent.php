<?php

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
