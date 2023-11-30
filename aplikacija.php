<!DOCTYPE html>
<html>
    <head>
        <title>Najam stanova</title>
        <link rel="icon" type="slika" href="stan.png">
        <meta charset="UTF-8"> <!-- Definirajte koristeni skup znakova-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Responzivna web stranica - postavljanje okvira za prikaz kako bi vasa web stranica izgledala dobro na svim uredajima:-->
        <script src="https://kit.fontawesome.com/2cc0588527.js" crossorigin="anonymous"></script> <!-- za ikone-->
        

        <style>
            body {
                background-image: url('slikastanovi.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color:dimgray;
                position: fixed; /*nav traka ce biti na vrhu iako scrollamo dolje */
                top: 0;          /*nav traka ce biti na vrhu iako scrollamo dolje */
                width: 100%;     /*nav traka ce biti na vrhu iako scrollamo dolje */
                left: 0;         /* da se lijevo poravna */
                
                
                
            }
            

            li {
                float: left; /*float- left da bi elementi bloka plutali jedan pored drugog */
            }

            li a {
            display: block; /* omogućuje nam da odredimo ispunu (i visinu, širinu, margine itd. ako želite) */
            padding: 14px 16px; /* Navedite malo ispune između svakog <a> elementa, kako bi izgledali dobro */
            background-color:dimgray ;
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: 17px;
            
            
            }

            

            li a:hover {
            background-color: #111;
            }


            table, th, td {
                border: hidden;
                text-align: left;
                border-collapse: collapse;

            }
            th, td {
                padding: 10px;
                border: hidden;
            }
            
            .d1 {
                display: block;
                background-color: white; 
                opacity: 0.9;
                color:black;
                padding:20px;
                width:53%;
            }
           

            a {
                text-decoration: none;
            }

            .d2 {
                display: block;
                background-color: white; 
                opacity: 0.9;
                color:black;
                float: right;
                
                
            }
        
            .footer {
                background-color: dimgray;
                padding: 10px;
                text-align: center;
                position: fixed; 
                bottom: 0;
                left:0;         
                width: 100%;
                height: 20px;
                
                }
            

            
          
        </style>

    </head>
    <body>

        <ul>
            <li style="width: 3%;"><img src="stan.png" alt="Logo" style="width: 100%;"></li>
            <li><a href="ponuda.php">Pregledaj ponudu</a></li>
            <li><a href="dodaj.php">Objavi oglas</a></li>
            <li style="float:right"><a href="registracija.php">Registracija</a></li>
            <li style="float: right;"><a href="prijava.php">Prijava</a></li>
            <li style="padding: 15px"><input type="text" name="search" placeholder="Traži.."></li>
          </ul>

        
        <br><br><br><br>
    <table>
        <tr>
        <td>
            <div class="d1">
                <h2>Tražiš stan za najam?</h2>
            <form>
                <fieldset>
                    <legend>Upiši grad</legend>
                <input type="search" name="search">
                <input type="button" value="Pretraži ponudu"> <br>  
                </fieldset>
                <h3>Odaberi prostor po svojoj mjeri i <a class="meni" href="prijava.php">prijavi se </a> u sustav za kontaktirati vlasnika.</h3>
            </form>
        </div> <br><br>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d1">
            <h2>Imaš prostor za iznajmiti?</h2>
            <h3><i class="fa-solid fa-user"></i><a class="meni" href="prijava.php"> Prijavi se</button></a></h3>
            <h3><i class="fa-solid fa-pen"></i><a class="meni" href="dodaj.php">Izradi vlastiti oglas</a></h3>
            <h3><i class="fa-solid fa-check"></i> Objavi na tržište po potrebi</h3>
        
        </td>
    </tr>
        </div>

        <div class="d2">
            <p>hhahahhahah</p>
            
        </div>
    </tr>
        <div class="footer">
            <p>Copyright ©. All rights reserved.
            </p>
            
        </div>
    

        


       <!-- <iframe src="https://www.booking.com/index.hr.html?aid=2311236;label=hr-hr-booking-desktop-BVLYmoBXhVpgi07tMbWwEQS652796012784:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-65526620:lp20412:li:dec:dm;ws=&gclid=CjwKCAjws9ipBhB1EiwAccEi1AB8KevHkuR6g455aA-uS78cYKuc2kBBzejvmt_DRVmoxJer8-umJBoC5B8QAvD_BwE"
         height="200" width="100%" title="Iframe Example"></iframe> -->


         

         
    
        </table>
    </body>
</html>