<?php
echo "<h2>Aja funktsioonid</h2>";
echo "<br>";
date_default_timezone_set('Europe/tallinn');
echo "<br>";
echo "time() - aeg sekundides".time();
echo "<br>";
echo "date()".date('d.m.Y g:i:s', time());
echo "<br>";
echo "d - päev 01...31";
echo "<br>";
echo "m - kuu 01..12";
echo "<br>";
echo "Y - aasta - neljakohane arv";
echo "<br>";
echo "G - 24-tundiline formaat";
echo "g - 12-tundiline formaat";
echo "<br>";
echo "i - minutid - 00...59";
echo "<br>";
echo date('Y');
echo "<br>";
echo "<strong>Tehted kuupäevaga: </strong>";
echo "<br>";
echo "+1 min: ".date('d.m.Y g:i:s', time()+60);
echo "<br>";
echo "+1 tund: ".date('d.m.Y g:i:s', time()+60*60);
echo "<br>";
echo "+24 tund: ".date('d.m.Y g:i:s', time()+60*60*24);
echo "<br>";
echo "<strong>Kuupäeva genereerimine: </strong>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
echo "Minu sünnipäev on: ".mktime(12,35,15, 8,30,1988);
$s=mktime(12,35,15, 8,30,1988);
echo "<br>";
echo date('d.m.Y G:i:s', $s);
?>
//neli hooaja pilti - kevad, suvi, sugis, talv
<div id="hooaeg">
    <h2>Kuvada hooajapilti (kevas, suvi, sugis, talv) vastavalt tanasele kuupaevale</h2>
    <?php
    $tana=new DateTime();
    echo "Täna on (m-d-Y) ".$tana->format('m-d-Y');
    echo "<br>";
    //hooaja punktid
    $kevad=new DateTime('March 20');
    $suvi=new DateTime('June 21');
    $sugis=new DateTime('September 22');
    $talv=new DateTime('December 22');

    switch (true){
        //kevad
        case $tana>$kevad && $tana<$suvi:
            echo "Kevad";
            $pilt="content/img/spring.png";
            break;
        //suvi
        case $tana>=$suvi && $tana<$sugis:
            echo "Suvi";
            $pilt="content/images/summer.png";
            break;
        //sugis
        case $tana>=$sugis && $tana<$talv:
            echo "Suvi";
            $pilt="content/images/autumn.png";
            break;
        //sugis
        case $tana>=$talv && $tana<$kevad:
            echo "Suvi";
            $pilt="content/images/winter.png";
            break;
    }
    ?>
    <img src="<?=$pilt?>" alt="hooaja pilt" width="400px">
<?php
echo "<h2>Harjutused</h2>";
echo "<br>";
$kuud=array(1=>'Jaanuar', 2=>'Veebruar', 3=>'Märts', 4=>'Aprill', 5=>'Mai', 6=>'Juuni', 7=>'Juuli', 8=>'August', 9=>'September', 10=>'Oktober', 11=>'November', 12=>'December');
$paev=date('d');
$year=date('Y');
$kuu=$kuud[date('n')];
echo "Tänane kuupäev: ".$paev.".".$kuu." ".$year;
echo "<br>";
$tana=new DateTime();
$tana->format('m-d-Y');
$kv=new DateTime('June 16');
echo "Koolitvaheajani on jäänud ".date_diff($tana, $kv)->format('%a')." päeva";
echo "<br>";
echo "Minu sünnipäev oli nädalapäeval (30.08.1988):".date("l", gmmktime(0,0,0,8,30,1988));
?>

</div>



