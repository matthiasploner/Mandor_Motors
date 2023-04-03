let url = "http://10.11.11.100:5000/";

function changeType(){
    let x = document.getElementById("auton");
    let y = document.getElementById("aLight");
    if(x.checked===true){
        enable("lichtB");
        enable("aLight");
    }else{
        disable("lichtB");
        disable("aLight");
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

function disable(x){
    document.getElementById(x).disabled = false;
}

function enable(x){
    document.getElementById(x).disabled = true;
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
        })
        .catch(error => console.error(error));
}





window.addEventListener('beforeunload', function(event) {
    // Make an AJAX request to a PHP script to delete the file
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/steuerung/deleteFile.php', false);
    xhr.send();
});
