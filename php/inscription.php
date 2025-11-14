<?php
echo $nom =$_POST['nom'];

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

$sql = "INSERT INTO users (nom, email, password)
VALUES ('$nom', '$email', '$password')";

if ($link->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>

