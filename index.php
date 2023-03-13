
<?php

function messageErreur($length){

  if( $length == 0){
    return "Erreur the number must not be zero !";
  }
  elseif($length > 30){
    return "Erreur the password must not exceed 30 characters !";
  }
  else if ( $length == null  && empty($length)) {
    return "Please enter a number between 1 and 30 ";
  }
  elseif ($length < 0) { 
       return "Erreur the number must not be negative !";
    }
  else {
      return "correct";
  }

  }
function generer_mot_de_passe($longueur,$caractere_exclue,$caractere_inclue) {

    
    if (messageErreur($longueur) == "correct"){

      $use_uppercase = isset($_POST['uppercase']); // Utilisation de lettres majuscules
      $use_numbers = isset($_POST['numbers']); // Utilisation de chiffres
      $use_symbols = isset($_POST['symbols']); // Utilisation de caractères spéciaux
      $lawcase= isset($_POST['lawcase']); 
      // initialisation de variable chars (vide) dans lequel on va stocker les caractères à générer pour le password  
      $chars = '';
      // pour les Majuscule 
      if ($use_uppercase) {
          $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          
      }
      // pour les miniscules 
      if ($lawcase) {
        $chars .= 'abcdefghijklmnopqrstuvwxyz';
    }
    // pour les numéros 
      if ($use_numbers) {
          $chars .= '0123456789';
      }  // pour les caractères spéciaux 
      if ($use_symbols && $caractere_inclue == null ) {
          $chars .= '!@#$%^&*()_+-={}[]|\:;"<>,.?/~` ';
      } // pour les caractères spéciaux  + caractère spéciaux à inclure 
      if($use_symbols && $caractere_inclue != null ){
        $chars .= $caractere_inclue;
      }
      // si l'utilisateur n'a rien coché, on va générer un MDP avec tout les types 
      else if(!isset($_POST['lawcase']) && !isset($_POST['uppercase']) && !isset($_POST['symbols']) && !isset($_POST['numbers']) && $caractere_inclue == null){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-={}[]|\:;"<>,.?/~` ';
      }//si l'utilisateur n'a rien coché et il a choisi ces caractères spéciaux 
      else if(!isset($_POST['lawcase']) && !isset($_POST['uppercase']) && !isset($_POST['symbols']) && !isset($_POST['numbers']) && $caractere_inclue != null){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $chars .= $caractere_inclue; 
      }


        $lon = $_POST['taille'];
        // Liste des caractères possibles dans le mot de passe
        if ($caractere_exclue!=null){
          $chars = str_replace(str_split($caractere_exclue), '', $chars);
        }

        // Initialisation du mot de passe
        $mot_de_passe = '';
        // Boucle pour générer le mot de passe caractère par caractère
        for ($i = 0; $i < $lon; $i++) {
          $mot_de_passe .= $chars[rand(0, strlen($chars) - 1)];
        }
        // Retourner le mot de passe généré
         return $mot_de_passe;
    } else {
      // on va envoyer un message d'erreur si l'utilisateur n'a pas saisie la longueur du mot de passe 
        return   $mot_de_passe = messageErreur($longueur) ;
    }
  
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

                    <?php if(isset($_POST['taille'])){
                          $length = $_POST['taille']; 
                          } else{
                            $length = 12;
                            }


                            if(isset($_POST['uppercase'])){
                          $uper = "checked";
                          } else{
                            $uper = ""; 
                            }

                           if(isset($_POST['lawcase'])){
                          $law = "checked";
                          } else{
                            $law = ""; 
                            }


                              if(isset($_POST['numbers'])){
                          $num = "checked";
                          } else{
                            $num = ""; 
                            }


                              if(isset($_POST['symbols'])){
                          $sym = "checked";
                          } else{
                            $sym = ""; 
                            }






                             ?>
                    <input type='number' name='taille' class="form-control"
                      placeholder="Please enter a number"  title='Please enter a number between 1 & 30' value="<?php echo $length ?>"/>
                      <br>
                      <input type='text' name='caractere_inclue' class="form-control"
                      placeholder="Choose yours special characters"  title='' value=""/>
                      <br>
                      <input type='text' name='caractere_exclue' class="form-control"
                      placeholder="Restricted characters for the password"  title='' value=""/>
                      <br>
                      <label>
                        <input type="checkbox" name="uppercase" value="" <?php  echo $uper ?> >
                        uppercase
                        </label> 
                        <br> 
                        <label>
                        <input type="checkbox" name="lawcase" value="" <?php echo $law ?> >
                        lawcase
                        </label> 
                        <br> 
                        <label>
                        <input type="checkbox" name="numbers" value="" <?php echo $num ?>>
                        numbers
                        </label>  
                        <br>
                        <label>
                        <input type="checkbox" name="symbols" value="" <?php echo $sym ?>>
                        symbols
                        </label>  
                   
                  </div>

                  <div class="form-outline mb-4">
                  

                    <?php

                    if(isset($_POST['taille']) ){
                      if(isset($_POST['caractere_exclue'])){
                        if(isset($_POST['caractere_inclue'])){
                          $mot_de_passe = generer_mot_de_passe($_POST['taille'], $_POST['caractere_exclue'], $_POST['caractere_inclue']);
                          echo $mot_de_passe;
                        }
                        else {
                          $mot_de_passe = generer_mot_de_passe($_POST['taille'], $_POST['caractere_exclue'],null);
                          echo $mot_de_passe;
                        }

                      }
                      else {
                        if(isset($_POST['caractere_inclue'])){
                          $mot_de_passe = generer_mot_de_passe($_POST['taille'], null, $_POST['caractere_inclue']);
                          echo $mot_de_passe;
                        }
                        else {
                          $mot_de_passe = generer_mot_de_passe($_POST['taille'], null,null);
                          echo $mot_de_passe;
                        }  
                      }
                    }
              
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