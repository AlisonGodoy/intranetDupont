<?php

if(!isset($_SESSION)){      
    session_start(); 
} 

if($_SESSION['controleLogin'] == false){
	header('Location: ../View/loginUser.php?error=s');
}

?>