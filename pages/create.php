<?php
require 'bd.php';
require_once 'header.php';
$message = '';

if(isset($_POST['name']) && isset($_POST['email'])){
 if(!empty($_POST['name']) && !empty($_POST['email'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

  $request = $con->prepare("INSERT INTO person(name,email) VALUES(:name, :email)");
  if($request->execute([':name' => $name, ':email' => $email])){
    $message = 'Données insérer avec  succèss';
  };
 }

}
?>

<body>

<div style="margin-top: 30px;" class="container col-md-6">
<div class="card">
  <div class="card-header bg-primary text-light">
    <h1>ADD A PERSON</h1>
  </div>
  <div class="card-body">
    <?php if(!empty($message)):  ?>
    <div class="alert alert-success">
    <?= $message ?>
    </div>
    <?php endif ?>
    <form method="Post" action="">
      <div class="form-group">
        <label for="name" class="" for="name">Name:</label>
        <input type="text" id="name" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="email" class="" for="name">Email:</label>
        <input type="email" id="email" class="form-control" name="email">
      </div>
      <div class="card-footer border-none">
          <input type="submit" value="Envoyer" class="btn btn-primary">     
      </div>
     </form>
  </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
