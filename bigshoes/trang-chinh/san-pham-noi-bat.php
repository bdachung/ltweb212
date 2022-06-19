<div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>sản phẩm nỗi bật</h5>
                    <p></p>
                </div>

                <div class="owl-carousel owl-theme ">

                    <!-- CODE PHP SẢN PHẨM NỔI BẬT -->
                    <?php
                        $items = hang_hoa_noi_bat();
                        foreach($items as $item){
                            extract($item);
                    ?>
                    <div class="item">
                        <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="ds"><span class='noi-bat'>HOT</span></a>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>