<?php
session_start();

$naslov = "Zaboravljena lozinka";
$fajl = "resetpw";

include("includes.php");

$br = @file_get_contents('preuzimanja.txt');

$br = number_format($br, 0);

$slajd = mysql_query("SELECT * FROM `slajdovi`");

include("./assets/header.php");
?>
<?php
if (klijentUlogovan() == TRUE)
{
    header("Location: index.php");
    $_SESSION['msg'] = "Uspešno ste logovani!";
    die();
?>
<?php } else { ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("resetpw").submit();
       }
     </script>
        <div class="login-header">
<div class="login-header"></div>
<div class="login-page">    
        <form action="login_process.php" method="POST" id="resetpw"> 
        <div class="login-page-cont">
            <h1>Zaboravljena lozinka?</h1>          
            <input type="hidden" name="task" value="resetpw" />
                <input name="username" type="text" placeholder="<?php echo $jezik['text388']; ?>" />
                <button class="g-recaptcha" data-sitekey="6LcRFdsUAAAAAPkal2yP4VB7URo5_9OkvgCvQMOG" data-callback='onSubmit' type="submit"> <?php echo $jezik['text224']; ?></button> 
                            <a href="login.php">Setili ste se lozinke?</a>
                            <a href="register.php">Želite novi nalog?</a>
                </div>           </div>         
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