<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="1.css">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>           
        <div class="main">
            <div class="wrap">
                <div id="header">
                        <div class="header__navi grid">
                            <div class="navi_items">
                                <ul class="cacnut">
                                    <li class="nut"><span>GIỚI THIỆU</span></li>
                                    <li class="nut">QUỸ BẢO TRỢ TÀI NĂNG TRẺ</li>
                                    <li class="nut">VĂN BẢN</li>
                                    <li class="nut">TUYỂN DỤNG</li>
                                    <li class="nut">CHUYÊN TRANG</li>
                                    <li class="nut">Khám phá Việt Nam</li>
                                    <li class="nut">Khám phá thế giới</li>
                                </ul>
                                <?php 
                                     if(isset($_SESSION ['login']['idkh'])){
                                        
                                        require 'connect.php';
                                        $id=$_SESSION ['login']['idkh'];
                                        $sql="SELECT * FROM `khachhang` where id='$id' ";
                                        $result= $conn->query($sql);
                                        while($row= $result->fetch_assoc()){
                                        echo '
                                        <a style="text-decoration:none; color:white;" href="http://localhost:8080/ThanhDoanTST/dangnhap.php">
                                            <div class="header__btnmenu"> 
                                                <i style="margin-right: 6px; font-size:18px;" class="fa fa-user-circle" aria-hidden="true"></i>
                                                <p>'.$row['username'].'</p>
                                            </div>
                                        </a>';
                                        }
                                     }else{
                                        echo '
                                            <a style="text-decoration:none; color:white;" href="http://localhost:8080/ThanhDoanTST/dangnhap.php">
                                                <div class="header__btnmenu"> 
                                                    <i style="margin-right: 6px;" class="fa fa-user-circle" aria-hidden="true"></i>
                                                    Đăng nhập
                                                </div>
                                            </a>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                </div>
                <div class="wrap_logo">
                    <img style="width:100%; height: 200px;" src="./images/BannerHeader.jpg" alt="">
                </div>
            <div class="wrap_menu"> 
                <div class="menu grid">
                    <div class="items">
                        <ul>
                            <a href="http://localhost:8080/ThanhDoanTST/TrangChu.php"><li class="nut1"><p>TRANG CHỦ</p></li></a>
                            <a href=""><li class="nut1"><p>HỘI THI - GIẢI THƯỞNG</p></li></a>
                            <a href=""><li class="nut1"><p>HOẠT ĐỘNG - PHONG TRÀO</p></li></a>
                            <a href=""><li class="nut1"><p>HOẠT ĐỘNG KHOA HỌC</p></li></a>
                            <a href=""><li class="nut1"><p>DỊCH VỤ - ĐÀO TẠO</p></li></a>
                            <a href="#content"><li class="nut1" style="border-right:1px solid #ccc"><p>TIN TỨC HÔM NAY</p></li></a>
                        </ul>
                    </div>
                </div>
            </div> 
                    <div class='lentop'>
                      <div class="wrap_lentop">
                            <!-- <img src='https://1.bp.blogspot.com/-k6sikOdzFXQ/VwqCKDosmEI/AAAAAAAAKxE/nLxLhkTIO6o3iE5ZWmtxo2bf4QHdzPQNQ/s1600/top.png'/> -->
                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                      </div>
                    </div>
                    <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
                        <div class="header_slide grid ">
                            <div class="header_slide-bg ">
                            </div>
                            <div class="header_slide-bg-icon">
                                <i class="ti-angle-left btn-left-js" ></i>
                                <i class="ti-angle-right btn-right-js"></i>
                            </div>
                            <ul class="ListNut"></ul>
                        </div>               
                <!-- <footer style="height:auto;"></footer> -->
            </div>
           
            <!-- content --> 
            <div class="titleHome">
                <p>TRẺ EM NGHÈO VƯỢT KHÓ</p>
            </div>
            
            
            <div class='content'>
                <div class='wrap_content grid_content'>                
                        <?php
                            require 'connect.php';
                            $query="SELECT * FROM `treem`";
                            $result= $conn->query($query);
                            while($row= $result->fetch_assoc()){
                                echo "   

                                        <a style='color:black;' href='http://localhost:8080/ThanhDoanTST/chitiet.php?id=".$row['matre']."&hoten=".$row['hoten']."&hinh=".$row['hinh']."'>
                                            <div class='product '>
                                                <div class='wrap_product'>   
                                                    <div class='product_img'>
                                                        <img style='width: 265px;
                                                        height: 345px;' src=".$row['hinh'].">
                                                    </div>
                                                    <div class='product_title'>
                                                        <p style='text-align:center;'>".$row['hoten']."</p>
                                                        
                                                    </div>
                                                    <p style='text-align:center; font-size:13px; margin-top:10px; color:#333;'>#T1224071605100</p>
                                                    <div class='product_price'>
                                                        <p style='text-align:center;'>SĐT:" .$row['sodt']."</p>
                                                    </div>
                                                </div>
                                            </div>    
                                        </a>
                                ";
                            }    
                            $conn->close();
                        ?>
                </div>  
                <div class="input ">
                    <div class="wrap_input grid_content">
                        <div class="input_decs ">
                            <i class="fa fa-envelope-o" style="float: left; font-size: 50px; width: 10px"></i>
                            <h4>ĐĂNG KÝ NHẬN THÔNG TIN MỚI NHẤT TỪ TRUNG TÂM</h4>
                        </div>
                        <div class="submit">
                            <input type="text" placeholder="Nhập email nhận tin tức" style="padding: 10px 10px; width: 300px;">
                            <button type="submit" style="padding: 12px 20px; background-color: red; color: white; border: none; margin-left: -5px;">Gửi</button>
                        </div>
                    </div>
                </div>           
            </div>
            <div style="padding:70px 0;" class="titleHome">
                <p>TIN TỨC HÔM NAY</p>
            </div>
            <div style="background:#f6f6f6;" id="content">
        
                <div class="content__items grid_content">
        
                    <div class="content__left grid__left ">
                        <div class="content__left1">
                            <div class="khunghinh hover1">
                               <div class="over-flow1"><img class="main_img hover2" src="./images/lhk_0451.jpg" alt=""></div> 
                                <h2>34 gia đình Việt nhận nuôi sinh viên Lào, Campuchia đang học tập tại TP. Hồ Chí Minh</h2>
                            </div>
        
                            <div class="infor">
                                
                                <h5>2 giờ</h5>
                                <h5 class="lienquan hover3">259 liên quan</h5>
                                <h5 class="dongho hover4"><i class="fa fa-clock-o" aria-hidden="true"></i></h5>
                            </div>
                        </div>
                
                        <div class="content__left2"> 
                            <div class="khung">
                                <div class="khunghinh2">
                                    <div class="over-flow2"><img class="main_img2 hover2" src="./images/ASSD1.jpg" alt=""></div>
                                    <p>Hơn 400 thí sinh tranh tài hội thi 'Ánh sáng thời đại' 2022</p>
                                </div>
        
                                <div class="infor2">
                                    <img style="width: 65px; height:16px;" src="./logo2.png" alt="">
                                    <h5>2 giờ</h5>
                                    <h5 class="dongho2 hover4"><i class="fa fa-clock-o" aria-hidden="true"></i></h5>
                                </div>
                            </div>
        
                            <div class="khung">
                                <div class="khunghinh2">
                                    <div class="over-flow2"><img class="main_img2 hover2" src="./img2.2.img" alt=""></div>
                                    <p>Bắt khẩn cấp tài xế Audi vi phạm nồng độ cồn tông chết 3 người ở Bắc Giang</p>
                                </div>
        
                                <div  class="infor2">
                                    <img style="width: 65px; height:16px;" src="./logo3.png" alt="">
                                    <h5>2 giờ</h5>
                                    <h5 class="dongho2 hover4"><i class="fa fa-clock-o" aria-hidden="true"></i></h5>
                                </div>
                            </div>
        
                            <div class="khung">
                                <div class="khunghinh2">
                                    <div class="over-flow2"><img class="main_img2 hover2" src="./img2.3.img" alt=""></div>
                                    <p>Tổng thống Mỹ Biden có thể thăm Saudi Arabia trong tháng 6</p>
                                </div>
        
                                <div  class="infor2">
                                    <img style="width: 65px; height:16px;" src="./logo1.png" alt="">
                                    <h5>2 giờ</h5>
                                    <h5 class="dongho2 hover4"><i class="fa fa-clock-o" aria-hidden="true"></i></h5>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="content__right ">
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right1.img" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Làm bạn gái 'nhí' sinh con, thiếu niên lãnh án nặng</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./lgringt1.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">1 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right2.img" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Hà Nội siết chặt quản lý hơn 1.200 biệt thự xây dựng trước năm 1954</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./logo1.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">113 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right3.img" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Nhà Trắng cân nhắc đánh thuế lợi nhuận dầu khí để hỗ trợ người dân</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./logo1.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">114 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right4.img" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Hà Nội quyết tâm trở thành 'tọa độ xanh' trên bản đồ thế giới</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./lgright4.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">115 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right5.img" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Cuộc chiến kinh tế phương Tây phát động khó chặn đứng chiến dịch quân sự của Nga</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./logo1.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">116 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right6.img" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Xuyên đêm tìm kiếm 'cần thủ' lạc giữa rừng Hải Vân</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./tienphong.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">117 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="khung_right">
                            <div class="khunghinh_right">
                                <div class="over-flow3"><img class="img_right hover2" src="./right8.jpg" alt=""></div>
                                <div class="Ha">
                                    <p style="margin: 0;" class="title">Công an tạm giữ 11 người liên quan vụ 1 công nhân tử vong</p>
                                    <div  class="infor3">
                                        <img style="width: 65px; height:16px;" src="./phapluat.png" alt="">
                                        <h5>2 giờ</h5>
                                        <h5 class="dongho2 hover4">118 liên quan</h5>            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div> 
        
        
            <div>  
                <div class="wrap_footer3 ">
                    <div class="footer3 grid_content">
                        <div class="left3_side">
                            <div class="left3_col">
                                <p class="left3_decs">Trung tâm Phát triển Khoa học và Công nghệ Trẻ.</p>
                                <p class="left3_decs">Số 1 Phạm Ngọc Thạch, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh.</p>
                                <p class="left3_decs">028 7308 7007</p>
                                <p class="left3_decs">Trung tâm Phát triển Khoa học và Công nghệ Trẻ được thành lập ngày 03 tháng 8 năm 1989 theo quyết định số: 444/ QĐ-UB Của UBND Thành phố Hồ Chí Minh với tên gọi là Trung tâm Sáng tạo Kỹ thuật và Công nghệ trẻ. Đến ngày 12 tháng 8 năm 1998 Trung tâm chính thức được đổi tên là Trung tâm Phát triển Khoa học và Công nghệ trẻ cho đến nay.</p>
                            </div>
                            <div class="left3_col">
                                <p class="left3_decs">Copyright © 2022 | Bản quyền nội dung thuộc về Trung tâm Phát triển Khoa học và Công nghệ Trẻ - Thành Đoàn TP. HCM</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script src="./1.js"></script>           
        </div>
    </body>
</html>