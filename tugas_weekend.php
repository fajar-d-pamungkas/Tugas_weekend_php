<?php
function luas_kubus($rusuk){
  return 6*pow($rusuk,2);
}
function rusuk_kubus($luas){
  return sqrt($luas/6);
}

function vol_tabung($jari,$tinggi){
  return 3.14*pow($jari,2)*$tinggi;
}

function luas_tabung($jari,$tinggi){
  return 2*3.14*$jari*($jari+$tinggi);
}

function luas_lingkaran($jari){
  return 3.14*pow($jari,2);
}

function kel_lingkaran($diameter){
  return 3.14*$diameter;
}

echo "<b>Soal No. 1</b> <br>";
echo "Luas permukaan kubus dengan panjang rusuk 4 cm : <b>",luas_kubus(4)," cm<sup>2</sup></b> <br>";
echo "Luas permukaan kubus dengan panjang rusuk 7 cm : <b>",luas_kubus(7)," cm<sup>2</sup></b> <br>";
echo "Luas permukaan kubus dengan panjang rusuk 10 cm : <b>",luas_kubus(10)," cm<sup>2</sup></b> <br>";
echo "Luas permukaan kubus dengan panjang rusuk 12 cm : <b>",luas_kubus(12)," cm<sup>2</sup></b> <br><br>";

echo "<b>Soal No. 2</b> <br>";
echo "Luas permukaan kubus : 3.750 cm<sup>2</sup> <br>";
echo "Jadi  panjang sisi kotak kayu tersebut adalah <b>",rusuk_kubus(3750)," cm</b> <br><br>";

echo "<b>Soal No. 3</b> <br>";
echo "Jari-jari sebuah tabung : 10 cm <br>";
echo "Tinggi sebuah tabung : 30 cm <br>";
echo "volume dari tabung tersebut adalah : <b>",vol_tabung(10,30)," cm<sup>3</sup> </b><br><br>";

echo "<b>Soal No. 4</b> </br>";
echo "Jari-jari sebuah tabung : 14 cm <br>";
echo "Tinggi sebuah tabung : 10 cm <br>";
echo "Luas permukaan tabung tersebut adalah : <b>",luas_tabung(14,10)," cm<sup>2</sup> </b><br><br>";

echo "<b>Soal No. 5</b> </br>";
echo "Jari-jari sebuah lingkaran : 14 cm <br>";
echo "Luasnya adalah : ",luas_lingkaran(14)," cm<sup>2</sup> <br><br>";

echo "<b>Soal No. 6</b> </br>";
echo "Diameter sebuah roda sepeda : 14 cm <br>";
echo "Luasnya adalah : <b>",luas_lingkaran(14/2)," cm<sup>2</sup></b> <br>";
echo "Kelilingnya adalah : <b>",kel_lingkaran(14)," cm<sup>2</sup></b> <br><br>";

echo "<b>Soal No. 7</b> </br>";
echo "Jari-jari sebuah ban mobil : 21 cm <br>";
echo "Ban mobil berputar sebanyak: 200 kali <br>";
echo "Jarak tempuhnya adalah : <b>",200*kel_lingkaran(21*2)," cm </b>atau <b>",(200*kel_lingkaran(21*2))/100," m</b><br><br>";
 ?>
