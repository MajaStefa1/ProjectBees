<!--Natalija Tosic 19/0346-->
<?php
if(empty($zahtev)) {
}
else {
 echo'   <table class="film">';
 echo'   <tr>';
 $image = imagecreatefromstring($zahtev->Poster); 
 ob_start();
 imagejpeg($image, null, 80);
 $data = ob_get_contents();
 ob_end_clean();
 echo'       <td class="poster" rowspan=4><img src="data:image/png;base64,' .  base64_encode($data)  . '" height = 170 width = 120></td>';
 echo"       <td align = 'center'>$zahtev->Naziv</td>";
 echo"       <td class='opis' align='left' rowspan=4>$zahtev->Opis</td>";
 echo"       <td rowspan=4 align = right><button onclick='prihvati($zahtev->IdF)'>Prihvati</button>&emsp;&emsp;<button onclick='odbij($zahtev->IdF)'>Odbij</button></td>";
 echo'   </tr>';
 echo'   <tr>';
 echo"      <td align='center'>$zahtev->Zanr |$zahtev->Duzina min</td>";
 echo'   </tr>';
 echo'   <tr>';
 echo"       <td align='center'>Glumci:$zahtev->imeG $zahtev->prezimeG</td>";
 echo'   </tr>';
 echo "<tr> <td align='center'>Reziser:$zahtev->Ime $zahtev->Prezime</td>
 </tr>";
echo'</table>';
}