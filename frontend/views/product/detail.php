<!-- Featured Product-->
      <div class="span9">
        <section id="featured" class="row mt40">
        <?php if(!empty($products)){ ?>
          <h1 class="heading1 mt0"><span class="maintext">Chi tiết sản phẩm</span></h1>          
        <?php }else{ ?>
          <h1 class="heading1 mt0"><span class="maintext">No Featured Products</span></h1>
        <?php } ?>
                
          
        <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span4">
          <ul class="thumbnails mainimage">
            <li class="span4">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="public/upload/product/<?php echo $products['image']; ?>">
                <img  src="public/upload/product/<?php echo $products['image']; ?>" alt="" title="<?php echo $products['name']; ?>">
              </a>
            </li>

          </ul>

        </div>
        <!-- Right Details-->
        <div class="span5">
          <div class="row">
            <div class="span5">
              <h1 class="productname"><span class="bgnone"><?php echo $products['name']; ?></span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <?php echo number_format($products['price'],0,',','.') ?> VNĐ</div>
              </div>
              <div class="quantitybox">
                <div class="clear"></div>
                <div class="control-group">
                  <div class="controls">
                    <label class="checkbox">
                      <?php echo $products['summary'] ?>
                    </label>

                  </div>
                </div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="#">Add to Cart</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



        </section>
      </div>