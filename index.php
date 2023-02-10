<?php

function generatePassword($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_~#';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$password = generatePassword();
//echo $password;



 $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
 $pass = array(); 
 $combLen = strlen($comb) - 1; 
 for ($i = 0; $i < 8; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];
 }
// print(implode($pass)); 



 

$comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$shfl = str_shuffle($comb);
$pwd = substr($shfl,0,8);
//echo $pwd;

?>


<!--

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<title>Page Title</title>
</head>
<body>
<!--<div class="card">
  <div class="card-body">
<?php //echo $password; ?>
  </div>
</div>


<div class="card">
  <div class="card-body">
<?php //print(implode($pass));  ?>
  </div>
</div>

<div class="card">
  <div class="card-body">
<?php //echo $pwd; ?>
  </div>
</div>-->

<!--
<form action='paramPwd.php'>
<form >
<!--Nombre de mot de passe a générer : <input type='text' Name='nbrPasswd' value='1'>
<br>
Taille du mot de passe : <input type='text' Name='taille' >
<br>-->
<!--Type de mot de passe :     <select name='typePasswd'>
<option value='1'>Chiffres uniquement</option>
<option value='2'>Lettres uniquement</option>
<option value='3'>Chiffres et lettres</option>
<option value='4'>Tout caractères</option>
</select>-->
<!--<br>
<input type='submit' value='Générer'>
</form>


</body>
</html>

-->



















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

                <form action='paramPwd.php'>
                  <p>Merci de saisir la taille du mot de passe</p>

                  <div class="form-outline mb-4">
                    <input type="text-center" Name='taille' class="form-control"
                      placeholder="5" />
                   
                  </div>

                

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Générer</button>
                 
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