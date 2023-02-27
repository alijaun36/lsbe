<?php include "php/connect-mysql.php"; include "php/functions.php"; include "php/header.php"; $rowAH = aboutContent(2); $rowGC = aboutContent(3); ?><style>
/*
@media screen and (min-width: 769px)
{
.carousel {
top: 150px !important;
}
.carousel-caption {
position: absolute;

bottom: 204px !important;;}
}
@media screen and (min-width: 768px)
{.carousel-caption {

bottom: 20px;}
.carousel {
top: 0px;
}
.carousel-caption h3{
font-size:210% !important;
}
.carousel-caption p{
font-size:170% !important;
}
}
@media screen and (min-width: 425px)
{.carousel-caption {

bottom: 20px;}
.carousel {
top: 0px;
}
.carousel-caption h3{
font-size:30%;
}
.carousel-caption p{
font-size:20%;
}
}
@media screen and (min-width: 320px)
{.carousel-caption {

bottom: 0px;}
.carousel {
top: 0px;
}
.carousel-caption h3{
font-size:70%;
}
.carousel-caption p{
font-size:70%;
}
}

@media screen and (max-width: 768px)
{
.box1{
display: none !important;
}
}*/
.carousel-caption{text-shadow: 3px 6px 4px #002147;margin-bottom:2%;left:13.5%; }
.cmsmasters_sidebar .widget .cmsmasters_widget_sidebar_img + .cmsmasters_widget_event_info_wrap{padding-left:0px !important;}
#myCarousel .item .carousel-caption{text-align:left;}
#myCarousel .item .carousel-caption h3{font-family:PT Serif;line-height:58px;font-size:50px;color:#fff;}
#myCarousel .item .carousel-caption p{font-family:PT Serif;line-height:26px;font-size:18px;}	
.dauInfo .cmsmasters_slider_post{margin:0 10px;}
.dauInfo .entry-header{padding-bottom:5px;} #cmsmasters_column_q52fsrthhd{width:97%;}</style>
<div class="">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<?php
$bnrSno = 0;
$sqlBnr = mysqli_query($conn,"select * FROM banners order by sortOrder asc");
while($rowBnr = mysqli_fetch_assoc($sqlBnr)){ $bnrSno++;
echo "<div class='item ".(($bnrSno==1)?'active':'')."'>
<img src='img/".$rowBnr['bannerImg']."' alt='".$rowBnr['bannerName']."' style='width:100%;'>
<div class='carousel-caption'>
<h3>".$rowBnr['bannerName']."</h3><p>".$rowBnr['bannerDesc']."</p>
</div>
</div>";
}
?>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous</span></a>
<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next</span></a>
</div>
</div>
<div id="middle">
<div id="cmsmasters_row_o23efqcw1m" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_ypr5nr992" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_qmdh3bean9" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading"><?=$rowAH['aboutTitle']?></h2>
</div>
<div class="aligncenter">
<div class="cmsmasters_img  cmsmasters_image_c"><img src="<?=$siteUrlMain;?>img/redBtm.png" alt="Picture" /></div>
</div>
<div id="cmsmasters_heading_hzj4m32eb" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h5 class="cmsmasters_heading"><?=$rowAH['shortDesc']?></h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="cmsmasters_row_a9s48j4da6" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<?php 
$sqlHFH = mysqli_query($conn,"SELECT * FROM homepage_features WHERE hpFooter='0' ORDER BY id DESC");
while($rowHFH = mysqli_fetch_assoc($sqlHFH)){ 
echo '<div id="cmsmasters_column_4sxcfpmvn3" class="cmsmasters_column one_fourth">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_fb_gma8o7nz4" style="background-image: url('.$siteUrlMain.'img/'.$rowHFH['hpImg'].');" class="cmsmasters_featured_block">
<div class="featured_block_inner">
<div class="featured_block_text">
<div id="cmsmasters_heading_gma8o7nz4" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h4 class="cmsmasters_heading"><a href="'.$rowHFH['hpLink'].'">'.$rowHFH['hpTitle'].'</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>';
}
?>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_pzg3prvqxf" style="background-image: url(<?=$siteUrlMain.'img/'.$rowhdr['universityBG'];?>);" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_low_index cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed" data-stellar-background-ratio="0.5">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_3hipotjo2e" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_iftq2qjhmu" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading">Featured Courses</h2>
</div>
<div class="aligncenter">
<div class="cmsmasters_img  cmsmasters_image_c"><img src="<?=$siteUrlMain;?>img/redBtm.png" alt="Picture" /></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_hm1ctot24" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_i9wtqt90fs" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_posts_slider cmsmasters_posts_slider_type_post" >
<div id="cmsmasters_slider_5x59xo1xky" class="lsbeCourse cmsmasters_owl_slider owl-carousel featuredPrgm" data-items="3" data-single-item="false" data-auto-play="5000">
<?php 
$sqlCrs = mysqli_query($conn,"SELECT c.id,c.thumbImg,c.title,cd.duration FROM courses AS c,course_duration as cd WHERE c.status='0' and c.isFeatured='1' AND  cd.id=c.durationID ORDER BY c.sortOrder ASC");
$numRowCrs = mysqli_num_rows($sqlCrs);
if($numRowCrs>0){
while($rowCrs = mysqli_fetch_assoc($sqlCrs)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article id="post-15721" class="cmsmasters_slider_post post-15721 post type-post status-publish format-standard has-post-thumbnail hentry category-eclat">
<div class="cmsmasters_slider_post_outer">
<div class="cmsmasters_slider_post_date_img_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCrs['thumbImg']!="")?$rowCrs['thumbImg']:'noImg.jpg').'&h=180&w=300&zc=1" class="full-width wp-post-image" alt="'.$rowCrs['title'].'"  />
<div class="cmsmasters_img_rollover"><a href="'.courseURL($rowCrs['id']).'" title="'.$rowCrs['title'].'" class="cmsmasters_open_link"></a></div>
</figure>
<div class="cmsmasters_slider_post_cont_info entry-meta"><span class="cmsmasters_slider_post_date"><abbr class="published">'.courseTopPicks($rowCrs['id']).'</abbr></span></div>
</div>
<div class="cmsmasters_slider_post_inner"><span class="cmsmasters_slider_post_category">
<span class="cmsmasters_cat_color cmsmasters_cat_45 info">'.$rowCrs['duration'].' | '.courseSubjects($rowCrs['id']).'</span>
<header class="cmsmasters_slider_post_header entry-header">
<h2 class="cmsmasters_slider_post_title entry-title"><a href="'.courseURL($rowCrs['id']).'">'.$rowCrs['title'].'</a></h2>
</header>
</span>
</div>
</div>
</article>
</div>';
}
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
<div id="cmsmasters_row_vbfzsi6typ" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<div id="cmsmasters_column_pte988rie" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_gpl94nsh" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading"><?=$rowGC['aboutTitle']?></h2>
</div>
<div id="cmsmasters_heading_4v9fsmb13g" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading"><?=$rowGC['shortDesc']?></h5>
</div>
<div id="cmsmasters_button_6gijpo8j4a" class="button_wrap"><a href="<?=$siteUrlMain;?>" class="cmsmasters_button"><span>Learn More</span></a></div>
</div>
</div>
<div id="cmsmasters_column_6e5jqc8pkq" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_fb_erpydapa8r" style="background-image:url(<?=$siteUrlMain.'img/'.$rowGC['pgImg'];?>);" class="cmsmasters_featured_block">
<div class="featured_block_inner">
<div class="featured_block_text"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    
<div id="cmsmasters_row_23ay8er5mb" class="cmsmasters_row cmsmasters_color_scheme_third cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed" data-stellar-background-ratio="0.5">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_cmv98ub7bg" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_9vxogmmflq" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading">Success Stories</h2>
</div>
<div class="aligncenter">
<div class="cmsmasters_img  cmsmasters_image_c"><img src="<?=$siteUrlMain;?>img/redBtm.png" alt="Picture" /></div>
</div>
<div id="cmsmasters_divider_qqok97jbck" class="cl"></div>
<div class="cmsmasters_quotes_slider_wrap">
<div id="cmsmasters_quotes_slider_hz6l2nazn" class="testimonialLSBE cmsmasters_owl_slider owl-carousel cmsmasters_quotes cmsmasters_quotes_slider" data-auto-play="5000">
<?php
$sqlTst = mysqli_query($conn,"select * FROM testimonials WHERE isTestimonial='1' order by RAND()");
while($rowTst = mysqli_fetch_assoc($sqlTst)){
echo '<div class="cmsmasters_quote cmsmasters_owl_slider_item">
<article class="cmsmasters_quote_inner">
<div class="cmsmasters_quote_content">
<p><span style="color: #ffffff">'.stringTxtLimit($rowTst['comments'],300).'</span></p>
</div>
<header class="cmsmasters_quote_header">
<h3 class="cmsmasters_quote_title">'.$rowTst['userName'].'</h3>
</header>
<div class="cmsmasters_quote_subtitle_wrap">
<h6 class="cmsmasters_quote_subtitle">'.$rowTst['userInfo'].'</h6>
</div>
</article>
</div>';
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="cmsmasters_row_6ax630kk4" class="lsbeCounter cmsmasters_row cmsmasters_color_scheme_third cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_upgf4mlvsb" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_counters_pkz0i8hoqg4" class="cmsmasters_counters counters_type_horizontal cmsmasters_counter_block">
<?php $hfcAry = json_decode($rowhdr['homeFeatureCounters'],true);?>
<div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_pkz0it8hog4" class="cmsmasters_counter" data-percent="<?=$hfcAry['fcNumber1']?>">
<div class="cmsmasters_counter_inner"> <span class="cmsmasters_counter_counter_wrap"> <span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix">%</span> </span> <span class="cmsmasters_counter_title"><?=$hfcAry['fcTitle1']?></span> </div>
</div>
</div>
<div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_pkz0wi8hog4" class="cmsmasters_counter" data-percent="<?=$hfcAry['fcNumber2']?>">
<div class="cmsmasters_counter_inner"> <span class="cmsmasters_counter_counter_wrap"> <span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix">%</span> </span> <span class="cmsmasters_counter_title"><?=$hfcAry['fcTitle2']?></span> </div>
</div>
</div>
<div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_pkz0i8rhog4" class="cmsmasters_counter" data-percent="<?=$hfcAry['fcNumber3']?>">
<div class="cmsmasters_counter_inner"> <span class="cmsmasters_counter_counter_wrap"> <span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span> </span> <span class="cmsmasters_counter_title"><?=$hfcAry['fcTitle3']?></span> </div>
</div>
</div>
<div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_pkz0i8ehog4" class="cmsmasters_counter" data-percent="<?=$hfcAry['fcNumber4']?>">
<div class="cmsmasters_counter_inner"> <span class="cmsmasters_counter_counter_wrap"> <span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span> </span> <span class="cmsmasters_counter_title"><?=$hfcAry['fcTitle4']?></span> </div>
</div>
</div>
<div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_pkz0iy8hog4" class="cmsmasters_counter" data-percent="<?=$hfcAry['fcNumber5']?>">
<div class="cmsmasters_counter_inner"> <span class="cmsmasters_counter_counter_wrap"> <span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span> </span> <span class="cmsmasters_counter_title"><?=$hfcAry['fcTitle5']?></span> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="cmsmasters_row_zvdobvmcel" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_about_custom_events_and_subscribe cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_3414">
<div id="cmsmasters_column_q52fsrthhd" class="cmsmasters_column three_fourth">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_txbekaot2" class="cmsmasters_heading_wrap cmsmasters_heading_align_center" style="text-align:center">
<h2 class="cmsmasters_heading">Degree Awarding Universities</h2>
</div>
<div class="cmsmasters_sidebar sidebar_layout_11 awardingUni">
<aside id="tribe-events-adv-list-widget-2" class="widget tribe-events-adv-list-widget">
<div id="cmsmasters_owl_slider_xdh0tom51v2" class="cmsmasters_owl_slider dauInfo" data-pagination="false" data-navigation="false" data-items="3" data-single-item="false" data-auto-play="3000">
<?php 
$sqlUnv = mysqli_query($conn,"SELECT * FROM universities ORDER BY sortOrder ASC ");
$numRowUnv = mysqli_num_rows($sqlUnv);
if($numRowUnv>0){
while($rowUnv = mysqli_fetch_assoc($sqlUnv)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article id="post-15721" class="cmsmasters_slider_post post-15721 post type-post status-publish format-standard has-post-thumbnail hentry category-eclat">
<div class="cmsmasters_slider_post_outer">
<div class="cmsmasters_slider_post_date_img_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowUnv['pgImg']!="")?$rowUnv['pgImg']:'noImg.jpg').'&h=170&w=300&zc=1" class="full-width wp-post-image" alt="'.$rowCrs['title'].'"  />
<div class="cmsmasters_img_rollover"><a href="javascript:void(0)" rel="'.$rowUnv['id'].'" title="'.$rowCrs['title'].'" class="cmsmasters_open_link"></a></div>
</figure>
<div class="cmsmasters_slider_post_cont_info entry-meta"><span class="cmsmasters_slider_post_date"><abbr class="published">'.courseTopPicks($rowCrs['id']).'</abbr></span></div>
</div>
<div class="cmsmasters_slider_post_inner"><span class="cmsmasters_slider_post_category">
<header class="cmsmasters_slider_post_header entry-header">
<h2 class="cmsmasters_slider_post_title entry-title">'.$rowUnv['title'].'</h2>
</header>
<span class="cmsmasters_cat_color cmsmasters_cat_45 info"><a href="javascript:void(0)" rel="'.$rowUnv['id'].'" class="um"><span>Read More &rarr;</span></a></span>
</span>
</div>
</div>
</article>
</div>';
}
}
?></div>
</aside>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
   
   <div class="cl"></div>
    
<div id="cmsmasters_row_yf4flhyt9" class="lsbeCourse2 cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed grayBg">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_7ivyp3hlqo" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_tabs tabs_mode_tab">
<ul class="cmsmasters_tabs_list">
<li id="coursesTb" class="cmsmasters_tabs_list_item current_tab"> <a href="#"> <span>Courses</span> </a> </li>
<li id="shortCoursesTb" class="cmsmasters_tabs_list_item"> <a href="#"> <span>Short Courses</span> </a> </li>
<li id="staffTb" class="cmsmasters_tabs_list_item"> <a href="#"> <span>Our Team</span> </a> </li>
<li id="newsTb" class="cmsmasters_tabs_list_item"> <a href="#"> <span>News & Events</span> </a> </li>
</ul>
<div class="cmsmasters_tabs_wrap">
<div id="coursesTb" class="cmsmasters_tab active_tab">
<div class="cmsmasters_tab_inner">
<div id="cmsmasters_learnpress_shortcode_xdhr0om51v" class="cmsmasters_learnpress_shortcode cmsmasters_12 courseList2">
<div id="cmsmasters_owl_slider_xdh0tom51v211" class="cmsmasters_owl_slider " data-pagination="false" data-navigation="false" data-items="4" data-single-item="false" data-auto-play="5000">
<?php
$sqlCrs2 = mysqli_query($conn,"SELECT c.id,c.thumbImg,c.title,cd.duration FROM courses AS c,course_duration as cd WHERE c.status='0' AND c.isFeatured='0' AND  cd.id=c.durationID ORDER BY c.sortOrder ASC");
$numRowCrs2 = mysqli_num_rows($sqlCrs2);
if($numRowCrs2>0){
while($rowCrs2 = mysqli_fetch_assoc($sqlCrs2)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article id="lpr_course_post-15528" class="lpr_course_post">
<div class="cmsmasters_course_image_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCrs2['thumbImg']!="")?$rowCrs2['thumbImg']:'noImg.jpg').'&h=140&w=192&zc=1" class="full-width wp-post-image" alt="'.$rowCrs2['title'].'">
<div class="cmsmasters_img_rollover"><a href="'.courseURL($rowCrs2['id']).'" title="'.$rowCrs2['title'].'" class="cmsmasters_open_post_link button">Read more</a></div>
</figure>
<div class="cmsmasters_course_price"><span class="price">'.courseTopPicks($rowCrs2['id']).'</span></div>
</div>
<div class="lpr_course_inner">
<header class="entry-header lpr_course_header">
<h4 class="entry-title lpr_course_title"><a href="'.courseURL($rowCrs2['id']).'">'.$rowCrs2['title'].'</a></h4>
</header>
<div class="entry-meta cmsmasters_cource_cat">
<span class="info">'.$rowCrs2['duration'].' | '.courseSubjects($rowCrs2['id']).'</span>
<h6>Awarded by:</h6>
<span class="info">'.courseOrgDI($rowCrs2['id'],'0').'</span>
<h6>Delivered by:</h6>
<span class="info">'.courseOrgDI($rowCrs2['id'],'1').'</span>
</div>
</div>
</article>
</div>';
}
}
?>
</div>
</div>
</div>
</div>

<div id="shortCoursesTb" class="cmsmasters_tab">
<div class="cmsmasters_tab_inner">
<div id="cmsmasters_learnpress_shortcode_xdhr0om51v" class="cmsmasters_learnpress_shortcode cmsmasters_12 courseList2">
<div id="cmsmasters_owl_slider_xdh0tom51v23" class="cmsmasters_owl_slider " data-pagination="false" data-navigation="false" data-items="4" data-single-item="false" data-auto-play="5000">
<?php
$sqlCrs3 = mysqli_query($conn,"SELECT c.id,c.thumbImg,c.title,cd.duration FROM courses AS c,course_duration as cd WHERE c.status='0' AND c.levelID='6' AND  cd.id=c.durationID ORDER BY c.sortOrder ASC");
$numRowCrs3 = mysqli_num_rows($sqlCrs3);
if($numRowCrs3>0){
while($rowCrs3 = mysqli_fetch_assoc($sqlCrs3)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article id="lpr_course_post-15528" class="lpr_course_post">
<div class="cmsmasters_course_image_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCrs3['thumbImg']!="")?$rowCrs3['thumbImg']:'noImg.jpg').'&h=140&w=192&zc=1" class="full-width wp-post-image" alt="'.$rowCrs3['title'].'">
<div class="cmsmasters_img_rollover"><a href="'.courseURL($rowCrs3['id']).'" title="'.$rowCrs3['title'].'" class="cmsmasters_open_post_link button">Read more</a></div>
</figure>
<div class="cmsmasters_course_price"><span class="price">'.courseTopPicks($rowCrs3['id']).'</span></div>
</div>
<div class="lpr_course_inner">
<header class="entry-header lpr_course_header">
<h4 class="entry-title lpr_course_title"><a href="'.courseURL($rowCrs3['id']).'">'.$rowCrs3['title'].'</a></h4>
</header>
<div class="entry-meta cmsmasters_cource_cat">
<span class="info">'.$rowCrs3['duration'].' | '.courseSubjects($rowCrs3['id']).'</span>
<h6>Awarded by:</h6>
<span class="info">'.courseOrgDI($rowCrs3['id'],'0').'</span>
<h6>Delivered by:</h6>
<span class="info">'.courseOrgDI($rowCrs3['id'],'1').'</span>
</div>
</div>
</article>
</div>';
}
}
?>
</div>
</div>
</div>
</div>
<div id="staffTb" class="cmsmasters_tab">
<div class="cmsmasters_tab_inner">
<div id="cmsmasters_profile_5e88364be5a9f" class="cmsmasters_profile horizontal cmsmasters_12 ourTeam">
<div id="cmsmasters_owl_slider_xdh0tom51v2300" class="cmsmasters_owl_slider " data-pagination="false" data-navigation="false" data-items="4" data-single-item="false" data-auto-play="5000">
<?php
$sqlOT = mysqli_query($conn,"SELECT * FROM our_team ORDER BY sortOrder ASC");
$numRowOT = mysqli_num_rows($sqlOT);
if($numRowOT>0){
while($rowOT = mysqli_fetch_assoc($sqlOT)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article class="cmsmasters_profile_horizontal one_first profile type-profile status-publish has-post-thumbnail hentry pl-categs-english-teacher">
<div class="profile_outer">
<div class="cmsmasters_img_social_wrap">
<div class="cmsmasters_img_social_inner">
<figure class="cmsmasters_img_wrap"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowOT['otImg']!="")?$rowOT['otImg']:'noImg.jpg').'&h=220&w=220&zc=2" class=" wp-post-image" alt="'.$rowOT['otName'].'" ></figure>
</div>
</div>
<div class="profile_inner">
<header class="cmsmasters_profile_header entry-header">
<h2 class="cmsmasters_profile_title entry-title">'.$rowOT['otName'].'</h2>
<h6 class="cmsmasters_profile_subtitle">'.$rowOT['otDesignation'].'</h6>
</header>
</div>
</div>
</article>
</div>';
}
}
?>
</div>
</div>
</div>
</div>
<div id="newsTb" class="cmsmasters_tab">
<div class="cmsmasters_tab_inner">
<?php 
$sqlNw = mysqli_query($conn,"SELECT id,title,shortDesc,newsThumb,newsDate FROM news ORDER BY id DESC LIMIT 8");
$numRowNw = mysqli_num_rows($sqlNw);
if($numRowNw>0){
echo '<div class="cmsmasters_posts_slider cmsmasters_posts_slider_type_post" >
<div id="cmsmasters_slider_xdhu0om51v" class="cmsmasters_owl_slider owl-carousel" data-items="4" data-single-item="false" data-auto-play="5000">';
while($rowNw = mysqli_fetch_assoc($sqlNw)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article id="post-15337" class="cmsmasters_slider_post post-15337 post type-post status-publish format-standard has-post-thumbnail hentry category-generation">
<div class="cmsmasters_slider_post_outer">
<div class="cmsmasters_slider_post_date_img_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowNw['newsThumb']!="")?$rowNw['newsThumb']:'noImg.jpg').'&h=134&w=212&zc=1" class="full-width wp-post-image" alt="'.$rowNw['title'].'" />
<div class="cmsmasters_img_rollover"><a href="'.newsURL($rowNw['id']).'"></a></div>
</figure>
<div class="cmsmasters_slider_post_cont_info entry-meta"><span class="cmsmasters_slider_post_date"><abbr class="published">'.date('F d, Y', strtotime($rowNw['newsDate'])).'</abbr><abbr class="dn date updated">'.date('F d, Y', strtotime($rowNw['newsDate'])).'</abbr></span></div>
</div>
<div class="cmsmasters_slider_post_inner">
<header class="cmsmasters_slider_post_header entry-header">
<h2 class="cmsmasters_slider_post_title entry-title"><a href="'.newsURL($rowNw['id']).'">'.$rowNw['1title'].'</a></h2>
</header>
<a class="cmsmasters_slider_post_read_more" href="'.newsURL($rowNw['id']).'">Read  More</a></div>
</div>
</article>
</div>';
}
echo '</div>
</div>';
}else{
echo '<p align="center">No data found.</p>';	
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="cmsmasters_row_7zvz2qfigf" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed grayBg" >
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<?php 
$sqlHFF = mysqli_query($conn,"SELECT * FROM homepage_features WHERE hpFooter='1' ORDER BY id DESC");
while($rowHFF = mysqli_fetch_assoc($sqlHFF)){ 
echo '<div class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_fb_egxitp8st" style="background-image: url('.$siteUrlMain.'img/'.$rowHFF['hpImg'].');" class="cmsmasters_featured_block">
<div class="featured_block_inner">
<div class="featured_block_text">
<div id="cmsmasters_heading_egxitp8st" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h3 class="cmsmasters_heading"><a href="'.$rowHFF['hpLink'].'">'.$rowHFF['hpTitle'].'</a></h3>
</div>
</div>
</div>
</div>
</div>
</div>';
}
?>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_flx6q8urdg" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_ouneg8u8i" class="cmsmasters_column three_fourth">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_zjxzu9dej9" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h3 class="cmsmasters_heading"><?=$rowhdr['applyForm'];?></h3><div id="um"></div>
</div>
</div>
</div>
<div id="cmsmasters_column_octsko7pq" class="cmsmasters_column one_fourth cmsmasters_btn_call">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_divider_ig16afgqk" class="cl"></div>
<div id="cmsmasters_button_pxg004ld1" class="button_wrap"><a href="<?=$siteUrlMain;?>apply" class="cmsmasters_button"><span>Apply Now</span></a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="cl"></div>
<div id="cmsmasters_row_zvdobvmcel" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_about_custom_events_and_subscribe cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div style="padding:40px 0 20px;">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_3414">
<div id="cmsmasters_column_q52fsrthhd" class="cmsmasters_column three_fourth">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_sidebar sidebar_layout_11 awardingUni">
<aside id="tribe-events-adv-list-widget-222" class="widget tribe-events-adv-list-widget">
<div class="cmsmasters_owl_slider_item ftrLogos">
<div id="cmsmasters_owl_slider_xdh0tom51v222" class="cmsmasters_owl_slider" data-pagination="false" data-navigation="false" data-items="6" data-single-item="false" data-auto-play="3000">
<?php 
$sqlCF = mysqli_query($conn,"SELECT * FROM our_clients where isFooter='1' ORDER BY sortOrder ASC");
while($rowCF = mysqli_fetch_assoc($sqlCF)){ 
echo '<div class="cmsmasters_owl_slider_item"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCF['opImg']!="")?$rowCF['opImg']:'noImg.jpg').'&h=130&w=270&zc=2" alt="'.$rowCF['opName'].'" /></div>';
}
?>
</div>
</div>
</aside>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
<script type="text/javascript">jQuery(document).ready(function() { jQuery('.um').on('click', function(){  jQuery('#um').load('ui?id='+jQuery(this).attr('rel'), function(){ var source = jQuery(this); jQuery.fancybox({ content: source, width: '600' }); 
}); }); });</script>
<?php include "php/footer.php"; ?>