<?php 
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
$rowAb = aboutContent(8);
echo headerTopBg(4);
?>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Admissions</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain;?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span>  <span>Admissions</span></div>
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
<div id="cmsmasters_row_jtouzu959" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_131313">
<?php 
$sqlHFH = mysqli_query($conn,"SELECT * FROM homepage_features WHERE hpFooter='2' ORDER BY id DESC");
while($rowHFH = mysqli_fetch_assoc($sqlHFH)){ 
echo '<div id="cmsmasters_column_6mj98jhtvi" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_fb_7hfedjgvc" style="background-image: url('.$siteUrlMain.'img/'.$rowHFH['hpImg'].');" class="cmsmasters_featured_block">
<div class="featured_block_inner">
<div class="featured_block_text">
<div id="cmsmasters_heading_7hfedjgvc"  class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
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

<div id="cmsmasters_row_a1xsbl5dbp" class="admissionSteps cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner ">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_131313">
<?php
$snoIDs = 0;
$idAry = array("cmsmasters_column_lm7r6r2yr6","cmsmasters_column_m28hg3hwb","cmsmasters_column_9dj6lunab");
$sqlAS = mysqli_query($conn,"SELECT * FROM why_choose WHERE isWhyChooseUs='2' ORDER BY sortOrder ASC LIMIT 0,3");
while($rowAS = mysqli_fetch_assoc($sqlAS)){ 
echo '<div id="'.$idAry[$snoIDs].'" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_ow3mivya7" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading">'.$rowAS['title'].'</h2>
</div>
<div id="cmsmasters_heading_01fkud8gq5" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h5 class="cmsmasters_heading">'.$rowAS['description'].'</h5>
</div>
</div>
</div>';
$snoIDs++;
}
?>
</div>
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_131313">
<?php
$snoIDs = 0;
$idAry = array("cmsmasters_column_9dj6lunab","cmsmasters_column_m28hg3hwb","cmsmasters_column_lm7r6r2yr6");
$sqlAS = mysqli_query($conn,"SELECT * FROM why_choose WHERE isWhyChooseUs='2' ORDER BY sortOrder ASC LIMIT 3,3");
while($rowAS = mysqli_fetch_assoc($sqlAS)){ 
echo '<div id="'.$idAry[$snoIDs].'" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_ow3mivya7" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading">'.$rowAS['title'].'</h2>
</div>
<div id="cmsmasters_heading_01fkud8gq5" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h5 class="cmsmasters_heading">'.$rowAS['description'].'</h5>
</div>
</div>
</div>';
$snoIDs++;
}
?>
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
<div class="cmsmasters_sidebar sidebar_layout_11 awardingUni">
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

<div id="cmsmasters_row_xgvqc8ncq" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed" data-stellar-background-ratio="0.5" style="background-position: 50% -1645.15px;">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_qhzorbw43" class="cmsmasters_column one_first">

<div id="cmsmasters_quotes_slider_hz6l2nazn" class="testimonialLSBE cmsmasters_owl_slider owl-carousel cmsmasters_quotes cmsmasters_quotes_slider" data-auto-play="5000">

<?php
$sqlTst = mysqli_query($conn,"select * FROM testimonials WHERE isTestimonial='2' order by id DESC");
while($rowTst = mysqli_fetch_assoc($sqlTst)){
echo '<div class="cmsmasters_quote cmsmasters_owl_slider_item">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_02hpbrx7l" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading">'.$rowTst['userName'].'</h2>
</div>
<div class="aligncenter">
<div class="cmsmasters_img  cmsmasters_image_c"><img src="'.$siteUrlMain.'img/redBtm.png" alt="Picture"></div>
</div>
<div id="cmsmasters_heading_7dj57va85p" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h5 class="cmsmasters_heading">'.stringTxtLimit($rowTst['comments'],300).'</h5>
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
</div>
</div>

<div id="cmsmasters_row_6pk9hjbar9" class="cmsmasters_row cmsmasters_color_scheme_second cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
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
?><div id="um"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="cl"></div>
</div>
</div>
<script type="text/javascript">jQuery(document).ready(function() { jQuery('.um').on('click', function(){  jQuery('#um').load('ui?id='+jQuery(this).attr('rel'), function(){ var source = jQuery(this); jQuery.fancybox({ content: source, width: '600' }); 
}); }); });</script>
<?php include "php/footer.php";?>