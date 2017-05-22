<!DOCTYPE html>
<html>
<!-- Créer par Axel André -->
<head>
     <meta charset="utf-8"/>
     <title></title>
     <link rel="stylesheet" type="text/css" href="css/reset.css"/>
     <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
     <?php
     // on se connecte à MySQL
     function ConnectionBase($database,$addressDB,$id,$pass){

          $db = mysqli_connect($addressDB, $id, $pass);

          // on sélectionne la base
          mysqli_select_db($db,$database);

          // on crée la requête SQL
          $sql = 'SELECT Titre, Auteur, id, Texte FROM Bella WHERE id<='. 2;

          // on envoie la requête
          $req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

          // on fait une boucle qui va faire un tour pour chaque enregistrement
          while($data = mysqli_fetch_assoc($req))
              {
              // on affiche les informations de l'enregistrement en cours
              $full ="<div id='content'>";
              $full.="<div id='titre'>";
              $full.=$data['Titre'].'</div>';
              $full.='</div>';
              echo $full;
              }

          // on ferme la connexion à mysql
          mysqli_close($db);
     }
     ConnectionBase('titidafibf09','titidafibf09.mysql.db','titidafibf09','Pred160468');
     ?>

</body>

</html>
