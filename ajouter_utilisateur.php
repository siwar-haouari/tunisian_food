 <?php 
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "app_web";
$conx = new PDO("mysql: host=$db_server;dbname=$db_name",$db_username,$db_pwd);
       $username = $_POST['username'];
       $email = $_POST['email'];
       $mdp = $_POST['mdp'];
            $resultat = "INSERT INTO user (id,username,email,mdp) VALUES (NULL,'$username','$email','$mdp')";
            $conx->exec($resultat);
    
    header('Location:admin.php'); 
    ?>