<?php

// ini_set("display_errors", "off");

//initializing the database where DB name = august_blog, table name = august_tb

// $conn = new mysqli("localhost", "root", "", "august_blog")or die(mysqli_error($conn));

$conn = mysqli_connect("localhost", "root", "", "august_blog"); // here database name

// Destroy if the conn is not possible to create
if(!$conn ){
    echo "<h3 class='container bg-dark p-3 text-center text-bg-warning rounded-lg mt-5'>Not able to establish Database Connection</h3>";


}

// getting data to be displayed on the index page
$sql = "SELECT * FROM august_tb";  // here your Database table name
$query = mysqli_query($conn, $sql);



// creating a new post
if(isset($_REQUEST['new_post'])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "INSERT INTO august_tb(title, content) VALUES('$title', '$content')"; // here your Database table name
    mysqli_query($conn, $sql);

    //   $conn->query("INSERT INTO blog_tb (title, content) VALUES('$title', '$content')")or die($conn->error);

    // echo $sql;

    header("location: index.php");

}

// Getting a post database on id
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM august_tb WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    // var_dump($query);

    header("Location: index.php");
    exit();
}



?>
