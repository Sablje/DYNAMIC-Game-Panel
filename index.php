<?php
session_start();

$naslov = "Početna";
$fajl = "index";

include("includes.php");

$br = @file_get_contents('preuzimanja.txt');

$br = number_format($br, 0);

$slajd = mysql_query("SELECT * FROM `slajdovi`");

include("./assets/header.php");
?>
	<div class="home">
		<div class="home-content">
			<?php if (klijentUlogovan() == true) { ?>
			<h1><?php printf("Dobrodošao, %s", $client['ime']); ?></h1>
		<?php } else { ?>
			<h1>Dobrodošao na E-Power-Hosting .</h1>
		<?php }; ?>
			<a href="naruci.php"><button>NaruČi Server</button></a>
			<a href="#navigate-to-services"><button class="second-button">Cene</button></a>
	    </div>
	</div>
	<div class="home-about" id="navigate-to-about-us">
		<div class="home-about-text">
			<h2>#kvalitet&&24/7support</h2>
			<h1>Nešto o nama</h1>
			<p>E-Power-Hosting  se bavi hostovanjem game servera od 2022. godine, svaki dan se trudimo da poboljšamo naše usluge. Pridružite se!</p>
			<p2>Za 3 meseca neprekidnog rada skupili smo aktivnu klijent bazu i postigli mogucnosti pravljenja aktivnih giveawayova</p2>
		</div>
	</div>
-->
	<div class="home-services" id="navigate-to-services">
		<ul>
				    	<h1>Usluge koje vam pruža naš hosting </h1>
			<li>
				<div class="home-services-padding">
				    <div class="home-services-content">
				        <div class="img">
					        <img src="assets/img/mc-banner.png">
					        <h1>Minecraft</h1>
				        </div>

				        <p>MINECRAFT ( USKORO )</p>
				        <p>Ping: 20-35ms</p>
				        <p>24h Podrška</p>

				        <h4>3<i class="fas fa-euro-sign"></i><font class="font-16px">/1GB</font></h4><a href="naruci.php"><button>Naruči</button></a>
			        </div>
			    </div>
			</li>
			<li>
				<div class="home-services-padding">
				    <div class="home-services-content">
				        <div class="img">
					        <img src="assets/img/samp-banner.png">
					        <h1>SA:MP</h1>
				        </div>

				        <p>SA:MP</p>
				        <p>Ping: 20-35ms</p>
				        <p>24h Podrška</p>

				        <h4>0.06<i class="fas fa-euro-sign"></i><font class="font-16px">/slot</font></h4><a href="naruci.php"><button>Naruči</button></a>
			        </div>
			    </div>
			</li>
			<li>
				<div class="home-services-padding">
				    <div class="home-services-content">
				        <div class="img">
					        <img src="assets/img/cs16-banner.png">
					        <h1>CS 1.6</h1>
				        </div>
				        <p>CS 1.6</p>
				        <p>Ping: 20-35ms</p>
				        <p>24h Podrška</p>

				        <h4>0.36<i class="fas fa-euro-sign"></i><font class="font-16px">/slot</font></h4><a href="naruci.php"><button>Naruči</button></a>
			        </div>
			    </div>
			</li>
			<li>
				<div class="home-services-padding">
				    <div class="home-services-content">
				        <div class="img">
					        <img src="assets/img/vps-banner.png">
					        <h1>VPS</h1>
				        </div>

				        <p>VPS#1</p>
				        <p>Ping: 20-35ms</p>
				        <p>24h Podrška</p>
                        </p>3GB&50GB BANDWITH</p>
				        <h4>N/A<font class="font-16px">/slot</font></h4><button>Uskoro</button>
			        </div>
			    </div>
			</li>

			<li>
			</li>
		</ul>
	</div>

	<div class="home-features">
		<ul>
			<h1>Zašto baš mi?</h1>

			<li>
			    <div class="title">
				    <img src="assets/img/shield.png">
				    <h3>Sigurnost</h3>
			    </div>
			    <p>Uz kupljeni server na našem hostingu imate full AntiDDos zaštitu.</p>
		    </li>
			<li>
			    <div class="title">
				    <img src="assets/img/rocket.png">
				    <h3>Kvalitet</h3>
			    </div>
			    <p>Dynamic Hosting koristi kvalitetne servere velikog kapaciteta.</p>
		    </li>
			<li>
			    <div class="title">
				    <img src="assets/img/messages.png">
				    <h3>Support</h3>
			    </div>
			    <p>Našu podršku možete kontaktirati 24/7.</p>
		    </li>
		</ul>
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