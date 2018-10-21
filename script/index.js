setTimeout(function()
{
    document.getElementById("form-admin").style.transition = "0.5s";
    document.getElementById("form-admin").style.top = "0px";
    document.body.style.opacity = "0.2";
}, 5000); 


setInterval(function()
{
    var date = new Date();
    var daysArray = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    var monthArray = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juiller", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    document.getElementById("table-array").innerHTML = daysArray[date.getDay()] + " " + date.getUTCDate() +  " " + monthArray[date.getMonth()]  + " " + date.getUTCFullYear() + " " + date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
}, 1000);
 
function popupFormAdmin()
{
    document.getElementById("form-admin").style.transition = "0.5s";
    document.getElementById("form-admin").style.top = "-500px";
    document.body.style.opacity = "1";
}