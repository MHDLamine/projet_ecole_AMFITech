<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
      
</head>
<body>
 
    <!--**********************************************************formulaire ******************************************-->
   <div class="container">
            <form> 
            <br><br>
            <div class="mb-3">
            <div class="row">
             <div class="col">
            <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom">
    </div>
  <div class="col">
      <input type="text" class="form-control" placeholder="Nom" aria-label="Nom">
  </div>
</div>

  
  <div class="mb-3">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="mb-3">
    <label for="validationCustom04" class="form-label">Sexe</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected enable value="">M</option>
      <option>F</option>
    </select>
    <div class="invalid-feedback">
      Merci de définir votre sexe.
    </div>
  </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">addresse mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
            </form>

            <h4><p> Date de naissance     :   </h4></p>    <input type="text" name="date" class="calendrier" ><br/>
            <h4><p>Adresse             :   </h4></p>     <input type="text" name="adresse"><br/>
            <h4><p>Telephone          :    </h4></p>    <input type="text" name="phone"><br/>
            <h4><p>pseudo            :      </h4></p>  <input type="text" name="pseudo"><br/>
            <h4><p>mot de passe      :     </h4></p>   <input type="password" name="mdp"><br/>
   </div>
    

</body>

<?php include("index.php"); ?>

</html>