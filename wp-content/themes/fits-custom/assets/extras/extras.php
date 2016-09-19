
// =======================================================================// 
//Use this function to create pagingation links that are styleable with Twitter Bootstrap//
// =======================================================================//
function paging() {

global $wp_query;

$total_pages = $wp_query->max_num_pages;

if ($total_pages > 1){
    $current_page = max(1, get_query_var('paged'));
    $count = 0;
    $previous_page = $current_page - 1;
    $next_page = $current_page + 1;
    echo '<div class="pagination">';
    echo '<ul>';
    if($total_pages > 3) { 
        if($current_page > 1) echo '<li class="last"><a href="' . get_bloginfo('url') . '/posts/page/1/?"><i class="fa fa-angle-left"></i></a></li>' ;
        if($current_page > 1) echo '<li class="previous"><a href="' . get_bloginfo('url') . '/posts/page/' . $previous_page . '/?"><i class="fa fa-angle-left"></i></i></a></li>' ;
    }
    while($count < $total_pages) {
         $count = $count + 1;  
         
         if($count == $current_page) echo '<li class="active"><a href="' . get_bloginfo('url') . '/posts/page/' . $count . '/?">' . $count . '</a></li>' ;
         else echo '<li class="inactive"><a href="' . get_bloginfo('url') . '/posts/page/' . $count . '/?">' . $count . '</a></li>' ;

    }
        if($total_pages > 3) {
            if($current_page < $total_pages) echo '<li class="next"><a href="' . get_bloginfo('url') . '/posts/page/' . $next_page . '/?pp=1"><i class="fa fa-angle-right"></i></i></a></li>' ;
            if($current_page < $total_pages) echo '<li class="last"><a href="' . get_bloginfo('url') . '/posts/page/' . $total_pages . '/?pp=1"><i class="fa fa-angle-right"></i></a></li>' ;
        }
    ?>
    
        </ul>
        </div>
  }
<?php