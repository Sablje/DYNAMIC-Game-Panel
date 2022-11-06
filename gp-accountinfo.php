<?php
if (!isset($klijent['klijentid'])) die("Greska!");
?>

<td>
			<div id="td">
<?php 
				echo avatar($_SESSION['klijentid'], '50', '50'); 
?>
				<div id="clientinfo">
					<p id="cinfo">Username: <span><?php echo $klijent['username']; ?></span></p>
					<p id="cinfo"><?php echo $jezik['text496']; ?>: <span><?php echo $klijent['ime'].' '.$klijent['prezime']; ?></span></p>
					<p id="cinfo">E-mail: <span><?php echo $klijent['email']; ?></span></p>
				</div>	
				<div id="clientinfo" class="drugv" style="margin-bottom: 0;">
					<div id="sp"></div>
					<div id="info"><?php echo $jezik['text497']; ?>: <cr><?php /*echo getMoney($klijent['klijentid'],true);*/ echo getMoney($klijent['klijentid'], true);?></cr></div>
					<div id="sp"></div>
				</div>
			</div>
		</td>

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