<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" type="text/css" href="styl.css"/>
</head>
<body>
    <div id="baner">
    <h1> Moje kwiaty</h1>
    </div>

      <div id="lewy">
      <h3> Kwiaty dla Ciebie! </h3>
      <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a> <br />
      <a href="znajdz.php">Znajdź kwiaciarnię</a> <br />
      <img class="obraz1" src="gozdzik.JPEG" alt="Goździk"/>
      </div>

         <div id="prawy">
         <img src="gerbera.JPEG" alt="Gerbera"/>
         <img src="gozdzik.JPEG" alt="Goździk"/>
         <img src="roza.JPEG" alt="Róża"/> 
         <p> Podaj miejscowość, w której poszukujesz kwiaciarni: </p>
         <form method="post">
            <input type="text" name="tekst" id="tekst"/>
            <input type="submit" value="SPRAWDŹ"/>
         </form>
<?php
//utworzenie zmiennych 
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "kwiaciarnia";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

/*
if (!$conn){
  die ("fatal error:" .mysqli_error($conn));
} echo "jest okej";
*/

if (!empty($_POST['tekst'])){
  $tekst = $_POST['tekst'];
  $zapytanie = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$tekst'";
  $sql = mysqli_query($conn,$zapytanie);
    while ($wynik = mysqli_fetch_row($sql)){
      echo $wynik[0]. ", ". $wynik[1];
    }
  
}

mysqli_close($conn);

?>
         </div>

           <div id="stopka">
           <h3> Stronę opracował: 000000000 </h3>
           </div>
</body>
</html>