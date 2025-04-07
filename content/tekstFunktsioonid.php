<?php
function clearVarsExcept($url, $varname) {
    // basename - makes the link relative, url must contain a filename that it returns basename('http://www.ee/index.php') > index.php
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=".$_REQUEST[$varname];
    }
    // strtok - returns first token after spliting on separator "?" strtoken('index.php?haha=lala', '?') > index.php
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
echo "<br>";
echo "<h1>Tekstfunktsioonid</h1>";
echo "<a href='https://www.metshein.com/unit/php-tekstifunktsioonid-ulesanne-9/'>PHP – Tekstifunktsioonid</a>";
echo "<br>";
?>
<div class="funktsioonid">
     <?php
     echo "<br>";
     $tekst="PHP on skriptkeel serveri pool";
     echo "<h3>$tekst</h3>";
     echo "Teksti pikkus on (strlen()): ".strlen($tekst);
     echo"<br>";
     echo "Esimesed 6 tähte on (substr()): ".substr($tekst,0,6);
     echo"<br>";
     echo "Alates 6 tähest on (substr()): ".substr($tekst,6);
     echo "<br>";
     echo "Sõnade arv lauses (str_word_count()): ".str_word_count($tekst)." tk";
     echo "<br>";
     echo "Esimese tühiku asukoht on peale (strpos()): ".strpos($tekst," ")." sümbolit";
     echo "<br>";
     echo "Näita kõik sümbolid peale esimese tühiku (substr()): ".substr($tekst,strpos($tekst," "));
     echo "<br>";
     echo "Kõik tähed on väiksed (strtolower()): ".strtolower($tekst);
     echo "<br>";
     echo "Kõik tähed on suured (strtoupper()): ".strtoupper($tekst);
     echo "<br>";
     echo "Iga sõna lauses algab suure tähega (ucwords()): ".ucwords($tekst);
     echo "<br>";
     echo "<br>";
     echo "<br>";
     ?>
</div>
<div class="moistatus">
    <?php
    echo "<h3>Mõistatus. Õppeaine.</h3>";
    $aine="Veebirakendus";
    echo "<ol>";
    echo "<li>Õpeane nimetuses on: ".strlen($aine)." tähti</li>";
    echo "<li>Õpeane nimetuses on: ".str_word_count($aine)." sõna</li>";
    echo "<li>Õpeane nimetusest on eemaldatud mõned tähed: ".trim($aine, "V, e, a, b, i,r")." </li>";
    $asendus = 'meedia';
    $otsitav_algus = 5;
    $otsitav_pikkus = 8;
    echo "<li>Kui asendada õpeaine nimetuses tähed sõnaga 'meedia': ".substr_replace($aine, $asendus, $otsitav_algus, $otsitav_pikkus)."</li>";
    echo "</ol>";
    echo "<br>";
    echo "<br>";
    ?>
</div>

<form id="vastus" name="ainevastus" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")?>" method='post'>
    <label for="aine"><h3>Vastuse kontroll:</h3></label>
    <input type="text" name="aine" id="aine">
    <input type="submit" value="kontrolli">
</form>

<?php
if(isset($_REQUEST["aine"])){
    if($_REQUEST["aine"]==$aine){
        echo "<p><strong>Õige!</strong></p><br>";
        echo "<body style='background-color:#77e0cb;'></body>";
    }else{
        echo "<p><strong>Vale! Proovi uuesti!</strong></p><br>";
        echo "<body style='background-color:#fddcf0;'></body>";
    }
}
?>