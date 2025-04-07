function valuutasoov(){
    let soov = document.getElementById("soov");
    let usa=document.getElementById("usa");
    let rus=document.getElementById("rus");
    let lit=document.getElementById("lit");
    let lat=document.getElementById("lat");
    let ingl=document.getElementById("ingl");
    let valuutapilt=document.getElementById("valuutapilt");

    if (usa.checked){
        soov.innerHTML=usa.value;
        valuutapilt.src="imgVal/usa.jpg";
    } else if(rus.checked){
        soov.innerHTML=rus.value;
        valuutapilt.src="imgVal/rus.jpg";
    } else if(lit.checked){
        soov.innerHTML=lit.value;
        valuutapilt.src="imgVal/lit.png";
    } else if(lat.checked){
        soov.innerHTML=lat.value;
        valuutapilt.src="imgVal/lat.png";
    } else if(ingl.checked){
        soov.innerHTML=ingl.value;
        valuutapilt.src="imgVal/engl.jpg";
    } else {
        soov.innerHTML="Pead midagi valima";
    }
}

function arvutamine(euro,hind){
    return (euro*hind).toFixed(2);
}

const usahind=1.0626;
const rushind=98.3126;
const lathind =0.9136;
const lithind=4.4886;
const inglhind=0.8329;

function kokku(){
    let summakokku = document.getElementById("summakokku");
    let eurot=document.getElementById("eurot");
    let usa=document.getElementById("usa");
    let lat=document.getElementById("lat");
    let rus=document.getElementById("rus");
    let lit=document.getElementById("lit");
    let ingl=document.getElementById("ingl");

    if(usa.checked){
        summakokku.innerHTML= "Sina saad: " + arvutamine(eurot.value, usahind) + " " + usa.value;
    } else if(rus.checked){
        summakokku.innerHTML= "Sina saad: " + arvutamine(eurot.value, rushind) + " " + rus.value;
    } else if(lat.checked){
        summakokku.innerHTML= "Sina saad: " + arvutamine(eurot.value, lathind) + " " + lat.value;
    } else if(lit.checked){
        summakokku.innerHTML= "Sina saad: " + arvutamine(eurot.value, lithind) + " " + lit.value;
    } else if(ingl.checked) {
        summakokku.innerHTML = "Sina saad: " + arvutamine(eurot.value, inglhind) + " " + ingl.value;
    } else
        summakokku.innerHTML= "Pead midagi valima";
}

function autovalikJS(){
    let valikID = document.getElementById("valikID");
    let valikpilt=document.getElementById("valikpilt");
    let auto1 = document.getElementById("auto1");
    let auto2 = document.getElementById("auto2");
    let auto3 = document.getElementById("auto3");
    let auto4 = document.getElementById("auto4");
    let auto5 = document.getElementById("auto5");
    let auto6 = document.getElementById("auto6");

    if (auto1.checked){
        valikID.innerHTML=auto1.value;
        valikpilt.src="content/img/AudiA5.jpg";
    } else if (auto2.checked){
        valikID.innerHTML=auto2.value;
        valikpilt.src="content/img/BMWm6.jpg";
    } else if (auto3.checked){
        valikID.innerHTML=auto3.value;
        valikpilt.src="content/img/JAGUARXF.jpg";
    } else if (auto4.checked){
        valikID.innerHTML=auto4.value;
        valikpilt.src="content/img/MercedesCLS63AMG.jpg";
    } else if (auto5.checked){
        valikID.innerHTML=auto5.value;
        valikpilt.src="content/img/ChevroletCamaro.jpg";
    } else if (auto6.checked){
        valikID.innerHTML=auto6.value;
        valikpilt.src="content/img/FordMustangV6.jpg";
    } else {
        valik.innerHTML="Sa pead midagi valima"
    }
}

function vabaauto(){
    const autod=[
        'content/img/AudiA5.jpg',
        'content/img/BMWm6.jpg',
        'content/img/JAGUARXF.jpg',
        'content/img/MercedesCLS63AMG.jpg',
        'content/img/ChevroletCamaro.jpg',
        'content/img/FordMustangV6.jpg',
    ];
    //random pilt
    const pilt=Math.floor(Math.random()*autod.length);
    const rpilt=autod[pilt];
    const vabaauto=document.getElementById("vabaauto");

    vabaauto.src=rpilt;
}

function arvuta(paevad,hind,tagatis){
    return (paevad*hind+tagatis).toFixed(2);
    //toFixed(1) - 1 sümbol peale komat
}

const auto1hind=50.50;
const auto1tagatis=100;
const auto2hind=85;
const auto2tagatis=100;
const auto3hind=100.50;
const auto3tagatis=150;
const auto4hind=125;
const auto4tagatis=150;
const auto5hind=150.50;
const auto5tagatis=200;
const auto6hind=175;
const auto6tagatis=200;

function summaArvuta(){
    let tasumisele=document.getElementById("tasumisele");
    let auto1=document.getElementById("auto1");
    let auto2=document.getElementById("auto2");
    let auto3=document.getElementById("auto3");
    let auto4=document.getElementById("auto4");
    let auto5=document.getElementById("auto5");
    let auto6=document.getElementById("auto6");

    let paevad=document.getElementById("paevad");

    if(auto1.checked){
        tasumisele.innerHTML = "Kokku: " +arvuta(paevad.value, auto1hind, auto1tagatis);
    } else if(auto2.checked){
        tasumisele.innerHTML = "Kokku: " + arvuta(paevad.value, auto2hind, auto2tagatis);
    } else if(auto3.checked) {
        tasumisele.innerHTML = "Kokku: " + arvuta(paevad.value, auto3hind, auto3tagatis);
    } else if(auto4.checked) {
        tasumisele.innerHTML = "Kokku: " + arvuta(paevad.value, auto4hind, auto4tagatis);
    } else if(auto5.checked) {
        tasumisele.innerHTML = "Kokku: " + arvuta(paevad.value, auto5hind, auto5tagatis);
    } else if(auto6.checked) {
        tasumisele.innerHTML = "Kokku: " + arvuta(paevad.value, auto6hind, auto6tagatis);
    } else{
        tasumisele.innerHTML="Vali, mis autot sa soovid";
    }
}