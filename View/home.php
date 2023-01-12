  
  <!--Section: Examples-->
  <section id="examples" class="mt-4 text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right text-center">
              <h1 class="mb-5 font-weight-bold text-black-75">SẢN PHẨM MỚI NHẤT</h1>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a class="nav-link" href="index.php?action=sanpham&act=sanpham">
                  <span class="alert alert-secondary">Xem chi tiết</span></div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">
         
  <?php 
  $hh = new hanghoa();
  $result = $hh -> getHangHoaNew();
  while($set = $result->fetch()): //$set là 1 object dduucowj lấy ra có dạng mảng
  ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-3 mb-3 text-left">
                <div class="cardContainer">
                    <div class="box">
                        <div class="p-4">
                        <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]; ?>"> 
                            <img src="Content/imagetourdien/<?php echo $set["hinh"]; ?>" class="img-fluid" alt="">
                        </a>
                            <strong>
                                <a class="nav-link" href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']?>">
                                    <span class="title"><?php echo $set['tenhh'].'-'.$set['mausac']?></span>
                                </a>
                            </strong>
                            <p><?php echo number_format($set['dongia'])?>đ</p>
                            <span class="alert alert-warning">NEW</span> <span><?php echo $set['soluotxem']?>&#128065;</span>
                        </div>
                    </div>
                </div>
              </div>
              <?php endwhile?>
         
      </div>
      <!--Grid row-->
  </section>
  <!-- end sản phẩm mới nhất -->
  <!-- sản phẩm khuyến mãi -->
  <hr>
  <section id="examples" class="text-center mb-5">

      <!-- Heading -->
      <div class="row">
          <div  class="text-center col-lg-8">
              <h1 class="mb-5 font-weight-bold text-black-75" >SẢN PHẨM KHUYẾN MÃI</1>
          </div>
          <div class="col-lg-4 text-right mt-4">
          <a class="nav-link" href="index.php?action=sanpham&act=khuyenmai">
                  <span class="alert alert-secondary">Xem chi tiết</span></div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">
         
    <?php 
    $km = new hanghoa();
    $result = $km -> getHangKhuyenMai();
    while($set = $result-> fetch()):
    ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-3 mb-3 text-left">
                <div class="cardContainer ">
                    <div class="box">
                        <div class="p-4">
                        <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]; ?>"> 
                            <img src="Content/imagetourdien/<?php echo $set["hinh"]; ?>" class="img-fluid" alt="">
                        </a>
                            <strong>
                                <a class="nav-link" href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']?>">
                                    <span class="title"><?php echo $set['tenhh'].'-'.$set['mausac']?></span>
                                </a>
                            </strong>
                            <p><?php echo number_format($set['dongia'])?>đ - <span class=""><?php echo number_format($set['giamgia'])?>đ</span></p>
                            <span class="alert alert-success">SALE</span> <span><?php echo $set['soluotxem']?>&#128065;</span>
                        </div>
                    </div>
                </div>
              </div>
         <?php endwhile?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->