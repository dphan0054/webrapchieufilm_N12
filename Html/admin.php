<?php
include('../PHP/UploadDB.php');
include('../PHP/data.php');
include('../PHP/UpdateDB.php');
include('../PHP/DeleteDB.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Website/Css/admin.css">
  <style>
    .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
.Delete-button{
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 328px;
  width: 280px;
}
table{
  width: 100%;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


  </style>
  <title>Admin</title>
</head>

<body>
  <div class="admin">
    <h1>Welcome,Admin</h1>
  </div>
  <div class="tabset">
    <!-- Tab 1 -->
    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
    <label for="tab1">Thêm</label>
    <!-- Tab 2 -->
    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
    <label for="tab2">Cập nhật</label>

    <div class="tab-panels">
      <section id="marzen" class="tab-panel">
        <form action="../PHP/UploadDB.php" method="post" enctype="multipart/form-data">
          <label for="">Name</label>
          <input type="text" name="moviename"><br>
          <label for="">Hình ảnh</label>
          <input type="file" id="file" name="imageURL" value="Choose File" required><br>
          <button type="Submit" name="upload">Thêm</button>
        </form>
      </section>
      <section id="rauchbier" class="tab-panel">
      <table border="solid 1px black">
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Image</td>

            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
              $i++;

            ?>
              <tr>
                <th name="id"><?php echo $row['id']; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['image']; ?></td>
              </tr>
            <?php };
            ?>
          </tbody>
        </table>
        <button class="open-button" onclick="openUpForm()">Cập nhật</button>

        <div class="form-popup" id="myForm">
          <form action="../PHP/UpdateDB.php" class="form-container" method="post" enctype="multipart/form-data" >
            <h1>Update</h1>

            <label for=""><b>ID</b></label>
            <input type="text" placeholder="ID" name="id" required>
            <label for=""><b>Name</b></label>
            <input type="text" placeholder="Name" name="reName" required>
            <label for=""><b>Image</b></label>
            <input type="file" id="files" name="img" value="Choose File" required>
            <button type="Submit" class="btn" name="Update">Submit</button>
            <button type="button" class="btn cancel" onclick="closeUpForm() " >Close</button>
          </form>
          <script>
            function openUpForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeUpForm() {
              document.getElementById("myForm").style.display = "none";
            }
            function openDelForm() {
              document.getElementById("mydelForm").style.display = "block";
            }

            function closeDelForm() {
              document.getElementById("mydelForm").style.display = "none";
            }
          </script>
        </div>
        <button class="Delete-button" onclick="openDelForm()">Xóa</button>
            <div class="form-popup" id="mydelForm">
              <form action="" class="form-container" method="post" enctype="multipart/form-data">
                <h1>Delete<h1>
                  <label for="">ID</label>
                  <input type="text" name="delID" require>
                  <button type="submit" class="btn" name="Delete" >Delete</button>
                  <button type="button" class="btn cancel" onclick="closeDelForm() " >Close</button>
              </form>
            </div>
    </div>
  </div>

  </div>

</body>

</html>