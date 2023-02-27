<?php 
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
echo headerTopBg(6);
?>
<div id="middle">
<div class="middle_inner">
<div class="content_wrap fullwidth"> 
<div class="middle_content entry"></div>
</div>
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Frequently Asked Questions</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <span>FAQs</span></div>
</div>
</div>
</div>
</div>
</div>
<div class="middle_inner">
<div id="cmsmasters_row_5gvkg7ygcz" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin" >
<div id="cmsmasters_column_" class="cmsmasters_column one_first" >
<div class="cmsmasters_column_inner">


<div class="cmsmasters_column_inner"><div id="cmsmasters_heading_c90c618a1f" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
</div><div class="cmsmasters_toggles toggles_mode_accordion faqPg">
<?php 
$sno=0;
$sqlFAQ = mysqli_query($conn,"select title,description FROM faq ORDER BY id ASC");
while($rowFAQ = mysqli_fetch_assoc($sqlFAQ)){
$sno++;
echo '<div class="cmsmasters_toggle_wrap '.(($sno==1)?'current_toggle':'').' " data-tags="all ">
<div class="cmsmasters_toggle_title">
<span class="cmsmasters_toggle_plus">
<span class="cmsmasters_toggle_plus_hor"></span>
<span class="cmsmasters_toggle_plus_vert"></span>
</span>
<a href="javascript:void()">'.$sno.'. '.$rowFAQ['title'].'</a>
</div>
<div class="cmsmasters_toggle">
<div class="cmsmasters_toggle_inner">
'.$rowFAQ['description'].'
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
</div>
</div>
<div class="cl"></div>
</div>
</div>
</div>
<?php include "php/footer.php";?>