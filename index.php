<?php
$insert=false; 
if(isset($_POST['name']))
{
    // set connection variables
$server="localhost";
$username="root";
$password="";
// Create a connection
$con=mysqli_connect($server,$username,$password);
// Check for connection success
if(!$con)
{
    die("connection to this databse failed due to ".mysqli_connect_error());

}
// Collect post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
// echo $sql;
// Execute the query
if($con->query($sql)==true)
{
    // echo "Successfully inserted";
//   Flag for successful insertion
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";

}
// Connection should be closed after use
// Close the database connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="img.jpeg" altr="VIT">
    <div class="container">
        <h1>Welcome to VIT Vellore US trip form</h1>
        <p>Enter your details and submit this form  to confirm your paticipation in the trip</p>
        <?php
        if($insert==true)
        {
        echo "<p class='submitMsg'>Thanks for submitting the form. We are happy to see you joining for the US trip.</p>";
        }
        ?>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="number" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" placeholder="Enter your phone number" id="phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here">

            </textarea>
            <button class="btn">Submit</button>
          
        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>