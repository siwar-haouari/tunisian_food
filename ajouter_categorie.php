<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db ($connection,'app_web');
if(isset($_POST['submit'])){
    $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $query="INSERT INTO categorie (nom,description,image) values('$nom','$description','$file')";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo'<script type="text/JavaScript"> alert("image profile upload") </script>';
    }
    else{
        echo'<script type="text/JavaScript"> alert("image profile not upload") </script>';
    }


}
header('Location:categorie.php'); 
?>
