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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
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
                    <li class="nav-item"><a href="detail.php">Detail</a></li>
                    <li class="nav-item"><a href="posts.php">Posts</a></li>
                    <li class="nav-item"><a href="forums.php">Forums</a></li>
                    
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
        </div>
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Everything</option>
                    <option value="Titles">Titles</option>
                    <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>Education</h1>
            <div class="subforum-stats subforum-column center">
                    <span>2 Posts | 3 Coment</span>
                </div>
                </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-fire center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="detail.php">How to blur picture in jupyter notebook ?</a></h4>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">Muammer Tarhan</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-fire center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="detail.php">How to crack blustudio edu ?</a></h4>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">Muammer Tarhan</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
        </div>
        <!--More-->
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>Stock Marketing</h1>
                <div class="subforum-stats subforum-column center">
                    <span>1 Posts | 0 Coment</span>
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-fire center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Whick platform did you prefer for stock excange ?</a></h4>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
        </div>
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>Car</h1>
            <div class="subforum-stats subforum-column center">
                    <span>1 Posts | 12 Coment</span>
                </div>
                </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Audi 1.8 TFSİ Engine Oil</a></h4>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

           
        </div>
        <!---->
    </div>

    <!-- Forum Info -->
    <div class="forum-info">
        <div class="chart">
            MyForum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>5,369</u> Posts in <u>48</u> Topics by <u>8,124</u> Members.</span><br>
        <span>Latest post: <b><a href="">Random post</a></b> on Dec 15 2021 By <a href="">RandomUser</a></span>.<br>
        <span>Check <a href="">the latest posts</a> .</span><br>
    </div>

    <footer>
        <span>&copy; &nbsp;Copyright Muammer TARHAN - 2022</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>