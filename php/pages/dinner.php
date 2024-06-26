<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/page.css">
    <title>Online meal BreakFast</title>
    <style>
        .body{
           background-color: rgb(35,36,41);
        }
    </style>
</head>
<body>
    <?php
        require 'navigation-bar.php';

        echo '
        <div class="main-content">
        <div class="breakfast-heading">
            <label for="">Snacks</label>
        </div>

        <div class="myslider">
            <div class="myslide">
                <div class="img">
                    <a href="#"><img src="../../img/dinner/din1.jpg" width="400px" height="250px"
                            alt="Image Not Found"></a>
                    <label for="">Biryani</label>
                </div>
                <div class="img">
                    <a href="#"><img src="../../img/dinner/din2.jpg" width="150px" height="250px"
                            alt="Image Not Found"></a>
                    <label for="">Rajma Chawal</label>
                </div>
                <div class="img">
                    <a href="#"><img src="../../img/dinner/din3.jpg" width="400px" height="250px"
                            alt="Image Not Found"></a>
                    <label for="">Egg Cury</label>
                </div>
            </div>
            <div class="myslide">
                <div class="img">
                    <a href="#"><img src="../../img/dinner/din4.jpg" width="400px" height="250px"
                            alt="Image Not Found"></a>
                    <label for="">Chole Nan</label>
                </div>
                <div class="img">
                    <a href="#"><img src="../../img/dinner/din5.jpg" width="400px" height="250px"
                            alt="Image Not Found"></a>
                    <label for="">Indian Thali</label>
                </div>
                <div class="img">
                    <a href="#"><img src="../../img/dinner/din6.jpg" width="400px" height="250px"
                            alt="Image Not Found"></a>
                    <label for="">Turkey</label>
                </div>
            </div>
        </div>
    </div>
        ';

        include 'footer.php';
    ?>
</body>
</html>