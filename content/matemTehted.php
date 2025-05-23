<?php
// eemalda urlist muutujad
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
echo "<h2>Matemaatilised tehted</h2>";
echo "<a href='https://www.metshein.com/unit/php-matemaatilised-tehted-ulesanne-2/'>PHP matemaatilised tehted</a>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<div class="moistatus">
    <?php
    // mõistatus
    echo "<h4> Мы загадали 2 числа до 10 </h4>";
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
    ?>
</div>
<div class="moistatusvasus">
    <?php
    if(isset($_REQUEST["arv1"])){
        if($_REQUEST["arv1"]==$arv1){
            if($_REQUEST["arv2"]==$arv2){
                echo "<p><strong>Õige!</strong></p><br>";
                echo "<div class='moistatusvasus' style='background-color:#40bcc0;'>";
            }
        }else{
            echo "<p><strong>Vale! Proovi uuesti!</strong></p><br>";
            echo "<div class='moistatusvasus' style='background-color:#c040bc;'>";
        }
    }
    ?>
    <h4>Vastuste kontroll</h4>
    <form id="formarvud" name="arvud" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")?>" method='post'>
        <label for="arv1">Arv 1: </label>
        <br>
        <input type="number" name="arv1" id="arv1" min="0" max="15" step="1">
        <br>
        <br>
        <label for="arv2">Arv 2: </label>
        <br>
        <input type="number" name="arv2" id="arv2" min="0" max="10" step="1">
        <input type="submit" value="kontrolli">
    </form>
    <br>
    <br>
</div>
<br>
<br>
<div id="kood">
    <?php
    highlight_file('matemTehted.php');
    ?>
</div>






