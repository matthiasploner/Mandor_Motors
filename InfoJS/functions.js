function myFunction(){
    let text=document.getElementById("eingabe");
    let p= document.createElement("p");
    p.innerText=text.value;
    console.log(text.value);
    let container = document.getElementById("ausgabe");
    container.after(container);

}