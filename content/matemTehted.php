<?php
// eemalda urlist muutujad
function clearVarsExcept($url, $varname) {
    return strtok(basename($_SERVER['REQUEST_URI']),"?")."?$varname=".$_REQUEST[$varname];
}

    echo "<h1> Matemaatilised tehted </h1>";
    echo "<a href='https://www.metshein.com/unit/php-matemaatilised-tehted-ulesanne-2/'>PHP matemaatilised tehted</a>";
?>
<div id="moistatus">
    <?php
    // mõistatus
    echo "<h2> Мы загадали 2 числа до 10 </h2>";
    $arv1=10;
    $arv2=5;
    //в подсказках перебрать все математические операции
    echo "<ul>";
    echo "<li>Если из первого числа вычесть второе число, то будет ".($arv1-$arv2)."</li>";
    echo "<li>Если ко второму числу прибавить его же, то будет ".($arv2+$arv2)."</li>";
    echo "<li>Если второе число умножить на себя, то будет ".($arv2*$arv2)."</li>";
    echo "<li>Если первое число разделить на второе число, то будет ".($arv1/$arv2)."</li>";
    echo "<li>Остаток от деления первого числа на второе число равен ".($arv1%$arv2)."</li>";
    echo "<li>Если первое число увеличить на значение второго числа, то будет ".($arv1+=$arv2)."</li>";
    echo "<li>Если второе число уменьшить на значение второго числа, то будет ".($arv2-=$arv2)."</li>";
    echo "</ul>";
    echo "<br>";
    echo "<br>";
    echo "<h3>Vastuste kontroll</h3>";
    ?>
</div>
<form id="formarvud" name="arvud" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")?>" method='post'>
    <label for="arv1">Arv 1: </label>
    <input type="number" name="arv1" id="arv1" min="0" max="15" step="1">
    <br>
    <label for="arv2">Arv 2: </label>
    <input type="number" name="arv2" id="arv2" min="0" max="10" step="1">
    <input type="submit" value="kontrolli">
</form>
<br>
<br>

<?php
if(isset($_REQUEST["arv1"])){
    if($_REQUEST["arv1"]==$arv1){
        if($_REQUEST["arv2"]==$arv2){
            echo "<p><strong>Õige!</strong></p><br>";
            echo "<body style='background-color:#77e0cb;'></body>";
        }
    }else{
        echo "<p><strong>Vale! Proovi uuesti!</strong></p><br>";
        echo "<body style='background-color:#fddcf0;'></body>";
    }
}
?>
<br>
<br>
<div id="kood">
    <?php
    highlight_file('matemTehted.php');
    ?>
</div>
<br>
<br>





