
<!--  -->
<div class="container"> 
 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4"> 
   <legend><i class="glyphicon glyphicon-globe"></i> User registration 
   </legend> 
   <form  action="index.php?action=register&act=regis_act" method="post" class="form" role="form"> 
    <div class="row"> 
        <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
        </div>
        <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required autofocus="" type="text"> </div> 
        <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
        </div>
        <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required autofocus="" type="text"> </div> 
        <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
        </div>
        <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required autofocus="" type="text"> </div> 
        <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
        </div> 
        <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required type="text"> 
        </div> 
        <div class="col-xs-4 col-md-4"><label for="email">Email:</label></div> 
        <div class="col-xs-8 col-md-8"><input class="form-control" name="txtemail" placeholder="Email" type="email"></div> 
        
        <div class="col-xs-4 col-md-4"><label for="email">Password:</label></div> 
        <div class="col-xs-8 col-md-8"><input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password"></div> 
        
        <div class="col-xs-4 col-md-4"><label for="email">Re-enter password:</label></div> 
        <div class="col-xs-8 col-md-8"><input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"></div> 
        <button class="btn btn-success w-25 mx-auto mt-4" type="submit">Register</button> 
    </div>

   </form> 
  </div> 
 </div>
</div>