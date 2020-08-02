<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    padding: 0;
    box-sizing:border-box;
    margin: 0;
}
.container{
    max-width:80%;
    background-color:rgb(228,195,195);
    margin:auto;
    padding: 23px;
}

</style>
<body>
    <div class="container">
    <h1>Lets learn about php</h1>
    <p>Your party status</p>
    <?php
    $age = 7;
    if($age>18)
    {
        echo "You can go to party";
    }
    else if($age==7)
    {
        echo "you are 7 years old";

    }
    else{
        echo "you can't go";
    
    }
    echo "<br>";
    // Array in PHP
    $languages = array("Python","C++","php","NodeJs");
    // echo $languages;//error aayega
    echo "Count = ".count($languages);
    echo "<br>";
    echo $languages[1];
    echo "<br>";
    
    // Loops in PHP
    
    ?>

    </div>    
</body>
</html>