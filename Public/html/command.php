<?php
include('header.php');
include('login.php');
?>
<?php
    
  /* the insertion to database function*/
if(isset($_POST['submit'])){

  $Id_categorie=$_POST['Id_categorie'];
  $Prix_produit=$_POST['Prix_produit'];
  $Description_produit = $_POST['Description_produit'];
  $Quantite_Max = $_POST['Quantite_Max'];
  $Image_produit=$_FILES['Image_produit'];

  $picture=$_FILES['Image_produit']['name'];
  $upload="../uploads/".$picture;
  $query="INSERT INTO `produit` (Id_categorie,Description_produit,Quantite_Max,Prix_produit,Image_produit) VALUES(?,?,?,?,?)";
  $stmt=$con->prepare( $query);
  $stmt->bind_param("issss",$Id_categorie,$Description_produit,$Quantite_Max,$Prix_produit,$upload);
  $stmt->execute();

  //to store pictures to the uploads file
  move_uploaded_file($_FILES['Image_produit']['tmp_name'], $upload);

  //To redirect to the main page 
  
  //inserting alert
 
}

?>

<form style="width: 56%;margin-bottom: 4rem;color: #212529;margin-left: 18rem;text-align: center; margin-top: 4rem;" method="POST" action="" enctype="multipart/form-data">
  <h3>Entrer un nouveau produit </h3>
  
>
  <div class="form-group">
    
    <input type="number" class="form-control" id="formGroupExampleInput2" name="Id_categorie" placeholder="Id_categorie">
  </div>

  <div class="form-group">
 
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Prix_produit" placeholder="Prix_produit">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Quantite_Max" placeholder="Quantite_Max:">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Description_produit" placeholder="Description_produit">
  </div>

   
  <div class="form-group">

    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Image_produit">
  </div>
  
  <button type="button" class="btn btn-outline-primary" style="padding: 0.375rem 2.75rem;margin-left: 30rem;margin-top: -2rem;"><a href="admin.php" style="text-decoration: none;">Retour</a></button>
  <button type="submit" name="submit" class="btn btn-outline-primary" id="btnAddProductExecute" style="padding: 0.375rem 2.75rem;margin-top: -2rem;"style="text-decoration: none;">Envoyer</a></button>
</form>



<?php
include('footer.php');
?>