<?php 
if (isset($_GET['name']) && isset($_GET['roll']) && isset($_GET['reg']) ) {
  $name = $_GET['name'];
  $roll = $_GET['roll'];
  $reg =  $_GET['reg'];
  $con = mysqli_connect('localhost', 'root', '', 'student');
  $con->query("insert into students(name, roll, reg) value('$name', '$roll', '$reg')");
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body class="bg-success">
  <div class="container">
    <?php require 'nav.php'; ?>
    <div class="card mt-5">
      <div class="card-header">
        <h2>Add Student</h2>
      </div>
      <div class="card-body">
        <form method="GET">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="roll">Roll</label>
              <input type="text" name="roll" id="roll" class="form-control">
          </div>
          <div class="form-group">
              <label for="reg">Reg</label>
              <input type="text" name="reg" id="" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-outline-success" type="submit">Add Student</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</body>
</html>