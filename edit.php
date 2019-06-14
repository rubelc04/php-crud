<?php 
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'raw_crud');
if (isset($_POST['name']) && isset($_POST['roll']) && isset($_POST['reg']) ) {
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $reg = $_POST['reg'];
  $con = mysqli_connect('localhost', 'root', '', 'raw_crud');
  $con->query("update students set name='$name', roll='$roll', reg='$reg' where id=$id");
}
$students =  $con->query("select * from students where id=$id");
$student= $students->fetch_object();


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
        <h2>Update Student</h2>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
              <label for="name">Name</label>
              <input value="<?php echo $student->name ?>" type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="roll">Roll</label>
              <input value="<?php echo $student->roll ?>" type="text" name="roll" id="" class="form-control">
          </div>
          <div class="form-group">
              <label for="reg">Reg</label>
              <input value="<?php echo $student->reg ?>" type="text" name="reg" id="" class="form-control">
          </div>

          <div class="form-group">
            <button class="btn btn-outline-success" type="submit">Update Student</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</body>
</html>