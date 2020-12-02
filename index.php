<!-- Vervang HOSTNAME, PASSWORD zodat je met de database kunt verbinden -->

<!DOCTYPE html>
<html>

  <head>

    <style>
      h1 {
        margin: 50px 0 50px 0;
      }
      h1, p {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
      }
      img { 
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        width: 20%;
      }
    </style>

  </head>

  <body>

    <?php
      $database = new PDO('mysql:host=HOSTNAME;dbname=rds01', 'admin', 'PASSWORD');
      $statement = $database->query('SELECT * FROM `teams`');
      foreach ($statement->fetchAll() as $row) {
          echo sprintf('<h1>%s</h1>', $row['team_name']);
      }
    ?>
  
    <p>Als het goed is zie je hier de naam van je team. Dit wordt uit de Aurora Serverless database gehaald.</p>

    <img src="docker-logo.jpg" alt="Docker Logo">
  
  </body>

</html>