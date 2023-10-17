<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asso-Array</title>
</head>
<body>
    <h3>Asso_array</h3>

    <?php
      // creating an Object with books array as dataBase 
      // here is the Normal Array Book storage 
      $books = [
        "Java Intro version-one",
        "Python Intro version-one",
        "Php Intro version-one",
        "Html Intro version-one",
      ];

      // here for Asso-Array book storage section using keys and values
     
      $cars = [
        [
            'name' => 'Benz',
            'model' => 'GLK',
            'url' => 'https://www.benz.com',
            'email' => 'example@benz.com'
           
        ],
        [
            'name' => 'Lexus',
            'model' => 'RX 350',
            'url' => 'https://www.lexus.com',
            'email' => 'example@Lexus.com'
           
        ],
        [
            'name' => 'Ford',
            'model' => 'RX 350',
            'url' => 'https://www.lexus.com',
            'email' => 'example@Lexus.com'
           
        ],
  
      ]
    ?> <!-- Php fucntion block ends -->

    <!-- using Html to display the above information -->
    <p>
        <!-- short-hand of php echo -->
        <?= $books[2] . '<br>' ; ?>

        <!-- Same as above -->
        <?php echo $books[3] . '<br>' ; ?>
    </p>

    <br>

    <!-- using Html LIST Items to display the whole books using foreach method -->

    <ol>
        <?php foreach ($books as $key => $book) 
            echo '<li> $book </li>';
        ?>
    </ol>

    <br>

    <!-- here we pure out the dataBase information -->
    <ol>
        <?php foreach ($books as $book) 
            // echo "<li> $book <sup>TM</sup> </li>";
            echo "<li> {$book} <sup>tm</sup> </li>";
        ?>
    </ol>

    <!-- when Looping throught an Asso-Array -->
    <ul>
        <?php foreach ($cars as $car) : ?>
            <li>
                <a href="<?= $car['url'] ?>">
                   <?= $car['name']; ?>
                </a>
            </li>

        <?php endforeach ; ?>
    </ul>
</body>
</html>