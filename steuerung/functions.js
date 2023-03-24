let url = "http://10.11.11.100:5000/";

let speed = 50;
let aFn=stop;
let buttonEn=false;

document.addEventListener("keydown", function(event) {
    console.log(event.key)
    if (event.key === "w") {
        vorwaerts()
    }
    if (event.key === "s") {
        zurueck()
    }
    if (event.key === "a") {
        left()
    }
    if (event.key === "d") {
        rechts()
    }
});

document.addEventListener("keyup", function(event) {
    if (event.key === "w" || event.key === "s" || event.key === "a" || event.key === "d") {
        stop()
    }
});

function drive(fn){
    let x = document.getElementById("myRange").value;
    x = parseInt(x);
    console.log(x)
    if(fn!=null){
        console.log("Wird hineingeschrieben");
        aFn=fn;
    }

    if (aFn === stop) {
        console.log("aFn is stop function");
        speed = x;
        aFn();
    } else {
        console.log("aFn is not stop function");
        speed = x;
        aFn();
    }
}

function vorwaerts() {
    console.log("Vorwärts wird aufgerufen")
        fetch(url + 'vorwaerts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({"message": speed})
        })
            .then(response => response.text())
            .then(data => {

                console.log(data)
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
}

function setTemp(){
    temp=1;
    vorwaerts();
}


function zurueck(){
    fetch(url+'ruckwaerts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":speed})
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
    fetch(url+'rechts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":speed})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}
function hartRechts(){
    fetch(url+'hartRechts', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":speed})
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
    fetch(url+'links', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":speed})
    })
        .then(response => response.text())
        .then(data => {

            console.log(data)
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function hartLinks(){
    fetch(url+'hartLinks', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":speed})
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
    if(x.checked===true){
        document.getElementById("licht").disabled = true;
    }else{
        document.getElementById("licht").disabled = false;
    }
    fetch(url+'changeType', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"message":x.checked})
    })
        .then(response => response.text())
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function changeSpeed(){
    let x = document.getElementById("myRange").value;
    x=parseInt(x);
    console.log(x)
    fetch(url+'changeSpeed', {
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
    fetch(url+'stop', {
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




function getSpeed() {
    let x=document.getElementById("speed");
    fetch(url+'speed')
        .then(response => response.json())
        .then(data => {
            x.innerText=data;
        })
        .catch(error => console.error(error));

    setTimeout(getSpeed, 1000);
}

function led(){
    fetch(url+'licht', {
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

function checkAutonom(){
    let x = document.getElementById("auton");
    response = ""

    fetch(url+'checkAutonom')
        .then(response => response.json())
        .then(data => {
            if (data === 'true') {
                console.log('Response is true');
                x.checked=true;
                document.getElementById("licht").disabled = true;
            } else if (data === 'false') {
                console.log('Response is false');
                x.checked=false;
                document.getElementById("licht").disabled = false;
            } else {
                console.log('Unexpected response');

            }
        })
        .catch(error => console.error(error));
}

function checkALicht(){
    let x = document.getElementById("aLight");
    response = ""

    fetch(url+'checkALicht')
        .then(response => response.json())
        .then(data => {
            if (data === 'true') {
                console.log('Response is true');
                x.checked=true;
                document.getElementById("licht").disabled = true;

            } else if (data === 'false') {
                console.log('Response is false');
                x.checked=false;
                document.getElementById("licht").disabled = false;
            } else {
                console.log('Unexpected response');
            }
            buttonEn=true;
        })
        .catch(error => console.error(error));
}

function autoLight(){
    let x = document.getElementById("aLight");
    if(x.checked===true){
        document.getElementById("licht").disabled = true;
    }else{
        document.getElementById("licht").disabled = false;
    }
    fetch(url+'autoLight', {
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


