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
  margin: 0;
  font-family: Arial, sans-serif;
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
  justify-content: space-between; 
  align-items: flex-start;
  margin: 40px;
  padding: 20px;
  background-color: transparent;  
}

footer .text {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

footer .cil img {
  width: 400px;
  height: 700px;
  object-fit: cover;
  border-radius: 15px;
}

.container, .containerr {
  background-color: rgba(164, 147, 147, 0.563);
  color: black;
  display: flex;                 
  flex-direction: column;
  justify-content: center;
  align-items: center;           
  text-align: center;
  border-radius: 10px;
  width: 300px;
  height: 300px;
}

.container:hover, .containerr:hover {
  background-color: rgb(220, 200, 200);
}

.container a, .containerr a {
  display: flex;
  flex-direction: column;
  align-items: center;      
}

.container img, .containerr img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 50%;

}

.container p, .containerr p {
  font-weight: 600;
  font-size: 20px;
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

    <section>
      <p>
        <strong>Ciliaire diplômée — sublimez votre regard entre des mains expertes, 
        parce qu’un beau regard change tout ☺️<br>
        Découvrez mes prestations et prenez rendez-vous facilement.✨</strong>
      </p>
    </section>
  </main>

  <footer>
    <section class="text">
      <div class="container">
        <p>Pour découvrir mes prestations</p>
        <a href="https://www.instagram.com/clo__lashes/">
          <img src="insta.jpg" alt="Instagram">
          <p>Rejoignez-moi sur Insta  en cliquant ici✨</p>
        </a>
      </div>

      <div class="containerr">
        <p><strong>Disponible sur Paris / Lyon</strong><br>- CHAMPIGNY-SUR-MARNE<br>- Rillieux-la-Pape</p>
        <a href="#">
          <img src="plan.jpg" alt="Localisation" width="200" height="200">
        </a>
      </div>
    </section>

    <div class="cil">
      <img src="cil.jpg" alt="logo">
    </div>
  </footer>
</body>
</html>




