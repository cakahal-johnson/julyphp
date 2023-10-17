<?php

session_start();

// connecting to database
// $mysqli = new mysqli('localhost', 'root', '', 'julyphp') or die(mysqli_error($mysqli));
$mysqli = new mysqli('localhost', 'root', '', 'julyphp');

if(!$mysqli){
    echo '<h3>error</h3>';
}else{
    
    // echo '<h3>connected</h3>';
}



// Creating a Data
$id = 0;
$name = '';
$location = '';
$update = false;

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    //  Inserting to database
    $mysqli->query("INSERT INTO julytb (name, location) VALUES ('$name', '$location')") or die($mysqli->error);

    // message using session
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    //for re-directing where it takes you to after saving
    header("location: index.php");


}


// delete function
if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM julytb WHERE id=$id") or die($mysqli->error);

    //re-direct
    header("location: index.php");
}


//   for edit btn
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM julytb WHERE id=$id") or die($mysqli->error);
    if (mysqli_num_rows($result) > 0){
        $row = $result->fetch_array();
        $name = $row['name'];
        $location = $row['location'];
    }
}

//  update
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("UPDATE julytb SET name='$name', location='$location' WHERE id=$id ")or die ($mysqli->error);

     $_SESSION['message'] = "Record has been updated!";
     $_SESSION['msg_type'] = "warning";

     header('location: index.php');
}

?>
