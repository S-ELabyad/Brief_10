<?php
include('login.php');

?>
<?php 
session_start();

//connect to database
$con =mysqli_connect($servername,$username,$password,$dbname);

 if(isset($_POST['submit'])){
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];

   if($Email&&$Password)
   {
    //    $Password=md5($Password);
       $query="SELECT * FROM client  WHERE Email = '' && Password = '$Password'";
      

      if(mysqli_query($con,$query)){
        header('Location:PageProduits.php');
       
      }
 
       
       else {
           echo "Email et mot de passe incorrect";
           
       }
       
    }
  }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
   
  
    
    

    <title>Auchan</title>
</head>

<body>


<div class="header" >
   <h1 class="titre">Auchan</h1>
</div>

    <div class="contener">
       <div class="photo"> <img  src="../img/imag1.jpg" alt="" class="image" ></div>
        <div class="form">
        <h3 class=titre2> Je me connecte</h3>
        <p class="titre3">Encore quelques clics et le tour est joué !</p>

   <form action="profile.php" method="POST" style="height: 274px;" >
        <input type="text"  name="Email" id="Email" placeholder="Adresse e-mail">
        <input type="password" name="Password" id="Password" placeholder="Mot de passe" >
        <p class="titre4"> <a href="#">Oups ! J’ai oublié mon mot de passe</a></p>
        <input type="submit" value="je me connecte!" class="submit" name="submit">
   
    </form>
        <div class="sousdiv">
            <p class="titre5"> <a href="../html/form.php">Vous n’avez pas de compte ?</a></p>
            <input type="text"  name="compte" id="compte" placeholder="Créer mon compte">
        </div>

        </div>
        <div class="sousdiv2">
            <h4 class="titl1">Un seul compte pour tous vos sites Auchan :</h4>

      
            <p class="txt1" ><a href="#">Auchandrive</a></p>
             <p class="txt2"><a href="#">Auchan.fr</a></p>
            <p class="txt3"><a href="#">Auchanfrais</a></p>
            <p class="txt4"><a href="#">Auchanfioul</a></p> 
       
     

        </div>
        
    </div>



</body>
</html>
