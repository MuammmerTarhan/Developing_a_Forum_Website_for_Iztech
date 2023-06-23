<?php 

session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <!--NavBar Section-->
        <h3>
            <img src="pictures/ıztech_logo.png" alt="Iztech Logo" width="120" height="120">
            <a href="#" style="float:right;text-align:right;margin-left: 80px;"><a class="brand">IZTECH Forum</i></a></a>
         </h3>
        <div class="form">
        <header>
            <!--NavBar Section-->
            <div class="navbar">
                <nav class="navigation hide" id="navigation">
                    <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                    <ul class="nav-list">
                    <li class="nav-item"><a href="logout.php">Logout</a></li>
                    <li class="nav-item"><a href="profile.php">Profile</a></li>
                    <li class="nav-item"><a href="detail.php">Temp Top</a></li>
                    <li class="nav-item"><a href="posts.php">Posts</a></li>
                    <li class="nav-item"><a href="forums.php">Forums</a></li>
                    </ul>
                </nav>
                <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </header></header>

    
    <?php echo $user_data["user_name"]; ?> Kaya

    



    

<footer>
    <span>&copy; &nbsp;Copyright Muammer TARHAN - 2022</span>
</footer>

<script src="main.js"></script>
</body>
</html>


