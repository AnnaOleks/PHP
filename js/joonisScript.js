function taevasnupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.strokeStyle="#b1d4ff";
        m.lineWidth = 1;
        m.fillStyle="#e2efff";
        m.fillRect(0,0,400,135)
        m.strokeRect(0,0,400,135);
    }
}
function merinupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.strokeStyle="#60d5ff";
        m.lineWidth = 1;
        m.fillStyle="#91e2ff";
        m.fillRect(0,135,400,65)
        m.strokeRect(0,135,400,65);
    }
}
function maanupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.strokeStyle="#6ad473";
        m.lineWidth = 1;
        m.fillStyle="#91df97";
        m.fillRect(0,200,400,100)
        m.strokeRect(0,200,400,100);
    }
}
function seinnupp(){
    const majake=document.getElementById("majake");
    if(majake.getContext){
        let m=majake.getContext("2d");

        m.fillStyle="#e6e6e6";
        m.strokeStyle="#d0d0d0";
        m.lineWidth = 0.5;
        m.fillRect(220,120,130,20)
        m.strokeRect(220, 120, 130, 20);
        m.fillStyle="#e6e6e6";
        m.strokeStyle="#d0d0d0";
        m.lineWidth = 0.5;
        m.fillRect(220,140,130,20)
        m.strokeRect(220, 140, 130, 20);
        m.fillStyle="#e6e6e6";
        m.strokeStyle="#d0d0d0";
        m.lineWidth = 0.5;
        m.fillRect(220,160,130,20)
        m.strokeRect(220, 160, 130, 20);
        m.fillStyle="#875c4e4";
        m.strokeStyle="#d0d0d0";
        m.lineWidth = 0.5;
        m.fillRect(220,180,130,20)
        m.strokeRect(220, 180, 130, 20);
        m.fillStyle="#e6e6e6";
        m.strokeStyle="#d0d0d0";
        m.lineWidth = 0.5;
        m.fillRect(220,200,130,20)
        m.strokeRect(220, 200, 130, 20);
        m.fillStyle="#e6e6e6";
        m.strokeStyle="#d0d0d0";
        m.lineWidth = 0.5;
        m.fillRect(220,220,130,20)
        m.strokeRect(220, 220, 130, 20);
    }
}
function katusnupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.beginPath();
        m.strokeStyle = "#c64756";
        m.lineWidth = "1";
        m.fillStyle = "#d26e7a";
        m.moveTo(200, 120); //alguspunkt
        m.lineTo(285, 90);
        m.lineTo(370, 120);
        m.lineTo(200, 120);//lopppunkt
        m.stroke();
        m.fill()
    }
}
function korstennupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.beginPath();
        m.strokeStyle="#d0d0d0";
        m.lineWidth = "1";
        m.fillStyle="#e6e6e6";
        m.moveTo(315, 85);
        m.lineTo(340, 85);
        m.lineTo(340, 108.5);
        m.lineTo(315, 99.5);
        m.lineTo(315, 85);
        m.stroke();
        m.fill()
    }
}
function suitsnupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.beginPath();
        m.strokeStyle="#d8d8d8";
        m.lineWidth = "1";
        m.fillStyle="#f1f1f1";
        m.moveTo(345, 0);
        m.lineTo(400, 0);
        m.lineTo(400, 30);
        m.lineTo(335, 84);
        m.lineTo(320, 84);
        m.lineTo(345, 0);
        m.stroke();
        m.fill()
    }
}
function pilvnupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.beginPath();
        m.arc(87,63,20, 0.5*Math.PI, 1.5*Math.PI,false)
        m.arc(103,50,20, 1*Math.PI, 0,false)
        m.arc(140,50,20, 1*Math.PI, 0,false)
        m.arc(157,63,20, 1.5*Math.PI, 0.5*Math.PI,false)
        m.arc(140,75,20, 0, 1*Math.PI,false)
        m.arc(103,75,20, 0, 1*Math.PI,false)
        m.closePath();
        m.strokeStyle="#e9e9e9";
        m.lineWidth = "1";
        m.fillStyle="white";
        m.fill();
        m.stroke()
        m.beginPath();
        m.arc(287,93,20, 0.5*Math.PI, 1.5*Math.PI,false)
        m.arc(303,80,20, 1*Math.PI, 0,false)
        m.arc(340,80,20, 1*Math.PI, 0,false)
        m.arc(357,93,20, 1.5*Math.PI, 0.5*Math.PI,false)
        m.arc(340,105,20, 0, 1*Math.PI,false)
        m.arc(303,105,20, 0, 1*Math.PI,false)
        m.closePath();
        m.strokeStyle="#e9e9e9"
        m.lineWidth = "1";
        m.fillStyle="white";
        m.fill();
        m.stroke()
    }
}
function paikenupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        let radiuspaike=document.getElementById("radiuspaike");
        m.beginPath();
        m.arc(100,50,radiuspaike.value,0,2*Math.PI, true)
        m.strokeStyle="#fff658"
        m.lineWidth = "1";
        m.fillStyle="#fff989";
        m.fill();
        m.stroke()
        m.beginPath();
        m.arc(100,50,20,0,2*Math.PI, true)
        m.strokeStyle="#fff658"
        m.lineWidth = "1";
        m.fillStyle="#fff989";
        m.fill();
        m.stroke()

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(100, 0);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(130, 0);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(140, 20);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(180, 30);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(200, 50);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(180, 80);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(140, 90);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(130, 130);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(100, 150);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(70, 130);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(60, 90);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(20, 80);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(0, 50);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(20, 20);
        m.stroke();

        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(60, 20);
        m.stroke();
        m.beginPath();
        m.strokeStyle="#fff989";
        m.lineWidth = "3";
        m.moveTo(100, 50);
        m.lineTo(70, 0);
        m.stroke();
    }
}
function rohinupp() {
    const maja=document.getElementById("majake");
    if(maja.getContext){
        let m=maja.getContext("2d");
        m.beginPath();
        m.strokeStyle="#18521c";
        m.lineWidth = "1";
        m.fillStyle = "#237829";
        m.moveTo(20,230);
        m.lineTo(15,210);
        m.lineTo(25,225);
        m.lineTo(30,200);
        m.lineTo(35,220);
        m.lineTo(40,215);
        m.lineTo(35,230);
        m.lineTo(20,230);
        m.stroke();
        m.fill()

        m.beginPath();
        m.strokeStyle="#18521c";
        m.lineWidth = "1";
        m.fillStyle = "#237829";
        m.moveTo(85,280);
        m.lineTo(75,250);
        m.lineTo(90,270);
        m.lineTo(95,250);
        m.lineTo(95,270);
        m.lineTo(105,245);
        m.lineTo(100,280);
        m.lineTo(95,280);
        m.stroke();
        m.fill()

        m.beginPath();
        m.strokeStyle="#18521c";
        m.lineWidth = "1";
        m.fillStyle = "#237829";
        m.moveTo(185,250);
        m.lineTo(180,230);
        m.lineTo(185,240);
        m.lineTo(190,220);
        m.lineTo(195,235);
        m.lineTo(200,215);
        m.lineTo(195,250);
        m.lineTo(185,250);
        m.stroke();
        m.fill()

        m.beginPath();
        m.strokeStyle="#18521c";
        m.lineWidth = "1";
        m.fillStyle = "#237829";
        m.moveTo(280,280);
        m.lineTo(275,260);
        m.lineTo(285,275);
        m.lineTo(290,250);
        m.lineTo(295,270);
        m.lineTo(300,265);
        m.lineTo(295,280);
        m.lineTo(280,280);
        m.stroke();
        m.fill()

        m.beginPath();
        m.strokeStyle="#18521c";
        m.lineWidth = "1";
        m.fillStyle = "#237829";
        m.moveTo(350,240);
        m.lineTo(340,210);
        m.lineTo(355,230);
        m.lineTo(360,210);
        m.lineTo(360,230);
        m.lineTo(370,205);
        m.lineTo(365,240);
        m.lineTo(350,240);
        m.stroke();
        m.fill()
    }
}
function akennupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext) {
        let m = maja.getContext("2d");
        m.beginPath();
        m.arc(310, 160, 15, 1 * Math.PI, 0, false)
        m.strokeStyle = "white";
        m.lineWidth = 10;
        m.fillStyle = "#44494f";
        m.stroke();
        m.fill()

        m.strokeStyle="white";
        m.lineWidth = "5";
        m.fillStyle="#44494f";
        m.fillRect(292,162,35.5,40)
        m.strokeRect(292,162,35.5,40);

        m.fillStyle="white";
        m.fillRect(307.5,162,5,40)
    }
}
function uksnupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext) {
        let m = maja.getContext("2d");
        m.beginPath();
        m.arc(247.5, 186, 12.5, 1 * Math.PI, 0, false)
        m.strokeStyle = "#d26e7a";
        m.lineWidth = "10";
        m.fillStyle = "#44494f";
        m.stroke();
        m.fill()

        m.fillStyle = "#d26e7a";
        m.fillRect(230, 186, 35, 55)

        m.fillStyle = "#44494f";
        m.fillRect(235, 215, 5, 2)
    }
}
function majanupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext) {
        let m = maja.getContext("2d");
        taevasnupp()
        pilvnupp()
        paikenupp()
        merinupp()
        maanupp()
        rohinupp()
        seinnupp()
        akennupp()
        uksnupp()
        korstennupp()
        katusnupp()
        suitsnupp()
    }
}

function kustutanupp(){
    const maja=document.getElementById("majake");
    if(maja.getContext) {
        let m = maja.getContext("2d");
        m.clearRect(0,0,400,300)
    }
}