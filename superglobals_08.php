<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

    <ul>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILE</li>
        <li>$_ENV</li>
        <li>$_COOKIES</li>
        <li>$_SESSION</li>
    </ul>

    <!-- ========== Start Section ========== -->
    <h3>$GLOBALS</h3>
    <p>This super globals variables is used to access globals variables from anywhere in php or also within functions or methods, this global are stored in array called $Globals[index]. the index holds the name of the variables</p>

    <?php
    $x = 55;
    $y = 65;

    function addi(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        // z here is a local var using x and y for the operand
    }

    addi();
    echo $z;

    echo '<br>';
    $t = $x - $y;
    echo $t;

    
    ?> globals php ends here

    <h3>PHP SERVER</h3>
    <p>this holds information about headers, paths and script location</p>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?> </li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?> </li>
        <li>SYSTEM Root: <?php echo $_SERVER['SystemRoot']; ?> </li>
        <li>SERVER NAME: <?php echo $_SERVER['SERVER_NAME']; ?> </li>
        <li>SERVER PORT: <?php echo $_SERVER['SERVER_PORT']; ?> </li>
        <li>CURRENT FILE DIR: <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>REQUEST URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>?SERVER_SOFTWARE: <?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
        <li>CLIENT INFO: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>REMOTE ADDRESS: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>REMOTE PORT: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
    </ul>

    <h3>PHP REQUEST </h3>
    <p>PHP REQUEST is used to collect data after submitting and html form same as POST and GET</p>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           Name: <input type="text" name="fname">
           <br> <br>
           <input type="submit">
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo 'Name is empty';
            } else {
                echo $name;
            }
            
        }
    ?>

    <h3>d/f b/w GET AND POST </h3>
    <P> BOTH is an array that lholds Key/value pairs, where the key are names attributes of the forms controls and where the values, are the input data type from the user  </P>
    <P> _GET is an array of variables that passed to the current script via the URL parameters </P>
    <P> _POST is an array of variables that passed to the current script via the HTTP POST method </P>
    
    <h3>WHERE TO USE GET AND POST </h3>
    <P> GET is always visible to everyone which display in the URL, it also has a limits on amount of information or characters to send which is 2000 so, best used for non-sensitive data and its' possible to bookmark the page </P>
    
    <P> POST is invisible to other all name and values are embeded within the body of the Http request and it has no limit and moreover it's supports advance functionality such as binary while uploading files to stream_socket_server, it's not being displayed in the Url and has no support for bookmarking the page </P>


    <h3>COOKIES</h3>
   <p></p>


    <!-- ========== End Section ========== -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>