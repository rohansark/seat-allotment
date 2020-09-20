
function filladdress() {
    if (permanentAddress.checked == true) {
        var x = document.getElementById("hno").value;
        var y = document.getElementById("road").value;
        var z = document.getElementById("city").value;
        var a = document.getElementById("pin").value;
        var b = document.getElementById("state").value;
        var c = document.getElementById("country").value;
        var d = document.getElementById("ph_number").value;

        var x1 = x;
        var y1 = y;
        var z1 = z;
        var a1 = a;
        var b1 = b;
        var c1 = c;
        var d1 = d;

        document.getElementById("p_hno").value = x1;
        document.getElementById("p_road").value = y1;
        document.getElementById("p_city").value = z1;
        document.getElementById("p_pin").value = a1;
        document.getElementById("p_state").value = b1;
        document.getElementById("p_country").value = c1;
        document.getElementById("p_ph_number").value = d1;
    }
}