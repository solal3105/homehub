function startTime() {
    var today = new Date();
    var d = today.getDate();
    var month = (today.getMonth()+1);
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    month = checkTime(month);
    document.getElementById('heure').innerHTML =  h + ":" + m;
    document.getElementById('date').innerHTML = d + "/" + month;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
