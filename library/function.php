<?php
/**
 * Chuyển hướng đến trang báo lỗi 404
 */
function show_404(){
    header('HTTP/1.1 Not Found 404', true, 404);
    require(BASEPATH.'404.php');
    exit();
}

function get_product_subset($star,$end,$products)
{
	$subset = array();
	$position = 0;
	foreach($products as $product)
	{
		$position += 1;
		if($position >= $star && $position <= $end)
		{
			$subset[] = $product;
		}

	}
	return $subset;
}

function pagination($url, $page, $total, $add_text="&amp;"){
    $adjacents = 2;
    $prevlabel = "&lsaquo; Trước";
    $nextlabel = "Tiếp &rsaquo;";
    $out = '<div class="pagination pull-right"><ul>';
    
    //first
    if ($page == 1) {
        $out.= '<li class="disabled"><span>Đầu</span></li>';
    } else {
        $out.='<li><a href="'.$url.'">Đầu</a></li>';
    }
    
    // previous
    if ($page == 1) {
        $out.= '<li class="disabled"><span>&Lt;</span></li>';
    } elseif ($page == 2) {
        $out.='<li><a href="'.$url.'">&Lt;</a></li>';
    } else {
        $out.='<li><a href="'.$url.$add_text.'page='.($page - 1).'">&Lt;</a></li>';
    }
    
    $pmin=($page>$adjacents)?($page - $adjacents):1;
    $pmax=($page<($total - $adjacents))?($page + $adjacents):$total;
    for ($i = $pmin; $i <= $pmax; $i++) {
        if ($i == $page) {
            $out.= '<li class="active"><span>'.$i.'</span></li>';
        } elseif ($i == 1) {
            $out.= '<li><a href="'.$url.'">'.$i.'</a></li>';
        } else {
            $out.= '<li><a href="'.$url.$add_text.'page='.$i.'">'.$i. '</a></li>';
        }
    }
    
    // next
    if ($page < $total) {
        $out.= '<li><a href="'.$url.$add_text.'page='.($page + 1).'">&Gt;</a></li>';
    } else {
        $out.= '<li class="disabled"><span>&Gt;</span></li>';
    }
    
    //last
    if ($page < $total) {
        $out.= '<li><a href="'.$url.$add_text.'page='.$total.'">Cuối</a></li>';
    } else {
        $out.= '<li class="disabled"><span>Cuối</span></li>';
    }
    
    $out.= '</ul></div>';
    return $out;
}