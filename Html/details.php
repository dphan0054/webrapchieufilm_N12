<?php
    require("../PHP/ConnectDB.php");
    if(isset($_POST["pay1"])){
        $name=$_POST['film2'];
        $address=$_POST['rap2'];
        $date=$_POST['ngay2'];
        $time=$_POST['suat2'];
        $chair=$_POST['hang2'];
        $numberchair=$_POST['soghe2'];
        $giave=$_POST['giave2'];
    if(!empty($name) && !empty( $address) && !empty($date)&& !empty($time)&& !empty($chair) && !empty($numberchair) && !empty($giave)){
        $Sql="INSERT INTO `vechieufilm`(`name`,`address`,`date`,`time`,`chair`,`numberchair`,`giave`) VALUES('$name','$address','$date','$time','$chair','$numberchair','$giave') ";
     if($conn->query($Sql)===TRUE){
         
        echo "<script type='text/javascript'>alert('Cập nhật thành công');
        document.location='/Website/Html/trangchu.php</script>";
        header("Location:trangchu.php");
     }
     else{
        echo "Lỗi{$Sql}".$conn->error;
    }
}
    }
?>
<!DOCTYPE html>
        <div ID="MUAVE" class="option">
            <h2 class="muave"> MUA VÉ</h2>
            <div class="form">
                <form class="chonphim1" action="trangchu.php" method="POST">
                    <select id="film1" name="film2">
                        <option value="chonphim">Chọn Phim</option>   
                        <option >ĐÊN TỐI RỰC RỠ</option>
                        <option>THOR: LOVE AND THUNDER</option>   
                        <option>MINIONS: THE RISE OF GRU</option>
                        <option > EM VÀ TRỊNH</option>
                        <option >VIRUS: 32</option>
                        <option >THE BLACK PHONE</option>
                        <option >THE WITCH: PART 2. THE OTHER ONE</option>
                    </select>
                    <select id="film1" name="rap2">
                        <option>Chọn Rạp</option>   
                        <option>Cine Nguyễn Du</option>
                        <option>Cine Kinh Dương Vương </option>   
                        <option>Cine Quang Trung</option>
                        <option> Cine Phạm Văn Chí</option>
                        <option>Cine Tân Bình</option>
                        
                    </select>
                    <select id="film1" name="ngay2">
                        <option>Chọn Ngày</option>   
                        <option>Thứ 7, 30/07/202</option>
                        <option>Chủ Nhật, 31/07/2022</option>   
                        <option>Thứ 2, 08/08/2022 </option>
                        <option> Thứ 3, 09/08/2022</option>
                        <option>Thứ 4,10/08/2022</option>
                        <option>Thứ 5,11/08/2022</option>
                        <option>Thứ 6,12/08/2022</option>
                    </select>
              
             
                    <select id="film1" name="suat2">
                        <option>Chọn Suất</option>   
                        <option>9:00, 2D- Phụ đề</option>
                        <option>12:00, 2D- Phụ đề</option>   
                        <option>14:00, 2D- Phụ đề</option>
                        <option>15:30, 2D- Phụ đề</option>
                        <option>17:30, 2D- Phụ đề</option>
                        <option>19:30, 2D- Phụ đề</option>
                        <option>22:30, 2D- Phụ đề</option>
                    </select>
         
                    <select id="film1" name="hang2">
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
                    </select>
                    <select id="film1" name="soghe2">
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
                    </select>
                    <button name="pay1" class="submit"> XÁC NHẬN THANH TOÁN</button>  
                </form>
                
                
                
                







            </div>
        </div>

    </div>


    </div>
    </form>
    </div>

</body>

</html>