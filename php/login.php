<?php

echo $email =$_POST['email'];

echo $password =$_POST['password'];

$link=mysqli_connect('localhost','root', '', 'clolash');
if (!$link) {
    echo ('erreur de connexion');

}else{
    echo 'Succés...';
}


if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}

$results = mysqli_query($link, "SELECT * FROM users where email='$email'"); 
foreach ($results as $results){
    echo $results['email'], $results['password'];

}


session_start();
$_SESSION["email"] = $email


$link->close();
?>

