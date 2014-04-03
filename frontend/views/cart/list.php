<form id="cart_form" method="post" action="cap-nhap-gio-hang.html" role="form">
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      
      <h1 class="heading1"><span class="maintext"> Giỏ Hàng</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Ảnh</th>
            <th class="name">Sản Phẩm</th>
            <th class="quantity">Số Lượng</th>
            <th class="total">Tác Vụ</th>
            <th class="price">Giá</th>

           
          </tr>

          <?php 
            foreach($cart as $pid => $product):
          ?>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="public/upload/product/<?php echo $product['image']; ?>" height="50" width="50"></a></td>
            <td  class="name"><a href="#"><?php echo $product['name']; ?></a></td>
            <td class="quantity"><input type="text" size="1" value="<?php echo $product['number']; ?>" name="number[<?php echo $product['id'];?>]" class="span1"></td>
            <td class="total"><a href="xoa-gio-hang.html?pid=<?php echo $product['id']; ?>"><img class="tooltip-test" data-original-title="Remove"  src="public/img/remove.png" alt=""></a></td>
            <td class="price"><?php echo number_format($product['price'],0,',','.'); ?></td>
          </tr>
          <?php endforeach; ?>
          



        </table>
      </div>

      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold totalamout">Thành Tiền :</span></td>
                <td><span class="bold totalamout"><?php echo number_format(cart_total(),0,',','.') ?> VND</span></td>
              </tr>
            </table>
            

            
            <a href="don-hang.html" class="btn btn-orange pull-right">Thanh Toán</a>
            <input type="submit" value="Cập Nhập" class="btn btn-orange pull-right mr10">
          </div>
        </div>
        </div>
      
    </div>
  </section>
</div>
</form>