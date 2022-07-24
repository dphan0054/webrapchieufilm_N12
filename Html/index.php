<?php
include('../PHP/data.php');
include('../PHP/usdata.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/3569aa9baa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Website/Css/style.css">
</head>

<body>
    <nav id="navbar" class="appframe">
        <div class="logo">
            <img src="/Website/logo/icon1.png" alt="logo">
        </div>
        <div class="icon-right">
            <div class="home butonicon">
                <a href="/Website/Html/index.php">Trang chủ</a>
            </div>
            <div class="movie butonicon">
                <a href="#">Sự kiện</a>
            </div>
            <div class="tv butonicon">
                <a href="/Website/Html/quanlyve.php">Giới Thiệu</a>
            </div>
            <div class="start butonicon">
                <?php
                if ($get['status'] == 1) {
                    echo '<a id="login" href="#">' . $get['username'] . '</a>';
                } else {
                ?>

                    <a id="login" href="/Website/Html/Login.PHP">Đăng nhập</a>
                <?php
                };
                ?>
            </div>
    </nav>
    <div class="content">
        <div class="slider-container">
            <div class="left-slides">
                <div style="background-color: rgba(0,0,0,0)">
                    <img src="/Website/logo/thor.png" alt="">
                    <a href="" class="buy">Mua vé ngay</a>
                </div>

                <div style="background-color: rgba(0,0,0,0)">
                    <img src="/Website/logo/eve.png" alt="">
                    <a href="" class="buy">Mua vé ngay</a>
                </div>

                <div style="background-color: rgba(0,0,0,0)">
                    <h3>Em và Trịnh</h3>
                    <p>Quốc gia: Việt Nam <br>Ngày khởi chiếu: 16/04/2022</p>
                    <a href="" class="buy">Mua vé ngay</a>
                </div>

                <div style="background-color: rgba(0,0,0,0)">
                    <h3>Minions</h3>
                    <p>Quốc gia: Mỹ <br>Ngày khởi chiếu: 05/07/2022</p>
                    <a href="" class="buy">Mua vé ngay</a>
                </div>

                <div style="background-color: rgba(0,0,0,0)">
                    <img src="/Website/logo/insider.png" alt="">
                    <a href="" class="buy">Mua vé ngay</a>
                </div>
            </div>

            <div class="right-slides">
                <div style="background-image: url('//assets.glxplay.io/images/w1000/title/insider_web_posterLandscape_c3100c0a23eb2e39b5a8cf2d3e8cb570.jpg');">
                </div>

                <div style="background-image: url('/Website/image/minion.jpg');">
                </div>

                <div style="background-image: url('https://galaxyplay.vn/landings/assets/img/banner-ls.jpg');">
                </div>

                <div style="background-image: url('///assets.glxplay.io/images/w1000/title/eve_web_posterLandscape_93435fbafdeabe740e13c51fac7395fa.jpg');">
                </div>

                <div style="background-image: url('//assets.glxplay.io/images/w1000/title/thor_web_posterLandscape_2b33c240c1a31debc779a80cbbe56c24.jpg');">
                </div>
            </div>

            <div class="buttons">
                <button class="left-btn">
                    <i class="fas fa-arrow-down"></i>
                </button>
                <button class="right-btn">
                    <i class="fas fa-arrow-up"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
        ?>
            <div class="card">
                <div style="background-image: url('<?php echo "../image/" . $row['image'] ?>');" class="box">
                    <div class="content">
                        <h3><?php echo $row['name'] ?></h3>
                        <a href="quanlyve.php">Đặt vé ngay</a>
                    </div>
                </div>
            </div>

        <?php };
        ?>
    </div>

    <script src="/Website/JS/script.js"></script>
    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/"><i class="fa fa-github"></i></a>

        </div>

        <div class="footer-left">
            <p class="footer-links">
                <a class="link-1" href="#">Home</a>
                <a href="#">Blog</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </p>

            <p>Made By &copy;<br> DinhThi<br>AnhDuong </p>
        </div>

    </footer>
</body>

</html>