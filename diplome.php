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
  min-height: 100vh;
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
  transition: color 0.3s ease;
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
footer {
  display: flex;                  
  justify-content: flex-end; 
  align-items: center;
  margin: 40px;
  padding: 20px;
  background-color: transparent; 
}
footer img {
  height: 50vh;
  object-fit: cover;
}

</style>

<body>
  <main>
    <div class="banderole">
      <div class="flex">
        <a href="diplome.php">💁🏾‍♀️ Technicienne ciliaire diplômée🪄</a>
        <a href="index.php">ACCEUIL</a>
        <a href="tarifs.php"><span class="souligne">TARIFS</span></a>
        <a href="disponibilites.php">DISPONIBILITÉS</a>
        <a href="inscription.php">INSCRIPTION</a>
        <img src="photof.jpg" alt="logo">

        
   </main>

  <footer>
    <div class="diplome">
      <img src="diplome.jpg" alt="logo">
    </div>
    
  </footer>
</body>
</html>