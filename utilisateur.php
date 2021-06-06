<link rel="stylesheet" href="style/utilisateur.css">

      <!--table utilisateurs-->
<?php
 $db_server = "127.0.0.1";
 $db_username = "root";
 $db_pwd = "";
 $db_name = "app_web";
 $conx = new PDO("mysql: host=$db_server;dbname=$db_name",$db_username,$db_pwd);
   //recuperer les notes depuis la BD:
   $res = $conx->query("SELECT * from user");
   $les_notes = $res->fetchAll();
   $nbr_user = count($les_notes);
?>


<!--tableau des utilisateur-->
<section class="ftco-section">
<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center mb-4">Gestion des utilisateurs</h1>
                    <!--ajouter utilisateur-->
<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#staticBackdrop">Ajouter utilisateur</button><br><br>
<!-- Modal -->
<form action="ajouter_utilisateur.php" method="POST">
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter utilisateur :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label for="username" class="col-form-label">username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="mdp" class="col-form-label">Mot de passe:</label>
            <input type="password" class="form-control" id="mdp" name="mdp" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="cat">ajouter</button>
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
      <th scope="col">username</th>
      <th scope="col">Email</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>

    </tr>
  </thead>
  <tbody>
    <tr>
        <?php  foreach($les_notes as $item){ ?>
      <th scope="row"><?php echo $item['id']?></th>
      <td><?php echo $item['username']?></td>
      <td><?php echo $item['email']?></td>
      <td><?php echo $item['mdp']?></td>













      
      <!--button modifier-->

      <form  action="modifier_utilisateur.php">
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>
      <td><button type="submit" class="btn btn-warning btn-sm" style="border-radius: 20px;"name="modifier">Modifier</button></td>
        </form> 
        <!--button supprimer-->
      <form method="post" action="supprimer_utilisateur.php">
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>
      <td><button type="submit" class="btn btn-danger btn-sm" name="delete" style="border-radius: 20px;">Supprimer</button></td>
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
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>
   