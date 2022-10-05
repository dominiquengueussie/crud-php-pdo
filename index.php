<?php
 
  require './pages/bd.php';
 
    $request = $con->prepare("SELECT * FROM person");
    $request->execute(); 
    $resultats =  $request->fetchAll(PDO::FETCH_OBJ);
    //var_dump($resultats);
  
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD | PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./create.php">CRUD</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./pages/create.php">Create person</a>
        </li>
    </div>
  </div>
</nav>
  
  <body>
  
  <div style="margin-top: 30px;" class="container col-md-6">
  <div class="card">
    <div class="card-header bg-primary text-light">
      <h1>LIST OF A PERSON</h1>
    </div>
    <div class="card-body">
      <table class=" table table-bordered table-striped text-center">
         <thead class="text-center">
            <tr>
               <th> ID </th>
               <th> NAME </th>
               <th> EMAIL </th>
               <th> ACTION </th>
             </tr>
         </thead>
         <tbody>
           <?php foreach($resultats as $data): ?>
            <tr>
               <td><?= $data->id ?></td>
               <td><?= $data->name ?></td>
               <td><?= $data->email ?></td>
               <td>
                  <a class="btn btn-info text-white" href="./pages/edit.php?id=<?= $data->id?>">Edit</a>
                  <a onclick="return confirm('Etes-vous sûr de vouloir supprimer ?')" class="btn btn-danger text-white" href="./pages/delete.php?id=<?= $data->id?>">Delete</a>
               </td>
              
            </tr>
            <?php endforeach ?>
         </tbody>
      </table>  
    </div>
  </div>
  </div>
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
  </html>
  
