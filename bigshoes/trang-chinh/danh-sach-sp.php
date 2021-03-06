<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/ihover-gh-pages/src/ihover.css">
    <link rel="stylesheet" href="../css/ihover-gh-pages/src/ihover.min.css">
    <title>Document</title>
    <style>
        .sanpham{
            position:relative;
        }
        .sanpham:hover img{
            opacity: 0.4;
            transform: scale(1.05);
            transition: all 0.5s;
        }
        .sanpham .chi-tiet{
            position:absolute;
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: black;

        }
        .sanpham:hover .chi-tiet{
            opacity: 1;
            font-weight:bold;
            z-index:1;

        }
        .chi-tiet{
            background-color: #313a40;
            color: white;
            font-size: 16px;
            margin-top: -30px;
            margin-left: -15px;
            padding: 10px 20px;
            font-family: "Roboto Condensed", sans-serif;

        }
        
        .sanpham .hang-moi{
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            font-family: "Roboto Condensed", sans-serif;
            width: 80px;
            display: block;
            background: #f7941d;
            background: linear-gradient(#f7941d 0,#f7941d 100%);
            box-shadow: 0 3px 10px -5px #000;
            top: 10px;
            right: 10px;
        }
        .item{
            position:relative;
        }
        .item .noi-bat{
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            transform: rotate(45deg);
            font-family: "Roboto Condensed", sans-serif;
            width: 50px;
            display: block;
            background: #f7941d;
            background: linear-gradient(#f7941d 0,#f7941d 100%);
            box-shadow: 0 3px 10px -5px #000;
            top: 15px;
            right: 20px;
        }   
    </style>
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/products.css">
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 header-element">
                <div class="login">


                  <!-- CODE CHECK ????NG NH???P -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../bigshoes/tai-khoan/dang-nhap.php"><p><strong>????NG NH???P / ????NG K??</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../bigshoes/tai-khoan/thong-tin-tk.php"><p><strong>XIN CH??O <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4 header-element">
                <div class="logo">
                <a href="index.php"><img src="../css/trang-chu/img/logo11.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4 header-element">
                <!-- M?? CODE PHP CHECK S??? L?????NG S???N PH???M TH??M V??O GI??? H??NG  -->

                <div class="giohang" style = "position: relative;">
                <ul style="list-style-type: none;">
                        <!-- <li><p style="color: rgb(212, 212, 212);font-size: 14px;">GI??? H??NG</p></li> -->
                    <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i>
                    <?php
                        $sll = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $item){
                                extract($item);
                                $sll+= $sl;
                            }
                        }
                    ?>
                    <span style = "position: relative;padding:3px 8px;background-color:#fff;border-radius:50px;left:1%;" ><?=$sll?></span></li></a> 
                    
                </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="dropleft nav-mobile">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" style="background-color: #d7d6d6; color: black;">
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="index.php">TRANG CH???</a></li>
            <li><a class="dropdown-item" href="danh-sach-sp.php">S???N PH???M</a></li>
            <li><a class="dropdown-item" href="gioi-thieu.php">GI???I THI???U</a></li>
            <li><a class="dropdown-item" href="tin-tuc.php">TIN T???C</a></li>
            <li><a class="dropdown-item" href="lien-he.php">LI??N H???</a></li>
        </ul>
    </div>   



    <div class="container-fluid nav-web">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CH???</a></li>
                        <li><a href="danh-sach-sp.php">S???N PH???M</a></li>
                            <li><a href="gioi-thieu.php">GI???I THI???U</a></li>
                            <li><a href="tin-tuc.php">TIN T???C</a></li>
                            <li><a href="lien-he.php">LI??N H???</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="padding-left: 0px;">
                <div class="chuyen">
                    <p><span>TRANG CH??? </span> / S???N PH???M</p>
                </div>
            </div>
            <!-- CODE PHP DANH M???C -->
            <div class="dropdown danh-muc-mobile">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" style="background-color: black;">
                    DANH M???C
                </button>
                <?php
                    require_once ('../../bigshoes/admin/dao/loai-hang.php');
                    extract($_REQUEST);
                    $items = loai_hang_select_all();
                ?>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php foreach($items as $item){
                    extract($item);
                ?>
                    <li><a class="dropdown-item" href="sp-cung-loai.php?ma_loai=<?=$ma_loai?>"><?=$ten_loai?></a> 
                    <?php } ?></li>
                </ul>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3 content">
                <div class="row search-bar" style="margin-left: 0px;">                  
                    <!-- T??m ki???m theo t??n s???n ph???m -->
                    <form action="tim-kiem-theo-ten.php" method="post">
                        <div class="serch">
                            <input type="text" placeholder="T??m ki???m..." name="keywords" required>
                            <button type="submit" name="search-keywords"><i class="fa fa-search" style="font-size:20px;color:rgb(255, 255, 255)"></i></button>
                        </div>
                    </form>
                </div>

                <div class="row" style="margin-left: 0px;">

                    <!-- CODE PHP DANH M???C -->
                    <?php
                        require_once ('../../bigshoes/admin/dao/loai-hang.php');
                        extract($_REQUEST);
                        $items = loai_hang_select_all();
                    ?>
                    <div class="row danh-muc-web" style="margin-top: 35px;margin-left: 0px;">
                        <ul class="list-group">
                            <li class="list-group-item active">DANH M???C</li>
                            <?php foreach($items as $item){
                                extract($item);
                                ?>
                            <a href="sp-cung-loai.php?ma_loai=<?=$ma_loai?>"><li class="list-group-item"><?=$ten_loai?></li></a> 
                            <?php } ?>
                        </ul>
                    </div>

                    <!-- SAN PHAM SALE UP -->
                    <?php
                        include("san-pham-sale-up.php");
                    ?>

                </div>
            </div>

            <!-- S???n ph???m n?? n???m ??? ????y -->
            <div class="col-md-9 san-pham-content">

            <!-- CODE PHP DANH S??CH S???N PH???M -->
            <?php
                $items = hang_hoa_select_all_price();
                foreach($items as $item){
                    extract($item);
            ?>
                <div class="sanpham">
                <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><span class="chi-tiet">CHI TI???T</span></a>
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt=""><span class='hang-moi'>S???n ph???m m???i</span></a>
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
                    <div class="text">
                        <div class="price">
                            <?=number_format($don_gia - $don_gia*($giam_gia/100))?> VN?? <span style = "color:grey;font-size:14px;margin-left:40px;"><strike><?=number_format($don_gia)?></strike></span>
                        </div>
                        <div class="name">
                           <?=$ten_hh?>
                        </div>
                    </div>
                </div>
                <?php } ?>                               
            </div>
        </div>
    </div>


    <!-- CODE SAN PHAM NOI BAT -->
    <?php include("san-pham-noi-bat.php"); ?>

    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../css/trang-chu/img/logo11.png" alt="" style ="width:70px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>H??? tr???</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuy???n m??i</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                    Nhi???m v??? c???a ch??ng t??i l?? mang ?????n nh???ng s???n ph???m ch???t l?????ng v???i gi?? c??? t???t nh???t cho kh??ch h??ng. ???????c h??? tr??? kh??ch h??ng l?? ni???m vinh d??? c???a ch??ng t??i . <br><br>
                                    Xin c??m ??n !                                    
                                </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang ch???</p>
                                </li>
                                <li>
                                    <p>C???a h??ng</p>
                                </li>
                                <li>
                                    <p>Gi???i thi???u</p>
                                </li>
                                <li>
                                    <p>Li??n h???</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>??u ????i</p>
                                </li>
                                <li>
                                    <p>Giao nh???n</p>
                                </li>
                                <li>
                                    <p>?????i tr???</p>
                                </li>
                                <li>
                                    <p>B???o m???t</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nh???p v??o email c???a b???n ????? ????ng k?? nh???n tin khuy???n m??i ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">????ng k??</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>







    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script type="text/javascript" src="../../bigshoes/css/danh-sach-sp/plugin/js/owl.carousel.min.js"></script>

    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            // navText: [
            //     nextIcon,
            //     preIcon
            // ],
            responsive: {
                0: {
                    items: 2,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
    </script>

    










</body>

</html>