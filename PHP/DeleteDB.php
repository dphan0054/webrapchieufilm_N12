<?php
    require('ConnectDB.php');
    if(isset($_POST['Delete'])){
        $delID=$_POST['delID'];
        $scdelID=mysqli_escape_string($conn,$delID);
        if(isset($scdelID)){
            $delete=mysqli_query($conn,"DELETE FROM `product` WHERE `id`='$scdelID'");
            echo "<script type='text/javascript'>alert('Xóa thành công');
            document.location='/Website/Html/admin.php'</script>";
        }
    }
?>