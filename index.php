<?php
session_start();
if(isset($_SESSION['username'])){   /*这句话是为了判断 如果用户直接进这个url会被执行else 转回login页面*/
    $username = $_SESSION['username'];
    if((time() - $_SESSION['last_time']) > 30){
        header("Location:logout.php");
    }else{
        $_SESSION['last_time'] = time();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="index.css">
    <title>Ping's Company</title>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="jumbotron text-center">
    <h1>Ping's Company</h1>
    <!--<p>We specialize in blablabla</p>-->
    <form class="form-inline">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" size="50" placeholder="Email Address" required>
                <div class="input-group-btn">
                    <button class="btn btn-danger">Subscribe</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!--新的Container-About-->
<div id="news" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2><strong>NEWS</strong></h2>
            <h3>click <button class="btn btn-default btn-mg" onclick="{location.href=''}">Here</button> to visit my new web application</h3>
            <p style="font-size: medium">That application is a Single-page application(SPA) Which means the web site that interacts with the user by dynamically rewriting the current page rather than loading entire new pages from a server. That approach avoids interruption of the user experience between successive pages, making the application behave more like a desktop application.</p>
            <p>The page does not reload at any point in the process, nor does control transfer to another page</p>
            <h3>Tools:HTML/CSS, JavaScript, Bootstrap, AngularJS, Linux, Apache, AWS EC2</h3>
        </div>
        <div class="col-sm-4"><span class="glyphicon glyphicon-signal logo"></span></div>
    </div>

</div>
<div id="about" class="container-fluid bg-gray">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo"></span>
        </div>
        <div class="col-sm-8"><h2><strong>ABOUT</strong></h2>
            <h4>This application implemented by using LAMP(Linux, Apache, MySQL, PHP) model,The SignIn/SignUp system with the function of 30 seconds automatically session Timeout/Logout</h4>
            <h4>Be the second registered user of this web site!Why second? Cause I am the First user!^_^               ---Ping Xin</h4>
            <button class="btn btn-default btn-mg" onclick="{location.href='newuser.php'}">Sign Up</button>
            <h3>Tools:HTML/CSS, JavaScript, Bootstrap, Linux, Apache, MySQL, PHP, AWS EC2</h3>
        </div>
    </div>
</div>

<!--Footer-->
<footer class="text-center">
    <!--data-toggle的tooltip是用来做鼠标划上去有提示字效果的-->
    <a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Made By Ping Xin</p>
    <p><span class="glyphicon glyphicon-map-marker"></span> Dallas, TX</p>
    <p><span class="glyphicon glyphicon-phone"></span>+0 682(248)0908</p>
    <p><span class="glyphicon glyphicon-envelope"></span> xinpingxian@gmail.com</p>
</footer>

<script>
    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>


<!--Container-About-->
<!--<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About Company Page</h2>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="btn btn-default btn-lg">Get In Touch</button>
        </div>
        <div class="col-sm-4"><span class="glyphicon glyphicon-signal logo"></span></div>
    </div>

</div>
<div class="container-fluid bg-gray">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo"></span>
        </div>
        <div class="col-sm-8"><h2>Our Values</h2>
            <h4><strong>MISSION:</strong>Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
            <p><strong>VISION:</strong>Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>-->





<!--Container-Services-->
<!--<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>POWER</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>LOVE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>JOB DONE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>GREEN</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>CERTIFICATE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4>HARD WORK</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
</div>-->

<!--Portfolio-->
<!--<div id="portfolio" class="container-fluid text-center bg-gray">
    <h2>Portfolio</h2><br>
    <h4>What we have created</h4>
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="imgs/8.jpg" class="stitch">
                <p><strong>Stitch1</strong></p>
                <p>Yes,we created stitch</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="imgs/14.jpg" class="stitch">
                <p><strong>STITCH2</strong></p>
                <p>Yes,we created stitch</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="imgs/17.jpg" class="stitch">
                <p><strong>STITCH3</strong></p>
                <p>Yes,we created stitch</p>
            </div>
        </div>
    </div>
</div>-->


<!--Carousel-->
    <!--<div id="myCarousel" class="carousel slide text-center " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item text-center  active">
                <img src="imgs/8.jpg" alt="Los Angeles" style="width:700px;height:700px ">
            </div>
            <div class="item text-center">
                <img src="imgs/14.jpg" alt="Los Angeles" style="width:700px;height:700px ">
            </div>
            <div class="item text-center">
                <img src="imgs/17.jpg" alt="Los Angeles" style="width:700px;height:700px ">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>-->

<!--Price Container-->
<!--<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Pricing</h2>
        <h4>Choose a payment plan that works for you</h4>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <p><strong>20</strong> Lorem</p>
                    <p><strong>15</strong> Ipsum</p>
                    <p><strong>5</strong> Dolor</p>
                    <p><strong>2</strong> sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h4>$19</h4>
                    <h4>per month</h4>
                    <div class="btn btn-lg">Sign Up</div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Pro</h1>
                </div>
                <div class="panel-body">
                    <p><strong>50</strong> Lorem</p>
                    <p><strong>20</strong> Ipsum</p>
                    <p><strong>10</strong> Dolor</p>
                    <p><strong>5</strong> sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h4>$29</h4>
                    <h4>per month</h4>
                    <div class="btn btn-lg">Sign Up</div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <p><strong>100</strong> Lorem</p>
                    <p><strong>50</strong> Ipsum</p>
                    <p><strong>25</strong> Dolor</p>
                    <p><strong>10</strong> sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h4>$49</h4>
                    <h4>per month</h4>
                    <div class="btn btn-lg">Sign Up</div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--Contact Container-->
<!--<div id="contact" class="container-fluid bg-gray ">
    <div class="text-center">
        <h2>CONTACT</h2><br>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Arlinton,TX</p>
            <p><span class="glyphicon glyphicon-phone"></span>+1(682)2480908</p>
            <p><span class="glyphicon glyphicon-envelope"></span>ping.xin@mavs.uta.edu</p>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6">
                    <input class="form-control" placeholder="Name">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" placeholder="Email">
                </div>
            </div><br>
            <textarea class="form-control" rows="5" placeholder="Comments"></textarea><br>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-lg pull-right" >SEND</button>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--Google Map-->
<!--<div id="googleMap" style="height: 400px;width:100%"></div>
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(32.724042, -97.119310);
        var mapProp = {center:myCenter,zoom:10};
        var map =new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUdYJHOMfpOew0BnVVIH9j-GJnmOQXHB8&callback=myMap"></script>-->


<!--NavBar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">PING</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#news">NEWS</a></li>
                <li><a href="#about">ABOUT</a></li>
                <!--<li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#contact">CONTACT</a></li>-->
                <li><a href="login.php" id="signIn">SIGN IN</a>

                <script>
                    if("<?php echo isset($_SESSION['username'])?>") {
                        document.getElementById("signIn").innerHTML = "<?php echo 'Hi,'.$_SESSION['username']?>";
                        document.getElementById("signIn").href = "welcome.php";
                    }
                </script>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
