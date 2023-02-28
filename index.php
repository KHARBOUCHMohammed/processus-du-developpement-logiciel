<?php

/*
// Récupère les paramètres pour adapter selon les besoins de l'utilisateur
//$SaisieNbrPasswd     = $_GET['nbrPasswd']    ;
if(isset($_POST['submit']))
{
$SaisieNbrPasswd     = 1;
$SaisieNbrCaract    = $_POST['taille']    ;
//$SaisieNbrCaract = 8;
//$SaisieTypePasswd     = $_GET['typePasswd']    ;


$caract="@!:;,*{[]}/?*~$=+_-&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
*/
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
/*$nb_caract = $SaisieNbrCaract;

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

}*/
?>

<?php
function generer_mot_de_passe($longueur ) {

    $longueur = $_POST['taille'];
  // Liste des caractères possibles dans le mot de passe
  $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  // Initialisation du mot de passe
  $mot_de_passe = '';
  // Boucle pour générer le mot de passe caractère par caractère
  for ($i = 0; $i < $longueur; $i++) {
    $mot_de_passe .= $caracteres[rand(0, strlen($caracteres) - 1)];
  }
  // Retourner le mot de passe généré
  return $mot_de_passe;
}



?>










<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="gif_logo-2.gif"
                    style="width: 185px;" alt="logo">
                  <h3 class="mt-1 mb-5 pb-1">We are CERI Students team</h3>
                </div>

                     <form method="POST" >
                  <p>Please enter the password size</p>

                  <div class="form-outline mb-4">
                    <input type='number' Name='taille' class="form-control"
                      placeholder="8"  min="1" max="30" maxlength='30' title='Please enter a number between 1 & 30' />
                   
                  </div>

                  <div class="form-outline mb-4">
                  

                    <?php
                     

                        $mot_de_passe = generer_mot_de_passe($_POST['taille']);
                        echo $mot_de_passe;
                    
                    ?>    
                  </div>


                

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit"> Generate Password</button>
                 
                  </div>

                  
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h3 class="mb-4">Password Generator</h3>
                 <p class="small" style="font-size: x-large;">Your website allows you to generate passwords automatically, by choosing its size</p>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>