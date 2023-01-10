<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: tahoma;
            ;
        }

        .body {
            height: 100%;
        }

        .nav {
            width: 20%;
            height: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            top: 0;
            z-index: 1;

        }

        .header_nav {
            height: 50px;
            width: 100%;
            display: flex;
            padding-left: 10%;
            align-items: center;
            background-color: #f3f3f340;
        }

        .header_nav img {
            width: 50px;
            height: 45px;
            float: left;
        }

        .content {
            background-color: #f6f6f6;
            width: 80%;
            margin-left: 20%;
            min-height: 100vh;
        }

        .navbar li {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            padding-left: 10%;
        }

        .navbar i {
            margin-right: 10px;
        }

        .menu {
            display: flex;
            height: 50px;
            align-items: center;
            padding-left: 10%;
        }

        .navbar li:hover {
            cursor: pointer;
            transition: 0.4s;
            background: #f2f2f2;
        }

        .nav_content {
            height: 50px;
            background: white;
            box-shadow: 4px 0px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            padding: 0 15px;
        }

        .grid {
            width: 1150px;
            margin: 0 auto;
        }

        .wrap_navct {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .form-group button {
            padding: 5px 14px;
            margin-left: -5px;

        }

        .form-group input {
            padding: 5px 0 5px 8px;
        }

        /* chung */
        .title {
            display: flex;
            justify-content: space-between;
            background-color: white;
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        .wrap_right_side {
            display: flex;
            align-items: center;
            width: 90%;
        }

        .left_side {
            display: flex;
            margin-left: 30px;
            align-items: center;
            width: 10%;
        }



        .btnthemmoi {
            width: 200px;
            height: 45px;
            background-color: #ed1c24;
            border: 2px solid #ed1c24;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btnthemmoi:hover {
            background-color: white;
            cursor: pointer;
            transition: all 0.3s linear;
        }

        .btnthemmoi:hover p {
            color: #ed1c24;
            cursor: pointer;
            transition: all 0.3s linear;
        }

        .wrap_btn {
            padding: 40px 0;
            display: flex;
            align-items: center:
        }

        .navbar a {
            text-decoration: none;
            color: black;
        }

        .btndangxuat {
            list-style: none;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btndangxuat a {
            text-decoration: none;
            color: black;
        }

        .wrap_btndangxuat {
            width: 130px;
            background: #f6f6f6;
            height: 40px;
            color: black;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid;
        }

        .wrap_btndangxuat:hover {
            background-color: #333333;
            cursor: pointer;
            transition: 0.4s;
        }

        .wrap_btndangxuat:hover li {
            color: white;
        }

        .product_img>img {
            width: 265px;
            height: 345px;
        }

        .bold {
            font-weight: 600;
        }

        .wrap_content_ct {
            margin: auto;
            width: 900px;
            display: flex;
            justify-content: space-between;
            padding-bottom: 25px;
        }

        .right_side {
            width: 500px;
        }

        .nav_content {
            margin-bottom: 30px;
        }

        .title_child {
            font-size: 23px;
            text-align: center;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .ctsp_title {
            line-height: 28px;
            font-size: 18px;
        }

        .btn_theodoi {
            padding: 15px 40px;
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            border: 2px solid red;
            color: #ffffff;
            font-weight: 600;
            border-radius: 7px;
            width: 500px;
            transition:0.4s;
        }

        .btn_theodoi:hover {
            background-color: white;
            cursor: pointer;
            transition: all 0.3s linear;
            color:black;
        }
        .content{
            padding-bottom:35px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="nav">
            <div class="header_nav">
                <img src="../images/logooo.png" alt="">
                <p style="margin-left:15px;">TRANG ADMIN</p>
            </div>
            <div class="menu">
                <i class="fa fa-bars"></i>
                <p style='margin-left:20px;'>Danh mục</p>
            </div>
            <div class="navbar">
                <ul>
                    <a href="http://localhost:8080/ThanhDoanTST/admin.php">
                        <li><i class="fa fa-suitcase" aria-hidden="true"></i>Quản lý trẻ em</li>
                    </a>
                    <a href="http://localhost:8080/ThanhDoanTST/QLngdung.php">
                        <li><i class="fa fa-user" aria-hidden="true"></i>Quản lý nhà hỗ trợ</li>
                    </a>

                </ul>
            </div>
            <a href="http://localhost:8080/ThanhDoanTST/dangnhap.php" style="text-decoration:none;">
                <div class="btndangxuat">
                    <div class="wrap_btndangxuat">
                        <li>Đăng xuất</li>
                    </div>
                </div>
            </a>
        </div>
        <div class="content">
            <div class="nav_content">
                <div class="wrap_navct">
                    <div class="">
                        <p>CHI TIẾT TRẺ EM</p>
                    </div>
                    <div class="">
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Tìm kiếm">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="wrap_content_ct">
                <div class="content_ct">
                    <p class="title_child">Thông tin cá nhân</p>
                    <div class="col1_ct col_mid" style="margin-bottom:15px;">
                        <?php
                        require 'connect.php';
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `treem` WHERE matre=$id";
                        $result = $conn->query($sql)->fetch_assoc();
                        echo "
                                              <div class='product'>     
                                                      <div class='product_img'>
                                                          <img src=../" . $result['hinh'] . " style='width: 200px;
                                                          height: 250px; border-radius:4px'>
                                                      </div>             
                                              </div>    
                                          ";
                        $conn->close();
                        ?>
                    </div>

                    <?php
                    require 'connect.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `treem` WHERE matre=$id";
                    $result = $conn->query($sql)->fetch_assoc();
                    $sql1 = "SELECT * FROM `thongtinhotro` WHERE idtre=$id";
                    $result1 = $conn->query($sql1);
                    $tong = 0;
                    while ($row = $result1->fetch_assoc()) {
                        $tong = $tong + $row['sotien'];

                    }

                    echo "
                             <div class='col1_ct'>
                            

                             <div class='wrap_ctsp'>
                                 <div class='ctsp_title'>
                                   Họ tên: " . $result['hoten'] . "
                                 </div>
                                 
                             </div>

                             <div class='wrap_ctsp'>
                                 <div class='ctsp_title'>
                                     Địa chỉ: " . $result['diachi'] . " 
                                 </div>
                    
                             </div>

                             <div class='wrap_ctsp'>
                                 <div class='ctsp_title'>
                                   Giới tính: " . $result['gioitinh'] . "
                                 </div>
                               
                             </div>

                             <div class='wrap_ctsp'>
                                 <div class='ctsp_title'>
                                   Số điện thoại: " . $result['sodt'] . "
                                 </div>
                                 
                             </div>
                             <div class='wrap_ctsp'>
                             <div class='ctsp_title'>
                               Tổng số tiền đã được hỗ trợ: " . number_format($tong, 0, ',', '.') . " VND
                             </div>
                             
                         </div>
                         </div>
                    
                    
                </div>

                <div class='right_side'>
                    <p class='title_child'>Tiểu sử</p>
                    <p style='line-height:30px;color:#333333b5;'>" . $result['chitiet'] . "</p>
                </div> ";
                    ?>
                </div>
                <a style='text-decoration:none; color:white;padding-bottom:50px;' href="https://sv.lttc.edu.vn/ket-qua-hoc-tap.html">
                <div class="btn_theodoi">
                        <p>Theo dõi thông quá trình học tập</p> 
                </div>
                </a>
            </div>

        </div>
</body>

</html>