<?php
echo "<br>";
echo "<h2>Aja funktsioonid</h2>";
echo "<br>";
?>
<table id="aeg">
    <tr>
        <td>
            <div class="funktsioonid">
                <?php
                date_default_timezone_set('Europe/tallinn');
                echo "<br>";
                echo "time() - aeg sekundides: ".time();
                echo "<br>";
                echo "date(): ".date('d.m.Y g:i:s', time());
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
                echo "<br>";
                echo "<br>";
                echo "<h4>Tehted kuupäevaga: </h4>";
                echo "+1 min: ".date('d.m.Y g:i:s', time()+60);
                echo "<br>";
                echo "+1 tund: ".date('d.m.Y g:i:s', time()+60*60);
                echo "<br>";
                echo "+24 tund: ".date('d.m.Y g:i:s', time()+60*60*24);
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<h4>Kuupäeva genereerimine: </h4>";
                echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
                echo "Minu sünnipäev on: ".mktime(12,35,15, 8,30,1988);
                $s=mktime(12,35,15, 8,30,1988);
                echo "<br>";
                echo date('d.m.Y G:i:s', $s);
                ?>
            </div>
        </td>
        <td>
            <!--*neli hooaja pilti - kevad, suvi, sugis, talv-->
            <div id="hooaeg">
                <h4>Kuvada hooajapiltivastavalt tanasele kuupaevale<br> (kevad, suvi, sugis, talv) </h4>
                <div class="moistatusvasus">
                    <?php
                    $tana=new DateTime();
                    echo "<br>";
                    //hooaja punktid
                    $kevad=new DateTime('March 20');
                    $suvi=new DateTime('June 21');
                    $sugis=new DateTime('September 22');
                    $talv=new DateTime('December 22');
                    switch (true){
                        //kevad
                        case $tana>$kevad && $tana<$suvi:
                            echo "<div id='hooajanimi'>Kevad</div><br>";
                            $pilt="content/img/spring.gif";
                            break;
                        //suvi
                        case $tana>=$suvi && $tana<$sugis:
                            echo "Suvi<br>";
                            $pilt="content/img/summer.gif";
                            break;
                        //sugis
                        case $tana>=$sugis && $tana<$talv:
                            echo "<h3>Sugis</h3><br>";
                            $pilt="content/images/autumn.gif";
                            break;
                        //sugis
                        case $tana>=$talv && $tana<$kevad:
                            echo "Talv<br>";
                            $pilt="content/images/winter.gif";
                            break;
                    }
                    echo "Täna on (m-d-Y): ".$tana->format('m-d-Y');
                    ?>
                    <img src="<?=$pilt?>" alt="hooaja pilt" id="hooajapilt">
                </div>
                <?php
                echo "<br>";
                echo "<br>";
                echo "<h4>Harjutused</h4>";
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
                echo "Minu sünnipäev oli nädalapäeval (30.08.1988): ".date("l", gmmktime(0,0,0,8,30,1988));
                ?>

            </div>
        </td>
    </tr>
</table>




