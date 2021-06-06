

<?php 
$id_el = $_GET['id'];
$username = $_GET['username'];
$email = $_GET['email'];
$mdp = $_GET['mdp'];
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "app_web";
$conx = new PDO("mysql: host=$db_server;dbname=$db_name",$db_username,$db_pwd);
$conx->exec("UPDATE user SET username='$username',email='$email',mdp='$mdp' where id = $id_el");
header('Location:admin.php'); 
?>