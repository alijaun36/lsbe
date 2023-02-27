<?php
include "php/connect-mysql.php";
include "php/functions.php";	
include "php/header.php";
$sqlAO = mysqli_query($conn,"SELECT * FROM apply_online WHERE md5(id)='".$_GET['id']."' AND md5(email)='".$_GET['tkn']."' ");
$rowAO = mysqli_fetch_assoc($sqlAO);
extract($rowAO);
echo headerTopBg(5);
?>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Apply Now</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain;?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <span>Apply Now</span></div>
</div>
</div>
</div>
</div>
</div>
<div class="middle_inner">
<div class="content_wrap fullwidth">
<div class="middle_content entry"></div>
</div>

<div id="cmsmasters_row_9b9a23fc23" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">


<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_1212">

<div id="cmsmasters_column_" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_contact_form">
<div class="cmsmasters-form-builder">
<?php
if(isset($_GET['act']) && $_GET['act']=="success" && $errorMsg==""){
echo '<div class="cmsmasters_notice cmsmasters_notice_success cmsmasters_theme_icon_check " ><div class="notice_icon"></div><div class="notice_content"><p><strong>Success!</strong> Your message has been sent successfully. </p><br /></div></div>';
}
if(isset($errorMsg) && $errorMsg!=""){
echo '<div class="cmsmasters_notice cmsmasters_notice_error" ><div class="notice_content"><p>'.$errorMsg.'</p><br /></div></div>';
}
?>
<div class="applyNowFrm">
<div class="entry-header">
<h4 class="entry-title">Personal Details</h4>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Title <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="titleName" class="form-control" type="text" value="<?=isset($rowAO['titleName'])?$rowAO['titleName']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name <span class="color_2">*</span></label><div class="form_field_wrap"><input name="name" class="form-control" type="text" value="<?=isset($rowAO['name'])?$rowAO['name']:''?>" required></div></div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_name">Date of Birth <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="dob" class="form-control" type="date" value="<?=isset($rowAO['dob'])?$rowAO['dob']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_email">Gender  <span class="color_2">*</span></label>
<div class="form_field_wrap"><input name="gender" class="form-control" type="text" value="<?=isset($rowAO['gender'])?$rowAO['gender']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Email Address<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="email" class="form-control" type="text" value="<?=isset($rowAO['email'])?$rowAO['email']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Nationality<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="nationality" class="form-control" type="text" value="<?=isset($rowAO['nationality'])?$rowAO['nationality']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Country of Residence <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="countryResidence" class="form-control" type="text" value="<?=isset($rowAO['countryResidence'])?$rowAO['countryResidence']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="adderss" class="form-control" type="text" value="<?=isset($rowAO['adderss'])?$rowAO['adderss']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Mobile<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="mobile" class="form-control" type="text" value="<?=isset($rowAO['mobile'])?$rowAO['mobile']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Home Tel</label>
<div class="form_field_wrap">
<input name="homeTel" class="form-control" type="text" value="<?=isset($rowAO['homeTel'])?$rowAO['homeTel']:''?>" required>
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">Course Details</h4>
</div>
<div class="form_info cmsmasters_input one_first"><label for="cmsmasters_name">Study Level </label><div class="form_field_wrap">
<input name="courseLevelID" class="form-control" type="text" value="<?=courseLevelNm($rowAO['courseLevelID']);?>" >
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Course </label><div class="form_field_wrap">
<input name="courseID" class="form-control" type="text" value="<?=strip_tags(courseNm($rowAO['courseID']));?>" ></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">How do you prefer to study with Us? <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="preferStudy" class="form-control" type="text" value="<?=isset($rowAO['preferStudy'])?$rowAO['preferStudy']:''?>" required>
</div></div>
<div class="entry-header">
<h4 class="entry-title">Please provide the details of the person to contact in an Emergency</h4>
</div>
<?php $eiAry = json_decode($rowAO['emergencyInfo'],true); ?>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Name <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgName" class="form-control" type="text" value="<?=isset($eiAry['emgName'])?$eiAry['emgName']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Contact No <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgContactNo" class="form-control" type="text" value="<?=isset($eiAry['emgContactNo'])?$eiAry['emgContactNo']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Email <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgEmail" class="form-control" type="text" value="<?=isset($eiAry['emgEmail'])?$eiAry['emgEmail']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Relationship to student  <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgRelationshipStudent" class="form-control" type="text" value="<?=isset($eiAry['emgRelationshipStudent'])?$eiAry['emgRelationshipStudent']:''?>" required>
</div></div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="emgAddress" class="form-control" type="text" value="<?=isset($eiAry['emgAddress'])?$eiAry['emgAddress']:''?>" required>
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">More information required about tuition fees payments</h4>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Who is responsible for payment of your course fees?<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="responsibleFee" class="form-control" type="text" value="<?=isset($rowAO['responsibleFee'])?$rowAO['responsibleFee']:''?>" required>
</div>
</div>
<div id="responsibleFeeInfo" style="display:<?=($rowAO['responsibleFee']=='Employer')?'block':'none'?>;">
<?php $ociAry = json_decode($rowAO['otherContactInfo'],true); ?>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2"><b>Please provide details of your employer or other contact details</b></label>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Title <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="otherContactTitle" class="form-control" type="text" value="<?=isset($ociAry['otherContactTitle'])?$ociAry['otherContactTitle']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactName" class="form-control" type="text" value="<?=isset($ociAry['otherContactName'])?$ociAry['otherContactName']:''?>" required></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Position  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactPosition" class="form-control" type="text" value="<?=isset($ociAry['otherContactPosition'])?$ociAry['otherContactPosition']:''?>" required></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Email <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactEmail" class="form-control" type="text" value="<?=isset($ociAry['otherContactEmail'])?$ociAry['otherContactEmail']:''?>" required></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Contact Number  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactNo" class="form-control" type="text" value="<?=isset($ociAry['otherContactNo'])?$ociAry['otherContactNo']:''?>" required></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Address  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactAddress" class="form-control" type="text" value="<?=isset($ociAry['otherContactAddress'])?$ociAry['otherContactAddress']:''?>" required></div></div>
</div>
<div class="entry-header">
<h4 class="entry-title">English Language Proficiency </h4>
</div>
<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">Is English your first language ? <span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="isEnglishFirstLanguage" value="Yes" <?=($rowAO['isEnglishFirstLanguage']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="isEnglishFirstLanguage" <?=($rowAO['isEnglishFirstLanguage']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">Have you attended any courses in English language? <span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="haveAttendedCourses" value="Yes" <?=($rowAO['haveAttendedCourses']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="haveAttendedCourses" <?=($rowAO['haveAttendedCourses']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">English Language Proficiency test?<span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="englishLanguageProficiency" class="englishLanguageProficiency" value="Yes" <?=($rowAO['englishLanguageProficiency']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="englishLanguageProficiency" class="englishLanguageProficiency" <?=($rowAO['englishLanguageProficiency']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="one_first">

<div class="one_first" id="englishLanguageProficiencyInfo" style="display:<?=($rowAO['englishLanguageProficiency']=='Yes')?'block':'none'?>;">
<div class="form_info cmsmasters_input one_first"><label for="cmsmasters_name">If Yes, Please give details e.g. name of the course duration results and institute name.</label><div class="form_field_wrap">
<input name="englishLanguageProficiencyInfo" class="form-control" type="text" value="<?=isset($rowAO['englishLanguageProficiencyInfo'])?$rowAO['englishLanguageProficiencyInfo']:''?>" >
</div></div>
</div>
</div>

<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">Do you want to attend an English Language course offered by the LSBE?<span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="attendEnglishLanguage" value="Yes" <?=($rowAO['attendEnglishLanguage']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="attendEnglishLanguage" <?=($rowAO['attendEnglishLanguage']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="entry-header">
<h4 class="entry-title">Education and Academic Qualifications </h4>
</div>
<div class="one_first">
<p>Please note that we may ask proof of all qualification and certificate obtained if they are required for acceptance on a course.</p>
</div>
<div class="form_info cmsmasters_textarea one_first">
<div class="form_field_wrap">
<div class="table-responsive tableFrm">
<table class="table table-bordered table-striped table-condensed mb-none">
<tr>
<th width="30%" align="center">Name of Institute <span>School/Collage/University </span></th>
<th width="40%" align="center">Achieved Degree/Diploma/Certificate <span>MBA/MBBS/BSc/HSSC/SSC</span></th>
<th width="30%" align="center">Duration<span>From(MM/YY) - To (MM/YY)</span></th>
</tr>
<?php
for($i=1;$i<=6;$i++){
echo '<tr>
<td><input type="text" class="form-control" name="nameInstitute[]" value="" /></td>
<td><input type="text" class="form-control" name="achievedDegree[]" value="" /></td>
<td><input type="text" class="form-control" name="duration[]" value="" /></td>
</tr>';
}
?>
</table>
</div>
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">Employment  History (if Any) </h4>
</div>
<div class="form_info cmsmasters_textarea one_first">
<div class="form_field_wrap">
<div class="table-responsive tableFrm">
<table class="table table-bordered table-striped table-condensed mb-none">
<tr>
<th width="25%" align="center">Employer Name </th>
<th width="25%" align="center">Employer Address</th>
<th width="25%" align="center">Job Title </th>
<th width="25%" align="center">Employment Period <span>From (MM/YY) - To (MM/YY)  </span></th>
</tr>
<?php
for($i=1;$i<=3;$i++){
echo '<tr>
<td><input type="text" class="form-control" name="empName[]" value="" /></td>
<td><input type="text" class="form-control" name="empAddress[]" value="" /></td>
<td><input type="text" class="form-control" name="empJobTitle[]" value="" /></td>
<td><input type="text" class="form-control" name="empPeriod[]" value="" /></td>
</tr>';
}
?>
</table>
</div>
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">How did you hear about the LBSE? </h4>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Hear About Us<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="hearAboutUs" class="form-control" type="text" value="<?=isset($rowAO['hearAboutUs'])?$rowAO['hearAboutUs']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">How do you think the course will help your academic plans and/or career ambition?</label>
<div class="form_field_wrap">
<input name="careerAmbition" class="form-control" type="text" value="<?=isset($rowAO['careerAmbition'])?$rowAO['careerAmbition']:''?>" >
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">References </h4>
</div>
<div class="one_first">
<p>As it is our practice to obtain references prior to the interview stage. Please give the name and address of two referees who we may approach and the capacity in which they are known to you. The referees named must be people who can comment authoritatively on you as a person and must include your current or most recent employer, teacher or a person who knows you well.</p>
<b>Reference 1</b>
<?php $rfAry = json_decode($rowAO['referenceInfo'],true); ?>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name </label><div class="form_field_wrap"><input name="refName1" class="form-control" type="text" value="<?=isset($rfAry['refName1'])?$rfAry['refName1']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Email </label><div class="form_field_wrap"><input name="refEmail1" class="form-control" type="text" value="<?=isset($rfAry['refEmail1'])?$rfAry['refEmail1']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Contact No </label><div class="form_field_wrap"><input name="refContactNo1" class="form-control" type="text" value="<?=isset($rfAry['refContactNo1'])?$rfAry['refContactNo1']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Relationship (i.e employer, teacher, family) </label><div class="form_field_wrap"><input name="refRelationship1" class="form-control" type="text" value="<?=isset($rfAry['refRelationship1'])?$rfAry['refRelationship1']:''?>"></div></div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address</label>
<div class="form_field_wrap"><input name="refAddress1" class="form-control" type="text" value="<?=isset($rowAO['refAddress1'])?$rowAO['refAddress1']:''?>"></div></div>

<div class="one_first">
<b>Reference 2</b>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name </label><div class="form_field_wrap"><input name="refName2" class="form-control" type="text" value="<?=isset($rowAO['refName2'])?$rowAO['refName2']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Email </label><div class="form_field_wrap"><input name="refEmail2" class="form-control" type="text" value="<?=isset($rowAO['refEmail2'])?$rowAO['refEmail2']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Contact No </label><div class="form_field_wrap"><input name="refContactNo2" class="form-control" type="text" value="<?=isset($rowAO['refContactNo2'])?$rowAO['refContactNo2']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Relationship (i.e employer, teacher, family) </label><div class="form_field_wrap"><input name="refRelationship2" class="form-control" type="text" value="<?=isset($rowAO['refRelationship2'])?$rowAO['refRelationship2']:''?>"></div></div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address</label>
<div class="form_field_wrap"><input name="refAddress2" class="form-control" type="text" value="<?=isset($rowAO['refAddress2'])?$rowAO['refAddress2']:''?>"></div></div>

 
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
</div>

<br />&nbsp;
<div class="cl"></div>
</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){  
jQuery(".englishLanguageProficiency").click(function(){ if(jQuery(this).val()=="Yes"){ jQuery("#englishLanguageProficiencyInfo").show('1000'); }else{ jQuery("#englishLanguageProficiencyInfo").hide('1000'); } }); 
});
</script>
<?php include "php/footer.php";?>