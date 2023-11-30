<!DOCTYPE html>
<html>
    <head>
        <title>Registracija</title>
        <meta charset="UTF-8">
        <style>

    input, select {  /*ovo select je za polje odabira, u ovom slučaju "muško, žensko" */
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px; /*rubovi malo zaobljeni */
        box-sizing: border-box;
        
        }

    body {
      background-color: #f2f2f2;
    }
 
    input[type=submit] {
        width: 13%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

    input[type=submit]:hover {
        background-color: #45a049;
        
        }   
        
    table {
        border-radius: 5px;
        
        
        }
    
    .error {
        color: red;
        
    }
    td {
      text-align: center;
      
      
    }


        </style>
    </head>


<body>

<?php
$imeErr=$prezimeErr=$emailErr=$lozinkaErr=$ponovilozinkuErr=$datumrodjenjaErr=$spolErr="";
$ime=$prezime=$email=$lozinka=$ponovilozinku=$datumrodjenja=$spol="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ime"])) {
      $imeErr = "Ime je obavezno";
    } else {
      $ime = test_input($_POST["ime"]);
    }
    
    if (empty($_POST["prezime"])) {
        $prezimeErr = "Prezime je obavezno";
      } else {
        $prezime = test_input($_POST["prezime"]);
      }

    if (empty($_POST["email"])) {
      $emailErr = "Email je obavezan";
    } else {
      $email = test_input($_POST["email"]);
    }
      
    if (empty($_POST["pass"])) {
      $lozinka = "Lozinka je obavezna";
    } else {
      $lozinka = test_input($_POST["pass"]);
    }
    
    if (empty($_POST["pass"])) {
        $ponovilozinku = "Lozinka je obavezna";
      } else {
        $ponovilozinku = test_input($_POST["pass"]);
      }

    if (empty($_POST["date"])) {
      $datumrodjenja = "Datum rodjenja ja obavezan";
    } else {
      $datumrodjenja = test_input($_POST["date"]);
    }
  
    if (empty($_POST["spol"])) {
      $spol = "Spol je obavezan";
    } else {
      $spol = test_input($_POST["spol"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<p><span class="error">* Obavezna polja</span></p>
<h2 style="text-align:center">Registracija</h2><hr>
<table width="100%">

<form style="text-align: left" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<tr> <th>Ime:
      Prezime:</th> </tr>
<tr><td><input style="width:19%" type="text" name="ime" placeholder="Unesite ime"> 
<span class="error">* <?php echo $imeErr; ?></span>
<input style="width:19%" type="text" name="prezime" placeholder="Unesite prezime"> 
<span class="error">* <?php echo $prezimeErr; ?></span></td></tr>
<br> <br>
<tr><th>Email:</th></tr>
<tr><td>
<input type="email" name="email" placeholder="Unesite email"> 
<span class="error">* <?php echo $emailErr; ?></span></td></tr>
<br><br>
<tr><th>Lozinka: </th></tr>
<tr><td>
<input style="width:19%" type="password" name="pass" placeholder="Unesite lozinku">
<span class="error">* <?php echo $lozinkaErr; ?></span>
<input style="width:19%" type="password" name="pass" placeholder="Ponovite lozinku">
<span class="error">* <?php echo $ponovilozinkuErr; ?></span>
</td></tr>
<tr><th>
Datum rođenja: </th></tr>
<tr><td>
<input type="date" name="date" placeholder="Unesite datum rođenja">
<span class="error">* <?php echo $datumrodjenjaErr; ?></span></td></tr>
<br><br>
<tr><th>
Spol: </th></tr>
<tr><td>
<select id="spol" name="spol">
    <option value="female">Žensko</option>
    <option value="man">Muško</option>
</select> 
<span class="error">* <?php echo $spolErr; ?></span> </td></tr>
<br><br> 
<tr><td>
<input type="submit" value="Odustani">
<input type="submit" value="Registriraj se"> </td></tr>


</form>
</table>



</body>
</html>