<?php 
ob_start(); 
 ?>

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
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/products.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <title>Document</title>
    <style>
        /* *{
            width: 100%;
        } */
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
                        <li><a href="danh-sach-sp.php">TRANG CH???</a></li>
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
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CH??? </span> / THANH TO??N</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CODE PHP THANH TO??N GI??? H??NG -->
    <?php
        require_once ('../../bigshoes/admin/dao/khach-hang.php');
        require_once ('../../bigshoes/admin/dao/hang-hoa.php');

        extract($_REQUEST);
        
        $ma_kh = $_SESSION['user']['ma_kh'];
        $item = khach_hang_select_by_id($ma_kh);
        extract($item);
    ?>



    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-7">
        <form action="" method="post">
        <h4>TH??NG TIN THANH TO??N</h4>
        <br>
        <table class="table table-borderless">
        <input type="text" class="form-control" id="" name="ma_kh" value="<?=$ma_kh?>" hidden>
            <tr>
                <div class="form-group">
                <label for=""> <b>H??? v?? t??n:</b> </label>
                <input type="text" class="form-control" id="" name="ho_ten" value="<?=$ho_ten?>">
                </div>
                
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Email:</b></label>
                <input type="text" class="form-control" id="" name="email" value = "<?=$email?>">
                </div>
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>?????a ch???:</b></label>
                <input type="text" class="form-control" id="" name="dia_chi" value = "<?=$dia_chi?>">
                </div>
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Ghi ch??:</b></label>
                <textarea class="form-control" rows="5" id="" name = "ghi_chu"></textarea>
                </div>
            </tr>
        </table>
        </div>
            <div class="col-sm-5">
            <h4>????N H??NG C???A B???N</h4>
            <br>         
            <table class="table" style = "border:3px solid #c30005;">
            <thead>
                <tr>
                    <th>S???N PH???M</th>
                    <th style = "text-align:right;">T???NG</th>
                </tr>
                </thead>
                <tbody>
                <!-- CODE PHP HI???N TH??? L???I DANH S??CH S???N PH???M ???? MUA -->
                <?php
                $total = $i = 0;
                if(!empty($_SESSION['cart'])){
                            $items = $_SESSION['cart'];
                            foreach($items as $item){
                                extract($item);
                                $i++;
                ?>
                <tr>

                    <td><?=$name?> x <?=$sl ;?></td>
                    <td style = "text-align:right;"><?=number_format(($price - ($price*($giam_gia/100)))*$sl);
                            $total += (($price - ($price*($giam_gia/100)))*$sl);
                            
                    ?> VN??</td>
                </tr>
                <?php }} ?>
                <tr>
                    <td><b>T???ng ph???</b></td>
                    <td style = "text-align:right;"><b><?=number_format($total)?> VN??</b></td>
                </tr>
                <tr>
                    <td><b>Giao h??ng</b></td>
                    <td style = "text-align:right;">Giao h??ng mi???n ph??
                    d?????i 5km</td>
                </tr>
                <tr>
                    <td><b>T???NG</b></td>
                    <td style = "text-align:right;"><b><?=number_format($total)?> VN??</b></td>
                </tr>
                <tr>
                    <td colspan="2"><i>Qu?? kh??ch vui l??ng ki???m tra l???i th??ng tin giao h??ng v?? th??ng tin ????n h??ng ????? ti???n h??nh ?????t h??ng. C???m ??n qu?? kh??ch ???? mua s???n ph???m t???i c???a h??ng ch??ng t??i.</i></td>
                </tr>
                <tr>
                        <td><button type="submit" name="dathang" class="btn btn-danger"><b>?????T H??NG</b></button></td>
                </tr>
                </tbody>
            </table>        

            </form>
            </div>
        </div>
        </div>
            

            <!-- KHI KH??CH H??NG TI???N H??NH ?????T H??NG -->
            <?php
                require_once ('../../bigshoes/admin/dao/hoa-don.php');

                extract($_REQUEST);
                if(array_key_exists('dathang',$_REQUEST)){

                try {
                    // T???o k???t n???i
                    $conn = pdo_get_connection();
                    
                    // T???o ng??y mua
                    $ngaymua = date("d-m-Y");
                    
                    // C??u SQL Insert
                    $sql = "INSERT INTO hoa_don(ngay_mua,ghi_chu,ma_kh) 
                            VALUES ('".$ngaymua."','".$ghi_chu."','".$ma_kh."')";
                
                    // Th???c hi???n th??m record
                    $conn->exec($sql);
                    
                    // L???y id h??a ????n v???a insert
                    $ma_hd = $conn->lastInsertId();
                    
                    $items = $_SESSION['cart'];
                    foreach($items as $item){
                        extract($item);
                        $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES ('".$ma_hd."','".$ma_hh."','".$sl."','".$price."')";
                        $conn->exec($sql);
                        unset($_SESSION['cart'][$ma_hh]);

                        
                    }

                    echo"<script>
                    alert('B???n ???? ?????t ????n h??ng th??nh c??ng !');
                    window.location.href='./danh-sach-sp.php';
                    </script>";
                } 
                catch (PDOException $e) {
                    echo $e->getMessage();
                }
                }  

               
            ?>
        
            <!-- KHI KH??CH H??NG TI???N H??NH ?????T H??NG ONLINE -->
            <?php
                require_once ('../../bigshoes/admin/dao/hoa-don.php');

                extract($_REQUEST);
                if(array_key_exists('dathangonline',$_REQUEST)){


                try {
                    // T???o k???t n???i
                    $conn = pdo_get_connection();
                    
                    // T???o ng??y mua
                    $ngaymua = date("d-m-Y");
                    
                    // C??u SQL Insert
                    $sql = "INSERT INTO hoa_don(ngay_mua,ghi_chu,ma_kh) 
                            VALUES ('".$ngaymua."','".$ghi_chu."','".$ma_kh."')";
                
                    // Th???c hi???n th??m record
                    $conn->exec($sql);
                    
                    // L???y id h??a ????n v???a insert
                    $ma_hd = $conn->lastInsertId();
                    
                    $items = $_SESSION['cart'];
                    foreach($items as $item){
                        extract($item);
                        $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES ('".$ma_hd."','".$ma_hh."','".$sl."','".$price."')";
                        $conn->exec($sql);
                        unset($_SESSION['cart'][$ma_hh]);
                        
                    }
                    echo"<script>
                    alert($total);
                    </script>";
                    header("Location: http://localhost/BTL_WEB/bigshoes/vnpay_php/index.php?order_id=" .$ma_hd. "&total=".$total);
                    exit();
                } 

                catch (PDOException $e) {
                    echo $e->getMessage();
                }
                }
            ?>
   

 

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
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
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




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>