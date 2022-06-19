<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/products.css">
    <link rel="stylesheet" hreff="../../bigshoes/css/gioi-thieu/gioithieu.css"> 
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 header-element">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../bigshoes/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../bigshoes/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4 header-element">
                <div class="logo">
                <a href="index.php"><img src="../css/trang-chu/img/logo11.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4 header-element">
                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: relative;">
                <ul style="list-style-type: none;">
                        <!-- <li><p style="color: rgb(212, 212, 212);font-size: 14px;">GIỎ HÀNG</p></li> -->
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
            <li><a class="dropdown-item" href="index.php">TRANG CHỦ</a></li>
            <li><a class="dropdown-item" href="danh-sach-sp.php">SẢN PHẨM</a></li>
            <li><a class="dropdown-item" href="gioi-thieu.php">GIỚI THIỆU</a></li>
            <li><a class="dropdown-item" href="tin-tuc.php">TIN TỨC</a></li>
            <li><a class="dropdown-item" href="lien-he.php">LIÊN HỆ</a></li>
        </ul>
    </div>  







    <div class="container-fluid nav-web">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/13/Supermarkt.jpg" alt="" style = "width:100%;">
        </div>
        <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-12">
                        <h2>VỀ GROCERY HOUSE</h2>
                        <p style = "text-align:justify;">GROCERY HOUSE - Một hệ thống siêu thị cung cấp thực phẩm sạch, đạt tiêu chí an toàn thực phẩm được Cục An toàn thực phẩm Việt Nam cấp phép. Ngoài các mặt hàng thực phẩm trong nước, hệ thống siêu thị cũng cung cấp rất nhiều thực phẩm ngoại nhằm đa dạng hóa mặt hàng. Một điều quan trọng nữa, hệ thống luôn luôn có ưu đãi dành tặng cho khách hàng vì vậy GROCERY HOUSE sẽ luôn là lựa chọn số một nếu bạn đã từng dùng mặt hàng tại hệ thống siêu thị GROCERY HOUSE.<br> <br>

</p>
            </div>
        </div>
        </div>
        <div class="row" style="padding-left:12px; padding-top: 10px;">
            <div class="col-sm-12">
                        <h4>CỬA HÀNG GROCERY HOUSE</h4>
            </div>
        </div>

        <div class="row gioi-thieu-content" style="padding-left:12px;">
            <div class="col-sm-6" style=" border-right:double #c30005 5px; ">
            <b>CN1: Khu F tầng 2, nhà văn hóa sinh viên – Thành phố Thủ Đức - TPHCM</b><br>
            <p style = "text-align:justify;margin-top:10px; padding: 5px;">Được thành lập vào năm 2020, với các mặt hàng chủ yếu đến từ trong nước, GROCERY HOUSE đã từ từ xây dựng được niềm tin đến các khách hàng đến từ khu vực TP Thủ Đức. Đặc biệt, với giá cả phải chăng, hệ thống đã thu hút được các khách hàng đến từ các quận lân cận.</p>
            </div>
            <div class="col-sm-6">
            <b>CN2: 268A – Lý Thường Kiệt – Quận 10 - TPHCM</b><br>
            <p style = "text-align:justify;margin-top:10px; padding: 5px;">
                            Sau 2 năm phấn đấu, hệ thống đã xây dựng thêm một siêu thị tại trung tâm của thành phố Hồ Chí Minh. Hơn nữa, các mặt hàng giờ đây đã được đa dạng hóa không chỉ đến từ trong nước, mà còn từ rất nhiều nước khác nhau. Siêu thị được đặt tại trung tâm thành phố  Hồ Chí Minh với mong muốn sẽ tiếp xúc được nhiều khách hàng hơn nữa.
            </p>
        </div>

        </div>
        </div> <br><br>


        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/freeship.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Miễn phí giao hàng</b> <br>  
                    Hệ thống hỗ trợ phí vận chuyển cho những đơn hàng từ 150.000 VNĐ trở lên. Chất lượng sản phẩm luôn được đảm bảo.    </div>  
                </div><br>
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/new.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Cập nhật mặt hàng mới nhất</b> <br>  
                    Hễ trên thế giới có gì mới, chúng tôi có cái đó.</div>
                </div><br>
               
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/cskh.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Chăm sóc khách hàng</b> <br>  
Dịch vụ chăm sóc khách hàng 24/7. Khách hàng có phàn nàn về chất lượng sản phẩm hay không hài lòng về thái độ của nhân viên, vui lòng liên hệ 99999999 </div>
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
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                    Xin cám ơn !                                    
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
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </>









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
    </script>




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>