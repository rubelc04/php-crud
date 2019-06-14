<?php 
$con = mysqli_connect('localhost', 'root', '', 'raw_crud');
$students = $con->query("select * from students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Student</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body class="bg-success">
  <div class="container ">
    <?php require 'nav.php'; ?>
  <div class="bg-light mt-5">
        <h1 class="">All Student</h1>
        <table class="bg-light table table-bordered">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Reg</th>
            <th>Action</th>
          </tr>
          <?php while($student = $students->fetch_object()): ?>
            <tr>
              <td><?php echo $student->id ?></td>
              <td><?php echo $student->name ?></td>
              <td><?php echo $student->roll ?></td>
              <td><?php echo $student->reg ?></td>
              <td>
                <a href="edit.php?id=<?php echo $student->id ?>" class="btn btn-warning">Edit</a> |
                <a class="btn btn-danger" href="delete.php?id=<?php echo $student->id ?>">Delete</a></td>
            </tr>
          <?php endwhile; ?>
        </table>
  </div>

  </div>
</body>
</html>

