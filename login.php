<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Ma Boutique</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
body {
  background-image: url('pdp.jpg');
  background-attachment: fixed;
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #d5ceced2;
  height: 100vh;
}

.banderole {
  background-color: rgb(255, 192, 203);
  color: rgb(193, 81, 81);
  padding: 12px 0;
  font-size: 10px;
  font-weight: 500;
  margin: 10px 0;
}

.banderole .flex {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}

.banderole a {
  color: rgb(0, 0, 0);
  text-decoration: none;
  font-size: 20px;
}

.banderole a:hover {
  color: rgb(184, 46, 98);
  text-decoration: underline;

}
.banderole .souligne {
  color: rgb(20, 18, 19);
  text-decoration: underline;
}

.banderole img {
  width: 70px;
  height: 80px;
  object-fit: cover;
}
main {
  background-color: rgba(229, 143, 189, 0.573);
  padding: 30px;
  border-radius: 20px;
  margin: 40px;
  margin-top: 10px;
}

p {
  font-size: 15px;
  color: rgb(0, 0, 0);
}
.container {
  background-color:transparent;
  color: black;
  border-radius: 10px;
  width: 500px;
  height: 300px;
}
.formulaire {
  background-color: rgba(229, 143, 189, 0.573);
  color: black;
  display: flex;                 
  flex-direction: column;
  justify-content: center;        
  text-align: center;
  border-radius: 10px ;
  width: 300px;
  height: 300px;
}

</style>

<body>
  <main>
    <div class="banderole">
      <div class="flex">
        <a href="tarifs.php">💁🏾‍♀️ Technicienne ciliaire diplômée🪄</a>
        <a href="index.php"><span class="souligne">ACCEUIL</span></a>
        <a href="tarifs.php">TARIFS</a>
        <a href="disponibilites.php">DISPONIBILITÉS</a>
        <a href="inscription.php">INSCRIPTION</a>
        <img src="photof.jpg" alt="logo">
      </div>
    </div>

    
  </main>

  <footer>
  <form action="php/login.php" method="POST">
    <div class="container">

        <div class="formulaire">

        <span>email</span>
        <input type="email" name="email" required>
        <span>password</span>
        <input type="password" name="password" required>

    
        </div>
     <input type="submit" value="Se Connecter"/> 
     <p class="inscription">Vous n'avez pas de compte?<a href="inscription.php">inscrivez-vous</p>
    </div>
</form>