

var availableDates=[];
$(function()
{
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "getDates.php",true);   //file.php muss natürlich angepasst werden

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            values = JSON.parse(xhttp.responseText);
            console.log(values);
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
    console.log(availableDates);

    dmy = date.getFullYear() + "-" + (date.getMonth()+1) + "-" + date.getDate();
    console.log(dmy);
    console.log(formatDate(date));
    if ($.inArray(dmy, availableDates) != -1) {
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


    xhttp.open("GET", "readAll.php",true);   //file.php muss natürlich angepasst werden

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            values = JSON.parse(xhttp.responseText);
            console.log(values);
            var tagebuch="";
            for (let step = 0; step < values.length; step++){
                tagebuch+=values[step][2];
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
}


function readText(){


    var select = document.getElementById('selectReadUser');
    var selectValue = select.options[select.selectedIndex].value;
    var id=getUser(selectValue);
    var readArea=document.getElementById('readArea');
    readArea.valueOf();
    var date=$("#datepicker").datepicker({ format: 'yy/mm/dd' }).val();
    console.log(date);

    var xhttp = new XMLHttpRequest();

    console.log(date);
    xhttp.open("GET", "readSQL.php?benutzer="+id+"&date="+date,true);   //file.php muss natürlich angepasst werden

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            values = JSON.parse(xhttp.responseText);
            console.log(values);
            var tagebuch="";
            for (let step = 0; step < values.length; step++){
                if(values[step].length==2)
                {
                    tagebuch += values[step][1];
                    tagebuch += "\n";
                }
                tagebuch+=values[step][0];
                tagebuch+="\n\n";
            }
            document.getElementById('readArea').value = tagebuch;
            // values ist hier jetzt ein Objekt bzw. ein Array aus Objekten. Teste dies mit Ausgabe: console.log(values);
        }
    };
    xhttp.send();

}



function saveText(){
    var select = document.getElementById('selectUser');
    var selectValue = select.options[select.selectedIndex].value;
    const message = document.getElementById('message');
    var id=getUser(selectValue);
    var date = document.getElementById("date");

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
    var id;
    if(name=="Michael Huber"){
        id=5;
    }
    if(name=="Matthias Plaickner"){
        id=2;
    }
    if(name=="Matthias Ploner"){
        id=1;
    }
    if(name=="Simon Ploner"){
        id=4;
    }
    if(name=="Thomas Reinthaler"){
        id=3;
    }if(name=="gemeinsame Arbeiten"){
        id=6;
    }
    if(name=="--Alle--"){
        id=7;
    }
    return id;
}
