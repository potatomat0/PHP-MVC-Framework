<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;
    }
</script>

<section class="my-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hh = new hanghoa();
        $result = $hh->getDetail($id);
        $tenhh = $result['tenhh'];
        $dongia = $result['dongia'];
        $mota = $result['mota'];
        $hinh = $result['hinh'];
        $nhom = $result['Nhom'];
    }
    ?>
    <div class="row">
    <div class="col-6">
    <img width="600" src="Content/imagetourdien/<?php echo $hinh ?>" alt="">
    <ul class="preview-thumbnail nav nav-tabs">
        <?php
        $result = $hh->getColor($nhom);
        while ($set = $result->fetch()) :
        ?>
            <li class="active"> 
                <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]; ?>">
                    <img style="position: inline-block; height: 50px; width: 50px" src="<?php echo 'Content/imagetourdien/' . $set['hinh']; ?>" 
                    alt="Related product">
                </a>
            </li>
        <?php endwhile ?>
        </ul>
    </div>
    <div class="col-6">
        <form action="index.php?action=giohang&act=giohang" method="post">
        <input type="hidden" name="mahh" value="<?php echo $id ?>" />
        <h3 class="product-title"> </h3>
        <div class="rating">
            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
            </div>
        </div>
        <p class="product-description">

        </p>
        <h4 class="price">Price: <?php echo number_format($dongia) ?>đ</h4>
        <hr>
        <h5> Description:
            <?php echo $mota ?>
        </h5>
        <hr>
        <h5 class="colors">Genre:
            <select name="mymausac" class="form-select" style="width:150px;">
                <?php
                $result = $hh->getColor($nhom);
                while ($set = $result->fetch()) :
                ?>
                    <option value="<?php echo $set['mausac'] ?>"><?php echo $set['mausac'] ?></option>
                <?php endwhile ?>
            </select><br>

            <input type="hidden" name="size" id="size" value="0" />
            Disc size:
            <?php
            $result = $hh->getSize($nhom);
            while ($set = $result->fetch()) : ?>
                <button type="button" class="btn-outline-success" onclick="chonsize(<?php echo $set['size']; ?>)" name="<?php echo $set['size']; ?>" class="btn btn-default-hong btn-circle" id="hong" value="<?php echo $set['size']; ?>">
                    <?php echo $set['size']; ?>
                </button>
            <?php endwhile ?>
            </br></br>
            Quantity:
            <input type="number" class="form-control w-25" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
        </h5>
        <div class="action">
            <a href="index.php?action=giohang&act=giohang">
                <button type="submit" class="btn btn-success">Buy now!</button>
            </a>

                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> 
        </div>
    </div>
</form>

</section>




<p class="float-left"><b>BÌnh luận </b></p>
<hr>
</div>
<form action="index.php?action=giohang" method="post">
    <div class="row">
        <input type="hidden" name="txtmahh" value="" />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
</div>
<div class="row">
    <br />
</div>

</div>
</section>