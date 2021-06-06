<?php include('header.php'); ?>
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
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"  onclick="window.location.href = 'admin.php';" href="#list-home" role="tab" aria-controls="home">Utilisateurs</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"    onclick="window.location.href = 'categorie.php';" href="#list-profile" role="tab" aria-controls="profile">Categories</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <?php include('utilisateur.php'); ?>











































<?php include('footer.php'); ?>