<!DOCTYPE html>
<html>
    <head>
        <title>Prijava</title>

        <style>

    input, select { 
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px; /*rubovi malo zaobljeni */
        box-sizing: border-box;
        }
             
    input[type=submit] {
        width: 15%;
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


    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 190px;
        }


            </style>

    </head>


<body>
<div>
<form style="text-align: center;" action="#" method="POST">
    <h2 style="text-align:center">Prijava</h2><hr>
    Email: <br>
    <input type="email" name="email" placeholder="Unesite email" required><br><br>
    Lozinka:<br>
    <input type="password" name="pass" placeholder="Unesite lozinku" required><br><br>
    <input type="submit" value="Odustani">
    <input type="submit" value="Prijavi se">


</form>
</div>

</body>
</html>