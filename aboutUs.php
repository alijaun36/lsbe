<?php 
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
$rowAb = aboutContent(1);
$rowAcd = aboutContent(6);
echo headerTopBg(1);
?>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">About Us</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain;?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span>  <span>About Us</span></div>
</div>
</div>
</div>
</div>
</div>

<div class="middle_inner">
<div id="cmsmasters_row_rs6ayiq8ua" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_txi9pc5d6q" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_ke0cjw4f1i" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading"><?=$rowAb['aboutTitle']?></h2>
</div>
<div class="aligncenter">
<div class="cmsmasters_img  cmsmasters_image_c"><img src="<?=$siteUrlMain;?>img/redBtm.png" alt="Picture"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_xvfbtny5j8" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_n5ypv0qg5p" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_vitek2kvs9" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h5 class="cmsmasters_heading"><?=$rowAb['aboutDesc']?></h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_5calom4dlt" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent0">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_131313">
<?php
$sqlAF = mysqli_query($conn,"SELECT * FROM about_features WHERE aboutID='1' ORDER BY sortOrder ASC");
while($rowAF = mysqli_fetch_assoc($sqlAF)){ 
echo '<div id="cmsmasters_column_pyjlifgs3i" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner">
<div class="aligncenter">
<div class="cmsmasters_img  cmsmasters_image_c"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowAF['afImg']!="")?$rowAF['afImg']:'noImg.jpg').'&h=170&w=300&zc=2" alt="'.$rowAF['title'].'"></div>
</div>
<div id="cmsmasters_heading_1sbncloesm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h3 class="cmsmasters_heading">'.$rowAF['title'].'</h3>
</div>
<div id="cmsmasters_heading_avpxyqe12j" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading">'.$rowAF['shortDesc'].'</h5>
</div>
<div id="cmsmasters_button_kbey72nl3l" class="button_wrap"><a href="'.aboutURL($rowAF['id']).'" class="cmsmasters_button"><span>Learn More</span></a></div>
</div>
</div>';
}
?>
</div>
</div>
</div>
</div>
</div>
<style type="text/css">
#cmsmasters_row_h99si29w8o{ background-image: url('<?=$siteUrlMain.'img/'.$rowAcd['pgImg'];?>'); }
</style>
<div style="margin-top:30px" id="cmsmasters_row_h99si29w8o" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_scroll_block cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed" data-stellar-background-ratio="0.5">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_m1o9afg6lh" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><div id="cmsmasters_heading_vulg6hjx06" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading"><?=$rowAcd['aboutTitle']?></h2>
</div><div class="cmsmasters_img  cmsmasters_image_l"><img src="<?=$siteUrlMain;?>img/redBtm.png" alt="Picture" /></div><div id="cmsmasters_heading_fjisrrrw8v" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading">
<?=$rowAcd['aboutDesc']?>
</h5>
</div><div id="cmsmasters_heading_b8v23j7vpo" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">	 
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>


<div id="cmsmasters_row_15mnj1mhn8" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_6rlfc3idx" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_bkmhy2twcp" class="ourTeamHeading cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading">Our Team</h2>
</div>
</div>
</div>
</div>
</div>
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_zpt4xzewtn" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
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
<div id="cmsmasters_heading_txbekaot2" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading">Degree Awarding Universities</h2>
</div>
<div class="cmsmasters_sidebar sidebar_layout_11 awardingUni" style="margin-bottom:40px">
<aside id="tribe-events-adv-list-widget-2" class="widget tribe-events-adv-list-widget">
<div id="cmsmasters_owl_slider_xdh0tom51v2" class="cmsmasters_owl_slider" data-pagination="true" data-navigation="false" data-items="1" data-single-item="false" data-auto-play="3000">
<?php
$sqlUnv = mysqli_query($conn,"SELECT * FROM universities ORDER BY sortOrder ASC");
$numRowUnv = mysqli_num_rows($sqlUnv);
if($numRowUnv>0){
while($rowUnv = mysqli_fetch_assoc($sqlUnv)){ 
echo '<div class="cmsmasters_owl_slider_item">
<ol class="hfeed vcalendar">
<li class="type-tribe_events post-10800 tribe-clearfix tribe-events-category-holidays tribe-events-venue-13518 tribe-events-organizer-10798 tribe-events-first tribe-events-last">
<div class="tribe-mini-calendar-event event-0  first  last ">
<div class="tribe-events-list-widget-content-wrap">
<div class="cmsmasters_widget_event_info">
<div class="cmsmasters_widget_sidebar_img"> <img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowUnv['pgImg']!="")?$rowUnv['pgImg']:'noImg.jpg').'&h=170&w=300&zc=1" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="'.$rowAF['title'].'" >
</div>
<div class="cmsmasters_widget_event_info_wrap uniInfo">
<h4 class="entry-title summary">'.$rowUnv['title'].'</h4>
<div class="duration cmsmasters_theme_icon_time">
<div class="cmsms_event_date"> <span class="cmsmasters_event_start_time">'.$rowUnv['website'].'</span></div>
</div>
<div class="vcard adr location cmsmasters_widget_event_venue_info_loc">
'.$rowUnv['shortDesc'].'
<div id="cmsmasters_button_6gijpo8j4a" class="button_wrap"><a href="javascript:void(0)" rel="'.$rowUnv['id'].'" class="cmsmasters_button um"><span>Read More</span></a></div>
</div>
</div>
</div>
</div>
</div>
</li>
</ol>
</div>';
}
}
?>
</aside>
<div class="cl"></div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="cmsmasters_row_6pk9hjbar9" class="cmsmasters_row cmsmasters_color_scheme_second cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div id="cmsmasters_heading_txbekaot" class="cmsmasters_heading_wrap cmsmasters_heading_align_left" style="margin-top:10px;">
<h2 class="cmsmasters_heading">Why Choose Us</h2>
</div>

<div class="cmsmasters_row_margin cmsmasters_131313">
<div id="cmsmasters_column_tuyfoozl2" class="cmsmasters_column one_third">



<div class="cmsmasters_column_inner whyChooseUs">
<?php
$sqlWC = mysqli_query($conn,"SELECT * FROM why_choose WHERE isWhyChooseUs='1' ORDER BY sortOrder ASC LIMIT 0,2");
while($rowWC = mysqli_fetch_assoc($sqlWC)){ 
echo '<div id="cmsmasters_icon_box_vb5t5u1p6" class="cmsmasters_icon_box cmsmasters_icon_heading_left box_icon_type_icon shortcode_animated">
<div class="icon_box_inner">
<h4 class="icon_box_heading">
<img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowWC['iconFont']!="")?$rowWC['iconFont']:'noImg.jpg').'&h=100&w=100&zc=1" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="'.$rowWC['title'].'" >
'.$rowWC['title'].'</h4>
<div class="icon_box_text">
<div id="cmsmasters_heading_42sdc1piqm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading">'.$rowWC['description'].'</h5>
</div>
</div>
</div>
</div>
<div id="cmsmasters_divider_oijfgy0d9c" class="cl"></div>';
}
?>
</div>
</div>
<div id="cmsmasters_column_tuyfoozl2" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner whyChooseUs">
<?php
$sqlWC = mysqli_query($conn,"SELECT * FROM why_choose WHERE isWhyChooseUs='1' ORDER BY sortOrder ASC LIMIT 2,2");
while($rowWC = mysqli_fetch_assoc($sqlWC)){ 
echo '<div id="cmsmasters_icon_box_vb5t5u1p6" class="cmsmasters_icon_box cmsmasters_icon_heading_left box_icon_type_icon shortcode_animated">
<div class="icon_box_inner">
<h4 class="icon_box_heading">
<img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowWC['iconFont']!="")?$rowWC['iconFont']:'noImg.jpg').'&h=100&w=100&zc=1" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="'.$rowWC['title'].'" >
'.$rowWC['title'].'</h4>
<div class="icon_box_text">
<div id="cmsmasters_heading_42sdc1piqm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading">'.$rowWC['description'].'</h5>
</div>
</div>
</div>
</div>
<div id="cmsmasters_divider_oijfgy0d9c" class="cl"></div>';
}
?>
</div>
</div>
<div id="cmsmasters_column_tuyfoozl2" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner whyChooseUs">
<?php
$sqlWC = mysqli_query($conn,"SELECT * FROM why_choose WHERE isWhyChooseUs='1' ORDER BY sortOrder ASC LIMIT 4,2");
while($rowWC = mysqli_fetch_assoc($sqlWC)){ 
echo '<div id="cmsmasters_icon_box_vb5t5u1p6" class="cmsmasters_icon_box cmsmasters_icon_heading_left box_icon_type_icon shortcode_animated">
<div class="icon_box_inner">
<h4 class="icon_box_heading">
<img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowWC['iconFont']!="")?$rowWC['iconFont']:'noImg.jpg').'&h=100&w=100&zc=1" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="'.$rowWC['title'].'" >
'.$rowWC['title'].'</h4>
<div class="icon_box_text">
<div id="cmsmasters_heading_42sdc1piqm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading">'.$rowWC['description'].'</h5>
</div>
</div>
</div>
</div>
<div id="cmsmasters_divider_oijfgy0d9c" class="cl"></div>';
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_ogmmlt3fop" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_1212">
<div id="cmsmasters_column_8l42pwe86v" class="cmsmasters_column three_fourth">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_9fae5anaz" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h3 class="cmsmasters_heading"><?=$rowhdr['applyForm'];?></h3><div id="um"></div>
</div>
</div>
</div>
<div id="cmsmasters_column_rlhrdjpbbl" class="cmsmasters_column one_fourth cmsmasters_btn_apply">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_button_btlixsqxn4" class="button_wrap"><a href="<?=$siteUrlMain;?>apply" class="cmsmasters_button"><span>Apply Now</span></a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="cl"></div>
<div class="content_wrap fullwidth">
<div class="middle_content entry"></div>
</div>
</div>
</div>
<script type="text/javascript">jQuery(document).ready(function() { jQuery('.um').on('click', function(){  jQuery('#um').load('ui?id='+jQuery(this).attr('rel'), function(){ var source = jQuery(this); jQuery.fancybox({ content: source, width: '600' }); 
}); }); });</script>
<?php include "php/footer.php";?>