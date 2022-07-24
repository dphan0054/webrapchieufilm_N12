<?php
    require('ConnectDB.php');
    $login=mysqli_query($conn,"SELECT * FROM `user`");
    $get=mysqli_fetch_array($login);
?>