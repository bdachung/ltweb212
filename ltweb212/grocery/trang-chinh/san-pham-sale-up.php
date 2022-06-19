<div class="row" style="margin-top: 35px;margin-left: 0px;">
    <ul class="list-group">
        <!-- CODE PHP SẢN PHẨM BÁN CHẠY -->
    <?php
        require_once ('../../bigshoes/admin/dao/hang-hoa.php');
        extract($_REQUEST);
        $items = hang_hoa_sale();
    
    ?>
        <li class="list-group-item active sale-up-header">SẢN PHẨM SALE UP 10 - 50%</li>
        <?php foreach($items as $item){
            extract($item);
            ?>
        <li class="list-group-item sale-up-content">
            <div class="row">
                <div class="col-sm-4"><a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>&ma_loai=<?=$ma_loai?>"><img src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt=""></a></div>
                <div class="col-sm-8"><?=$ten_hh?><br><br><b><?=number_format($don_gia-($don_gia*$giam_gia/100))?> VNĐ</b></div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>