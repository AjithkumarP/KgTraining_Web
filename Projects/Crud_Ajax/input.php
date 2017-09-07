<<<<<<< HEAD
<html>
<body>
<table class='w3-table-all w3-card-4 w3-small '>
    <tr class='w3-red'>
        <td colspan='4'>
            <h3 align='center'>Add new Records</h3>
        </td>
    </tr>
    <tr class='w3-cyan'>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th></th>
    </tr>
    <tr>
        <td>
            <input style='width:100%;' type='text' class='textinput' name='uname' onkeydown='if (event.keyCode === 27)
                                reset();' placeholder='your name' id='uname' required='yes' autofocus='yes'/>
        </td>
        <td>
            <input style='width:100%;' type='text' class='textinput' name='uage' onkeydown='if (event.keyCode === 27)
                                reset();' placeholder='your age' id='uage' required='yes'/>
        </td>
        <td>
            <input style='width:100%;' type='text' class='textinput' name='uphone' onkeydown='
                            switch (event.keyCode) {
                                case 13:
                                    push();
                                    break;
                                case 27:
                                    reset();
                                    break;
                            }
                           ' placeholder='your phone number' id='uphone' required='yes'/>
        </td>
        <td>
            <button class='w3-button w3-hover-green' name='submit' style='width:100%; color:green' onclick='push()'>Add
                Record
            </button>
        </td>
    </tr>
</table>
</body>
=======
<html>
<body>
<table class='w3-table-all w3-card-4 w3-small '>
    <tr class='w3-red'>
        <td colspan='4'>
            <h3 align='center'>Add new Records</h3>
        </td>
    </tr>
    <tr class='w3-cyan'>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th></th>
    </tr>
    <tr>
        <td>
            <input style='width:100%;' type='text' class='textinput' name='uname' onkeydown='if (event.keyCode === 27)
                                reset();' placeholder='your name' id='uname' required='yes' autofocus='yes'/>
        </td>
        <td>
            <input style='width:100%;' type='text' class='textinput' name='uage' onkeydown='if (event.keyCode === 27)
                                reset();' placeholder='your age' id='uage' required='yes'/>
        </td>
        <td>
            <input style='width:100%;' type='text' class='textinput' name='uphone' onkeydown='
                            switch (event.keyCode) {
                                case 13:
                                    push();
                                    break;
                                case 27:
                                    reset();
                                    break;
                            }
                           ' placeholder='your phone number' id='uphone' required='yes'/>
        </td>
        <td>
            <button class='w3-button w3-hover-green' name='submit' style='width:100%; color:green' onclick='push()'>Add
                Record
            </button>
        </td>
    </tr>
</table>
</body>
>>>>>>> 6707dfeea8114975d6ac63287bcdb266676714b0
</html>