  <!-- quảng cáo -->
  <?php
  include "quangcao.php";
  ?>
  <!-- end quảng cáo -->
  
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
 

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
          <h4 class="mb-5 font-weight-bold">SẢN PHẨM</h4>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
         <?php 
         $hh = new hanghoa();
         $result  = $hh -> getHangHoa();
         while($set = $result -> fetch()):
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
  
 
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					
				    <li ><a href=""></a></li>
				   
				</ul>
</div>