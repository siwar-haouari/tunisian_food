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
  <!--liste groupe-->
  <br>
  <div class="container-fluid">
  <div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list"  onclick="window.location.href = 'admin.php';" href="#list-home" role="tab" aria-controls="home">Utilisateurs</a>
      <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list"    onclick="window.location.href = 'categorie.php';" href="#list-profile" role="tab" aria-controls="profile">Categories</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade  " id="list-home" role="tabpanel" aria-labelledby="list-home-list"></div>
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
<!-------------code categorie ---------------------------------------------------------------------------------------------------------------------->
<!--table utilisateurs-->
<?php
include('conx.php'); 
   //recuperer les notes depuis la BD:
   $res = $conx->query("SELECT * from categorie");
   $donnees = $res->fetchAll();
   $nbr_user = count($donnees);
?>


<!--tableau des utilisateur-->

<section class="ftco-section">
<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center mb-4">Gestion des Recettes</h1>
          <!--ajouter utilisateur-->
<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#staticBackdrop1">Ajouter recette</button><br><br>
<!-- Modal -->
<form action="ajouter_categorie.php" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel1">Ajouter recette :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label for="nom" class="col-form-label">nom recette:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Ingrédient:</label>
            <textarea type="text" class="form-control" id="description" name="description" required></textarea>
          </div>
          <div class="form-group">
            <label for="image" class="col-form-label">image recette:</label>
            <input type="file" class="form-control" id="image" name="image" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">ajouter</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
      </div>
      </form>
    </div>
  </div>
</div>
</form>
<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produit</th>
      <th scope="col">Ingrédient</th>
      <th scope="col">Image</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
      </tr>
  </thead>
  <tbody>
    <tr>
        <?php  foreach($donnees  as $item){ ?>
      <th scope="row"><?php echo $item['id']?></th>
      <td><?php echo $item['nom']?></td>
      <td><?php echo $item['description']?></td>
      <td><?php echo '<img src="data:image;base64,'.base64_encode($item['image']).'" alt="image" style="width:100px;height: 100px;" >';?></td>
              <!--button modifier-->

              <form  action="modifier_categorie.php">
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>
      <td><button type="submit" class="btn btn-warning btn-sm" name="mod">Modifier</button></td>
        </form> 
        <!--button supprimer-->
      <form method="post" action="supprimer_categorie.php">
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>
      <td><button type="submit" class="btn btn-danger btn-sm" name="sup">Supprimer</button></td>
        </form> 
    </tr>
    <?php } ?>
    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

    </div>
  </div>
</div>
   
<?php include('footer.php'); ?>










































    