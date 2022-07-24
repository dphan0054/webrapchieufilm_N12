<?php
include('../PHP/usdata.php');
if (isset($_POST["pay"])) {
    $name = $_POST['film1'];
    $address = $_POST['rap1'];
    $date = $_POST['ngay1'];
    $time = $_POST['suat1'];
    $chair = $_POST['hang1'];
    $numberchair = $_POST['soghe1'];
    $giave = $_POST['giave1'];
    if (!empty($name) && !empty($address) && !empty($date) && !empty($time) && !empty($chair) && !empty($numberchair) && !empty($giave)) {
        $Sql = "INSERT INTO `vechieufilm`(`name`,`address`,`date`,`time`,`chair`,`numberchair`,`giave`) VALUES('$name','$address','$date','$time','$chair','$numberchair','$giave') ";
        if ($conn->query($Sql) === TRUE) {

            echo "<script type='text/javascript'>alert('Thanh Toán thành công');
        document.location='/Website/Html/trangchu.php</script>";
            header("Location:trangchu.php");
        } else {
            echo "Lỗi{$Sql}" . $conn->error;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae58ca484c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Website/css/details.css">
    <script src="/Website/JS/script.js"></script>
    <script src="/Website/JS/tinhtien.js"></script>
    <title>Document</title>
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
                <a href="/Html/quanlyve.php">Giới Thiệu</a>
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
    <div class="svg-wrapper">
        <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
            <rect class="shape" height="60" width="320">
                <div class="txt">CINEMA</div>
            </rect>

        </svg>
    </div>


    <div class="body">
        <div class="bang1">
            <tr>
                <td> Đạo diễn Aaron Toronto</td>
            </tr><br>
            <tr>
                <td>Biên kịch Tác Phẩm - Diễn Viên Nhã Uyên</td><br>
            </tr>
        </div>
        <a href="#"></a><button class="nut1">Giới Thiệu phim</button></a>
        <a href="#"><button class="nut2"> Mua vé </button></a>
        <div class="poster">
            <img class="poster1" src="https://ss-images.saostar.vn/w800/pc/1619082154836/saostar-839j5qqqlbfdpdvg.jpg" alt="posterDTRR">
        </div>
        <div class="content-bannerngang">
            <tr>
                <td>
                    <h2 class="title-DTRR">Đêm Tối Rực Rỡ</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h3 class="content-DTRR"> Một đám tang bình thường làm bùng nổ một bi kịch đau thương.</h3>
                </td>
                <td>
                    <p style="text-align:justify">Nếu như trong một gia đình từ lâu đã tồn tại những tổn thương vô hình do thói bạo hành <br> gây ra , thì việc cố gắng chữa lành cho các thành viên trong gia đình ấy có khiến họ phải <br>chịu nhiều đau đớn hơn không? Đêm Tối Rực
                        Rỡ! đi tìm lời đáp cho câu hỏi này bằng <br> cách đẩy các nhân vật vào một tình huống khiến họ để lộ những vết thương đang mưng<br> mủ rất cần được chữa lành.</p>
                </td><br>
            </tr>
            <tr class="sơ lược phim DTRR">
                <td></td>
                <td>
                    <h3>Đêm tối rực rỡ khai thác nhiều vấn đề trong xã hội, đặc biệt là vấn <br> nạn bạo hành gia đình, với góc nhìn và lối kể chuyện nghiêm túc.</h3>
                </td>
                <td>
                    <p>Khi người ông qua đời, cả gia đình của Xuân Thanh (Nhã Uyên) tề tựu để đưa tiễn.<br> Đám tang diễn ra hoành tráng, xôm tụ và đầy màu sắc. Bỗng dưng một đám người kéo <br> đến đòi nợ trong sự ngỡ ngàng của tất cả. Những bí mật bị
                        phanh phui, bi kịch <br> chồng bi kịch, như một hệ luỵ tổn thương của nạn bạo hành gia đình đầy ám ảnh.</p>
                </td><br>
                <div class="theloai">
                    <table td>
                        <tr>
                            <td>Ngày chiếu</td>
                            <td>Thể loại</td>
                            <td>Quốc gia</td>
                        </tr>
                        <tr>
                            <td>07/04/2022</td>
                            <td>Chính Kịch, Gia Đình, Gay Cấn</td>
                            <td>Việt Nam</td>
                        </tr>
                    </table>
                </div>

        </div>
        <div class="w3-container">

            <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button tablink w3-red" onclick="openFilm(event,'film1')">PHIM ĐANG CHIẾU</button>
                <button class="w3-bar-item w3-button tablink" onclick="openFilm(event,'film2')">PHIM SẮP CHIẾU</button>

            </div>
            <div id="film1" class="w3-container w3-border film">
                <div class="container">
                    <img src="https://cdn.galaxycine.vn/media/2022/6/13/300x450_1655112728976.jpg" class="image"><br>
                    <div class="middle">
                        <div class="nut3">
                            <div>
                                <a class="text" href="/html/quanlyve.pphp"> MUA VÉ </a>
                            </div>
                        </div>
                    </div>
                    <il>
                        <h3 class="contentthor">THOR: LOVE AND THUNDER</h3>
                        <h3 class="contentthor">THOR: TÌNH YÊU VÀ SẤM SÉT</h3>
                    </il>
                    <div class="container1">
                        <img src="https://cdn.galaxycine.vn/media/2022/6/14/1200wx1800h_1655176495829.jpg" class="image1"><br>
                        <div class="middle1">
                            <div class="nut4">
                                <div>
                                    <a class="text1" href="/html/quanlyve.pphp"> MUA VÉ </a>
                                </div>
                            </div>
                        </div>
                        <il>
                            <h3 class="contentminions1">MINIONS: THE RISE OF GRU</h3>
                            <h3 class="contentminions1">MINIONS: SỰ TRỞ LẠI CỦA GRU</h3>
                        </il>
                    </div>
                    <div class="container2">
                        <img src="https://cdn.galaxycine.vn/media/2022/6/17/300x450_1655470357035.jpg" class="image2"><br>
                        <div class="middle2">
                            <div class="nut5">
                                <div>
                                    <a class="text4" href="/html/quanlyve.pphp"> MUA VÉ </a>
                                </div>
                            </div>
                        </div>
                        <il>
                            <h3 class="contenttrinh">EM VÀ TRỊNH</h3>
                        </il>
                    </div>
                </div>
                <div class="container3">
                    <img src="https://cdn.galaxycine.vn/media/2022/6/29/1200x1800---copy_1656496668220.jpg" class="image3"><br>
                    <div class="middle3">
                        <div class="nut6">
                            <div>
                                <a class="text3" href="/html/quanlyve.pphp"> MUA VÉ </a>
                            </div>
                        </div>
                    </div>
                    <il>
                        <h3 class="contentvirus">VIRUS: 32</h3>
                        <h3 class="contentvirus">XÁC SỐNG: 32</h3>
                    </il>

                </div>
                <div class="container4">
                    <img src="https://cdn.galaxycine.vn/media/2022/6/21/1200x1800_1655786885716.jpg" class="image4"><br>
                    <div class="middle4">
                        <div class="nut7">
                            <div>
                                <a class="text4" href="/html/quanlyve.pphp"> MUA VÉ </a>
                            </div>
                        </div>
                    </div>
                    <il>
                        <h3 class="contentwitch">THE WITCH: PART 2. THE OTHER ONE</h3>
                        <h3 class="contentwitch">SÁT THỦ NHÂN TẠO 2: MẪU VẬT CÒN LẠI</h3>
                    </il>
                    <div class="container5">
                        <img src="https://cdn.galaxycine.vn/media/2022/6/14/1200wx1800h_1655176776685.jpg" class="image5"><br>
                        <div class="middle5">
                            <div class="nut8">
                                <div>
                                    <a class="text5" href="/html/quanlyve.pphp"> MUA VÉ </a>
                                </div>
                            </div>
                        </div>
                        <il>
                            <h3 class="contentphone">THE BLACK PHONE</h3>
                            <h3 class="contentphone">ĐIỆN THOẠI ĐEN</h3>
                        </il>
                    </div>

                </div>
            </div>

            <div id="film2" class="w3-container w3-border film" style="display:none">
                <div class="containerfilmsapchieu">
                    <img src="https://cdn.galaxycine.vn/media/2022/7/4/1200wx1800h_1656923553230.jpg" class="imageDECISION"><br>
                    <div class="middle6">
                        <div class="nut9">
                            <div>
                                <a href="/html/quanlyve.php"> <button class="text6">MUA VÉ</button></a>
                            </div>
                        </div>
                    </div>
                    <il>
                        <h3 class="contentDECISION">DECISION TO LEAVE</h3>
                        <h3 class="contentDECISION">QUYẾT TÂM CHIA TAY</h3>
                    </il>
                    <div class="container6">
                        <img src="https://cdn.galaxycine.vn/media/2022/6/24/900wx1350h1_1656065081813.jpg" class="imageconan"><br>
                        <div class="middle7">
                            <div class="nut10">
                                <div>
                                    <a href="/html/quanlyve.pphp"><button class="text7">MUA VÉ</button></a>
                                </div>
                            </div>
                        </div>
                        <il>
                            <h3 class="contentconan">DETECTIVE CONAN MOVIE 25:<br>THE BRIDE OF HALLOWEEN</h3>

                        </il>
                    </div>
                    <div class="container7">
                        <img src="https://cdn.galaxycine.vn/media/2022/6/8/300_1654675946191.jpg" class="imagetienluat"><br>
                        <div class="middle8">
                            <div class="nut11">
                                <div>
                                    <a href="/Website/html/quanlyve.pphp"> <button class="text8">MUA VÉ</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <il>
                            <h3 class="contenttienluat">DÂN CHƠI KHÔNG SỢ CON RƠI</h3>
                        </il>
                    </div>
                </div>

            </div>
            <script>
                function openFilm(evt, filmName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("film");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                    }
                    document.getElementById(filmName).style.display = "block";
                    evt.currentTarget.className += " w3-red";
                }
            </script>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">

            <div ID="MUAVE" class="option">

                <h2 class="buttonsum"> Mua Vé</h2>

                <div class="form">
                    <form class="chonphim1" action="vechieufilm.php" method="POST" , enctype="multipart/form-data">
                        <select id="film1" name="film1">
                            <option>Chọn Phim</option>
                            <option>ĐÊN TỐI RỰC RỠ</option>
                            <option>THOR: LOVE AND THUNDER</option>
                            <option>MINIONS: THE RISE OF GRU</option>
                            <option> EM VÀ TRỊNH</option>
                            <option>VIRUS: 32</option>
                            <option>THE BLACK PHONE</option>
                            <option>THE WITCH: PART 2. THE OTHER ONE</option>
                        </select><br>
                        <select id="film1" name="rap1">
                            <option>Chọn Rạp</option>
                            <option>Cine Nguyễn Du</option>
                            <option>Cine Kinh Dương Vương </option>
                            <option>Cine Quang Trung</option>
                            <option> Cine Phạm Văn Chí</option>
                            <option>Cine Tân Bình</option>

                        </select><br>
                        <select id="film1" name="ngay1">
                            <option>Chọn Ngày</option>
                            <option>Thứ 7, 30/07/2022</option>
                            <option>Chủ Nhật, 31/07/2022</option>
                            <option>Thứ 2, 08/08/2022 </option>
                            <option> Thứ 3, 09/08/2022</option>
                            <option>Thứ 4,10/08/2022</option>
                            <option>Thứ 5,11/08/2022</option>
                            <option>Thứ 6,12/08/2022</option>
                        </select><br>


                        <select id="film1" name="suat1">
                            <option>Chọn Suất</option>
                            <option>9:00, 2D- Phụ đề</option>
                            <option>12:00, 2D- Phụ đề</option>
                            <option>14:00, 2D- Phụ đề</option>
                            <option>15:30, 2D- Phụ đề</option>
                            <option>17:30, 2D- Phụ đề</option>
                            <option>19:30, 2D- Phụ đề</option>
                            <option>22:30, 2D- Phụ đề</option>
                        </select><br>

                        <select id="film1" name="hang1">
                            <option>Chọn Hàng Ghế</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                            <option>G</option>
                            <option>H</option>
                            <option>I</option>
                            <option>J</option>
                            <option>H</option>
                        </select><br>

                        <select id="film1" name="soghe1">
                            <option>Chọn Số Ghế</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                        </select><br>
                        <select id="film1" name="giave1">
                            <option>80.000 VNĐ</option>

                        </select><br>
                        <div class="tinhtien" id="tinhtien">
                            <label for="qty" id="pro" data-price="80000">SỐ LƯỢNG VÉ: </label>
                            <input type="number" id="qty">
                            <button class="buttonsum" type="button" onclick="calculate()">Xác nhận </button>
                            <h3>Loại vé: <span id="name">?</span></h3>
                            <h3>Tổng Tiền: <span id="amount">?</span></h3>
                        </div>

                        <button name="pay" class="submit"> Thêm vé thành công</button>
                    </form>

                </div>







</body>

</html>