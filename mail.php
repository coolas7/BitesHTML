<?php
$to = $_POST['vardas'] ;    
$message = $_POST['zinute'] ;
mail( $to, "forma", $message  );
header( "Location: http://localhost/php/simple-mail.php" );
?>