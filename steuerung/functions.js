

function vorwaerts(){
    const url = 'http://127.0.0.1:5000/vorwaerts'; // Setze hier deine API-URL ein

    const data = {
        'message' : 'vorwaerts'
    };



    fetch('http://localhost:5000/test', {
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

}

function rechts(){

}

function links(){

}

function stop(){

}