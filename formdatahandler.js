function data_thrower(){
    
}
function process_dest_form(){
    var nameofdest = document.getElementById("nameofdest").value;
    var typeofdest = document.getElementById("typeofdest").value;
    var releweblink = document.getElementById("releweblink").value;
    var location = document.getElementById("location").value;
    //var x = document.getElementById("x").value;
    // https://stackoverflow.com/questions/45305680/covert-form-data-to-json-string
    let form = document.forms["dest_form"];
    let fd = new FormData(form);
    let data = {};
    for (let [key, prop] of fd) {
        data[key] = prop;
    }
    data = JSON.stringify(data, null, 2);
    console.log(data);
    /*
    TODO: When we have a database to throw data into,
    we will be able to add the data thrower right after 
    the console.log bit here, and then use the data var
    just as a function line! :) ---JS 20231101
    */
}

function process_trav_form(){
    var typeoftrav = document.getElementById("typeoftrav").value;
    var dateofarri = document.getElementById("dateofarri").value;
    var startlocation = document.getElementById("startlocation").value;
    var dateofdept = document.getElementById("dateofdept").value;
    var finallocation = document.getElementById("finallocation").value;
    var totaoftrav = document.getElementById("totaoftrav").value;
    //var x = document.getElementById("x").value;
    // https://stackoverflow.com/questions/45305680/covert-form-data-to-json-string
    let form = document.forms["trav_form"];
    let fd = new FormData(form);
    let data = {};
    for (let [key, prop] of fd) {
        data[key] = prop;
    }
    data = JSON.stringify(data, null, 2);
    console.log(data);
}