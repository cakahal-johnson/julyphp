<?php
require_once 'process.php';

?>

<!doctype html>
<html lang="en"> 

<head>
  <title>PHP||CRUD</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <h2 class="bg-primary text-center text-white container-fluid p-2">Create|Read|Update|Delete</h2>
  </header>


  <main class="container justify-content-center">
    <?php 
    // session_start();

    if(isset($_SESSION['message'])){
          echo $_SESSION['message'];
          // echo $_SESSION['msg_type'];

    }
    ?>
    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div> -->
  
    <!-- message section -->
    <?php // flash('message'); ?>

    <!-- connection the process function for the database -->
    <?php 
    $mysqli = new mysqli('localhost', 'root', '', 'julyphp') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM julytb") or die($mysqli->error);
    ?>

    <div class="row mb-5 align-content-centent">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php while($row = $result->fetch_assoc()) : ?>
            <tr>

                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['location'] ?></td>

                <td>
                    <a class="btn btn-outline-info" href="index.php?edit=<?php echo $row['id']; ?>">edit</a>
                    <a class="btn btn-danger" href="index.php?delete=<?php echo $row['id']; ?>">delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <!-- dashboard -->
    <div class="row w-75 mt-5 justify-content-center">
        <form method="POST" action="./process.php">
            <input type="text" hidden name="id" id="">
        <div class="mb-3 justify-content-center">
        <label for="" class="form-label">Name: </label>    
        <input class="form-control" type="text" name="name" value="<?php echo $name ;?>" placeholder="Enter your Name" id="">
        </div>

        <div class="mb-3 justify-content-center">
        <label for="" class="form-label">Location: </label>    
        <input class="form-control" type="text" name="location" value="<?php echo $location ;?>" placeholder="Enter your Location" id="">
        </div>
        
        <div class="mb-3 justify-content-center form-group">
        <?php if ($update == true) : ?>
          <!-- <input class="form-control btn btn-outline-success mt-3" type="submit" name="save" id=""> -->
          <button type="submit" class="form-control btn btn-outline-success mt-3" name="update">Update</button>
          <?php else: ?>
            <button type="submit" class="form-control btn btn-outline-success mt-3" name="save">Save</button>
            <!-- <input class="form-control btn btn-outline-success mt-3" type="submit" name="update" id=""> -->
        <?php endif; ?>
        </div>

        </form>
    </div>
    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>