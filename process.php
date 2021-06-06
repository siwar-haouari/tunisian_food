<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['email']) || empty($_POST['mdp']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       
       else
       {
            $query="select * from user where email='".$_POST['email']."' and mdp='".$_POST['mdp']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['user']=$_POST['email'];
                header("location:wellcome.php");
            }
            else
            {
                header("location:login.php?error=ce compte n'existe pas!! ");
            }
       }
       if(($_POST['mdp']=="adminsiwar") && ($_SESSION['admin']="admin@gmail.com"))

       {
           header("location:admin.php");
        }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>