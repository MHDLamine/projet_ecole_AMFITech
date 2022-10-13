function confirmer(){
    var res = confirm("etes vous sur de vouloir supprimer l'élève");
    if(res){
        //bien
        header('Location: liste.php');
    }
    else
    {
       
    }
  }