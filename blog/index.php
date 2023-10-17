<?php 

include "logic.php";

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

    <!-- creating a new post Post Button -->
    <div class="text-center">
        <a class="btn btn-outline-success" href="create.php"><i fas fa-plus-o>+</i>Create a New post</a>
    </div>

    <div class="row">

    <?php foreach($query as $q) { ?>
        <div class="col-12 col-lg-4 d-flex justify-content-center">
            <div class="card text-white bg-dark mt-5">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $q['title']; ?></h5>
                    <p class="card-text"><?php echo substr($q['content'], 0, 50); ?> ...</p>
                    <a class="btn btn-light" href="view.php?id=<?php echo $q['id']?>">Read more <span class="text-danger"> &rarr; </span></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
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