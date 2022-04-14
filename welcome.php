<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }

        .web{
            font-weight: bolder;
            color: rgb(37, 150, 190);
            font-family: "Montserrat", sans-serif;
        }

        .design{
            font-weight: lighter;
            color: rgb(37, 150, 190);
            font-family: "Montserrat", sans-serif;
        }

        .my-5{
            padding-top: 100px;
            padding-bottom: 80px;
        }
    </style>
</head>
<body>
    <h1 class="my-5 fw-lighter">Hello <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to <span class="web">YOUR</span><span class="design"> WORKS</span> site.</h1>
    <p class="">
        <a href="./mypage/mypage.php" class="btn fw-bold btn-lg btn-success col-4">Go in to My Page </a>
        <a href="index.html" class="btn fw-bold btn-lg btn-primary ml-3 col-4">Go to Main page</a>
        <a href="logout.php" class="btn fw-bold btn-lg btn-danger ml-3 col-4 mt-4">Log Out</a>
    </p>
</body>
</html>