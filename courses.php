<?php include "php/connect-mysql.php"; include "php/functions.php"; include "php/header.php"; echo headerTopBg(3); ?>
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
<h1 class="entry-title">Courses</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain;?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <span>Courses</span></div>
</div>
</div>
</div>
</div>
</div>
<div class="middle_inner courses">
<div id="cmsmasters_row_5gvkg7ygcz" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin" >

<div id="cmsmasters_column_" class="cmsmasters_column one_fourth" >
<div class="cmsmasters_column_inner">
<div class="cmsmasters_sidebar sidebar_layout_11">
<form action="" method="get" id="filterFrm" >
<aside id="categories-2" class="widget widget_categories cmsmasters-form-builder">
<h3 class="widgettitle">Pedagogy</h3>
<div class="cmsmasters_checkboxes">
<?php
$sqlCTP = mysqli_query($conn,"SELECT * FROM course_top_picks ORDER BY topPicks DESC");
while($rowCTP = mysqli_fetch_assoc($sqlCTP)){ 
echo '<div class="check_parent"> <input type="checkbox" name="p[]" id="p'.$rowCTP['id'].'" '.((@in_array($rowCTP['id'],$_GET['p']))?'checked="checked"':'').' value="'.$rowCTP['id'].'"> <label for="p'.$rowCTP['id'].'">'.$rowCTP['topPicks'].'</label> </div><div class="cl"></div>';
}
?>
</div>
<div class="cl"></div>
<h3 class="widgettitle">Study Level</h3>
<div class="cmsmasters_checkboxes">
<?php
$sqlCL = mysqli_query($conn,"SELECT cl.* FROM course_level as cl,courses as c WHERE c.levelID=cl.id group by cl.id ORDER BY cl.sortOrder ASC");
while($rowCL = mysqli_fetch_assoc($sqlCL)){ 
echo '<div class="check_parent"> <input type="checkbox" name="cl[]" id="cl'.$rowCL['id'].'" '.((@in_array($rowCL['id'],$_GET['cl']))?'checked="checked"':'').' value="'.$rowCL['id'].'"> <label for="cl'.$rowCL['id'].'">'.$rowCL['level'].'</label> </div><div class="cl"></div>';
}
?>
</div>
<div class="cl"></div>
<h3 class="widgettitle">Subjects</h3>
<div class="cmsmasters_checkboxes">
<?php
$sqlCS = mysqli_query($conn,"SELECT cs.* FROM course_subjects AS cs,course_subject_ids as csi WHERE cs.id=csi.subjectID GROUP By csi.subjectID ORDER BY cs.subjectNm ASC");
while($rowCS = mysqli_fetch_assoc($sqlCS)){ 
echo '<div class="check_parent"> <input type="checkbox" name="s[]" id="s'.$rowCS['id'].'" value="'.$rowCS['id'].'" '.((@in_array($rowCS['id'],$_GET['s']))?'checked="checked"':'').' > <label for="s'.$rowCS['id'].'">'.$rowCS['subjectNm'].'</label> </div><div class="cl"></div>';
}
?>
</div>
<?php
/*<div class="cl"></div>
<h3 class="widgettitle">Awarding Organisation</h3>
<div class="cmsmasters_checkboxes">
$sqlCO = mysqli_query($conn,"SELECT co.* FROM course_organisation AS co,course_organisation_ids as coi WHERE coi.organisationID=co.id GROUP By coi.organisationID ORDER BY co.organisationTitle ASC");
while($rowCO = mysqli_fetch_assoc($sqlCO)){ 
echo '<div class="check_parent"> <input type="checkbox" name="co[]" id="co'.$rowCO['id'].'" '.((@in_array($rowCO['id'],$_GET['co']))?'checked="checked"':'').' value="'.$rowCO['id'].'"> <label for="co'.$rowCO['id'].'">'.$rowCO['organisationTitle'].'</label> </div><div class="cl"></div>';
}
</div>
<div class="cl"></div>
<h3 class="widgettitle">Duration</h3>
<div class="cmsmasters_checkboxes">
<?php
$sqlDr = mysqli_query($conn,"SELECT cd.* FROM course_duration as cd,courses AS c WHERE cd.id=c.durationID GROUP BY c.durationID ORDER BY cd.id ASC");
while($rowDr = mysqli_fetch_assoc($sqlDr)){ 
echo '<div class="check_parent"> <input type="checkbox" name="d[]" id="d'.$rowDr['id'].'" '.((@in_array($rowDr['id'],$_GET['d']))?'checked="checked"':'').' value="'.$rowDr['id'].'"> <label for="d'.$rowDr['id'].'">'.$rowDr['duration'].'</label> </div><div class="cl"></div>';
}
?>
</div>
*/
?>


<div class="cl"></div>
<p class="resetBtn"><a href="<?=$siteUrlMain?>courses">Reset Filter</a></p>
<div class="cl"></div>
</div>
</aside>
</form>
<script type="text/javascript">jQuery(document).ready(function(){ jQuery("#filterFrm").on("change", "input:checkbox", function(){ jQuery("#filterFrm").submit(); }); }); </script>
<div class="cl"></div>
</div>
</div>

<div id="cmsmasters_column_" class="cmsmasters_column three_fourth courseList">
<div class="cmsmasters_column_inner">

<div id="cmsmasters_column_5n16g5wlia" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_learnpress_shortcode_8fe2g3byil" class="cmsmasters_learnpress_shortcode cmsmasters_3">
<?php
$page_name="courses.php"; 
$pgStrg="";
if(isset($_GET["page"]))
$page = (int)$_GET["page"];
else
$page = 1;
$setLimit = 6;
$pageLimit = ($page * $setLimit) - $setLimit;

$filteredby = "";
if(isset($_GET['d']) && $_GET['d']!=""){
$filteredby .=" AND c.durationID IN (".@implode(",",$_GET['d']).") ";
foreach($_GET['d'] as $v){ $pgStrg.= '&amp;d[]='.urlencode($v); }
}
if(isset($_GET['cl']) && $_GET['cl']!=""){
$filteredby .=" AND c.levelID IN (".@implode(",",$_GET['cl']).") ";
foreach($_GET['cl'] as $v){ $pgStrg.= '&amp;cl[]='.urlencode($v); }
}

$tpAry = $oAry = $sAry = ""; $flAry = array();
$isMultiSrch = 0;
$fltHavg = "";
if(isset($_GET['p']) && $_GET['p']!=""){
$isMultiSrch++;
$flAry[] =" ctpi.topPickID IN (".@implode(",",$_GET['p']).") ";
foreach($_GET['p'] as $v){ $pgStrg.= '&amp;p[]='.urlencode($v); }
}
if(isset($_GET['s']) && $_GET['s']!=""){
$isMultiSrch++;
$flAry[] = " csi.subjectID IN (".@implode(",",$_GET['s']).") ";
foreach($_GET['s'] as $v){ $pgStrg.= '&amp;s[]='.urlencode($v); }
}
if(isset($_GET['co']) && $_GET['co']!=""){
$isMultiSrch++;
$flAry[] =" coi.organisationID IN (".@implode(",",$_GET['co']).") ";
foreach($_GET['co'] as $v){ $pgStrg.= '&amp;co[]='.urlencode($v); }
}

if($isMultiSrch>0){
$filteredby.=" AND  (".@implode("AND",$flAry).")" ;
}

$sql = "SELECT c.id,c.thumbImg,c.title,cd.duration FROM courses AS c,course_duration as cd,course_top_picks_ids as ctpi,course_subject_ids as csi,course_organisation_ids as coi WHERE c.status='0' AND coi.coursID=c.id AND csi.coursID=c.id AND ctpi.coursID=c.id AND cd.id=c.durationID ".$filteredby." GROUP by c.id ORDER BY c.sortOrder ASC limit $pageLimit, $setLimit";
$pgSql = "SELECT COUNT(DISTINCT c.id) as totalCount FROM courses AS c,course_duration as cd,course_top_picks_ids as ctpi,course_subject_ids as csi,course_organisation_ids as coi WHERE c.status='0' AND coi.coursID=c.id AND csi.coursID=c.id AND ctpi.coursID=c.id AND cd.id=c.durationID ".$filteredby." ORDER BY c.sortOrder ASC";

$query = mysqli_query($conn,$sql);
$numRow = mysqli_num_rows($query);
if($numRow>0){

$sno=$pageLimit;
echo ' <div class="tribe-events-loop">';
while($rowCrs=mysqli_fetch_assoc($query)){ 
echo '<article id="lpr_course_post-15528" class="lpr_course_post">
<div class="cmsmasters_course_image_wrap">
<figure class="cmsmasters_img_rollover_wrap preloader"><img src="'.$siteUrlMain."php/timthumb.php?src=".$siteUrlMain."img/".(($rowCrs['thumbImg']!="")?$rowCrs['thumbImg']:'noImg.jpg').'&h=140&w=192&zc=1" class="full-width wp-post-image" alt="'.$rowCrs['title'].'">
<div class="cmsmasters_img_rollover"><a href="'.courseURL($rowCrs['id']).'" title="'.$rowCrs['title'].'" class="cmsmasters_open_post_link button">Read more</a></div>
</figure>
<div class="cmsmasters_course_price"><span class="price">'.courseTopPicks($rowCrs['id']).'</span></div>
</div>
<div class="lpr_course_inner">
<header class="entry-header lpr_course_header">
<h4 class="entry-title lpr_course_title"><a href="'.courseURL($rowCrs['id']).'">'.$rowCrs['title'].'</a></h4>
</header>
<div class="entry-meta cmsmasters_cource_cat">
<span class="info">'.$rowCrs['duration'].' | '.courseSubjects($rowCrs['id']).'</span>
<h6>Awarded by:</h6>
<span class="info">'.courseOrgDI($rowCrs['id'],'0').'</span>
<h6>Delivered by:</h6>
<span class="info">'.courseOrgDI($rowCrs['id'],'1').'</span>
</div>
</div>
</article>';
}
echo '</div>
<div class="cmsmasters_column one_first pagination-area ">'.tablePaging($pgSql,$setLimit,$page,'a=j'.$pgStrg).'</div>';
}else{
echo '<h3 align="center">No data found...</h3>';
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
<div class="cl"></div>
</div>
</div>
</div>
<?php include "php/footer.php";?>