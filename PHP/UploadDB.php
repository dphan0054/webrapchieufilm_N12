<?php
    require('ConnectDB.php');
    if(isset($_POST['upload'])){
        $moviename=mysqli_escape_string($conn,$_POST['moviename']);
        $source='../image/';
        $image_name=$_FILES["imageURL"]["name"];
        $image_URL=$source.$image_name;
        if(isset($moviename)&& isset($image_name)){
            move_uploaded_file($_FILES['imageURL']['tmp_name'],$image_URL);
            $query="INSERT INTO `product`(`name`,`image`) VALUE('$moviename','$image_name')";
            mysqli_query($conn,$query);
            echo "<script type='text/javascript'>alert('Thêm thành công');
            document.location='/Website/Html/index.php'</script>";
        }
    }
?>