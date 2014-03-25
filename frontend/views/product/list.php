<!-- Featured Product-->
      <div class="span9">
        <section id="featured" class="row mt40">
        <?php if(!empty($p_products)){ ?>
          <h1 class="heading1 mt0"><span class="maintext">Sản phẩm mới</span></h1>          
        <?php }else{ ?>
          <h1 class="heading1 mt0"><span class="maintext">Hiện tại chưa có sản phẩm</span></h1>
        <?php } ?>
                
          <ul class="thumbnails">
          <?php foreach($p_products as $product): ?>
            <li class="span3">
              <a class="prdocutname" href="?controller=product&action=view&pid=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
              <div class="thumbnail">
                <a href="?controller=product&action=view&pid=<?php echo $product['id']; ?>"><img alt="" src="public/upload/product/<?php echo $product['image'] ?>"></a>
                <div class="shortlinks">
                  <a class="details" href="?controller=product&action=view&pid=<?php echo $product['id']; ?>">DETAILS</a>
                </div>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew"><?php echo number_format($product['price'],0,',','.') ?></div>
                  </div>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
          </ul>

          <!-- Phan Trang -->
          <!-- <div class="pagination pull-right">


            <ul>
            
          <?php $i = 0; ?>
          <?php while($i < $total_page): ?>
          <?php $i += 1; ?>  
 
            <?php if($i == $current_page): ?>
              
              <li class="active">
                <a><?php echo $i ?></a>
              </li>
            <?php else: ?>

              <li><a href="?controller=product&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
              </li>              
              
              
            <?php endif; ?>
          <?php endwhile; ?>
            
            </ul>

          

          </div>  -->   
          
          
          <?php 
          if(!empty($p_products))
          {
            echo $pagination ;
          }
          ?>

        </section>
      </div>