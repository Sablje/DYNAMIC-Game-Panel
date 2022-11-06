<?php
session_start();
include("includes.php");
$serverid = mysql_real_escape_string($_GET['id']);
$fajl = "uslovi";
$return = "index.php";
$domena = $_SERVER['SERVER_NAME'];


$metatitle = "Uslovi korištenja";
$metadesc = "Uslovi korištenja Dynamic Hostinga!";
$naslov = $metatitle;
include("./assets/header.php");
?>
    <div class="main">
        <div class="document-style">
            <p>
                <h1>Ko smo mi?</h1>
                <p>Naime, mi se bavimo prodajom Game Servera kao i Voice Servera i Virtual Private Servera, u buducnosti.<br>
                Poceli smo sa radom 2020. godine i do sada imamo broj od preko 30 zadovoljnih korisnika, sto nas jako ohrabruje.<br>
                Nas tim cine iskusni sistemski administratori i obrazovani web developeri.</p>
            
            </p>
            <h1>Kako funkcionišemo?</h1>
            <p>Nas Hosting daje sve od sebe da klijenti budu zadovoljni i da o nama pricaju samo lepim recima, 
            funkcionisemo tako sto vi (Klijenti Dynamic Hostinga), uplatite sredstva na vas nalog, i kupite
            sta zelite i sta vam je potrebno, uz svaku kupovinu dobijate besplatnu Anti DDoS zastitu kao i 
            Support 24/7.</p>

            <h1>Napomene:</h1>
            <p>Uplatom sredstava na racun prihvatate da REFUNDACIJE nema.</p>
            <p>Strogo je zabranjeno iskoriscavanje bilo kojih proizvoda, na bilo koji nacin.</p>
            <p>Strogo je zabranjeno iskoriscavanje podrske i njeno kontaktiranje bez razloga.</p>

            <center><h1>PRIDRUZI NAM SE!</h1></center>


        </div>
    </div>

<?php
include("./assets/footer.php");
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: orange; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: orange; 
}
</style>
</head>   


</html>