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
    <!--carousel-->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/slide-image1.jpg" height="570px" alt="First slide">         
            <div class="carousel-caption d-none d-md-block text-left">
                <h1>Le couscous tunisian</h1>
                <p>Le couscous est d'une part une semoule de blé dur préparée à l'huile d'olive et d'autre part, une spécialité culinaire issue de la cuisine berbère, à base de couscous, de légumes, d'épices, d'huile d'olive et de viande ou de poisson.</p>
              <p><a class="btn btn-danger" href="./html/contact.html" role="button">contactez nous</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/shantounsi.jpg" height="570px" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Shan Tounsi </h1>
              <p>
              Le shan tounsi, aussi appelé plat tunisien ou assiette tunisienne, est un plat tunisien à base d'œufs, connu pour sa facilité de préparation. Les ingrédients principaux sont des œufs, de l'harissa, de la salade méchouia, des pommes de terre bouillies, des olives et de l'huile d'olive.
              </p>
              <p><a class="btn btn-danger" href="./html/contact.html" role="button">contactez nous</a></p>
              </div>
              </div>
              </div>
        </div>
    </div>  
        <!--end of carousel--> 
        <!--test--> 
        <div class="icons">
            <div class="container">
            <div class="row animated bounceInLeft">
            <div class="icon col-sm-4 col-md-4 col-xs-12">
            <img alt="" src="./images/phone-ringing.svg">
            <p> Nous sommes à votre écoute à <br> 52 168 990, 7j/7 de 9h à 17h .</p>
            </div>
            <!--END col-sm-4-->
            <div class="icon col-sm-4 col-md-4 col-xs-12">
            <img alt="" src="./images/quality.svg">
            <p>
              Toutes vos transactions sont 100% sécurisées.</p>
            </div>
            <!--END col-sm-4-->
            <div class="icon col-sm-4 col-md-4 col-xs-12">
            <img alt="" src="./images/livraison.svg">
            <p>Toutes nos livraisons sont à l'heure .</p>
            </div>
            <!--END col-sm-4-->
            </div>
            <!--END row-->
            </div>
            <!--END container-->
            </div>
        <!--description+images-->
<div class="container-fluid">
    <div class="row" style="margin-top: 5em;">
        <div class="col">
            <div class="text-center" style="padding: 10px 10px 10px 10px;  margin: 35px;">
                <div class="titre">
                    La cuisine tunisienne !
              </div>
               <p class="text">
               La cuisine tunisienne, cuisine typiquement méditerranéenne, découle d'une tradition ancestrale de culture gastronomique en Tunisie et reflète les héritages culturels successifs (berbères, puniques, arabes, juifs, turcs, grecs, italiens, etc.) ; elle dépend du climat régional et de la géographie du pays, et par conséquent de ses produits locaux : blé, olives et huile d'olive, viande , fruits et légumes, poissons et fruits de mer (calmar, poulpe, thon, etc.), surtout le long des côtes. 
            </p>
              </div>
        </div>
        <div class="col"  style="margin-top: 2em;">
            <div class="text-center">
            <div class="row">
                <div class="col">
                    <img src="./images/chakchouka.jpg"  alt="...">
                    <img src="./images/mokli.jpg"  alt="...">
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <img src="./images/couscous.jpg"  alt="...">
                    <img src="./images/lablabi.jpg"  alt="...">
                </div>
              </div>
        </div>
    </div>
    </div>
</div>
    <!--end of description+images-->
    <hr class="espace" style="margin: 5rem ">
   <!--description+images-->
<div class="container-fluid">
    <div class="row">
  
        <div class="col" >
            <div class="text-center" style="padding: 10px 10px 10px 10px;  margin: 35px;">
            <img src="./images/drapeau-tunisie.png"  style="height:400px;width:400px" alt="...">
              </div>
    </div>
    <div class="col">
            <div class="text-center" style="padding: 10px 10px 10px 10px;  margin: 35px;">
                <div class="titre">
                    La tunisie !
              </div>
               <p class="text">
               La Tunisie est un pays d'Afrique du Nord situé sur la côte méditerranéenne et en bordure du désert du Sahara. Le musée national du Bardo à Tunis, la capitale, expose des pièces archéologiques allant des mosaïques romaines à l'art islamique. Le quartier de la Médina, avec son souk animé, encercle l'imposante mosquée Zitouna. À l'est, sur le site de l'ancienne cité de Carthage, se trouvent les thermes d'Antonin et d'autres ruines, et le musée national de Carthage et ses nombreux objets.            </p>
              </div>
        </div>

    </div>
</div>
    <!--end of description+images-->

    <?php include('footer.php'); ?>
