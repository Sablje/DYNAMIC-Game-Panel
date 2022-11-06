<?php
session_start();

$naslov = "Registracija";
$fajl = "register";

include("includes.php");

$br = @file_get_contents('preuzimanja.txt');

$br = number_format($br, 0);

$slajd = mysql_query("SELECT * FROM `slajdovi`");

include("./assets/header.php");
?>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("registracija").submit();
       }
     </script>
<?php
if (klijentUlogovan() == TRUE)
{
	header("Location: index.php");
	$_SESSION['msg'] = "Uspješno ste loginovani!";
	die();
?>
<?php } else { ?>
        <div class="login-header">
<div class="login-header"></div>
<div class="login-page">
		<form action="regprocess.php" method="POST" id="registracija"> 
            <input type="hidden" name="task" value="registracija" />
				<div class="login-page-cont">
			<h1>Registracija</h1>
                        <div class="form-input">
                            <label>Username</label>
                            <input style="margin-top:0;" name="username" type="text" id="ki" placeholder="Dynamic" autocomplete="off" />
                        </div>
                        <div class="form-input">
                            <label>Ime i prezime</label>
                            <input style="margin-top:0;" name="ime" type="text" id="ki" placeholder="Dynamic Host" autocomplete="off" />
                        </div>
                        <div class="form-input">
                            <label>E-mail</label>
                            <input name="email" type="text" id="email" placeholder="dynamic@gmail.com" autocomplete="off" />
                        </div>
                        <div class="form-input">
                            <label>Lokacija</label>
                        <select name="zemlja">
                            <option value="srb">Srbija</option>
                            <option value="cg">Crna gora</option>
                            <option value="bih">Bosna i Hercegovina</option>
                            <option value="hr">Hrvatska</option>
                            <option value="mk">Makedonija</option>
                            <option value="cg"><?php echo $jezik['text198']; ?></option>
                        </select>
                        </div>
                        <div class="form-input">
                            <label>Lozinka</label>
                            <input name="sifra" type="password" id="age" placeholder="Lozinka" />
                        </div>

                            <button class="g-recaptcha" data-sitekey="6LcRFdsUAAAAAPkal2yP4VB7URo5_9OkvgCvQMOG" data-callback='onSubmit' name="login" type="submit">Gotovo</button>
                            <a href="resetpw.php">Zaboravljena Lozinka?</a>
                            <a href="login.php">Već imate nalog?</a>
                        </div>                </div>
                    </form>
            </div>
<?php }; ?>

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
