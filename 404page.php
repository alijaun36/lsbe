<?php
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
echo headerTopBg(13);
?>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Page not Found</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <span>
Page not Found
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
<figure class="cmsmasters_img_wrap"><img src="<?=$siteUrlMain;?>img/404.png" alt="404"></figure>
<div class="cmsmasters_project_content entry-content abtFtrPg text-center" >
<p>The page you are looking is not available or has been removed. <br />Try going to Home Page by using the button below.</p>
<a class="rdtheme-button-1" href="<?=$siteUrlMain;?>">Go to Home Page</a> 
</div>
</div>
</article>

</div>
</div>
</div>
</div>
</div>
<?php include "php/footer.php";?>