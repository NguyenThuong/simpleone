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

/**
 * chuyển về chuỗi tiếng việt không dấu
 * @param  string
 * @return string
 */
function strU($str){
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/[^A-Za-z0-9 ]/", '', $str);
    $str = preg_replace("/\s+/", ' ', $str);
    $str = trim($str);
    return $str;
}

/**
 * Chuyển về chuỗi alias
 * @param  string
 * @return string
 */
function alias($str){
    $str = strU($str);
    $str = strtolower($str);    
    $str = str_replace(' ', '-', $str);
    return $str;
}

function menu_list($categories=array()) {
    $list = array(
        'items' => array(),
        'parents' => array()
    );
    foreach ($categories as $item) {
        $list['items'][$item['id']] = $item;
        $list['parents'][$item['parent_id']][] = $item['id'];
    }
    return $list;
}

/**
 * Menu đa cấp ul li
 * @param  array
 * @return string
 */
function menu_li(&$list=array(), $parent_id=0, $template='<li cid="{id}"><label>{name}</label>')
{
    $html = '';
    if(isset($list['parents'][$parent_id])){
        $html = '<ul class="nav nav-list categories">';

        foreach($list['parents'][$parent_id] as $id){
            $item = $list['items'][$id];

            if(!empty($list['parents'][$id])){
                $has_child = ' submenu';
            } else {
                $has_child = '';
            }

            $html .= '<li><a href="?controller=category&view=index&cid='.$item['id'].'">'.$item['name'].'</a>';

            if(!empty($list['parents'][$id])){
                $html .= menu_li($list, $id);
            }

            $html .= '</li>';
        }

        $html .= '</ul>';
    }            
    return $html;
}

/**
 * Menu đa cấp select option
 * @param  array
 * @return string
 */
function menu_option(&$list=array(), $select_id=0, $parent_id=0, $add_text='... ')
{
    $html = '';
    if(isset($list['parents'][$parent_id])){
        foreach($list['parents'][$parent_id] as $id){
            $item = $list['items'][$id];
            
            if ($id==$select_id) {
                $selected = 'selected=""';
            } else {
                $selected = '';
            }
            
            $html .= '<option value="'.$item['id'].'" '.$selected.'>'.$add_text.$item['name'].'</option>';

            if(!empty($list['parents'][$id])){
                $html .= menu_option($list, $select_id, $id, '...'.$add_text);
            }
        }
    }            
    return $html;
}

function categories_child(&$list=array(), $parent_id=0) {
    $arr = array();
    if(isset($list['parents'][$parent_id])){
        foreach($list['parents'][$parent_id] as $id){
            $arr[] = $id;
            if(!empty($list['parents'][$id])){
                $arr = array_merge($arr, categories_child($list, $id));
            }
        }
    }            
    return $arr;
}
