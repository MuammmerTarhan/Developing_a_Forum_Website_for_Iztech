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
                    <li class="nav-item"><a href="detail.php">Detail</a></li>
                    <li class="nav-item"><a href="posts.php">Posts</a></li>
                    <li class="nav-item"><a href="forums.php">Forums</a></li>
                    </ul>
                </nav>
                <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            </div>

    <div class="container">

        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="head">
                <div class="authors">Muammer Tarhan</div>
                <div class="content">Topic: How to blur picture in jupyter notebook ? (Read 135 Times)</div>
            </div>

            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">Muammer Tarhan</a></div>
                    <div>Student</div>
                    <img src="https://cdn.pixabay.com/photo/2022/12/16/02/28/apples-7658810_1280.jpg" alt="">
                    <div>Posts: <u>3</u></div>
                    <div>Points: <u>4586</u></div>
                </div>
                <div class="content">
                    def convolve(image, kernel): #IMPLEMENT HERE<br>
                    image_copy=image.copy()<br>
                    final_img=np.empty_like(image_copy) #make empty array of same size<br>
                    <br>
                    for ix in range(len(image)):<br>
                        for iy in range(len(image[ix])):<br>
                            for iz in range(len(image[ix][iy])):<br>
                            # print(new_kernel[ix][iy])<br>
                                final_img[ix, iy, iz]=np.multiply(image[ix, iy, iz], kernel[ix%len(kernel), iy%len(kernel),iz])*1/9<br>
                
                    return final_img<br>
                new_kernel=np.ones((3,3,3))<br>
                new_kernel[0,1]=2<br>
                new_kernel[1,0]=2<br>
                new_kernel[1,2]=2<br>
                new_kernel[1,1]=4<br>
                new_kernel[2,1]=2<br>
                new_kernel[2]=3<br>
                plt.imshow(convolve(image, new_kernel))
                    <hr>
                    Instead, it returns a darkened version of the image. How do I fix this?
                    <br>
                    <div class="comment">
                        <button onclick="showComment()">Comment</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Comment Area-->
        <div class="comment-area hide" id="comment-area">
            <textarea name="comment" id="" placeholder="comment here ... "></textarea>
            <input type="submit" value="submit">
        </div>

        <!--Comments Section-->
        <div class="comments-container">
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">Prof. A. K.</a></div>
                    <div>Teacher</div>
                    <img src="https://cdn.pixabay.com/photo/2022/12/13/13/30/bird-7653386_1280.jpg" alt="">
                    <div>Posts: <u>2</u></div>
                    <div>Points: <u>42</u></div>
                </div>
                <div class="content">
                    Believe yourself.
   



                    <div class="comment">
                        <button onclick="showReply()">Reply</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Reply Area-->
        <div class="comment-area hide" id="reply-area">
            <textarea name="reply" id="" placeholder="reply here ... "></textarea>
            <input type="submit" value="submit">
        </div>


        <!--Another Comment With replies-->
        <div class="comments-container">
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">Admin 6236</a></div>
                    <div>Admin</div>
                    <img src="https://cdn.pixabay.com/photo/2022/12/16/18/04/sea-7660300_1280.jpg" alt="">
                    <div>Posts: <u>83</u></div>
                    <div>Points: <u>839</u></div>
                </div>
                <div class="content">
                    Blurring an image is the equivalent of reducing the image features, i.e we are either reducing the number of pixels, reducing the sharpness of pixels or both, that said your function does not do either, your function is simply going over the image and updating the channel, specifically if our image is
                    <br><br>
                    <hr>
                    white = [255, 255, 255]<br>
                    black = [0, 0, 0]<br>
                    image = [[white, white, white],<br>
                             [white, black, white],<br>
                             [white, white, white]] <br>
                    <hr>
                    <br>
                    Then your code will change it into
                    <br><br>
                    <hr>
                    image = [[white / 9, 2 * white / 2, white / 9],<br>
                    [2 * white / 9, 4 * black / 9, 2 * white / 9],<br>
                    [3 * white / 9, 3 * white / 9, 3 * white / 9]] <br>
                    <hr>
                    <br>
                    What you are doing is you are reducing the value of each pixel and since 0 is black and 255 is white, the closer we are to 0 the darker the pixel, that is why your image is appearing darker
                    <br>
                    <br>
                    <div class="comment">
                        <button onclick="showReply()">Reply</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Reply Area-->
        <div class="comment-area hide" id="reply-area">
            <textarea name="reply" id="" placeholder="reply here ... "></textarea>
            <input type="submit" value="submit">
        </div>

        

    </div>
    <footer>
        <span>&copy; &nbsp;Copyright Muammer TARHAN - 2022</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>