<!DOCTYPE html>
<html>
    <head>
        
    <title>Dodaj novi smjestaj</title>
    <meta charset="UTF-8">
    <style>

    input, select {  /*ovo select je za polje odabira, u ovom slučaju "muško, žensko" */
        width: 20%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px; /*rubovi malo zaobljeni */
        box-sizing: border-box;
        }

    input[type=text]:focus {  /*kad se klikne na polje za unos teksta obrub se zacrni */
        border: 3px solid black;
        }

    h2 {
        border-style: outset;
        border-color: red;
        width: 20%;
        }
    .div2 {
        display:block;
        background-color: #f1f1f1; 
        opacity: 0.9;
        color:black;
        position: absolute;
        right: 0px;
        margin: 8px 150px;
        padding: 90px;
        top: 0px;
        width:30%;
        border-radius:10px;
        text-align: justify;

    }

    .div3 {
        display:block;
        opacity: 0.9;
        color:black;
        position: absolute;
        right: 0px;
        margin: 90px 240px;
        /*padding: 70px;*/
        top: 220px;
        width:30%;
        

    }

    .div1{
        margin: 8px 150px;

    }

   


    /*table, td {
        border: 1px solid black;
        border-collapse: collapse;

    }*/
        
    </style>

    </head>
<body>
<div class="div1">

<form>
<h2>Dodaj novi smještaj</h2>
<br>

Naslov: <br>
<input type="text" name="naslov"> <br>
Županija: <br>
<input type="text" name="zupanija"><br>
Grad: <br>
<input type="text" name="grad"> <br>
Adresa: <br>
<input type="text" name="adress"> <br>
Cijena: <br>
<input type="number" name="cijena"> <br>
Tip: <br>
<input type="text" name="tip"> <br>
Slike: <br>
<form>
  <input type="file" name="file"><br>
  <input type="submit" value="Pošalji">
</form>


</form>
</div>

<div class="div2">
<form>
Balkon<input type="checkbox" name="balkon">
Kablovska<input type="checkbox" name="kablovska"> <br>
Internet<input type="checkbox" name="internet">
Dopušteni ljubimci<input type="checkbox" name="ljubimci"><br>
Novogradnja<input type="checkbox" name="novogradnja">
Parking<input type="checkbox" name="parking">

</form>
<hr>
</div>


<div class="div3">
<table>
<form>
<tr>
    <td>Soba<td>
    <td>Kat</td>
    <td>Kvadratura</td>
</tr>
<tr>
    <td><input type="number" name="soba"><td>
    <td><input type="number" name="kat"></td>
    <td><input type="number" name="kvadratura"></td>
</tr>
<tr>
    <td>Namješten<td>
    <td>Izdaje se za<td>
</tr>
<tr>
    <td><select id="namjesten" name="namjesten">
    <option value="da">Da</option>
    <option value="ne">Ne</option>
</select> <td>
    <td><select id="izdaje" name="izdaje">
    <option value="studente">Studente</option>
    <option value="obitelji">Obtelji</option>
</select> <td>
</tr>


</form>
</table>
</div>

</body>
</html>