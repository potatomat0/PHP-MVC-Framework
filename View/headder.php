
<nav style="font-size:20px;" class="navbar navbar-expand-lg bg-body-tertiary px-5">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php"><h1>🏠</h1></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home |</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=register">Đăng Ký |</a> 
        </li>
        <?php
            if(!isset($_SESSION['makh'])):?>
                <li class="nav-item">
                <a href="index.php?action=login" class="nav-link">Đăng Nhập |</a> 
            </li>
            <?php endif?>            
            <?php
            if(isset($_SESSION['makh'])):?>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="index.php?action=login&act=logout" class="nav-link">Đăng Xuất |</a> 
                </li>
            </li>
            <?php endif?>                         
            <li>
          <a href="index.php?action=giohang" class="nav-link"><h2>🛒</h2></a>
      </li>
          <?php
          if(isset($_SESSION['cart']) && isset($_SESSION['makh'])):
              $count = count(($_SESSION['cart']));
          ?>
      <li>
          <p><li class="nav-link">(<?php echo $count?>)</li></p>
      </li>
      <?php else:?>
          <p class="nav-link">(0)</p>
          <?php endif ?>
      <?php 
      if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
          $name = $_SESSION['tenkh'];
      ?>
      <li>
              <p style="color: red;margin-left: 0px;"><li class=" alert alert-info nav-link">Xin chào <?php echo $name?></li></p>
      </li>
      <?php else:?>
          <!-- <p style="color: red; margin-top: 20px; margin-left: 0px;">Xin chào</p> -->
          <p style="color: red;margin-left: 0px;"><li class="alert alert-info nav-link">Xin chào</li></p>
          <?php endif?>
      </ul>
      <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <input style="border: none;font-size: 20;height: 35px;" name="searchSubmit" type="submit" id="btsearch" value="🔎"/>
                                            <input type="text" name="txtsearch" class="form-control"  placeholder="Search"/>  
                                        </div>

                                        <?php 
                                        if(isset($_POST['searchSubmit']) && isset($_POST['txtsearch'])) {
                                            $_SESSION['search'] = $_POST['txtsearch'];
                                        }
                                        
                                        ?>

                                </form>
    </div>
  </div>
</nav>
<!-- dang ky -->
<div id="carouselExampleDark" class="carousel slide mb-4">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner text-white">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./Content/imagetourdien/sl1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./Content/imagetourdien/sl2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Content/imagetourdien/sl3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>