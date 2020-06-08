<?php
  // Import Class Role
  include __DIR__ . '/classes/Role.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Person</title>
</head>
<body>
  
  <!-- Header -->
  <header>
    <?php // Alert
      try{
        foreach($roles as $role){
          $role->alertAge();
        }
      } catch (Exception $exc){
      echo "
        <section class=\"alert alert-danger text-s h5 small text-center\">
          Errore: {$exc->getMessage()} <br>
          Linea: {$exc->getLine()} <br>
          File: {$exc->getFile()} <br>
        </section>";
      }
    ?>
    <h1 class="text-center display-4 mb-3">Elenco Dipendenti</h1>
  </header>

  <!-- Main -->
  <main class="container">
    <div class="row d-flex">
    <!-- Print all Person info -->
      <?php foreach($roles as $role){ ?>
        <ul class="list-group col-6">
          <?php
            echo "<li class=\"list-group-item\"> <strong> Nome </strong>: {$role->name} </li>";
            echo "<li class=\"list-group-item\"> <strong> Cognome: </strong> {$role->surname} </li>";
            echo "<li class=\"list-group-item\"> <strong> Età: </strong> {$role->age} </li>";
            echo "<li class=\"list-group-item\"> <strong> Anni di Esperienza: </strong> {$role->years_experience} </li>";
            echo "<li class=\"list-group-item\"> <strong> Tipologia Ruolo: </strong> {$role->type} </li>";
            echo "<li class=\"list-group-item\"> <strong> Documento: </strong> {$role->document} </li>";
            echo "<li class=\"list-group-item\"> <strong> Branch: </strong> {$role->branch} </li>";
            echo "<li class=\"list-group-item\"> <strong> Autorizazzione: </strong> {$role->authorization} </li>";
          ?>
        </ul>
      <?php } ?>
    </div>
  </main>
</body>
</html>
