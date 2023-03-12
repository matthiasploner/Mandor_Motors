

function vorwaerts(){
    var url = "http://127.0.0.1:5000";
    var representationOfDesiredState = "The cheese is old and moldy, where is the bathroom?";

    var client = new XMLHttpRequest();

    client.open("GET", url, false);


    client.send(representationOfDesiredState);

    if (client.status == 200)
        alert("The request succeeded!\n\nThe response representation was:\n\n" + client.responseText)
    else
        alert("The request did not succeed!\n\nThe response status was: " + client.status + " " + client.statusText + ".");
}



// Send request


function zurueck(){

}

function rechts(){

}

function links(){

}

function stop(){

}