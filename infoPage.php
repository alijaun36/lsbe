<?php 
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
$sqlAF = mysqli_query($conn,"SELECT * FROM info_pages WHERE urlPage='".$_GET['id']."'");
$rowAF = mysqli_fetch_assoc($sqlAF);
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
<h1 class="entry-title"><?=$rowAF['title']?></h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <span>
<?=$rowAF['title']?>
</span></div>
</div>
</div>
</div>
</div>
</div>
<div class="middle_inner">
<div class="content_wrap fullwidth"> 

<div class="middle_content entry">
<div class="portfolio opened-article">
<article id="post-611" class="cmsmasters_open_project post-611 project type-project status-publish format-standard has-post-thumbnail hentry pj-categs-university">
<div class="project_content with_sidebar">
<figure class="cmsmasters_img_wrap">
<img  src="<?=$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowAF['ipImg']!="")?$rowAF['ipImg']:'noImg.jpg').'&h=650&w=1160&zc=2';?>" class="full-width" alt="<?=$rowAF['title']?>" /></figure>
<div class="cmsmasters_project_content entry-content abtFtrPg" >
<?=$rowAF['description']?>
</div>

</div>
</article>
<aside class="share_posts">
<h2 class="share_posts_title">Like this project?</h2>
<div class="share_posts_inner"> <a href="https://www.facebook.com/sharer/sharer.php?display=popup&u=https%3A%2F%2Fschule.cmsmasters.net%2Fproject%2Four-values%2F">Facebook</a> <a href="https://twitter.com/intent/tweet?text=Check+out+%27Our+Values%27+on+Schule+website&url=https%3A%2F%2Fschule.cmsmasters.net%2Fproject%2Four-values%2F">Twitter</a> <a href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fschule.cmsmasters.net%2Fproject%2Four-values%2F&media=https%3A%2F%2Fschule.cmsmasters.net%2Fwp-content%2Fuploads%2F2015%2F01%2F11.jpg&description=Our Values">Pinterest</a> </div>
</aside>
<aside class="post_nav"><span class="cmsmasters_prev_post"><a href="https://schule.cmsmasters.net/project/our-mission/" rel="prev">Our Mission</a><span class="cmsmasters_prev_arrow"><span></span></span></span><span class="dn"></span><span class="cmsmasters_next_post"><a href="https://schule.cmsmasters.net/project/undergraduate-admissions/" rel="next">Undergraduate Admissions</a><span class="cmsmasters_next_arrow"><span></span></span></span></aside>
<aside class="cmsmasters_single_slider">
<h2 class="cmsmasters_single_slider_title">More projects</h2>
<div class="cmsmasters_single_slider_inner">
<div id="cmsmasters_owl_slider_5ea2c7b4a9413" class="cmsmasters_owl_slider" data-single-item="false" data-auto-play="5000">
<?php
$sqlAF = mysqli_query($conn,"SELECT * FROM about_features WHERE aboutID='1' ORDER BY sortOrder ASC");
while($rowAF = mysqli_fetch_assoc($sqlAF)){ 
echo '<div class="cmsmasters_owl_slider_item cmsmasters_single_slider_item">
<div class="cmsmasters_single_slider_item_outer">
<figure class="cmsmasters_img_wrap"><a href="'.aboutURL($rowAF['id']).'" title="'.$rowAF['title'].'" class="cmsmasters_img_link preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowAF['afImg']!="")?$rowAF['afImg']:'noImg.jpg').'&h=160&w=224&zc=1" class="full-width wp-post-image" alt="'.$rowAF['title'].'"  /></a></figure>
<div class="cmsmasters_single_slider_item_inner">
<h6 class="cmsmasters_single_slider_item_title"> <a href="'.aboutURL($rowAF['id']).'">'.$rowAF['title'].'</a> </h6>
</div>
</div>
</div>';
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
<?php include "php/footer.php";?>