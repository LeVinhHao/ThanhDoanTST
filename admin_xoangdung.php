<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xoa hang</title>
</head>
<body>
    <?php
        $id= $_GET['id'];
        require 'connect.php';
        $sql="DELETE FROM `khachhang` WHERE id= '$id'";
        $conn->query($sql);
        header('Location:http://localhost:8080/ThanhDoanTST/QLngdung.php');
    ?>
</body>
</html>