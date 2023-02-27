<?php 
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
$sqlAF = mysqli_query($conn,"SELECT * FROM about_features WHERE urlPage='".$_GET['id']."'");
$rowAF = mysqli_fetch_assoc($sqlAF);
echo headerTopBg2($rowAF['headerBg']);
$mlAry = json_decode($rowAF['moreLinks'],true);
?>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ebaa85fb892d40012e346b3&product=inline-share-buttons" async="async"></script>
<div id="middle">
<div class="middle_inner">
<div class="content_wrap fullwidth">
<div class="middle_content entry"></div>
</div>
<div id="cmsmasters_row_95ag5uktw" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed topHeaderBg">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_zk5omchj7" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_4wos9lwqux" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
<h1 class="cmsmasters_heading"><?=$rowAF['title']?></h1>
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
<div class="middle_inner">
<div class="content_wrap fullwidth abtFtrPg2">

<div class="middle_content entry">
<div class="portfolio opened-article">
<article id="post-611" class="cmsmasters_open_project post-611 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-university">
<div class="project_content with_sidebar">
<figure class="cmsmasters_img_wrap">
<img  src="<?=$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowAF['afImg']!="")?$rowAF['afImg']:'noImg.jpg').'&h=650&w=1160&zc=2';?>" class="full-width" alt="<?=$rowAF['title']?>" /></figure>
<div class="cmsmasters_project_content entry-content abtFtrPg" >
<?=$rowAF['description']?>
</div>

</div>
</article>
<aside class="share_posts">
<div class="sharethis-inline-share-buttons"></div></aside>
<aside class="post_nav"><span class="cmsmasters_prev_post"><a href="<?=$mlAry['lLink']?>" rel="prev"><?=$mlAry['lTitle']?></a><span class="cmsmasters_prev_arrow"><span></span></span></span><span class="dn"></span><span class="cmsmasters_next_post"><a href="<?=$mlAry['rLink']?>" rel="next"><?=$mlAry['rTitle']?></a><span class="cmsmasters_next_arrow"><span></span></span></span></aside>
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
</div>
</div>
</div>
</div>
</div>
<?php include "php/footer.php";?>