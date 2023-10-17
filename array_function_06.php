<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array || Functions</title>
</head>
<body>

<!-- Dome Database -->
    <?php

    $books = [
        [

            'name' => 'Androids Dreams of Electric Sheep v1 ',
            'author' => 'Philips K. Dick',
            'releaseYear' => 2023,
            'purchaseUrl' => 'https://www.google.com'
        ],
        [

            'name' => 'Androids Dreams of Electric Sheep v2 ',
            'author' => 'Philips K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'https://www.google.com'
        ],
        [

            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 1986,
            'purchaseUrl' => 'https://www.cnn.com'
        ],
        [

            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 1996,
            'purchaseUrl' => 'https://www.cnn.com'
        ],
        [

            'name' => 'The one-chance v1',
            'author' => 'Cakahal Johnson',
            'releaseYear' => 1996,
            'purchaseUrl' => 'https://www.bbc.com'
        ],
        [

            'name' => 'The one-chance v2',
            'author' => 'Cakahal Johnson',
            'releaseYear' => 2023,
            'purchaseUrl' => 'https://www.bbc.com'
        ],

    ];

    // refactor using array_filter function 1
    function filterByAuthor($books){
        $filteredBooks = [];

        foreach ($books as $book) {
            if($book['author'] === 'Cakahal Johnson'){
                $filteredBooks[] = $book; // here we append the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function in out filterbook variable
    }

    // refactor using array_filter function 2 here we add args*
    function filterByAuthor2($books, $author){
        $filteredBooks = [];

        foreach ($books as $book) {
            if($book['author'] === $author){
                $filteredBooks[] = $book; // here we append the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function in out filterbook variable
    }

    // refactor using array_filter function 3 here we add args*
    function filterByAuthor3($books, $year){
        $filteredBooks = [];

        foreach ($books as $book) {
            if($book['releaseYear'] === $year){
                $filteredBooks[] = $book; // here we append the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function in out filterbook variable
    }
    // refactor using array_filter function 4 here we add **args* using LAMBDA function is called naming function or Anonymous to assign index
    function filterByAuthor4($books, $year){
        $filteredBooks = [];

        foreach ($books as $book) {
            if($book['releaseYear'] === $year){
                $filteredBooks[] = $book; // here we append the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function in out filterbook variable
    }; $filterByBooksY = filterByAuthor3($books, 2023);

    //GENERIC FUNCTION OR NAMING FUNCTION
    function filter($items, $key, $value){
        $filtereditems = [];

        foreach ($items as $item) {
            if($item[$key] === $value){
                $filteredBooks[] = $item;
            }
        }

        return $filteredBooks;

    };

    $filteredBooks5 = filter($books, 'author', 'Cakahal Johnson'); // here is where we change the args*

    // Using Naming Function to refactor
    function filter6($items, $fn){
        $filtereditems = [];

        foreach ($items as $item) {
            if($fn($item)){
                $filteredBooks[] = $item;
            }
        }

        return $filteredBooks;

    }; // here we pass the naming function
    $filteredBooks6 = filter6($books, function($book){
        return $book['releaseYear'] <= 2023;
    });

    //here we pass two conditionals
    $filteredBooks7 = array_filter($books, function($book){
        // return $book['releaseYear'] >= 2023;
        // return $book['author'] === 'Andy Weir';
        return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2023;
    });


    
    ?> <!-- End of PHP Function -->

    <!-- Function 1 display -->
    <ul>
        <!-- Looping through the array  -->
        <?php foreach($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>)
            
                </a>
            </li>

        
        <?php endforeach; ?>
    </ul>

    <!-- Function 2 display -->
    <ul>
        Looping through the array with hardcoded name with one = sign all the books will have the Hardcoded name as their author
        <?php foreach($books as $book) : ?>
           <?php if($book['author'] = 'Cakahal Johnson') : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>) - By <?= $book['author'] ?>
            
                </a>
            </li>
           <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <!-- Function 3 display -->
    <ul>
        Looping through the array with hardcoded name with three === sign all the books will have their authors
        <?php foreach($books as $book) : ?>
           <?php if($book['author'] === 'Andy Weir') : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>) - By <?= $book['author'] ?>
            
                </a>
            </li>
           <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    Function 4 for filter_array 1 display
    <ul>
        Looping through the array with filterByAuthor for all the books and their authors
        <?php foreach(filterByAuthor($books) as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>) - By <?= $book['author'] ?>
            
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    Function 4 for filter_array 2 display
    <ul>
        Looping through the array with filterByAuthor for all the books and their authors
        <?php foreach(filterByAuthor2($books, 'Philips K. Dick') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>) - By <?= $book['author'] ?>
            
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    Function 4 for filter_array 3 display
    <ul>
        Looping through  the array with filterByAuthor for all the books and their authors
        <?php foreach(filterByAuthor3($books, 2023) as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>) - By <?= $book['author'] ?>
            
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    Function 4 for filter_array 4 display
    <ul>
        Looping through  the array with filterByAuthor for all the books and their authors using LAMBDA Function
        <?php foreach($filterByBooksY as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']?>) - By <?= $book['author'] ?>
            
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Generic function starts here </h3>
<ul>
    <?php foreach($filteredBooks5 as $book) :?>
        <li>
            <a href="<?= $book['purchaseUrl']?>">
            <?= $book['name']; ?> 
            (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?> 
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<h3>refactor filter by naming function</h3>
<ul>
    <?php foreach($filteredBooks6 as $book) :?>
        <li>
            <a href="<?= $book['purchaseUrl']?>">
            <?= $book['name']; ?> 
            (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?> 
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<h3>refactor filter by naming function with array_filter</h3>
<ul>
    <?php foreach($filteredBooks7 as $book) :?>
        <li>
            <a href="<?= $book['purchaseUrl']?>">
            <?= $book['name']; ?> 
            (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?> 
            </a>
        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>