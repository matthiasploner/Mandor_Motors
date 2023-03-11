function vorwaerts(){
    import myModule from './my-module';
    var client = new Client();
    // direct way
    client.get("http://127.0.0.1:5000\n", function (data, response) {
        // parsed response body as js object
        console.log(data);
        // raw response
        console.log(response);
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