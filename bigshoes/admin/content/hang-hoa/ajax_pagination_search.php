<?php
require_once 'paginator.class.php';
require_once ('../../dao/pdo.php');
require_once ('../../dao/hang-hoa.php');
require_once ('../../dao/loai-hang.php');
  
$conn       = pdo_get_connection();
 
$limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
$page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;


if(array_key_exists('search-keywords',$_REQUEST)){
    extract($_REQUEST);
    $_SESSION["keywords"] = $keywords;
}

$keywords = $_SESSION["keywords"];

$query = "SELECT * FROM hang_hoa hh JOIN loai_hang lo ON lo.ma_loai=hh.ma_loai WHERE ten_hh LIKE '%$keywords%' OR ten_loai LIKE '%$keywords%'";


#$Paginator  = new Paginator( $limit, $page, $total );

$Paginator  = new Paginator( $conn, $query );
$results    = $Paginator->getData( $limit, $page );


?>



    <thead>
        <tr>
            <th>MÃ HH</th>
            <th>TÊN HH</th>
            <th>HÌNH ẢNH</th>
            <th>ĐƠN GIÁ</th>
            <th>GIẢM GIÁ</th>
            <th>HÀNH ĐỘNG</th>
        </tr>
    </thead>
    <tbody>
    <!-- <?php foreach($items as $item){ //lấy tt của mảng
                                        extract($item);
                                    ?> 
                                        <tr>
                                            <td><?=$ma_hh?></td>
                                            <td><?=$ten_hh?></td>
                                            <td><img src="/bigshoes/css/admin/images/products/<?=$hinh?>" alt="" style="width:80px;"></td>
                                            <td><?=number_format($don_gia)?> <sup>đ</sup></td>
                                            <td><?=$giam_gia?> <sup>%</sup></td>
                                            <td> 
                                                <a href="hang-hoa-update.php?ma_hh=<?=$ma_hh?>"><button class="btn btn-primary">Sửa</button></a>
                                                <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="hang-hoa-delete.php?ma_hh=<?=$ma_hh?>"><button class="btn btn-danger">Xóa</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?> -->

        <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
            <tr>
                    <td><?=$results->data[$i]['ma_hh']?></td>
                    <td><?=$results->data[$i]['ten_hh']?></td>
                    <td><img src="/bigshoes/css/admin/images/products/<?=$results->data[$i]['hinh']?>" alt="" style="width:80px;"></td>
                    <td><?=$results->data[$i]['don_gia']?><sup>đ</sup></td>
                    <td><?=$results->data[$i]['giam_gia']?><sup>%</sup></td>
                    <td> 
                        <a href="hang-hoa-update.php?ma_hh=<?=$results->data[$i]['ma_hh']?>"><button class="btn btn-primary">Sửa</button></a>
                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="hang-hoa-delete.php?ma_hh=<?=$results->data[$i]['ma_hh']?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
            </tr>
        <?php endfor; ?>
        
    </tbody>


<?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>