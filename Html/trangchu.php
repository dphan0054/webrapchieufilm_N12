<?php
require("../PHP/ConnectDB.php");
$sql = "SELECT * FROM `vechieufilm`";
$query = mysqli_query($conn, $sql);
include("../PHP/usdata.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin | Thanh Toán</title>
    <style>
        body {
            margin-top: 10%;
            background: linear-gradient(to right, #c31432, #240b36);
            color: white;
        }

        .frame {
            margin-top: 10px;
        }

        #productList {

            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border-collapse: collapse;
            width: 100%;
        }

        #productList td,
        #productList th {
            border: 1px solid white;
            padding: 8px;
        }


        #productList th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: black;
            color: white;
        }

        button {
            background-color: black;
            padding: 8px 16px;
            color: #ddd;
            border-radius: 10px;

        }

        button:hover {
            background-color: #c31432;
            color: #ddd;
        }

        .butonicon {
            opacity: 0.5;
        }

        .butonicon:hover {
            opacity: 1;
        }

        a {
            text-decoration: none;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        h1 {
            color: #ddd;
        }


        .appframe {
            position: absolute;
            width: 100%;
            top: 0;
            display: flex;
            height: 72px;
            align-items: center;
            justify-content: space-between;
            background-image: linear-gradient(rgba(16, 16, 16, 0.6), rgba(16, 16, 16, .3), rgba(16, 16, 16, 0));
            z-index: 10;
        }

        .logo {
            margin-left: 50px;
        }

        .logo>img {
            height: 72px;
            width: 72px;
        }

        .icon-right {
            display: flex;
            gap: 50px;
            align-items: center;
            margin-right: 50px;
        }

        .sticky {
            position: fixed;
            transition-delay: 0.5s;
            top: 0;
            width: 100%;
            background-color: black;
        }

        a {
            font-size: 3ch;
            text-decoration: none;
            color: #fff;
        }
    </style>
    
</head>

<body>
    <script>
        function xoavechieufilm() {
            var conf = confirm(`Bạn có chắc chắn muốn xóa vé không?`);
            return conf;
        }
    </script>
    <nav id="navbar" class="appframe">
        <div class="logo">
            <img src="/Website/icon/icon1.png" alt="logo">
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
    <div>
        <h1> Cập nhật thông tin vé </h1>
        <button><a href="quanlyve.php">Thêm Vé</a></button>
        <button><a href="index.php" onclick="myFunction()">Xác Nhận Thanh Toán</a></button>
        <script>
            function myFunction() {
                alert("Bạn đã thanh toán thành công!");
            }
        </script>
        </button>
        <div class="frame">
            <table id="productList">
                <tr>
                    <th>Chọn Phim</th>
                    <th>Chọn Rạp</th>
                    <th>Chọn Ngày</th>
                    <th>Chọn Suất</th>
                    <th>Chọn Hàng Ghế</th>
                    <th>Chọn Số Ghế</th>
                    <th>Giá Tiền</th>
                    <th>Lựa Chọn</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["address"] ?></td>
                        <td><?= $row["date"] ?></td>
                        <td><?= $row["time"] ?></td>
                        <td><?= $row["chair"] ?></td>
                        <td><?= $row["numberchair"] ?></td>
                        <td><?= $row["giave"] ?>&nbsp; VNĐ</td>
                        <td><a href="suasanpham.php?id=<?= $row['id'] ?>">Sửa | </a>
                            <a onclick="return xoavechieufilm()" href="xoasp.php?id=<?= $row['id'] ?>">Xóa</a>
                        </td>

                    </tr>
                <?php } ?>


            </table>

        </div>
    </div>


</body>

</html>