function loadStuff()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txt4").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "http://localhost/hospital_management_admin/controller/load_stuff_info.php", true);
    xhttp.send();
}