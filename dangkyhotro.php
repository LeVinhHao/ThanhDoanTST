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
    <title>TOPTEN - luxury watch</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
  box-sizing: border-box;
}
.main{
    background:#f6f6f6;
    transition:0.4s;
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


.active{
  background-color: #ed1c24;
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
.grid_content{
width: 1200px;
margin: 0 auto;
}
.content{
width: 100%;
display: grid;
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
.icon_contact:hover{
color:white;
background-color: #746c6c;
transition: 0.5s;
}
.submit button:hover{
color: white;
background-color: #333;
}
.title_dh{
    width: 100%;
    height:60px;
    background-color:#f7f7f7;
    font-size:16px;
    color:#333333;
    font-weight:600;
    display:flex;
    align-items:center;
}
.titleHome{
background-color: #f6f6f6;
width: 100%;
font-size: 30px;
text-align: center;
padding: 30px 0 75px 0;
}
.left_dh{
    width:625px;
}
.right_dh{
    width:550px;
    border:2px solid #a2a3a3;
}
.wrap_content{
    display:flex;
    justify-content:space-between;
}
.content_dh{
    width: 625px;
    height:520px;
    border:1px solid #f7f7f7;
    margin-bottom:80px;
}
.wrap_form{
    margin:20px 0 20px 40px;
    color:#666666;
}
.form_left{
    align-items:center;
    display:flex;
    justify-content:space-between;
    margin-top:20px;
}
.form_left label{
  width:90px;
  font-size:14px;
}
.btn_hoantat{
    padding: 15px 40px;
    background-color:red;
    display:flex;
    justify-content:center;
    align-items:center;
    margin: 0 auto 70px auto;
    border: 2px solid red;
    color:#ffffff;
    font-weight:600;
}
.btn_hoantat:hover{
    cursor: pointer;
    transition: all 0.4s ease-out;
    background-color: white;
    border-color: 2px solid red;
    color:red;
    font-weight:600;
}
.content_pt{
    border:1px solid #f7f7f7;
    margin-bottom:50px;
}
.form-group p{
    line-height:18px;
    font-size:15px;  
    margin: 5px 0 0 19px; 
}
.right_dh{
    height:fit-content;
}
.product{
    display:flex;
    justify-content:space-between;
}.product_left{
    width: 95px;
    display: flex;
    justify-content: center;
    height: 130px;
    align-items: center;
    margin-right:10px;
}.product_right{
    width: 465px;;
}
.product_right{
    line-height:23px;
    color:#333333;
}
.btn_table{
    display:flex;
    justify-content:space-between;
}
.btn_tt{
    padding: 15px 40px;
    background-color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    margin: 50px auto;
    border: 2px solid black;
    color:black;
    font-weight:600;
}
.btn_tt:hover{
    cursor: pointer;
    transition: all 0.4s ease-out;
    background-color: black;
    color:white;
    font-weight:600;
}
.wrap_product{
    border-bottom: 1px solid rgba(0,0,0,0.15);;
    margin: 0 20px;
}
.tong_gh{
    display:flex;
    float:left;
}
.wrap_tonggh{
    margin: 30px 20px;
    float: right;
    line-height: 30px;
}
.grid{
    width: 1200px;
    margin: auto;
}
.grid__left{
    width: 625px;
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
 padding:0 15px;
  height: 40px;
  font-size: 15px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.4s;
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
/* ph???n logo */
.wrap_logo{
  display: flex;
  justify-content: center;
}

/* ph???n menu */
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
                                    <li class="nut"><span>GI???I THI???U</span></li>
                                    <li class="nut">QU??? B???O TR??? T??I N??NG TR???</li>
                                    <li class="nut">V??N B???N</li>
                                    <li class="nut">TUY???N D???NG</li>
                                    <li class="nut">CHUY??N TRANG</li>
                                    <li class="nut">Kh??m ph?? Vi???t Nam</li>
                                    <li class="nut">Kh??m ph?? th??? gi???i</li>
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
                                                    ????ng nh???p
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
                            <a href="http://localhost:8080/ThanhDoanTST/TrangChu.php"><li class="nut1"><p>TRANG CH???</p></li></a>
                            <a href=""><li class="nut1"><p>H???I THI - GI???I TH?????NG</p></li></a>
                            <a href=""><li class="nut1"><p>HO???T ?????NG - PHONG TR??O</p></li></a>
                            <a href=""><li class="nut1"><p>HO???T ?????NG KHOA H???C</p></li></a>
                            <a href=""><li class="nut1"><p>D???CH V??? - ????O T???O</p></li></a>
                            <a href=""><li class="nut1" style="border-right:1px solid #ccc"><p>TIN T???C H??M NAY</p></li></a>
                        </ul>
                    </div>
                </div>
                </div>  
            </div>

            <!-- content --> 
            <div class="titleHome">
                <p>TH??NG TIN H??? TR???</p>
            </div>
            
            <?php 
                 if(isset($_SESSION ['login']['idkh'])){

                    $idkh= $_SESSION ['login']['idkh'];
                    echo '
                    <div class="content">
                        <div class="wrap_content grid_content">
                            <div class="left_dh">
                                <div class="title_dh">
                                    <p style="margin-left:15px;">TH??NG TIN H??? TR???</p>
                                </div>
                                <form method="POST" action="#">
                                    <div class="content_dh">
                                            <div class="wrap_form">
                                                <div class="form_left">
                                                    <label>H??? T??n *</label></br>
                                                    <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="hoten" required placeholder="H??? t??n(*)"/><br/>
                                                </div>
                                                <div class="form_left">
                                                    <label>S??? ti???n: </label></br>
                                                    <input style="padding:10px 50px 10px 10px; width:378px;" type="number"  id="user" name="sotien" placeholder="S??? ti???n h??? tr???"/><br/>
                                                </div>
                                                <div class="form_left">
                                                    <label>??i???n tho???i *</label></br>
                                                    <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="dienthoai" placeholder="??i???n tho???i(*)"/><br/>
                                                </div>
                                                <div class="form_left">
                                                    <label>T???nh th??nh *</label></br>
                                                    <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="tinhthanh" placeholder="VD: T???nh Long An"/><br/>
                                                </div>
                                                <div class="form_left">
                                                    <label>Qu???n huy???n *</label></br>
                                                    <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="quanhuyen" placeholder="VD: Huy???n Ch??u Th??nh"/><br/>
                                                </div>
                                                <div class="form_left">
                                                    <label>?????a ch??? *</label></br>
                                                    <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="diachi" placeholder="?????a ch???(S??? nh??/T??n ???????ng)"/><br/>
                                                </div>
                                                <div class="form_left">
                                                    <label>Ghi ch??</label></br>
                                                    <input style="padding:50px 50px 50px 10px; width:378px;" type="text"  id="user" name="ghichu" placeholder=""/><br/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="btn_table">
                                            <button class="btn_hoantat" name="btn_hoantat" onClick="return alert("????n h??ng ???? ???????c x??c nh???n");">
                                                <p>HO??N T???T</p>
                                            </button>
                                        </div>
                                </form>
                            </div>';
                    }else{
                        echo '<h2 style="text-align:center;">B???n ch??a ????ng nh???p, h??y ????ng nh???p ????? ????ng k?? h??? tr???</h2>
                        <p style="text-align:center; padding-bottom:150px; margin-top:50px;"><a href="http://localhost:8080/ThanhDoanTST/dangnhap.php">????ng nh???p</a></p>';
                        
                    }
                    ?>
                    <?php   
                        require 'connect.php';            
                    
                        if(isset($_POST['btn_hoantat'])){
                                $hotentre=$_GET['hoten'];
                                $idtre=$_GET['id'];
                                $hinhtre=$_GET['hinh'];
                                $hoten=$_POST['hoten'];
                                $sotien=$_POST['sotien'];
                                $dienthoai=$_POST['dienthoai'];
                                $tinhthanh=$_POST['tinhthanh'];
                                $quanhuyen=$_POST['quanhuyen'];
                                $diachi=$_POST['diachi'];
                                $ghichu=$_POST['ghichu'];   
                                $sql ="INSERT INTO `thongtinhotro`(`hinh`,`hotentre`,`idtre`,`hoten`, `sotien`, `dienthoai`, `tinhthanh`, `quanhuyen`, `diachi`, `ghichu`) VALUES ('$hinhtre','$hotentre','$idtre','$hoten','$sotien','$dienthoai','$tinhthanh','$quanhuyen','$diachi','$ghichu')";
                                $conn->query($sql);
                        }      
                        $conn->close();    
                    ?> 
                        <?php
                        if(isset($_SESSION ['login']['idkh'])){

                            echo '
                            <div class="right_dh">    
                                <div class="title_dh">
                                     <p style="margin-left:15px;">TH??NG TIN NG?????I ???????C H??? TR???</p>
                                </div>
                                 
                                <div class="desc_gh">';      
                                            require 'connect.php';
                                                $id=$_GET['id'];
                                                $sql= "SELECT * FROM `treem`  WHERE matre='$id'";
                                                $result= $conn->query($sql);
                                                while($row= $result->fetch_assoc()){
                                                    echo "
                                                        <div class='wrap_product'>
                                                            <div class='product'>     
                                                                    <div class='product_left'>
                                                                        <img src=./".$row['hinh']." style='width: 62px; height: 92px; border-radius:2px;'>
                                                                    </div>   
                                                                    <div class='product_right'>
                                                                        <p style='font-size:14px; margin-top:20px;'>T??n: ".$row['hoten']."</p>
                                                                        <p style='font-size:13px; color:silva;'>T0654301605100</p>
                                                                        <p style='font-size:14px; margin-top:20px;'>?????a ch???: ".$row['diachi']."</p>
                                                                    </div> 
                                                            </div>    
                                                        </div>
                                                    ";
                                                }
                                            
                                            $conn->close();
                                  echo'     
                                </div>
                                    
                        </div>  ';
                                            }
                        ?>          
                </div>  

                
                    <div class="input ">
                        <div class="wrap_input grid_content">
                            <div class="input_decs ">
                                <i class="fa fa-envelope-o" style="float: left; font-size: 55px;"></i>
                                <h4>????NG K?? NH???N TH??NG TIN M???I NH???T T??? TRUNG T??M</h4>
                            </div>
                            <div class="submit">
                                <input type="text" placeholder="Nh???p email nh???n tin t???c" style="padding: 10px 10px; width: 300px;">
                                <button type="submit" style="padding: 12px 20px; background-color: red; color: white; border: none; margin-left: -5px;">G???i</button>
                            </div>
                        </div>
                    </div>                      
            </div>
            <div class="footer">
                <div class="wrap_footer3 ">
                <div class="footer3 grid_content">
                        <div class="left3_side">
                            <div class="left3_col">
                                <p class="left3_decs">Trung t??m Pha??t tri????n Khoa ho??c va?? C??ng ngh???? Tre??.</p>
                                <p class="left3_decs">S???? 1 Pha??m Ngo??c Tha??ch, B????n Nghe??, Qu????n 1, Tha??nh ph???? H???? Chi?? Minh.</p>
                                <p class="left3_decs">028 7308 7007</p>
                                <p class="left3_decs">Trung t??m Ph??t tri???n Khoa h???c v?? C??ng ngh??? Tr??? ???????c th??nh l???p ng??y 03 th??ng 8 n??m 1989 theo quy???t ?????nh s???: 444/ Q??-UB C???a UBND Th??nh ph??? H??? Ch?? Minh v???i t??n g???i l?? Trung t??m S??ng t???o K??? thu???t v?? C??ng ngh??? tr???. ?????n ng??y 12 th??ng 8 n??m 1998 Trung t??m ch??nh th???c ???????c ?????i t??n l?? Trung t??m Ph??t tri???n Khoa h???c v?? C??ng ngh??? tr??? cho ?????n nay.</p>
                            </div>
                            <div class="left3_col">
                                <p class="left3_decs">Copyright ?? 2022 | B???n quy???n n???i dung thu???c v??? Trung t??m Ph??t tri???n Khoa h???c v?? C??ng ngh??? Tr??? - Th??nh ??o??n TP. HCM</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
        </div>
    </body>
</html>