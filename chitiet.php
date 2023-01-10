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
    <title>TRUNGTÂM - Thông tin trẻ em</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
body{
  position: relative;
  font-family: Arial, Helvetica, sans-serif;
}
.fa {
font-family: "Font Awesome 5 Pro";
font-weight: 900;
}

.header_slide{
  width: 100%;
  height: 500px;
  position: relative;
  overflow: hidden;
  margin-right: 5px;
}

.header_slide-bg{
  height: 100%;
  position: absolute;
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  transition: ease 0.6s;
}

.header_slide-bg-img{
  width: 100%;
}

.header_slide-bg-img img{
  width: 100%;
  height: 100%;
}

.header_slide-bg-icon{
  width: 100%;
  height: 100%;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1;
}

.header_slide-bg-icon i{
  font-size: 60px;
  color: white;
}

.ListNut{
  background-color: transparent;
  position: absolute;
  z-index: 2;width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: 0;
}
.ItemNut{
  border-radius: 50%;
  width: 12px;
  height: 12px;
  background-color: transparent;
  background-color: white;
  margin-left: 8px;
  margin-bottom: 20px;
}

.slider-product-one-content-title .a{
margin-left: auto;
margin-right: auto;
display: block;
}
.active{
  background-color: #ed1c24;
}
.trademarkHome{
padding: 200px 0 25px;
}
#Content{
padding: 10px 0 615px;
background: #f6f6f6;
}
.container{
padding: 30px 0 0 45px;
background: #f6f6f6;
margin-left: 265px;
}
.lentop {
display:none; 
bottom: 15%; 
right: 10px; 
cursor: pointer;  
position: fixed; 
z-index: 1000;
}

.lentop div {
background: rgb(96, 109, 107); 
border:2px solid #fff; 
border-radius:50%; 
padding:13px 14px; 
box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.3);
color: white;
}
.lentop img {
width:16px; 
height:16px;
}
.product{
 
}
.row{
box-shadow: 0 0 8px rgba(0,0,0,0.2);
float: left;
width: 22%;
}
.grid_content{
width: 1200px;
margin: 0 auto;
}
.content{
width: 100%;
background-color: #f6f6f6;
display: grid;
}
.titleHome{
background-color: #f6f6f6;
width: 100%;
font-size: 30px;
text-align: center;
padding: 30px 0 30px 0;
}
.wrap_product{
width: 265px;
background-color: white;

margin: 10px 17px 10px 18px;
box-shadow: 0 0 8px rgba(0,0,0,0.2);
}
.product_img{
height:345px;
}
.product_title{
width: 263px;
justify-content: center;
display: flex;
align-items: center;
height: 105px;
background-color: #f6f6f6;
margin: 0 auto;
}
.product_price{
height: 75px;
display: flex;
justify-content: center;
align-items: center;
color: orangered;
}
.wrap_product:hover{
cursor: pointer;
transition: 0.5s;
}
.input{
height: 80px;
width: 100%;
background-color: #e5eaef;
display: flex;
align-items: center;
}
.input_decs{
float: left;
width: 555px;
display: flex;
font-size: 19px;
align-items: center;
justify-content: space-between;
}
.wrap_input{
display: flex;
justify-content: space-between;
height: 100px;
align-items: center;
}

.left3_col{
float: left;
margin-top: 20px;
/* width: 50%; */
}
.left3_side{
display: flex;
justify-content: space-between;
height: 170px;
}
.left3_decs{

font-size: 14px;
line-height: 30px;
color: #746c6c ;
}
.icon_contact:hover{
color:white;
background-color: #746c6c;
transition: 0.5s;
}
.submit button:hover{
color: white;
background-color: #333;
}
.btnxemthem:hover{
background-color: #746c6c;
color: white;
transition: 0.7s;
}
.input{
height: 80px;
width: 100%;
background-color: #e5eaef;
display: flex;
align-items: center;
}
.input_decs{
float: left;
width: 555px;
display: flex;
font-size: 19px;
align-items: center;
justify-content: space-between;
}
.wrap_input{
display: flex;
justify-content: space-between;
height: 100px;
align-items: center;
}


.left3_col{
float: left;
margin-top: 20px;
/* width: 50%; */
}
.left3_side{
display: flex;
justify-content: space-between;
height: 170px;
}
.left3_decs{

font-size: 14px;
line-height: 30px;
color: #746c6c ;
}
.icon_contact:hover{
color:white;
background-color: #746c6c;
transition: 0.5s;
}
.submit button:hover{
color: white;
background-color: #333;
}
.btnxemthem:hover{
background-color: #746c6c;
color: white;
transition: 0.7s;
}
.wrap_chitiet{
  display:flex;
  flex-direction:row;
  margin-bottom:100px;
}
.col1_ct{
width: 33.3333%;
}
.col_mid{
  text-align:center;
}
.left_wrap_img{
 padding: 0 80px 0;
}
.left_wrap_img img{
  width:150px;
  height:100%;
}
.title_ct{
  font-size:20px;
  font-weight:600;
  line-height:35px;
  margin-top:10px;
}
.price_ct{
  line-height:30px;
  margin:30px 0 20px 0;
}
.muangay{
  width: 100%;
  height:55px;
  background-color:#333333;
  color:white;
  font-weight:600;
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:20px;
}
.muangay:hover{
  background-color:#ed1c24;
  cursor: pointer;
  transition:0.4s;
}
.themvaogio{
  width: 100%;
  height:55px;
  color:black;
  font-weight:600;
  display:flex;
  align-items:center;
  justify-content:center;
  border:1px solid;
}
.themvaogio:hover{
  background-color:#333333;
  cursor: pointer;
  transition:0.4s;
  color:white;
}
.contact{
  border-bottom:1px solid rgb(0 0 0 / 40%);
  line-height:50px;
}
.wrap_ctsp{
  padding:11px 0 15px 0;
  line-height:22px;
  border-bottom:1px solid rgb(0 0 0 / 20%);
  font-size:15px;
}
.ctsp_desc{
  color:rgb(0 0 0 / 50%);
  font-size:14px;
}
.wrap{
  background-color: #f6f6f6;
  padding-bottom: 50px;
}
#header{
  width:100%;
  height: 40px;
  background-color: #0058c0; 
  justify-content: space-between;
}
.navi_items{
  height: 40px;
  display: flex;
  justify-content: space-between;
}
.cacnut{
  padding: 0;
  display: flex;
  align-items: center;
}
.nut{
  list-style: none;
  height: 40px;
  padding:0 7px;
  justify-content: center;
  display: flex;
  align-items: center;
  text-transform: uppercase;
  font-weight: 500;
  color:white;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  transition:0.4s;
}
.header__btnmenu{
  background-color: #0058c0;
  height: 40px;
  font-size: 15px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.4s;
  padding:0 15px;
}
.nut:hover{
  cursor: pointer;
  background-color: #2b94a5;
}
.nut_radius:hover{
  cursor: pointer;
  background-color:hsla(0,0%,100%,.1); ;
}
.header__btnmenu:hover{
  background-color: #247a88;
  cursor: pointer;
}
.nut:hover{
  cursor: pointer;
  background-color: #2b94a5;
}
.nut_radius:hover{
  cursor: pointer;
  background-color:hsla(0,0%,100%,.1); ;
}
.header__btnmenu:hover{
  background-color: #247a88;
  cursor: pointer;
}
/* phần logo */
.wrap_logo{
  display: flex;
  justify-content: center;
}

/* phần menu */
.wrap_menu{
  box-shadow: inset 1px 0px 1px 1px rgb(0 0 0 / 10%);
  margin-bottom: 30px;
  background-color: white;
}
.items>ul{
  list-style: none;
  display: flex;
}
.nut1{
  width: 200px;
  font-size: 13px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 45px;
  border-left: 1px solid rgb(0 0 0 / 5%);
}
.grid{
    width: 1200px;
    margin: auto;
}
.header{
  background:#0058c0;
}
.items>ul>a{
    text-decoration:none;
    color:black;
    transition:0.4s;
}
.items>ul>a:hover{
    color:red;
}
    </style>
</head>
<body>           
        <div class="main">
            <div class="wrap">
                <div class="header">
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
                            <a href=""><li class="nut1" style="border-right:1px solid #ccc"><p>TIN TỨC HÔM NAY</p></li></a>
                        </ul>
                    </div>
                </div>     
            </div>

            <!-- content --> 
            <div class="titleHome">
                <p>THÔNG TIN TRẺ EM</p>
            </div>
        </div>
            
            
            <div class='content'>
                <div class='wrap_content grid_content'>
                      <?php
                      require 'connect.php';
                      $id=$_GET['id'];  
                      $sql= "SELECT * FROM `treem` WHERE matre=$id";
                      $result=$conn->query($sql)->fetch_assoc();
            
                          echo "
                              <div class='wrap_chitiet'>
                              <div class='col1_ct'>
                                <div class='left_wrap_img'>
                                  <img src='./images/logooo.png' >
                                </div>                              
                                  <div class='title_ct'>
                                    <p>Họ tên: ".$result['hoten']."</p>
                                    <p>T065.430.16.051.00</p>
                                    <p>Địa chỉ: ".$result['diachi']."</p>
                                  </div>
                                  <div class='price_ct'>
                                    <p style=' font-size:22px; font-weight:600;'>Số điện thoại: ".$result['sodt']."</p>
                                  </div>
                                  <div class='btn_ct' >
                                    <form method='POST' action='#'>                        
                                              <button class='themvaogio' name='themvaogio' id='themvaogio'>
                                                  ĐĂNG KÝ HỖ TRỢ
                                              </button>      
                                    </form>
                                    <p class='contact'><i class='fa fa-phone' aria-hidden='true' style='font-size:11px; margin-right:5px;'></i>Liên hệ 091.234.5678 để biết thêm chi tiết.</p>
                                  </div>
                                  <p style='margin:18px 0 18px 0; font-size:12px; color:#666666'>Từ khóa: ".$result['hoten']."</p>
                              
                              </div>
                          ";
                      ?>
                          <div class="col1_ct col_mid">
                              <?php
                                      require 'connect.php';
                                      $id=$_GET['id'];
                                      $sql= "SELECT * FROM `treem` WHERE matre=$id";
                                      $result=$conn->query($sql)->fetch_assoc();
                                          echo "
                                              <div class='product '>     
                                                      <div class='product_img'>
                                                          <img src=".$result['hinh']." style='width: 310px;
                                                          height: 440px;'>
                                                      </div>             
                                              </div>    
                                          ";
                                      $conn->close();
                                ?>
                          </div> 
            
                          <?php
                              require 'connect.php';
                              $id=$_GET['id'];
                              $sql= "SELECT * FROM `treem` WHERE matre=$id";
                              $result=$conn->query($sql)->fetch_assoc();
                            echo"
                                    <div class='col1_ct'>
                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          <p>Mã</p>
                                        </div>
                                        <div class='ctsp_desc'>
                                          <p>T0654301605100</p>
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Họ tên
                                        </div>
                                        <div class='ctsp_desc'>
                                          ".$result['hoten']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                            Địa chỉ   
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['diachi']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Giới tính
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['gioitinh']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Số điện thoại
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['sodt']."
                                        </div>
                                    </div>

                                   
                                </div>
                            ";
                          ?>
                      </div>                
                        

                  
                </div>
                
                <?php
               
                require 'connect.php'; 
                             
               
                if(isset($_POST['themvaogio'])){
                  $id=$_GET['id'];
                  $hoten=$_GET['hoten'];
                  $hinh=$_GET['hinh'];
                        echo "
                        <script>
                            location.href= href='http://localhost:8080/ThanhDoanTST/dangkyhotro.php?id=".$id."&hoten=".$hoten."&hinh=".$hinh."'
                        </script>
                    ";
                      }
            ?> 
                <div class="input ">
                    <div class="wrap_input grid_content">
                        <div class="input_decs ">
                            <i class="fa fa-envelope-o" style="float: left; font-size: 55px;"></i>
                            <h4>ĐĂNG KÝ NHẬN THÔNG TIN MỚI NHẤT TỪ TRUNG TÂM</h4>
                        </div>
                        <div class="submit">
                            <input type="text" placeholder="Nhập email nhận tin tức" style="padding: 10px 10px; width: 300px;">
                            <button type="submit" style="padding: 12px 20px; background-color: red; color: white; border: none; margin-left: -5px;">Gửi</button>
                        </div>
                    </div>
                </div>           
            </div>
                
                
        </div>
            <div class="footer">
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
            </div>
                       
        </div>
    </body>
</html>