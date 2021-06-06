<?php include('header.php'); ?>
    <!--session-->
    <?php
    session_start();
    if(isset($_SESSION['user']))
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
       <!--end of navbar-->
      <!--titre-->
        <div class="text-center" style="font-family: 'Lobster';padding-top: 5rem;background-color: #dc3545;  padding: 20px;">
        <h1>Les plats tunisiens</h1>
        </div>
<!--les recettes-->   
<?php
include('conx.php'); 
   //recuperer les notes depuis la BD:
   $res = $conx->query("SELECT * from categorie");
   $donnees = $res->fetchAll();
   $nbr_user = count($donnees);
?>
 <br>


 <?php  foreach($donnees as $item){ ?>
  <!--media-->
  <div class="container">
  <ul class="list-unstyled">
<div class="media">
<div class="mr-3" style="margin-top:2em;border-radius: 30px;">
<?php echo '<img src="data:image;base64,'.base64_encode($item['image']).'" alt="image" style="width:200px;height: 200px;border-radius: 100px;" >';?> 
 </div>
 <div class="media-body">
    <h5 class="mt-0 mb-1" style="font-family: 'Lobster';font-size:30px"><?php echo $item['nom']?></h5>
    <ul class="list-group" >
  <li class="list-group-item" style="border-color:red;"><?php echo $item['description']?></li>

</ul>
  </div>
</div>
</div>
</div>
<hr>
<?php } ?>





<?php include('footer.php'); ?>
