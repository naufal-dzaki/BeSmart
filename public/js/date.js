function currentTime() {
    var date = new Date(); /* creating object of Date class */
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    hour = updateTime(hour);
    min = updateTime(min);
    sec = updateTime(sec);
    var tgl = date.getDate();
    var y = date.getFullYear();
    var m = new Date();
    var months = new Array(12);
    months[0] = "Januari";
    months[1] = "Februari";
    months[2] = "Maret";
    months[3] = "April";
    months[4] = "Mei";
    months[5] = "Juni";
    months[6] = "Juli";
    months[7] = "Agustus";
    months[8] = "September";
    months[9] = "Oktober";
    months[10] = "November";
    months[11] = "Desember";
    var mnth = months[m.getMonth()];
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Minggu";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jumat";
    weekday[6] = "Sabtu";
    var n = weekday[d.getDay()];
    document.getElementById("date").innerText = n + " , " + tgl + "  " + mnth + "  " + y ; /* adding time to the div */
    document.getElementById("clock").innerText = hour + " : " + min + " : " + sec ; /* adding time to the div */
    var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
}
function updateTime(k) {
    if (k < 10) {
    return "0" + k;
    }
    else {
    return k;
    }
}
currentTime(); /* calling currentTime() function to initiate the process */
