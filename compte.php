<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>COMPTE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style/login.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="containerr">
  <div class="left">
    <div class="header">
    <img src="./image/logo_site.png" alt="Flowers in Chania" width="200px">

      <h2 class="animation a1">TUNISIAN FOOD</h2>
      <h4 class="animation a2">Log in to your account using email and password</h4>
    </div>
    <form action="compteconnexion.php" method="POST">
    <div class="form">
      <input  type="text"  name="username" required  class="form-field animation a3" placeholder="Nom d'utilisateur">
      <input type="email"  name="email" required class="form-field animation a3" placeholder="Email">
      <input name="mdp"type="password"  required class="form-field animation a4" placeholder="Mot de passe">
      <p class="animation a5"><a href="login.php">LOGIN?</a></p>
      <button class="animation a6" type="submit" name="compte">CREER UN COMPTE</button>
      <br> 
               <?php if (isset($_GET['error'])) { ?>
     		               <p class="alert alert-danger text-center"><?php echo $_GET['error']; ?></p>
                   	<?php } ?>
                       <?php if (isset($_GET['msg'])) { ?>
     		               <p class="alert alert-success text-center"><?php echo $_GET['msg']; ?></p>
                   	<?php } ?>
    </div>
  </div>
  </form>
  <div class="right"></div>
</div>
<!-- partial -->
  
</body>
</html>
