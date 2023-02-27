<?php
include "php/connect-mysql.php";
include "php/functions.php";
include "php/header.php";
$sqlCrs = mysqli_query($conn,"SELECT c.*,cd.duration FROM courses AS c,course_duration as cd WHERE cd.id=c.durationID AND c.urlPage='".$_GET['id']."' ");
$rowCrs = mysqli_fetch_assoc($sqlCrs);
//echo headerTopBg2($rowCrs['headerBG']);
$disAry = json_decode($rowCrs['displayInfoStatus'],true);
echo headerTopBg(3);
?>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ebaa85fb892d40012e346b3&product=inline-share-buttons" async="async"></script>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Course</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain;?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <a href="<?=$siteUrlMain;?>courses" class="cms_home">Courses</a> <span class="breadcrumbs_sep"> / </span> <span>Course</span></div>
</div>
</div>
</div>
</div>
</div>
<div class="middle_inner">
<div class="content_wrap fullwidth courseInfo">
<div class="middle_content entry">
<h2 class="entry-title cmsmasters_course_title"><?=strip_tags(strtoupper($rowCrs['title']));?></h2>
<figure class="cmsmasters_img_wrap">
<img src="<?=$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCrs['featuredImg']!="")?$rowCrs['featuredImg']:'noImg.jpg').'&h=575&w=946&zc=1';?>" class="vc_single_image-img attachment-full" alt="<?=$rowCrs['title'];?>" />
</figure>
<div id="lp-single-course" class="lp-single-course">
<div id="learn-press-course" class="course-summary">
<div class="course-landing-summary">
<div class="course-meta courseInfoIcon"> 

<div class="cmsmasters_column one_third">
<div class="icon"><img src="<?=$siteUrlMain;?>img/courseCode.svg" width="40"></div>
<div class="text">
<span>Course Code</span>
<b><?=$rowCrs['courseCode'];?></b>
</div>
</div>

<div class="cmsmasters_column one_sixth">
<div class="icon"><img src="<?=$siteUrlMain;?>img/duration.svg" width="40"></div>
<div class="text">
<span>Duration</span>
<b><?=$rowCrs['duration']?></b>
</div>
</div>

<div class="cmsmasters_column one_fourth">
<div class="icon"><img src="<?=$siteUrlMain;?>img/certificate.svg" width="40"></div>
<div class="text">
<span>Level</span>
<b><?=courseLevelNm($rowCrs['levelID']);?></b>
</div>
</div>

<div class="cmsmasters_column one_fourth">
<div class="icon"><img src="<?=$siteUrlMain;?>img/pedagogy.svg" width="40"></div>
<div class="text">
<span>Pedagogy</span>
<b><?=courseTopPicks($rowCrs['id']);?></b>
</div>
</div>

</div>

<div id="learn-press-course-tabs" class="course-tabs crsTabAlign">
<ul class="learn-press-nav-tabs course-nav-tabs">
<li class="course-nav active default"><a href="javascript:void(0);" data-tab="#overview"><?=$disAry['overviewTxt'];?></a> </li>
<li class="course-nav"> <a href="javascript:void(0);" data-tab="#curriculum">Curriculum</a> </li>
<?=(($disAry['isTuitionFees'])?'<li class="course-nav"> <a href="javascript:void(0);" data-tab="#tb2">'.$disAry['tuitionFeesTxt'].'</a> </li>':'');?>
<?=(($disAry['isEntryRequirement'])?'<li class="course-nav"> <a href="javascript:void(0);" data-tab="#tb3">'.$disAry['entryRequirementTxt'].'</a> </li>':'');?>
<?=(($disAry['isScholarshipFund'])?'<li class="course-nav"> <a href="javascript:void(0);" data-tab="#tb4">'.$disAry['scholarshipFundTxt'].'</a> </li>':'');?>
</ul>
<div class="course-tab-panel-overview course-tab-panel active" id="overview">
<div class="course-description" id="learn-press-course-description"><?=$rowCrs['overview'];?></div>
</div>
<div class="course-tab-panel-curriculum course-tab-panel" id="curriculum">
<div class="course-description" id="learn-press-course-description">
<div class="cmsmasters_toggles toggles_mode_accordion">
<?php
$sno=0;
$sqlFAQ = mysqli_query($conn,"SELECT * FROM course_faq where pID='".$rowCrs['id']."' ORDER BY sortOrder ASC");
while($rowFAQ = mysqli_fetch_assoc($sqlFAQ)){
$sno++;
echo '<div class="cmsmasters_toggle_wrap" data-tags="all ">
<div class="cmsmasters_toggle_title"> <span class="cmsmasters_toggle_plus"> <span class="cmsmasters_toggle_plus_hor"></span> <span class="cmsmasters_toggle_plus_vert"></span> </span> <a href="#" class="text-left">'.$sno.'. '.$rowFAQ['faqTitle'].'</a> </div>
<div class="cmsmasters_toggle">
<div class="cmsmasters_toggle_inner">
'.$rowFAQ['faqDesc'].'
</div>
</div>
</div>';
}
?>  
</div>
</div>
</div>
<?php
if($disAry['isTuitionFees']){ echo '<div class="course-tab-panel-tb2 course-tab-panel" id="tb2"><div class="course-description" id="learn-press-course-description">'.$rowCrs['tuitionFees'].'</div></div>'; }
if($disAry['isEntryRequirement']){ echo '<div class="course-tab-panel-tb3 course-tab-panel" id="tb3"><div class="course-description" id="learn-press-course-description">'.$rowCrs['entryRequirement'].'</div></div>'; }
if($disAry['isScholarshipFund']){ echo '<div class="course-tab-panel-tb4 course-tab-panel" id="tb4"><div class="course-description" id="learn-press-course-description">'.$rowCrs['scholarshipFund'].'</div></div>'; }
?>
</div>
<div class="lp-course-buttons text-center">
<button class="lp-button button button-purchase-course" onclick="window.location.href='<?=$siteUrlMain;?>apply?l=<?=$rowCrs['levelID'];?>&c=<?=$rowCrs['id'];?>'"> Apply Now   </button>
</div>
<aside class="share_posts">
<div class="sharethis-inline-share-buttons"></div>
</aside>

</div>
</div>
</div>
<div class="cl"></div>
</div>
</div>
</div>
</div>
<?php include "php/footer.php";?>