document.getElementById("log-out").addEventListener("click", function(){
    document.cookie = "benutzername=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    document.cookie = "token=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    location.reload();
});

function dropdownFunction() {
    document.getElementById("pcDropdown").classList.toggle("show");
}
function navopen() {
    document.getElementById("mobile-nav").style.width = "100%";
}
function navclose() {
    document.getElementById("mobile-nav").style.width = "0%";
}