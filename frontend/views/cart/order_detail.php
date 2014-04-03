<div id="maincontainer">
  <section id="product">
    <div class="container">
    <!--  breadcrumb -->  

      <div class="row">        
        <!-- Account Login-->
        <div class="span12">
          <h1 class="heading1"><span class="maintext">Thanh Toán</span></h1>
          

          <div class="checkoutsteptitle">Xác Nhận Đơn Hàng
          </div>
          <div class="checkoutstep">
            <div class="cart-info">
              <table class="table table-striped table-bordered">
                <tr>
                  <th class="image">Ảnh</th>
                  <th class="name">Sản Phẩm</th>
                  <th class="quantity">Số Lượng</th>
                  <th class="price">Gía</th>
                </tr>
                <?php foreach($cart as $pid => $product): ?>
                <tr>
                  <td class="image"><a href="#"><img title="product" alt="product" src="public/upload/product/<?php echo $product['image']; ?>" height="50" width="50"></a></td>
                  <td   class="name"><a href="#"><?php echo $product['name']; ?></a></td>
                  <td class="quantity"><?php echo $product['number'] ?></td>
                  <td class="price"><?php echo number_format($product['price'],0,',','.'); ?></td>

                </tr>
                <?php endforeach; ?>

              </table>
            </div>
            <div class="row">
              <div class="pull-right">
                <div class="span4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>


                      <tr>
                        <td><span class="extra bold totalamout">Thành Tiền :</span></td>
                        <td><span class="bold totalamout"><?php echo number_format(cart_total(),0,',','.') ; ?> VND</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>


          <div class="checkoutsteptitle">Thông Tin Khách Hàng
          </div>

            <div class="row">
              <form class="form-horizontal" method="post" action="dat-hang.html">
                <fieldset>
                  <div class="span6">
                    <div class="control-group">
                      <label class="control-label" >Họ Và Tên<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" name="name">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Địa Chỉ<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" name="address">
                      </div>
                    </div>



                  </div>


                  <div class="span4">

                    <div class="control-group">
                      <label class="control-label" >E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" name="email">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Điện Thoại<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" name="phone">
                      </div>
                    </div>


                  </div>

                  
                </fieldset>
              
            </div>
            <input type="submit" class="btn btn-orange pull-right" value="Thanh Toán">
              </form>
          

          
        </div>        

      </div>
    </div>
  </section>
</div>