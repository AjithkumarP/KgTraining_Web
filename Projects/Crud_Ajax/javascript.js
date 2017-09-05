document.onload = inputReset();
document.onload = showTable(0);

function reset() {
    document.getElementById('uname').value = '';
    document.getElementById('uage').value = '';
    document.getElementById('uphone').value = '';
    document.getElementById('uname').focus();
}

function showTable(columnCode) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('showTable').innerHTML = this.responseText;
        }
    };
    switch (columnCode) {
        case 0:
            column = 'serial';
            break;
        case 1:
            column = 'name';
            break;
        case 2:
            column = 'age';
            break;
        case 3:
            column = 'phone';
            break;
    }
    xmlhttp.open('GET', 'showtable.php?column=' + column, true);
    xmlhttp.send();
}

function inputReset() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('input').innerHTML = this.responseText;
        }
    };
    xmlhttp.open('get', 'input.php', true);
    xmlhttp.send();
}

function push() {
    var uname = document.getElementById('uname').value;
    var uage = document.getElementById('uage').value;
    var uphone = document.getElementById('uphone').value;
    if (uname == '' && uage == '' && uphone == '') {
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                showTable(0);
                reset();
            }
        };
        var string = 'db.php?formname=addrecord&uname=' + uname + '&uage=' + uage + '&uphone=' + uphone;
        xmlhttp.open('get', string, true);
        xmlhttp.send();
    }
}

function deleteRow(rowNumber) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            showTable(0);
            reset();
        }
    };
    var string = 'db.php?formname=deleterow&rowNumber=' + rowNumber;
    xmlhttp.open('get', string, true);
    xmlhttp.send();
}

function editRow(rowNumber) {
    document.getElementById('editId' + rowNumber).className = 'w3-orange w3-button w3-hover-red';
    document.getElementById('deleteId' + rowNumber).className = 'w3-orange w3-button w3-hover-red';
    document.getElementById('rowId' + rowNumber).className = 'w3-orange';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('input').innerHTML = this.responseText;
        }
    };
    var string = 'editrow.php?rowNumber=' + rowNumber;
    xmlhttp.open('get', string, true);
    xmlhttp.send();
}

function editPush(rowNumber) {
    var name = document.getElementById('editName').value;
    var age = document.getElementById('editAge').value;
    var phone = document.getElementById('editPhone').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            inputReset();
            showTable(0);
        }
    };
    var string = 'db.php?formname=update&name=' + name + '&age=' + age + '&serial=' + rowNumber + '&phone=' + phone;
    xmlhttp.open('get', string, true);
    xmlhttp.send();
}