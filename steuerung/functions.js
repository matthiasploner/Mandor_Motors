
function vorwaerts(){
    fetch('http://10.11.11.100:5000/vorwaerts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":"Hallo"})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}



function zurueck(){
    fetch('http://10.11.11.100:5000/ruckwaerts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":"Hallo"})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function rechts(){
    fetch('http://10.11.11.100:5000/rechts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":"Hallo"})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function left(){
    fetch('http://10.11.11.100:5000/links', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":"Hallo"})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function changeType(){
    let x = document.getElementById("auton");
    fetch('http://10.11.11.100:5000/changeType', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":x.checked})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function changeSpeed(){
    let x = document.getElementById("myRange").value;
    x=parseInt(x);
    console.log(x)
    fetch('http://10.11.11.100:5000/changeSpeed', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":x})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function stop(){
    fetch('http://10.11.11.100:5000/stop', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":"Hallo"})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function getSpeed(){
    const url = "http://10.11.11.100:5000/speed"; // Geben Sie die URL für die GET-Anfrage ein
    response=""
    fetch(url, {
        method: "GET",
        headers: {
            "Content-Type": "application/json" // Setzen Sie den Header-Typ für JSON-Daten
        }
    })
        .then(response => response.json()) // Extrahieren Sie die JSON-Daten aus der Antwort
        console.log(response)
        .then(data => console.log(data)) // Geben Sie die empfangenen Daten in der Konsole aus
        .catch(error => console.error(error)); // Behandeln Sie alle Fehler, die während der Anfrage auftreten können
}