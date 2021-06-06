
<?php include('header.php'); ?>
<link rel="stylesheet" href="style/utilisateur.css">

    <!--session-->
    <?php
    session_start();
    if(isset($_SESSION['admin']))
    {?>
    <form class="form-inline my-2 my-lg-0">
    <?php echo '<a href="logout.php?logout" class="btn btn-light" style="border-radius: 20px;margin-left: 10px; ">';}
    else
    {
        header("location:login.php");
    }?><span class="glyphicon glyphicon-log-out"> 
    Quitter </span></a>   
      </form>
          </div>
        </div>
      </nav>
  <body>
    <!--barre de liste-->
<!--liste groupe-->
<br>
  <div class="container-fluid">
  <div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"  onclick="window.location.href = 'admin.php';" href="#list-home" role="tab" aria-controls="home">Utilisateurs</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"    onclick="window.location.href = 'categorie.php';" href="#list-profile" role="tab" aria-controls="profile">Categories</a>
    </div>
  </div>
  <div class="col-8"><br>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-Utilisateurs" role="tabpanel" aria-labelledby="list-Utilisateurs-list">
<!----------------------------------------------------------------------------------------------------------------------------------->
<?php 
if(isset($_GET['mod'])){
$id_el = $_GET['id'];
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "app_web";
$conx = new PDO("mysql: host=$db_server;dbname=$db_name",$db_username,$db_pwd);
$res=$conx->query("SELECT * FROM categorie where id = $id_el");
$etd = $res->fetch();
}
?>
    <h1>Modifier recette</h1></br>
 <form action="modifier_categorie_action.php" enctype="multipart/form-data">
 <h3>ID : <?php echo $id_el; ?></h3></br>
<div class="form-group">
<label for="recette">nom recette:</label>
<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $etd['nom'] ?>" >
</div>
<label for="description">Ingrédient:</label>
<input type="text" class="form-control" id="description" name="description" value="<?php echo $etd['description'] ?>" rows="4" cols="50">
</div><br>

<div class="form-group">
<label for="image">image recette:</label>
<input type="file" name="image"  value="<?php echo $image; ?>"/>
<br><br>

<input type="hidden"  name="id" value="<?php echo $etd['id'] ?>">
<button type="submit" class="btn btn-primary" name="modifiercat" >Modifier</button>
<button type="cancel" class="btn btn-danger" >Annuler</button>

</form>

<!----------------------------------------------------------------------------------------------------------------------------------->
</table>
      </div>

    </div>
  </div>
</div>
<?php include('footer.php'); ?>