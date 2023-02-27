<?php 
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
$pgAry=aboutContent(7);
echo headerTopBg(8);
?>
<div id="middle">
<div class="middle_inner">
<div class="content_wrap fullwidth"> 
<div class="middle_content entry"></div>
</div>
<div id="cmsmasters_row_95ag5uktw" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed topHeaderBg">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_fgv9zu3icv" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_7mv131xjz" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h1 class="cmsmasters_heading">Delivery Venues</h1>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="cmsmasters_row_5gvkg7ygcz" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_fq0w6b1hbr" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_pn8q62i7qa" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h2 class="cmsmasters_heading"><?=$pgAry['aboutTitle']?></h2>
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
<h5 class="cmsmasters_heading">
<?=$pgAry['aboutDesc']?>
</h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="deliveryVenues">
<?php 
$snoCF = 0;
$sqlCF = mysqli_query($conn,"SELECT * FROM about_features WHERE aboutID='7' ORDER BY sortOrder ASC");
while($rowCF = mysqli_fetch_assoc($sqlCF)){ 
$snoCF++;
if($snoCF==2){ ?>
<div id="cmsmasters_row_d26c70s7vr" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<div id="cmsmasters_column_31zo98aft" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_fb_43ddjcewo" style="background-image: url(<?=$siteUrlMain.'img/'.$rowCF['afImg'];?>);" class="cmsmasters_featured_block">
<div class="featured_block_inner">
<div class="featured_block_text"></div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_column_0h94uvj0v6" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_q813afamz8" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading"><?=$rowCF['title'];?></h2>
</div>
<div id="cmsmasters_heading_izymcrf2lj" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading"><?=$rowCF['description'];?></h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php }else{ ?>
<div id="cmsmasters_row_vqkt4aiyzv" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<div id="cmsmasters_column_8o6nft0xy" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_yntgnq5d4" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading"><?=$rowCF['title'];?></h2>
</div>
<div id="cmsmasters_heading_67itxo219n" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h5 class="cmsmasters_heading"><?=$rowCF['description'];?></h5>
</div>
</div>
</div>
<div id="cmsmasters_column_ugxs82cpn7" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_fb_payzffk2fl" style="background-image: url(<?=$siteUrlMain.'img/'.$rowCF['afImg'];?>);" class="cmsmasters_featured_block">
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
<?php	
}
if($snoCF==2){$snoCF=0;}
}
?> 
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



<div id="cmsmasters_row_fviddk26tl" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_txdob63fzi" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_snjga4cljq" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
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
<div id="cmsmasters_row_5kxe7v0svb" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_ey359gnmt8" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_posts_slider cmsmasters_posts_slider_type_post" >
<div id="cmsmasters_slider_t6mfv3xoge" class="cmsmasters_owl_slider owl-carousel featuredPrgm" data-items="3" data-single-item="false" data-auto-play="5000">
<?php
$sqlCrs = mysqli_query($conn,"SELECT c.id,c.thumbImg,c.title,cd.duration,co.organisationTitle,co.isShowLogo,co.orgImg FROM courses AS c,course_duration as cd,course_organisation as co WHERE c.isFeatured='1' AND co.id=c.organisationID AND cd.id=c.durationID ORDER BY c.sortOrder ASC");
$numRowCrs = mysqli_num_rows($sqlCrs);
if($numRowCrs>0){
while($rowCrs = mysqli_fetch_assoc($sqlCrs)){ 
echo '<div class="cmsmasters_owl_slider_item">
<article id="post-10736" class="cmsmasters_slider_post post-10736 post type-post status-publish format-standard has-post-thumbnail hentry category-academy">
<div class="cmsmasters_slider_post_outer">
<div class="cmsmasters_slider_post_date_img_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCrs['thumbImg']!="")?$rowCrs['thumbImg']:'noImg.jpg').'&h=180&w=300&zc=1" class="full-width wp-post-image" alt="'.$rowCrs['title'].'" />
<div class="cmsmasters_img_rollover"><a href="'.courseURL($rowCrs['id']).'" class="cmsmasters_open_link"></a></div>
</figure>
<div class="cmsmasters_slider_post_cont_info entry-meta"><span class="cmsmasters_slider_post_date"><abbr class="published">'.$rowCrs['topPicks'].'</abbr></span></div>
</div>
<div class="cmsmasters_slider_post_inner"><span class="cmsmasters_slider_post_category">
<span class="cmsmasters_cat_color cmsmasters_cat_45 info">'.$rowCrs['duration'].' | '.courseSubjects($rowCrs['id']).'</span>
</span>
<header class="cmsmasters_slider_post_header entry-header">
<h2 class="cmsmasters_slider_post_title entry-title"><a href="'.courseURL($rowCrs['id']).'">'.$rowCrs['title'].'</a></h2>
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


<div id="cmsmasters_row_kfkt9siqsc" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_6b0t5fm8sq" class="cmsmasters_column three_fourth">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_z9cdty0yxk" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h3 class="cmsmasters_heading"><?=$rowhdr['applyForm'];?></h3>
</div>
</div>
</div>
<div id="cmsmasters_column_2r1541wi1" class="cmsmasters_column one_fourth cmsmasters_btn_apply">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_button_yy5r141kci" class="button_wrap"><a href="<?=$siteUrlMain;?>apply-now" class="cmsmasters_button"><span>Apply Now</span></a></div>
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
<?php include "php/footer.php";?>