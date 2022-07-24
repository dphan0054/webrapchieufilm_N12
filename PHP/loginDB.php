<?php
include('ConnectDB.php');
if (isset($_POST['Login'])){
    $email_unsafe = $_POST['email'];
    $pass_unsafe = md5($_POST['password']);
    $email = mysqli_real_escape_string($conn, $email_unsafe);
    $pass = mysqli_real_escape_string($conn, $pass_unsafe);

    $query = mysqli_query($conn, "select * from `user` where email='$email' and password='$pass'") or die(mysqli_error($conn));

    $row = mysqli_fetch_array($query);

    $name = $row['username'];
    $counter = mysqli_num_rows($query);
    $id = $row['uid'];
    $status=$row['status'];

    if ($counter == 0) {
        echo "<script type='text/javascript'>alert('Sai Email hoặc Password');
            document.location='Login.php'</script>";
    } else {
        $_SESSION['uid'] = $id;
        $_SESSION['email'] = $email;
        $cacth=mysqli_query($conn,"update `user` set status=1 where uid=$id");
        echo "<script type='text/javascript'>alert('Đăng nhập thành công');
            document.location='/Website/Html/index.php'</script>";
    }
}   

?>