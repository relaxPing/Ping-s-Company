<?php
include 'connDB.php';
session_start();
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $search = mysqli_query($conn,'select * from user where username = "'.$username.'"');
        if(mysqli_num_rows($search) > 0){
            echo "<script language='JavaScript'>";
            echo "alert('username already in use')";
            echo "</script>";
        }else{
            mysqli_query($conn,"insert into user (username,password) values ('$username','$password')");
            header("Location:index.php");
        }
    }else{
        echo "<script language='JavaScript'>";
        echo "alert('please fill all the blanks')";
        echo "</script>";
    }
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
    <title>sign up</title>
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

<!--Login-->


<div class="row LogIn">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">Sign Up</div>
                <div class="panel-body">
                    <form method="post">
                        <p></p>
                        <div class="input-group">
                            <!--个人觉得这个i标签是icon的意思-->
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" id="userName" name="username">
                        </div>
                        <p></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="text" class="form-control" placeholder="Password " id="password" name="password">
                        </div>
                        <p></p>
                        <input type="submit" class="btn btn-block" id="submit" name="submit" value="Sign Up">
                        <!--<button type="button" class="btn btn-block">Sign In</button>-->

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>


</body>
</html>
