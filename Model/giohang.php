<?php
class giohang
{
   function add_item($mahh, $soluong, $mymausac, $size)
   {
      $prod = new hanghoa();
      $prods = $prod->getDetail($mahh);
      $hinh = $prods["hinh"];
      $tenhh = $prods['tenhh'];
      $dongia = $prods['dongia'];
      $tongtien = $soluong * $dongia;
      $item = array(
         'mahh'=>$mahh,
         'hinh' => $hinh,
         'tenhh' => $tenhh,
         'mymausac' => $mymausac,
         'size' => $size,
         'dongia' => $dongia,
         'soluong' => $soluong,
         'tongtien' => $tongtien
      );
      $flag = 0;
   
         foreach($_SESSION['cart'] as $key => $element){
          if($element['mahh'] == $item['mahh']){
            if( $element['size'] == $item['size'] && $element['mymausac'] == $item['mymausac']){
               $flag = 1;
               $element['soluong'] = $element['soluong'] + $item['soluong'];
               $this->update($key, $element['soluong']);
               break;
            }
         }
           }
           if($flag == 0){
            $_SESSION['cart'][] = $item;
           }
      }
   
   function getTotal()
   {
      $subTotal = 0;
      foreach ($_SESSION['cart'] as $item) {
         $subTotal += $item['tongtien'];
      }
      return $subTotal;
   }
   function delete($key)
   {
      unset($_SESSION['cart'][$key]);
   }
   function update($key,$quantity){
      if($quantity <= 0 ){
         $this->delete($key);
      }
      else{
         $_SESSION['cart'][$key]['soluong'] = $quantity;
         $new_total = $_SESSION['cart'][$key]['soluong'] * $_SESSION['cart'][$key]['dongia'];
         $_SESSION['cart'][$key]['tongtien'] = $new_total;
      }
   }
}
