<!--Ana Stanic 0703/19-->
<html>
<head>

    <title>Pregled poslatih zahteva za prikaz filma</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <form name='posljiZahtev'  action="<?= site_url("Predstavnik/prikazSlanjaZahteva") ?>" method="post">
     <div style="float:right"><input type="submit" name="posaljiZahtev" value="POSALJI ZAHTEV">
     </div>
     </form>
    
    <hr style = "display:block;
    width:100%;
    visibility: visible ">  

<div height = "30%">
    <p><strong>
        <h style = "font-size: 180%;">Pregled zahteva:</h>
    </strong></p>          
</div>


<?php
foreach($filmovi as $film){

 echo"
    <div class = 'col-md-3 poster'>
                                        <img poster src='data:image/jpeg;base64," . base64_encode( $film->Poster ) . "' />
                                    </div>";
    echo  "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Naziv filma</h><br>";
    echo "<h style = 'font-size: 110%;'> {$film->Naziv} </h><br>";

    echo  "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Opis filma</h><br>";
    echo "<h style = 'font-size: 110%;'> {$film->Opis} </h><br>";

    echo  "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Zanr</h><br>";
    echo "<h style = 'font-size: 110%;'> {$film->Zanr} </h><br>";

    echo   "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Trajanje filma</h><br>";
    echo "<h style = 'font-size: 110%;'> {$film->Duzina} </h><br>";

    /*echo   "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Imena glumaca</h>";
    echo "<h style = 'font-size: 110%;'> {$film->Glumci} </h>";

    echo   "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Imena rezisera</h>";
    echo "<h style = 'font-size: 110%;'> {$film->Reziseri} </h>";*/

    echo   "<h style = 'font-size: 110%; color:grey; text-decoration: underline;'>Status</h><br>";
    echo "<h style = 'font-size: 110%;'> {$film->Status} </h><br>";

    
       
/*

    <h style = "font-size: 110%; color:grey; text-decoration: underline;">Poster filma</h>
    <h style = "font-size: 110%;">: </h>
  
    <div>
        <img src="slike/BETMEN.jpg" alt="Poster filma Betmen" height="40%">         
    </div>  

</div>

<div> 
<p >
    <h style = "font-size: 110%; color:grey; text-decoration: underline;">Trejler filma</h>
    <h style = "font-size: 110%;">:</h>
    <br>
    <video width="400" controls>
        <source src="slike/BETMEN _ Službeni trejler _ 2021.mp4" type="video/mp4">
      </video>
</p>
</div>
<div>
    <p>
        <h style = "font-size: 110%; color:grey; text-decoration: underline;">Status</h>
        <h style = "font-size: 110%;">: PRIHVACEN </h>
    </p>
    <hr style = "display:block;
    width:100%;
    visibility: visible ">  

    </div> */
}

?>




        

</body>
</html>