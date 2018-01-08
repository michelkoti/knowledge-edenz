//========= JavaScript File ===========


function mudatexto1() {
    document.getElementById("p1").innerHTML = "Paragraph 1 using JS file";
}

function mudatexto2() {
    document.getElementById("p2").innerHTML = "Paragraph 2 using JS file";
}

function consist() {
var form = document.getElementById('form_01');
var campo = document.getElementById('field0');
var items = document.getElementById('gender');
var x = document.getElementsByTagName("input");

    form.addEventListener('submit', function(e) {
        
        for (var i = 0; i < x.length; i++) {
             
            if (x[i].value == '')
                alert('Field required:' + x[i].id);
        }
    });
}

function myFunction() {
  var x = document.getElementsByTagName("input");
  //var arrayOfInputNames = [];

  for (var i = 0; i < x.length; i++) {
    alert("value: " + x[i].id);
  }
}


/*
function funcao2() {
    var x;
    var r=confirm("Escolha um valor!");
    if (r==true)
    {
        x="você pressionou OK!";
    }
    else
    {
        x="Você pressionou Cancelar!";
    }
    document.getElementById("demo").innerHTML=x;
}
*/