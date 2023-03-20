

var availableDates=[];
$(function()
{
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "getDates.php",true);   //file.php muss natürlich angepasst werden

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            values = JSON.parse(xhttp.responseText);
            for (let i = 0; i < values.length; i++) {
                availableDates[i]=values[i][0];
            }
        }
    };
    xhttp.send();



    $('#datepicker').datepicker({ beforeShowDay:

            function(dt)
            {
                return [available(dt), "" ];
            }
        , changeMonth: true, changeYear: false, dateFormat: 'yy-mm-dd'});
});



function available(date) {
    dmy = date.getFullYear() + "-" + (date.getMonth()+1) + "-" + date.getDate();
    pDate=formatDate(date);
    if ($.inArray(pDate, availableDates) != -1) {
        return true;
    } else {
        return false;
    }
}

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [year, month, day].join('-');
}

function toggle(id){

    var e= document.getElementById(id);
    if (e.style.display == "none"){
        e.style.display = "";
    } else {
        e.style.display = "none";
    }
}

function loadAll(){
    var xhttp = new XMLHttpRequest();
    var select = document.getElementById('selectReadUser');
    var selectValue = select.options[select.selectedIndex].value;
    var id=getUser(selectValue);
    var readArea=document.getElementById('readArea');
    readArea.valueOf();
    var date=$("#datepicker").datepicker({ format: 'yy/mm/dd' }).val();

    select.selectedIndex=0


    xhttp.open("GET", "readAll.php",true);   //file.php muss natürlich angepasst werden

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            values = JSON.parse(xhttp.responseText);
            var tagebuch="";
            for (let step = 0; step < values.length; step++){
                if(values[step][2]==="sthubmic"){
                    tagebuch += "Michael Huber";
                }
                if(values[step][2]==="stplosim"){
                    tagebuch += "Simon Ploner";
                }
                if(values[step][2]==="stplamat"){
                    tagebuch += "Matthias Plaickner";
                }
                if(values[step][2]==="stplomat"){
                    tagebuch += "Matthias Ploner";
                }
                if(values[step][2]==="streitho"){
                    tagebuch += "Thomas Reinthaler";
                }
                tagebuch+="\n";
                tagebuch+=values[step][1];
                tagebuch+="\n";


                tagebuch+=values[step][0];
                tagebuch+="\n\n";
            }
            document.getElementById('readArea').value = tagebuch;
            // values ist hier jetzt ein Objekt bzw. ein Array aus Objekten. Teste dies mit Ausgabe: console.log(values);
        }
    };
    xhttp.send();
    $.datepicker._clearDate(this);
}


function readText(){
    var select = document.getElementById('selectReadUser');
    var selectValue = select.options[select.selectedIndex].value;
    var id=getUser(selectValue);
    var readArea=document.getElementById('readArea');
    readArea.valueOf();
    var date=$("#datepicker").datepicker({ format: 'yy/mm/dd' }).val();
    console.log(date)
    if(date.length!=10 && id==7){
        console.log("test")
        loadAll();
    }else {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "readSQL.php?benutzer=" + id + "&date=" + date, true);   //file.php muss natürlich angepasst werden

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                values = JSON.parse(xhttp.responseText);
                var tagebuch = "";
                console.log(values[0].length)
                for (let step = 0; step < values.length; step++) {

                    if (values[step].length == 2) {
                        console.log(values[step][0]);
                        tagebuch += values[step][0];
                        tagebuch += "\n\n";
                        if (values[step][1] === "sthubmic") {
                            tagebuch += "Michael Huber";
                        }else if (values[step][1] === "stplosim") {
                            tagebuch += "Simon Ploner";
                        }else if (values[step][1] === "stplamat") {
                            tagebuch += "Matthias Plaickner";
                        }else if (values[step][1] === "stplomat") {
                            tagebuch += "Matthias Ploner";
                        }else if (values[step][1] === "streitho") {
                            tagebuch += "Thomas Reinthaler";
                        }else{
                            tagebuch += values[step][1];
                        }

                        tagebuch += "\n";
                    }

                }
                document.getElementById('readArea').value = tagebuch;

            }
        };
        xhttp.send();
    }
}



function saveText(){
    var select = document.getElementById('selectUser');
    var selectValue = select.options[select.selectedIndex].value;
    const message = document.getElementById('message');
    var id=getUser(selectValue);
    var date = document.getElementById("sec-datepicker");

    console.log(date.value);
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "uploadSQL.php?benutzer="+id+"&message="+message.value+"&date="+date.value,true);   //file.php muss natürlich angepasst werden

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            values = JSON.parse(xhttp.responseText);
            console.log(values);
            // values ist hier jetzt ein Objekt bzw. ein Array aus Objekten. Teste dies mit Ausgabe: console.log(values);
        }
    };
    xhttp.send();
    document.getElementById('message').value = '';

}


function getUser(name){
    let id;
    if(name=="Michael Huber"){
        id=5;
    }else if(name=="Matthias Plaickner"){
        id=2;
    }else if(name=="Matthias Ploner"){
        id=1;
    }else if(name=="Simon Ploner"){
        id=4;
    }else if(name=="Thomas Reinthaler"){
        id=3;
    }else if(name=="gemeinsame Arbeiten"){
        id=6;
    }else if(name=="--Alle--"){
        id=7;
    }
    return id;
}

function dropdownFunction() {
    document.getElementById("pcDropdown").classList.toggle("show");
}
function navopen() {
    document.getElementById("mobile-nav").style.width = "100%";
}
function navclose() {
    document.getElementById("mobile-nav").style.width = "0%";
}

$( function() {
    $( "#sec-datepicker" ).datepicker({
        changeMonth: true, changeYear: false, dateFormat: 'yy-mm-dd'}
    );
} );