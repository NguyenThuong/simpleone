<?php
  $categories = $pro->getCat();

?>
      <aside class="span3 mt40">
        <!-- Category-->
        <div class="sidewidt">
          <h2 class="heading2"><span>Danh Mục</span></h2>
          	
          <?php 

          echo menu_li(menu_list($categories)); 
          //echo menu($categories);
          ?>


        </div>        
      </aside>