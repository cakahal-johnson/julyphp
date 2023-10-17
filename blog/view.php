<?php 

include_once "logic.php";

?> 

<!doctype html>
<html lang="en">

<head>
  <title>Simple || Blog</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="container mt-5">
    <!-- for message function -->

    <?php foreach($queryy as $q) { ?>

    <div class="bg-dark p-5 rounded-lg text-white text-center"><?php echo $q['title'] ?> </div>

    <div class="d-flex mt-2 justify-content-center align-items-center">
        <a href="edit.php?id=<?php echo $q['id'] ?>" class="btn btn-light btn-sm" name="edit">Edit</a>

        <form action="" method="POST">
            <input type="text" hidden  name="id" value="<?php echo $qq['id'] ?>" id="">

            <button class="btn btn-danger btn-sm ml-2">Delete</button>
        </form>
    </div>

    

    <p class="mt-5 border-left border-dark pl-3"> <?php  echo $q['content']  ?> </p>

    
    <a href="index.php" class="btn btn-outline-dark my-3">Go Home</a>
    
    <?php  } ?>

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