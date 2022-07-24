<?php
    require('ConnectDB.php');
    $result=mysqli_query($conn,"SELECT * FROM `product` ORDER BY `id` ASC");
?>