<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="content-language" content="fr">

    <title>Application IMC</title>

  </head>
<body>
	<h2>Calculez votre IMC (Indice de Masse Corporelle)</h2>
<form method="POST" action="IMC.php" name="votre-demande" >
	<!--<p align="left">Vous êtes : <br /><input type="radio" name="sexe" value="homme"> homme</p>
	<p align="left">Vous êtes : <br /><input type="radio" name="sexe" value="femme"> femme</p>-->
	<p align="left">Votre poids : <br /><input type="text" name="poids" width="45px"> kg</p>
	<p align="left">Votre taille : <br /><input type="text" name="taille" width="28px"> m</p>
    <p align="left"><input type="submit" name="envoyer" value="Je calcule mon IMC" width="28px"></p>
</form>
<?php
if (isset($_POST['poids'])) // existe toujours de toute façon car $poids est defini dans le formulaire donc pas de else
{
	if ( !empty($_POST['poids'])) // Si le champ poids n est pas vide
	{
		if ( !empty($_POST['taille']) ) // Si le champ taille n'est pas vide
		{
		            if (is_numeric($_POST['poids']))// on verifie si le poids est un nombre
					{
							if (is_numeric($_POST['taille']))// on verifie si la taille est un nombre
							{
								//var_dump($_POST);// le var dump du $_POST te dit que les variables du formulaire sont bien stockées mais pour les afficher faudra faire autrement que le formulaire de contact
								//faire un explode()

                                            $poids=($_POST['poids']);
                                            $taille=($_POST['taille']);
													// bon deja t as pas d enregistrement en base donnees a faire
								                   //de plus tu dois faire un explode pour recuperer les variables postees car affichage dans la page
function calculIMC($poids,$taille){
$IMC=$poids/($taille^2);
return $IMC;
}
$IMC=calculIMC($poids,$taille);

// $IMC=calculIMC(78,1.80);

$IMC=round($IMC,2);
echo "Homme : <br />";
echo "Votre poids : " .$poids. " kg <br />";
echo "Votre taille : " .$taille. " m <br />";
echo "Votre IMC est de " . $IMC. "<br />";

function Morpho($IMC){
	if (16.5 >= $IMC){
        echo "Vous êtes en famine";
    }
	elseif (16.5 < $IMC && $IMC<=18.5){
		echo "Vous êtes en maigreur";
	}
	elseif (18.5<$IMC && $IMC<=25){
		echo "Vous êtes en corpulence normale";
	}
	elseif (25<$IMC && $IMC<=30){
		echo "Vous êtes en surpoids";
	}
	elseif (30<$IMC && $IMC<=35){
        echo "Vous êtes en obésité modérée";
	}
	elseif (35<$IMC && $IMC<=40){
        echo "Vous êtes en obésité sévère";
	}
	elseif (40<=$IMC){
        echo "Vous êtes en obésité morbide";
	}
	else {
        echo "ERREUR";
	}
}
$Morpho= Morpho($IMC);



										}
										else {
										echo '<p style="background:lightblue;color:#000;margin:0px;margin-top:5px;">Entrez un nombre pour taille de la forme 1.85</p>';
										}
								}
								else {
								echo '<p style="background:lightblue;color:#000;margin:0px;margin-top:5px;">Entrez un nombre pour votre poids</p>';
								}
				}
				else
				{
					echo '<p style="background:lightblue;color:#000;margin:0px;margin-top:5px;">Le champ taille est vide</p><br />';
				}
	}
	else
	{
		echo '<p style="background:lightblue;color:#000;margin:0px;margin-top:5px;">Le champ poids est vide</p><br />';
	}
}
//ISSET RENVOIE TOUJOURS VRAI PAS BESOIN DE FAIRE DE ELSE CAR LA VARIABLE NOM EST DEFINIE DANS LE FORMULAIRE

?>
</body>
</html>