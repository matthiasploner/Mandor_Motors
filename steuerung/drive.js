let url1 = "http://10.11.11.100:5000/drive/";
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

function fahr(fn){
    let x = document.getElementById("myRange").value;
    x = parseInt(x);
    console.log(x)
    if(fn!=null){
        console.log("Wird hineingeschrieben");
        aFn=fn;
    }

    document.getElementById("speedP").innerText=x+"%";
    console.log(x)
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
    anfrage("vorwaerts");
}

function zurueck(){
    anfrage("ruckwearts");
}

function rechts(){
    anfrage("rechts");
}
function hartRechts(){
    anfrage("hartRechts");
}


function left(){
    anfrage("links");
}

function hartLinks(){
    anfrage("hartLinks");
}

function stop(){
    anfrage("stop")
}


function anfrage(x){
    temp="";
    if(x!=="stop"){
        temp="Hallo"
    }else{
        temp=speed;
    }
    fetch(url1+x, {
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