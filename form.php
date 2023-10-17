<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error{color:#ff0000; }

</style>
<body>
    <?php
    //variables 
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        }else{
            $name = text_input($_POST["name"]);
            // checking if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z]*&/", $name)){
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST['email'])) {
            $emailErr = "Email is required";
        } else {
            $email = text_input($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
            }
        }

        if(empty($_POST['comment'])){
            $comment = "";
        }else{
            $coment = text_input($_POST["comment"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Gender is required"; 
        }else{
            $gender = text_input($_POST["gender"]);
        }



        
    }
        

       function text_input($data){
             $data = trim($data);
             $data = stripcslashes($data);
             $data = htmlspecialchars($data);
             return $data;
       }
    
    ?>

    <!-- here is for HTML section -->
    <p class="error">* require field</p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php $name ?>">
        <span class="error">*</span>
        <br> <br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php $email; ?>">
        <span class="error">*</span>
        <br> <br>

        <label>Website:</label>
        <input type="text" name="website" value="">
        <span class="error">*</span>
        <br> <br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="<?php if(isset($gender) && $gender == "male") echo "checked"; ?>"> Male
        <input type="radio" name="gender" value="<?php if(isset($gender) && $gender == "fmale") echo "checked"; ?>"> Female
        <input type="radio" name="gender" value="<?php if(isset($gender) && $gender == "others") echo "checked"; ?>"> Others
        <span class="error">*</span>
        <br> <br>

        <label>Comment:</label>
        <textarea type="text" name="comment" value="" require>
                <?php echo $comment ; ?>
        </textarea>
        <br> <br>
        <input type="submit" name="submit" values="Submit"> 

    </form>
        <?php
           echo "<h3> My Database </h3>";
           echo $name;
           echo "<br>";
           echo $email;
           echo '<br>';
           echo $comment;
           echo '<br>'; 
           echo $gender;


        ?>
</body>
</html>