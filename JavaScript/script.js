var a = [];
var i = 0;

function add() {
  var x = document.getElementById("name").value;
  a.push(x);
  document.getElementById("namesList").innerHTML +=
    "<tr id='tr" +
    i +
    "'><td>" +
    x +
    "</td><td><button onclick='del(" +
    i +
    ")'>delete</button></td><td><button onclick='edit(" +
    i +
    ")'>update</button></td></tr>";

  i++;
}

function del(y) {
  document.getElementById("tr" + y).hidden = true;
}

function edit(z) {
  document.getElementById("name").value = a[z];
}