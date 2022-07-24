<?php
    require("ConnectDB.php");
    if(isset($_POST["Signup"])){
        $username=mysqli_escape_string($conn,$_POST["user"]);
        $password=mysqli_escape_string($conn,$_POST["password"]);
        $email=$_POST["email"];
    
    if(!empty($username) && !empty($email) && !empty($password)){
        $Sql="INSERT INTO `user`(`username`,`email`,`password`) VALUES('$username','$email',md5('$password')) ";
     if($conn->query($Sql)===TRUE){
         echo "<script> alert('Đăng ký thành công'); </script>";
        
     }
     else{
        echo "Lỗi{$Sql}".$conn->error;
     } 
}
}
?>
