<!-- Vervang HOSTNAME, PASSWORD zodat je met de database kunt verbinden -->

<!DOCTYPE html>
<html>

  <head>

    <style>
      body {
        background-color: coral;
      }

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
        -webkit-animation:spin 4s linear infinite;
        -moz-animation:spin 4s linear infinite;
        animation:spin 4s linear infinite;
      }

      @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
      @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
      @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
    </style>

  </head>

  <body>

    <?php
      $database = new PDO('mysql:host=rds01-dev-cluster.cluster-czop7ga5cpcj.eu-west-1.rds.amazonaws.com;dbname=rds01', 'admin', 'Abc123!!');
      $statement = $database->query('SELECT * FROM `teams`');
      foreach ($statement->fetchAll() as $row) {
          echo sprintf('<h1>%s</h1>', $row['team_name']);
      }
    ?>

    <h1>De pizza was lekker! Mandarijnen ook trouwens.</h1>
    <p>Als het goed is zie je hier de naam van je team. Dit wordt uit de Aurora Serverless database gehaald.</p>

    <img src="docker-logo.jpg" alt="Docker Logo">

  </body>

</html>