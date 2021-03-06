<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/products.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        .item{
            position:relative;
        }
        .item .cung-loai{
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
            right: 18px;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


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
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CH??? </span> / CHI TI???T</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
 ======================CHI-TI???T====================================
 ============================================ -->

    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <!-- CODE PHO TH??NG TIN S???N PH???M -->
        <?php
                    require_once ('../../bigshoes/admin/dao/hang-hoa.php');
                        extract($_REQUEST);
                        $items = hang_hoa_select_by_id($ma_hh);
                        extract($items);
                    ?>
            <div class="col-md-4 san-pham-chi-tiet" style="padding-left: 0px">
                <div class="spchitiet">
                    <img src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="" style="width:100%;">
                </div>
            </div>
            <div class="col-md-5">
                <div class="thongtinsp">
                    <ul>
                        <li>
                            <h5 style="font-size: 30px;"><?=$ten_hh?></h5>
                            <p> </p>
                        </li>
                        <li><del><?=number_format($don_gia)?></del> VN??</li>
                        <li style = "font-size:30px;"><?=number_format($don_gia - $don_gia*($giam_gia/100))?> VN??</li>
                        <li style="margin-top: 15px;"><?=$mo_ta?></li>
                        <li class="size" style="margin-top: 20px;">
                            <div class="soluong">
                                <select name="" id="">
                                    <option value="">Size normal</option>
                                    <option value="">Size minimal</option>
                                </select>
                            </div>

                        </li>
                        <li class="soluong1" style="margin-top: 27px;">
                        <!-- M?? CODE PHP CHECK ????NG NH???P ????? MUA H??NG -->
                            <?php
                                if(!isset($_SESSION['user'])){
                            ?>
                            <a href="../../bigshoes/tai-khoan/dang-nhap.php"><button style="margin-top:-5px;" class="btn btn-dark">????NG NH???P ????? MUA H??NG</button></a>
                                <?php }else{ ?>
                            <a href="them-gio-hang.php?ma_hh=<?=$ma_hh?>"><button style="margin-top:-5px;" class="btn btn-dark">TH??M V??O GI??? H??NG</button></a>
                                <?php } ?>

                        </li>
                        <li style="margin-top: 25px;">-----------------------------------------------------------------</li>
                        <li>M??: #<?=$ma_hh?></li>
                        -----------------------------------------------------------------
                        <?php
                            $items = loai_hang_select_by_id($ma_loai);
                            extract($items);
                        ?>
                        <li>Danh m???c: <?=$ten_loai?></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>




    <!-- ============================================
 ==========================================================
 ============================================ -->

 <!-- B??NH LU???N -->
 <div class="container" style="margin-top: 30px;">

        <div class="row">
            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>NH???N X??T V?? ????NH GI??</h5>
                    <p></p>
                </div>
            
            <!-- CODE PHP PH???N HI???N TH??? B??NH LU???N -->
            <?php
                require_once ('../admin/dao/binh-luan.php');
                extract($_REQUEST);
                if(array_key_exists("noi_dung",$_REQUEST)){
                    $ma_kh = $_SESSION['user']['ma_kh'];
                    $ngay_bl = date_format(date_create(), 'd-m-Y');
                    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
                }
                $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
            ?>  
            <div id="owl-two" class="binh-luan owl-carousel owl-theme">

            <?php
            foreach ($binh_luan_list as $bl) {
            ?>
               <div>
                    <div class="col-sm-6">
                        <?php echo "<li>$bl[noi_dung]</li>"?>
                    </div>
                    <div class="col-sm-6" style = "text-align:right;">
                        <?php echo "$bl[ma_kh]</b>, $bl[ngay_bl]" ?>
                    </div>
               </div>
            <?php } ?>
            </div>
            
            <br>
            
            <!-- CODE PHP PH???N CHO PH??P B??NH LU???N -->
                <?php
                if(!isset($_SESSION['user'])){
                    echo '<b class="text-danger">????ng nh???p ????? b??nh lu???n v??? s???n ph???m n??y</b>';
                }else{
                ?>
                <div>
                   <form action="" method="post">
                   <div class="row" style="align-items:center;">
                       <div class="col-sm-10">
                            <div class="form-group" style="margin: 0;">
                            <textarea class="form-control" name= "noi_dung" required></textarea>
                            </div>
                       </div>
                       <div class="col-sm-2">
                           <button class="btn btn-danger" style = "">G???i</button>
                       </div>
                   </div>
                   </form>
                <?php } ?>

                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 30px;">
        <div class="row">

            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>S???N PH???M C??NG LO???I</h5>
                    <p></p>
                </div>

                <div id="owl-one" class="owl-carousel owl-theme">
                    <!-- CODE PHP S???N PH???M C??NG LO???I -->
                    <?php
                        $items = hang_hoa_select_by_loai($ma_loai);
                        foreach($items as $item){
                            extract($item);
                        
                    ?>
                    <div class="item">
                       <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="ds"><span class='cung-loai'><?=$ten_loai?></span></a>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../css/trang-chu/img/logo11.png" alt="" style ="width:60px;">
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

    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('#owl-one').owlCarousel({
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 2,
                    nav: false  
                },
                768: {
                    items: 2,
                    nav: false
                },
                1200:{
                    items: 5,
                    nav: false
                }
            }
        });
        $('#owl-two').owlCarousel({
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false  
                },
                768: {
                    items: 1,
                    nav: false
                },
                1200:{
                    items: 2,
                    nav: false
                }
            }
        });
    </script>

    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>

</body>

</html>