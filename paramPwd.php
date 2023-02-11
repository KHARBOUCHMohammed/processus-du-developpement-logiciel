<?php
// Récupère les paramètres pour adapter selon les besoins de l'utilisateur
//$SaisieNbrPasswd     = $_GET['nbrPasswd']    ;

$SaisieNbrPasswd     = 1;
$SaisieNbrCaract    = $_GET['taille']    ;
//$SaisieTypePasswd     = $_GET['typePasswd']    ;


$caract="@!:;,*{[]}/?*~$=+_-&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

// Type de caractères à prendre en compte pour générer les mots de passe (change selon paramètre utilisateur) :
/*if ($SaisieTypePasswd == '1')
{
$caract = "0123456789";
}
else if ($SaisieTypePasswd == '2')
{
$caract = "abcdefghijklmnopqrstuvwyxz";
}
else if ($SaisieTypePasswd == '3')
{
$caract = "abcdefghijklmnopqrstuvwyxz0123456789";
}
else if ($SaisieTypePasswd == '4')
{
$caract = "abcdefghijklmnopqrstuvwyxz0123456789@!:;,§/?*µ$=+";
}*/



// Nombre de caractères que le mot de passe doit contenir (= saisie utilisateur) :
$nb_caract = $SaisieNbrCaract;

// On fait un première boucle pour générer des mots de passe jusqu'au nombre indiqué par l'utilisateur
// Puis une seconde boucle pour générer le mot de passe caractère par caractère jusqu'au nombre indiqué par l'utilisateur
for($nbrPasswd = 1; $nbrPasswd <= $SaisieNbrPasswd; $nbrPasswd++)
{
for($i = 1; $i <= $nb_caract; $i++) {

// On compte le nombre de caractères
$Nbr = strlen($caract);

// On choisit un caractère au hasard dans la chaine sélectionnée :
$Nbr = mt_rand(0,($Nbr-1));

// Pour finir, on écrit le résultat :
//print $caract[$Nbr];

}
echo "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body>
<div class="card">
  <div class="card-body">
<?php for($nbrPasswd = 1; $nbrPasswd <= $SaisieNbrPasswd; $nbrPasswd++)
{
for($i = 1; $i <= $nb_caract; $i++) {

// On compte le nombre de caractères
$Nbr = strlen($caract);

// On choisit un caractère au hasard dans la chaine sélectionnée :
$Nbr = mt_rand(0,($Nbr-1));

// Pour finir, on écrit le résultat :
print $caract[$Nbr];

}
echo "<br>";
} ?>
  </div>
</div>

</body>

</html>