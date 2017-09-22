<?php
session_start();
if(isset($_SESSION['username'])){   /*这句话是为了判断 如果用户直接进这个url会被执行else 转回login页面*/
    $username = $_SESSION['username'];
    if((time() - $_SESSION['last_time']) > 60){
        header("Location:logout.php");
    }else{
        $_SESSION['last_time'] = time();

    }
}else{
    header("Location:Login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="login.css">
    <title>sign in</title>
</head>
<body>
<!--Nav-->
<nav class="navbar navbar-default haha">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">PING</a>
        </div>
    </div>
</nav>

<!--information-->
<h2 align="center">Welcome,<?php echo $_SESSION['username']?></h2>
<p align="center"><a href="logout.php">Log out</a></p>



</body>
</html>
