let url2 = "http://10.11.11.100:5000/licht/";

/*function checkAutonom(){ //noch zu machen
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
}*/

function autoLight(){
    let x = document.getElementById("aLight");
    let y = document.getElementById("auton");
    if(x.checked===true){
        enable("lichtB");
        enable("auton");
    }else{
        disable("lichtB");
        disable("auton");
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

function licht(){
    let x = document.getElementById("lichtB");
    if(x.checked===true){
        anfrage("on");
        enable("auton");
        enable("aLight");
    }else{
        anfrage("off");
        disable("auton");
        disable("aLight");
    }
}

function anfrage(x){
    fetch(url2+x, {
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

function checkALicht(){
    let x = document.getElementById("aLight");
    response = ""

    fetch(url+'checkALicht')
        .then(response => response.json())
        .then(data => {
            if (data === 'true') {
                console.log('Response is true');
                x.checked=true;
                enable("lichtB");
                enable("auton");

            } else if (data === 'false') {
                console.log('Response is false');
                x.checked=false;
                disable("lichtB");
                disable("auton");
            } else {
                console.log('Unexpected response');
            }
            buttonEn=true;
        })
        .catch(error => console.error(error));
}

function disable(x){
    document.getElementById(x).disabled = false;
}

function enable(x){
    document.getElementById(x).disabled = true;
}