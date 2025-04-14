<br>
<h2>Auto rent</h2>
<br>
<table id="autod">
    <caption><strong>Vali endale auto!</strong><br><br></caption>
    <tr>
        <td><img src="content/img/AudiA5.png" alt="Audi" id="audi"></td>
        <td><img src="content/img/BMW.png" alt="BMW" id="BMW"></td>
        <td rowspan="6"></td>
        <td id="autovalik" rowspan="2">
            <p><strong>Sinu valik: </strong></p>
            <div id="valik"><img src="" alt="Siia tuleb pilt!" id="valikpilt">
                <div id="valikID"></div></div>
            <br>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" id="auto1" name="autovalik" value="Audi" oninput="autovalikJS()">
            <label for="auto1">Audi</label>
            <p>Hind: 50.50 € / päev<br>
                Tagatisraha: 100</p>
        </td>
        <td>
            <input type="radio" id="auto2" name="autovalik" value="BMW" oninput="autovalikJS()">
            <label for="auto2">BMW</label>
            <p>Hind: 85 € / päev<br>
                Tagatisraha: 100</p>
        </td>
    </tr>
    <tr>
        <td><img src="content/img/JAGUAR.png" alt="Jaguar" id="jaguar"></td>
        <td><img src="content/img/Mercedes.png" alt="Mercedes" id="Merc"></td>
        <td id="vabaautopilt" rowspan="2">
            <p><strong>Vaata, mis auto on vaba (vajuta nuppule): </strong></p>
            <input type="button" value="Vaba auto" onclick="vabaauto()">
            <br>
            <br>
            <img src="" alt="Siia tuleb pilt!" id="vabaauto">
            <div id="vaba"></div>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" id="auto3" name="autovalik" value="Jaguar" oninput="autovalikJS()">
            <label for="auto3">Jaguar</label>
            <p>Hind: 100.50 € / päev<br>
                Tagatisraha: 150</p>
        </td>
        <td>
            <input type="radio" id="auto4" name="autovalik" value="Mercedes-Benz" oninput="autovalikJS()">
            <label for="auto4">Mercedes-Benz</label>
            <p>Hind: 125€ / päev<br>
                Tagatisraha: 150</p>
        </td>
    </tr>
    <tr>
        <td><img src="content/img/Chevrolet.png" alt="Chevrolet" id="chevr"></td>
        <td><img src="content/img/Ford.png" alt="Ford" id="ford"></td>
        <td rowspan="2">
            <p><strong><br>Arvuta auto rendi maksumust:</strong></p>
            <div id="summa">
                <label for="paevad">Mitu päevaks sa autod soovid?</label>
                <br>
                <br>
                <input type="number" id="paevad" min="1" max="30" step="1" onclick="summaArvuta()">
            </div>
            <br>
            <div id="tasumisele">Siia tuleb summa!</div>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" id="auto5" name="autovalik" value="Chevrolet" oninput="autovalikJS()">
            <label for="auto5">Chevrolet</label>
            <p>Hind: 150.50€ / päev<br>
                Tagatisraha: 200</p>
        </td>
        <td>
            <input type="radio" id="auto6" name="autovalik" value="Ford" oninput="autovalikJS()">
            <label for="auto6">Ford</label>
            <p>Hind: 175€ / päev<br>
                Tagatisraha: 200</p>
        </td>
    </tr>
</table>
