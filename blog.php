<?php
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
echo headerTopBg(7);
?>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Our Blogs</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain;?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span>  <span>Our Blogs</span></div>
</div>
</div>
</div>
</div>
</div>
<div class="middle_inner">
<div class="content_wrap fullwidth blogPg">
<?php
$sqlCondton="";
if(isset($_GET['id']) && $_GET['id']!=''){
?>
<div class="middle_content entry"><div id="tribe-events-pg-template" class="clearfix">
<div id="tribe-events" class="tribe-no-js" data-live_ajax="1" data-datepicker_format="0" data-category="" data-featured=""><div class="tribe-events-before-html"></div><span class="tribe-events-ajax-loading"><img class="tribe-events-spinner-medium" src="https://schule.cmsmasters.net/wp-content/plugins/the-events-calendar/src/resources/images/tribe-loading.gif" alt="Loading Events" /></span>
<div id="tribe-events-content" class="tribe-events-single vevent hentry">
<?php
$sqlBlog = mysqli_query($conn,"select * from blog_articles where urlPage='".$_GET['id']."' ");
$numRowBlog = mysqli_num_rows($sqlBlog);
if($numRowBlog>0){
$rows = mysqli_fetch_assoc($sqlBlog);
$sqlCondton="WHERE id<>".$rows['id']."";
echo '<div id="post-10800" class="cmsmasters_single_event post-10800 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-holidays cat_holidays">
<div class="cmsmasters_single_event_img"><div class="tribe-events-event-image"><img width="1160" height="778" src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rows['blogThumb']!="")?$rows['blogThumb']:'noImg.jpg').'&h=778&w=1160&zc=1" class="attachment-cmsmasters-full-masonry-thumb size-cmsmasters-full-masonry-thumb wp-post-image" alt="'.$rows['title'].'" /></div></div>		
<div class="cmsmasters_single_event_header clearfix">
<div class="cmsmasters_single_event_header_left clearfix">
<h2 class="tribe-events-single-event-title summary entry-title">'.$rows['title'].'</h2>
<div class="tribe-events-schedule updated published clearfix"><div class="tribe-events-date cmsmasters_theme_icon_time"><span class="tribe-event-date-start">'.date('F d, Y', strtotime($rows['blogDate'])).'</span> </div>
<div class="tribe-events-date cmsmasters_theme_icon_time"><span class="tribe-event-date-start">'.$rows['blogAuthor'].'</span> </div>
</div>			
</div>
<div class="cmsmasters_single_event_header_right clearfix">
<div class="tribe-events-back">
<a class="cmsmasters_theme_icon_date" href="'.$siteUrlMain.'blog"> All Posts</a>
</div>
</div>
</div>
<div class="tribe-events-single-event-description cmsmasters_single_event_content tribe-events-content entry-content description">'.$rows['description'].'
<p>&nbsp;</p>
</div> </div>';
}else{
echo  '<p>No data found.</p>';
}
?>
<div class="tribe-events-single-section tribe-events-event-meta cmsmasters_single_event_meta cmsmasters_event_meta_info_col_3">
</div>
<h2 class="tribe-events-related-events-title">More Blog Posts</h2>
<ul class="tribe-related-events tribe-clearfix hfeed vcalendar clearfix">
<?php
if($sqlCondton){
$resultBlog= mysqli_query($conn,"select id,title,shortDesc,blogThumb,blogDate,blogAuthor from blog_articles ".$sqlCondton." order by rand() limit 3");
if(@mysqli_num_rows($resultBlog)>0){
while($rowsLeft = mysqli_fetch_assoc($resultBlog)){ 
echo '<li>
<div class="tribe-related-events-thumbnail">
<a href="'.blogUrl($rowsLeft['id']).'" class="url" rel="bookmark">
<img width="580" height="410" src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowsLeft['blogThumb']!="")?$rowsLeft['blogThumb']:'noImg.jpg').'&h=410&w=580&zc=1" class="attachment-cmsmasters-project-thumb size-cmsmasters-project-thumb wp-post-image" alt="'.$rowsLeft['title'].'" />			</a>
</div>
<div class="tribe-related-event-info">
<h4 class="tribe-related-events-title summary"><a href="'.blogUrl($rowsLeft['id']).'" class="url" rel="bookmark">'.$rowsLeft['title'].'</a></h4>
</div>
</li>';

}
}
}

?>
</ul>
</div><div class="tribe-events-after-html"></div></div>
<div class="cl"></div></div>
</div>
<?php }else{ ?>
<div class="middle_content entry">
<div id="tribe-events-pg-template" class="clearfix">
<div id="tribe-events" class="" data-live_ajax="1" data-datepicker_format="0" data-category="" data-featured="">
<div id="tribe-events-content-wrapper" class="tribe-clearfix">
<div id="tribe-events-content" class="tribe-events-list">
<?php
$page_name=$siteUrlMain."blog"; 
if(!isset($_REQUEST["start"])) {
$start = 0;
}else{
$start = $_REQUEST["start"];
}	
$eu = ($start - 0); 
$limit = 6;          
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$sql = mysqli_query($conn,"limit $eu, $limit");

$sqlSeller = "select id,title,shortDesc,blogThumb,blogDate,blogAuthor From blog_articles order by id desc limit $eu, $limit";
$sqltot = "select id from blog_articles order by id desc";

$isDataInTable = "";
$resultSeller= mysqli_query($conn,$sqlSeller);
$resulttot=mysqli_query($conn,$sqltot);
$nume=mysqli_num_rows($resulttot);
if(@mysqli_num_rows($resultSeller)!=0){
echo ' <div class="tribe-events-loop">';
while($rows = mysqli_fetch_assoc($resultSeller)){ 
echo '<div id="post-10800" class="type-tribe_events post-10800 tribe-clearfix tribe-events-category-holidays tribe-events-venue-13518 tribe-events-organizer-10798 tribe-events-first">
<div class="cmsmasters_tribe_img_date">
<div class="tribe-events-event-image"><a href="'.blogUrl($rows['id']).'" tabindex="-1"><img width="580" height="366" src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rows['blogThumb']!="")?$rows['blogThumb']:'noImg.jpg').'&h=366&w=580&zc=1" class="attachment-cmsmasters-blog-masonry-thumb size-cmsmasters-blog-masonry-thumb wp-post-image" alt="'.$rows['title'].'"></a></div>
<div class="cmsmasters_tribe_events_date"> <span class="cmsmasters_tribe_events_date_month">'.date('M', strtotime($rows['blogDate'])).'</span> <span class="cmsmasters_tribe_events_date_day">'.date('d', strtotime($rows['blogDate'])).'</span> </div>
</div>
<div class="cmsmasters_events_list_event_wrap">
<div class="cmsmasters_events_list_event_info">
<h3 class="tribe-events-list-event-title entry-title summary"> <a class="url" href="'.blogUrl($rows['id']).'" title="'.$rows['title'].'" rel="bookmark"> '.$rows['title'].'</a> </h3>
<div class="tribe-events-event-meta vcard">
<div class="author  location">
<div class="updated published time-details cmsmasters_theme_icon_time"> <span class="tribe-event-date-start">'.date('F d, Y', strtotime($rows['blogDate'])).'</span></div>
<div class="tribe-events-venue-details cmsmasters_theme_icon_venue"> <a href="'.blogUrl($rows['id']).'">'.$rows['blogAuthor'].'</a> </div>
</div>
</div>
</div>
<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
<p>'.stringTxtLimit($rows['shortDesc'], 260).'</p>
<a href="'.blogUrl($rows['id']).'" class="tribe-events-read-more" rel="bookmark">Read More</a> </div>
</div>
</div>';
}
echo '</div>
<div class="cmsmasters_column one_first pagination-area ">';
if($back >=0){ 
echo '<div class="prev"><a href="'.$page_name.'?start='.$back.'" aria-label="Previous" class="tribe-events-ical tribe-events-button" >  &laquo; Prev </a></div>';
}
if($this1 < $nume) {
echo '<div class="next"><a href="'.$page_name.'?start='.$next.'" aria-label="Next" class="tribe-events-ical tribe-events-button"> Next &raquo; </a></div>';
}
echo '
</div>';
}

?> 


<a style="display:none;" class="tribe-events-ical tribe-events-button" title="Use this to share calendar data with Google Calendar, Apple iCal and other compatible apps" href="https://schule.cmsmasters.net/events/list/?ical=1&amp;tribe_display=list">+ Export Events</a> </div>

<div class="tribe-clear"></div>
</div>
</div>
<div class="cl"></div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
<?php include "php/footer.php";?>