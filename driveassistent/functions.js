url="http://10.11.11.100:5000/"

async function getDistance() {
    let x=new Array(4);
    let temp=new Array(4);
    //temp[0]=100;temp[1]=100;temp[2]=100;temp[3]=100;
    x[1] = document.getElementById("VR");
    x[0] = document.getElementById("VL");
    x[2] = document.getElementById("HL");
    x[3] = document.getElementById("HR");
        try {
            const response = await fetch(url + "distance"); // Eine GET-Anfrage an die API senden
            const data = await response.json(); // Die Antwort als JSON-Objekt parsen

            for (let i = 0; i < 4; i++) {
                if (data[i] <= 10) {
                    x[i].src = "/medien/assistentbilder/very-close.png"
                } else if (data[i] <= 20) {
                    x[i].src = "/medien/assistentbilder/close.png"
                } else if (data[i] <= 30) {
                    x[i].src = "/medien/assistentbilder/medium.png"
                } else if (data[i] <= 50) {
                    x[i].src = "/medien/assistentbilder/far.png"
                } else if (data[i] > 50) {
                    x[i].src = "/medien/assistentbilder/very-far.png"
                }
            }
        } catch (error) {
            console.error(error); // Fehler ausgeben, falls ein Problem mit der GET-Anfrage oder der Antwort aufgetreten ist
        }

    setTimeout(getDistance, 100);
}

function lichtState(){
    let x = document.getElementById("light");


    fetch(url+"lichtState") // Senden einer GET-Anfrage an die API
        .then(response => response.json()) // Parsen der Antwort als JSON
        .then(data => {

            if(data==0){
                x.src="../medien/assistentbilder/light-off.png"
            }else{
                x.src="../medien/assistentbilder/light-on.png"
            }
        }) // Ausgeben der Antwort auf der Konsole
        .catch(error => console.error(error));
    setTimeout(lichtState, 500);
}

function color(){
    let rechts=document.getElementById("rechts");
    let links=document.getElementById("links");
    fetch(url+"color") // Senden einer GET-Anfrage an die API
        .then(response => response.json()) // Parsen der Antwort als JSON
        .then(data => {
            console.log(data)
            let rechtsLinks = data.split(',');
            rechts.style.background=rechtsLinks[0];
            links.style.background=rechtsLinks[1];

        }) // Ausgeben der Antwort auf der Konsole
        .catch(error => console.error(error));
    setTimeout(color, 0);
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

document.getElementById("log-out").addEventListener("click", function(){
    document.cookie = "benutzername=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    document.cookie = "token=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    location.reload();
});