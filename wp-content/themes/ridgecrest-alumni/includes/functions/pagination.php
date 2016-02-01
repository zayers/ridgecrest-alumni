<?php

//Pagination        
	function pagination($pages = '', $range = 3)
	{
	     $showitems = ($range * 2)+1;  
	 
	     global $paged;
	     if(empty($paged)) $paged = 1;
	 
	     if($pages == '')
	     {
	         global $wp_query;
	         $pages = $wp_query->max_num_pages;
	         if(!$pages)
	         {
	             $pages = 1;
	         }
	     }   
	 
	     if(1 != $pages)     {
	         echo "<div class=\"pagination\"><a href='".get_pagenum_link($paged - 1)."'><i class='icon-left-open'></i></a><span class='pages'>Pages </span>";
			 	/*
				if($paged > 2 && $paged > $range+1 && $showitems < $pages-1) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
				if($paged > 1 && $showitems < $pages-1) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
				*/
	         
	         for ($i=1; $i <= $pages; $i++) {
	             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
	                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
	             }
	         }
			 
			 if ($paged < $pages && $showitems < $pages)
			 
				 
				 echo "<span class='pages'> of</span> <a href='".get_pagenum_link($pages)."'>$pages</a>";
				 if($paged == $pages) {
				 	echo "<span class='gray-out'><i class='icon-arrow-right big'></i></span>";
		         } else {
			         echo "<a href=\"".get_pagenum_link($paged + 1)."\"><i class='icon-right-open'></i></a>";
		         }
		         echo "</div>\n";
		         
		         /* if ($paged == $pages) echo "<span class='pages'> of </span><a href='".get_pagenum_link($pages)."'>$pages</a>"; */
	         
			 }
			
	}
?>