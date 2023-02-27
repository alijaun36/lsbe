<?php
include "php/connect-mysql.php";
include "php/functions.php";
if(isset($_POST['action']) && $_POST['action']=="Submit"){
$errorMsg = "";
if($_POST['courseLevelID']=="" || $_POST['courseID']=="" || $_POST['preferStudy']=="" || $_POST['title']=="" || $_POST['name']=="" || $_POST['dob']=="" || $_POST['gender']=="" || $_POST['email']=="" || $_POST['nationality']=="" || $_POST['countryResidence']=="" || $_POST['adderss']=="" || 
$_POST['mobile']=="" || $_POST['emgName']=="" || $_POST['emgContactNo']=="" || $_POST['emgRelationshipStudent']=="" || $_POST['emgAddress']=="" || $_POST['responsibleFee']=="" || $_POST['hearAboutUs']=="" || $_POST['emgName']=="" || $_POST['captcha']==""){ $errorMsg = "1"; }
if($errorMsg!=""){ $errorMsg = "Please enter all fields."; }
if($errorMsg==""){
if(checkTextareaField($_POST['courseLevelID'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select study level.<br />";  }
if(checkTextareaField($_POST['courseID'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select course.<br />";  }
if(checkTextareaField($_POST['preferStudy'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select prefer study.<br />";  }
if(checkTextareaField($_POST['title'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select name title.<br />";  }
if(checkTextareaField($_POST['name'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your name.<br />";  }
if(checkTextareaField($_POST['dob'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter DOB.<br />";  }
if(checkTextareaField($_POST['gender'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select your gender.<br />";  }
if(checkTextareaField($_POST['email'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your email address.<br />";  }
if(checkTextareaField($_POST['nationality'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your nationality.<br />";  }
if(checkTextareaField($_POST['countryResidence'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your country residence.<br />";  }
if(checkTextareaField($_POST['adderss'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter adderss.<br />";  }
if(checkTextareaField($_POST['mobile'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter mobile.<br />";  }
if(checkTextareaField($_POST['emgName'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter emergency name.<br />";  }
if(checkTextareaField($_POST['emgContactNo'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter emergency contact No.<br />";  }
if(checkTextareaField($_POST['emgEmail'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter emergency email.<br />";  }
if(checkTextareaField($_POST['emgRelationshipStudent'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter emergency relationship.<br />";  }
if(checkTextareaField($_POST['emgAddress'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter emergency address.<br />";  }
if(checkTextareaField($_POST['responsibleFee'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select responsible Fee.<br />";  }
if($_POST['responsibleFee']=='Employer'){
if(checkTextareaField($_POST['otherContactTitle'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter other name title.<br />";  }
if(checkTextareaField($_POST['otherContactName'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter other contact name.<br />";  }
if(checkTextareaField($_POST['otherContactPosition'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter other contact position.<br />";  }
if(checkTextareaField($_POST['otherContactEmail'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter other contact email.<br />";  }
if(checkTextareaField($_POST['otherContactNo'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter other contact no.<br />";  }
if(checkTextareaField($_POST['otherContactAddress'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter other address.<br />";  }
}
if(checkTextareaField($_POST['hearAboutUs'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please select Hear About Us.<br />";  }

if(checkNumber($_POST['captcha'])==false){ $errorMsg.= "Please enter correct captcha";  }
}
if($errorMsg=="" && $_SESSION["codeTxt"]!=$_POST["captcha"]){
$errorMsg= '<strong>Error!</strong>&nbsp;Wrong Code Entered.';
}
if($errorMsg==""){

$emergencyStg = array("emgName"=>$_POST['emgName'],"emgContactNo"=>$_POST['emgContactNo'],"emgEmail"=>$_POST['emgEmail'],"emgRelationshipStudent"=>$_POST['emgRelationshipStudent'],"emgAddress"=>$_POST['emgAddress']);
$otherContactInfo = array("otherContactTitle"=>$_POST['otherContactTitle'],"otherContactName"=>$_POST['otherContactName'],"otherContactPosition"=>$_POST['otherContactPosition'],"otherContactEmail"=>$_POST['otherContactEmail'],"otherContactNo"=>$_POST['otherContactNo'],"otherContactAddress"=>$_POST['otherContactAddress']);
$referenceStg = array("refName1"=>$_POST['refName1'],"refEmail1"=>$_POST['refEmail1'],"refContactNo1"=>$_POST['refContactNo1'],"refRelationship1"=>$_POST['refRelationship1'],"refAddress1"=>$_POST['refAddress1'],"refName2"=>$_POST['refName2'],"refEmail2"=>$_POST['refEmail2'],"refContactNo2"=>$_POST['refContactNo2'],"refRelationship2"=>$_POST['refRelationship2'],"refAddress2"=>$_POST['refAddress2']);
mysqli_query($conn,"INSERT INTO apply_online (courseLevelID,courseID,userID,preferStudy,titleName,name,dob,gender,email,nationality,countryResidence,adderss,mobile,homeTel,emergencyInfo,responsibleFee,otherContactInfo,isEnglishFirstLanguage,haveAttendedCourses,englishLanguageProficiency,englishLanguageProficiencyInfo,attendEnglishLanguage,hearAboutUs,careerAmbition,referenceInfo,createdDate)  VALUES  
('".mysqli_real_escape_string($conn,$_POST['courseLevelID'])."','".mysqli_real_escape_string($conn,$_POST['courseID'])."','1','".mysqli_real_escape_string($conn,$_POST['preferStudy'])."','".mysqli_real_escape_string($conn,$_POST['title'])."','".mysqli_real_escape_string($conn,$_POST['name'])."','".mysqli_real_escape_string($conn,$_POST['dob'])."','".mysqli_real_escape_string($conn,$_POST['gender'])."','".mysqli_real_escape_string($conn,$_POST['email'])."','".mysqli_real_escape_string($conn,$_POST['nationality'])."','".mysqli_real_escape_string($conn,$_POST['countryResidence'])."','".mysqli_real_escape_string($conn,$_POST['adderss'])."','".mysqli_real_escape_string($conn,$_POST['mobile'])."','".mysqli_real_escape_string($conn,$_POST['homeTel'])."','".mysqli_real_escape_string($conn,json_encode($emergencyStg))."','".mysqli_real_escape_string($conn,$_POST['responsibleFee'])."','".mysqli_real_escape_string($conn,json_encode($otherContactInfo))."',
'".mysqli_real_escape_string($conn,$_POST['haveAttendedCourses'])."','".mysqli_real_escape_string($conn,$_POST['haveAttendedCourses'])."','".mysqli_real_escape_string($conn,$_POST['englishLanguageProficiency'])."','".mysqli_real_escape_string($conn,$_POST['englishLanguageProficiencyInfo'])."','".mysqli_real_escape_string($conn,$_POST['attendEnglishLanguage'])."','".mysqli_real_escape_string($conn,$_POST['hearAboutUs'])."','".mysqli_real_escape_string($conn,$_POST['careerAmbition'])."','".mysqli_real_escape_string($conn,json_encode($referenceStg))."','".currDateTimeGmt()."')"); 
$aoID = mysqli_insert_id($conn);

$nameInstitute = $_POST['nameInstitute'];
$achievedDegree = $_POST['achievedDegree'];
$duration = $_POST['duration'];
foreach($nameInstitute as $key=>$val){
if($val!=""){ mysqli_query($conn,"INSERT INTO apply_online_institute (applyOnlineID,nameInstitute,achievedDegree,duration) VALUES ('".mysqli_real_escape_string($conn,$aoID)."','".mysqli_real_escape_string($conn,$val)."','".mysqli_real_escape_string($conn,$achievedDegree[$key])."','".mysqli_real_escape_string($conn,$duration[$key])."')"); }
}
$empName = $_POST['empName'];
$empAddress = $_POST['empAddress'];
$empJobTitle = $_POST['empJobTitle'];
$empPeriod = $_POST['empPeriod'];
foreach($empName as $key=>$val){
if($val!=""){ mysqli_query($conn,"INSERT INTO apply_online_employer (applyOnlineID,empName,empAddress,empJobTitle,empPeriod) VALUES ('".mysqli_real_escape_string($conn,$aoID)."','".mysqli_real_escape_string($conn,$val)."','".mysqli_real_escape_string($conn,$empAddress[$key])."','".mysqli_real_escape_string($conn,$empJobTitle[$key])."','".mysqli_real_escape_string($conn,$empPeriod[$key])."')"); }
}

$to = $domainEmail2;
$subject = $_POST['name']." has submitted Apply Now Form - ".$siteName;	
$message = '<table width="100%" cellspacing="0" cellpadding="10" border="0" bgcolor="#FFFFFF" style="font-family:arial,sans-serif;font-size:12px;border:1px solid #000">
<tbody>
<tr align="center">
<td valign="top" style="padding:7px 0;border-bottom: 2px solid #e6222c;background:#222730;"><a target="_blank" href="'.$siteUrlMain.'"><img border="0" alt="'.$siteName.'" src="'.$siteUrlMain.'img/'.$logoImg.'" height="90"></a></td>
</tr>
<tr>
<td valign="top"><h1 style="font-size:22px;font-weight:normal;line-height:22px;margin:0px 0px 11px">Student Details </h1>
<hr />
<table style="font-size:12px;" cellpadding="5">
<tbody>
<tr><td width="20%"><b>Full Name </b></td><td width="80%">'.$_POST['title'].' '.$_POST['name'].'</td></tr>
<tr><td><b>Date of birth</b></td><td>'.$_POST['dob'].'</td></tr>
<tr><td><b>Gender</b></td><td>'.$_POST['gender'].'</td></tr>
<tr><td><b>Email Address</b></td><td>'.$_POST['email'].'</td></tr>
<tr><td><b>Nationality</b></td><td>'.$_POST['nationality'].'</td></tr>
<tr><td><b>Country Residence</b></td><td>'.$_POST['countryResidence'].'</td></tr>
<tr><td><b>Address</b></td><td>'.$_POST['adderss'].'</td></tr>
<tr><td><b>Mobile Number</b></td><td>'.$_POST['mobile'].'</td></tr>
<tr><td><b>Home Tel</b></td><td>'.$_POST['homeTel'].'</td></tr>
<tr><td><b>Study Level</b></td><td>'.courseLevelNm($_POST['courseLevelID']).'</td></tr>
<tr><td><b>Course</b></td><td>'.courseNm($_POST['courseID']).'</td></tr>
<tr><td><b>Prefer Study</b></td><td>'.$_POST['preferStudy'].'</td></tr>
<tr><td><b>IP Address</b></td><td>'.$_SERVER['REMOTE_ADDR'].'</td></tr>
<tr><td colspan="2"><a href="'.$siteUrlMain.'apply-view?id='.md5($aoID).'&tkn='.md5($_POST['email']).'" style="padding:7px 10px;border:solid #999 1px;border-radius:5px;background:#1bbc9b;margin:10px;float:left;color:#fff;text-decoration:none;" >View More Details</a></td></tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td valign="top">
<p style="font-size:11px;color:#999999;text-align:center;width:100%;float:left;" >Copyright &copy; '.date('Y').' '.$domainName.' All Rights Reserved.</p>
</td>
</tr>
</tbody>
</table>';
echo $message;
exit;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers2.= 'From: '.$_POST['name'].' <noReply@lsbe.co.uk> ' . "\r\n" .
'Reply-To: <'.$_POST['email'].'>' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($to,$subject,$message,$headers); 
$to2 = $_POST['email'];
$subject2 = "Auto reply from LSBE";	
$message2 = '<a target="_blank" href="'.$siteUrlMain.'"><img border="0" style="background:#222730;margin-bottom:10px" alt="'.$siteName.'" src="'.$siteUrlMain.'img/'.$logoImg.'" height="90" ></a><br><br>
Dear '.$_POST['name'].',<br><br>
Greetings from London School of Business & Entrepreneurship!<br><br>
Thank you for showing interest in LSBE. Our London School of Business & Entrepreneurship team will get in touch with you within next 24 hours.<br><br>
Please call '.$contactNumber.' if you urgently want to contact our team.<br><br>
<p style="font-size:11px;color:#999999;">
Sincerely,<br />
LSBE Support Team<br />
Email: '.$adminEmail.'<br />
Mob: '.$contactNumber.'<br />
Web: '.$domainName.'<br /></p><hr />
<p style="font-size:11px;color:#999999;text-align:center;width:100%;float:left;" >Copyright &copy; '.date('Y').' '.$domainName.' All Rights Reserved.</p>';
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers2 .= 'From: '.$siteName.'<noReply@lsbe.co.uk>' . "\r\n";
@mail($to2,$subject2,$message2,$headers2);
header("location: ".$siteUrlMain."apply?act=success#msg");
}
}	
include "php/header.php";
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
<form action="" method="post" class="applyNowFrm">
<div class="entry-header">
<h4 class="entry-title">Personal Details</h4>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Title <span class="color_2">*</span></label><div class="form_field_wrap">
<select name="title" class="form-control" required>
<option value="" ></option>
<option value="Mr" <?=($_POST['title']=="Mr")?'selected="selected"':''?> >Mr</option>
<option value="Mrs" <?=($_POST['title']=="Mrs")?'selected="selected"':''?> >Mrs</option>
<option value="Miss" <?=($_POST['title']=="Miss")?'selected="selected"':''?> >Miss</option>
<option value="Ms" <?=($_POST['title']=="Ms")?'selected="selected"':''?> >Ms</option>
</select></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name <span class="color_2">*</span></label><div class="form_field_wrap"><input name="name" class="form-control" type="text" value="<?=isset($_POST['name'])?$_POST['name']:''?>" required></div></div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_name">Date of Birth <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="dob" class="form-control" type="date" value="<?=isset($_POST['dob'])?$_POST['dob']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_email">Gender  <span class="color_2">*</span></label>
<div class="form_field_wrap">
<select name="gender" class="form-control" required>
<option value="" ></option>
<option value="Male" <?=($_POST['gender']=="Male")?'selected="selected"':''?> >Male</option>
<option value="Female" <?=($_POST['gender']=="Female")?'selected="selected"':''?> >Female</option>
</select>
</div>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Email Address<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="email" class="form-control" type="text" value="<?=isset($_POST['email'])?$_POST['email']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Nationality<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="nationality" class="form-control" type="text" value="<?=isset($_POST['nationality'])?$_POST['nationality']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Country of Residence <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="countryResidence" class="form-control" type="text" value="<?=isset($_POST['countryResidence'])?$_POST['countryResidence']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="adderss" class="form-control" type="text" value="<?=isset($_POST['adderss'])?$_POST['adderss']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Mobile<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="mobile" class="form-control" type="text" value="<?=isset($_POST['mobile'])?$_POST['mobile']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_half">
<label for="cmsmasters_message_2">Home Tel </label>
<div class="form_field_wrap">
<input name="homeTel" class="form-control" type="text" value="<?=isset($_POST['homeTel'])?$_POST['homeTel']:''?>" >
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">Course Details</h4>
</div>
<div class="form_info cmsmasters_input one_first"><label for="cmsmasters_name">Study Level </label><div class="form_field_wrap">
<select class="selectpicker form-control" data-selected-text-format="values" name="courseLevelID" id="courseLevelID" data-live-search="true" data-live-search-placeholder="Search" required>
<option value="">- Select -</option>
<?php
$sqlCL = mysqli_query($conn,"SELECT * FROM course_level ORDER BY sortOrder ASC");
while($rowsCL = mysqli_fetch_assoc($sqlCL)){						
echo '<option value="'.$rowsCL['id'].'" '.((($rowsCL['id']==$_POST['courseLevelID']) || ($rowsCL['id']==$_GET['l']))?'selected="selected"':'').' >'.$rowsCL['level'].'</option>';
}
?>
</select>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Course </label><div class="form_field_wrap">
<select class="selectpicker form-control" data-selected-text-format="values" name="courseID" id="courseID" data-live-search="true" data-live-search-placeholder="Search" required>
<option value="">- Select -</option>
<?php
if((isset($_POST['courseLevelID']) && $_POST['courseLevelID']!="") || (isset($_GET['l']) && $_GET['l']!="")){
$lvlID = (isset($_POST['courseLevelID']) && $_POST['courseLevelID']!="")?$_POST['courseLevelID']:$_GET['l'];	
$sqlCrs = mysqli_query($conn,"SELECT id,title FROM courses WHERE levelID='".$lvlID."' ORDER BY title ASC");
while($rowsCrs = mysqli_fetch_assoc($sqlCrs)){						
echo '<option value="'.$rowsCrs['id'].'" '.((($rowsCrs['id']==$_POST['courseID']) || ($rowsCrs['id']==$_GET['c']) )?'selected="selected"':'').' >'.$rowsCrs['title'].'</option>';
}
}
?>
</select>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">How do you prefer to study with Us? <span class="color_2">*</span></label><div class="form_field_wrap">
<select name="preferStudy" class="form-control" required> 
<option value="" ></option>
<option value="Online" <?=($_POST['preferStudy']=="Online")?'selected="selected"':''?> >Online</option>
<option value="On Campus" <?=($_POST['preferStudy']=="On Campus")?'selected="selected"':''?> >On Campus</option>
<option value="Blended" <?=($_POST['preferStudy']=="Blended")?'selected="selected"':''?> >Blended</option>
</select>
</div></div>
<div class="entry-header">
<h4 class="entry-title">Please provide the details of the person to contact in an Emergency</h4>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Name <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgName" class="form-control" type="text" value="<?=isset($_POST['emgName'])?$_POST['emgName']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Contact No <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgContactNo" class="form-control" type="text" value="<?=isset($_POST['emgContactNo'])?$_POST['emgContactNo']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Email <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgEmail" class="form-control" type="text" value="<?=isset($_POST['emgEmail'])?$_POST['emgEmail']:''?>" required>
</div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Relationship to student  <span class="color_2">*</span></label><div class="form_field_wrap">
<input name="emgRelationshipStudent" class="form-control" type="text" value="<?=isset($_POST['emgRelationshipStudent'])?$_POST['emgRelationshipStudent']:''?>" required>
</div></div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address<span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="emgAddress" class="form-control" type="text" value="<?=isset($_POST['emgAddress'])?$_POST['emgAddress']:''?>" required>
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">More information required about tuition fees payments</h4>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Who is responsible for payment of your course fees?<span class="color_2">*</span></label>
<div class="form_field_wrap">
<select name="responsibleFee" class="form-control responsibleFee" required>
<option value="" ></option>
<option value="Self" <?=($_POST['responsibleFee']=="Self")?'selected="selected"':''?> >Self</option>
<option value="Study loan" <?=($_POST['responsibleFee']=="Study loan")?'selected="selected"':''?> >Study loan</option>
<option value="Employer" <?=($_POST['responsibleFee']=="Employer")?'selected="selected"':''?> >Employer</option>
<option value="Parents" <?=($_POST['responsibleFee']=="Parents")?'selected="selected"':''?> >Parents</option>
<option value="Others" <?=($_POST['responsibleFee']=="Others")?'selected="selected"':''?> >Others</option>
</select>
</div>
</div>
<div id="responsibleFeeInfo" style="display:<?=($_POST['responsibleFee']=='Employer')?'block':'none'?>;">
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2"><b>Please provide details of your employer or other contact details</b></label>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_name">Title <span class="color_2">*</span></label><div class="form_field_wrap">
<select name="otherContactTitle" class="form-control" >
<option value="" ></option>
<option value="Mr" <?=($_POST['otherContactTitle']=="Mr")?'selected="selected"':''?> >Mr</option>
<option value="Mrs" <?=($_POST['otherContactTitle']=="Mrs")?'selected="selected"':''?> >Mrs</option>
<option value="Miss" <?=($_POST['otherContactTitle']=="Miss")?'selected="selected"':''?> >Miss</option>
<option value="Ms" <?=($_POST['otherContactTitle']=="Ms")?'selected="selected"':''?> >Ms</option>
</select></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactName" class="form-control" type="text" value="<?=isset($_POST['otherContactName'])?$_POST['otherContactName']:''?>" ></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Position  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactPosition" class="form-control" type="text" value="<?=isset($_POST['otherContactPosition'])?$_POST['otherContactPosition']:''?>" ></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Email <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactEmail" class="form-control" type="text" value="<?=isset($_POST['otherContactEmail'])?$_POST['otherContactEmail']:''?>" ></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Contact Number  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactNo" class="form-control" type="text" value="<?=isset($_POST['otherContactNo'])?$_POST['otherContactNo']:''?>" ></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Address  <span class="color_2">*</span></label><div class="form_field_wrap"><input name="otherContactAddress" class="form-control" type="text" value="<?=isset($_POST['otherContactAddress'])?$_POST['otherContactAddress']:''?>" ></div></div>
</div>
<div class="entry-header">
<h4 class="entry-title">English Language Proficiency </h4>
</div>
<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">Is English your first language ? <span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="isEnglishFirstLanguage" value="Yes" <?=($_POST['isEnglishFirstLanguage']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="isEnglishFirstLanguage" <?=($_POST['isEnglishFirstLanguage']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">Have you attended any courses in English language? <span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="haveAttendedCourses" value="Yes" <?=($_POST['haveAttendedCourses']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="haveAttendedCourses" <?=($_POST['haveAttendedCourses']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">English Language Proficiency test?<span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="englishLanguageProficiency" class="englishLanguageProficiency" value="Yes" <?=($_POST['englishLanguageProficiency']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="englishLanguageProficiency" class="englishLanguageProficiency" <?=($_POST['englishLanguageProficiency']=='No')?'checked="checked"':''?> value="No" required > No 
</div></div>
</div>
<div class="one_first">

<div class="one_first" id="englishLanguageProficiencyInfo" style="display:<?=($_POST['englishLanguageProficiency']=='Yes')?'block':'none'?>;">
<div class="form_info cmsmasters_input one_first"><label for="cmsmasters_name">If Yes, Please give details e.g. name of the course duration results and institute name.</label><div class="form_field_wrap">
<input name="englishLanguageProficiencyInfo" class="form-control" type="text" value="<?=isset($_POST['englishLanguageProficiencyInfo'])?$_POST['englishLanguageProficiencyInfo']:''?>" >
</div></div>
</div>
</div>

<div class="one_first">
<div class="form_info cmsmasters_input three_fourth"><label for="cmsmasters_email">Do you want to attend an English Language course offered by the LSBE?<span class="color_2">*</span></label></div>
<div class="form_info cmsmasters_input one_fourth"><div class="form_field_wrap">
<input type="radio" name="attendEnglishLanguage" value="Yes" <?=($_POST['attendEnglishLanguage']=='Yes')?'checked="checked"':''?> required > Yes 
<input type="radio" name="attendEnglishLanguage" <?=($_POST['attendEnglishLanguage']=='No')?'checked="checked"':''?> value="No" required > No 
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
<script type="text/javascript">
jQuery(document).ready(function(){ jQuery("#courseLevelID").change(function(){ jQuery.ajax({url:"courseAjx.php?act=crs&id=" + jQuery(this).val(),type: "GET",success: function(data){ var x = data;var optn=x.split('~~'); var bb=''; bb+="<option value=''>- Select Course -</option>"; for(i=0;i<=optn.length-2;i++) { var optn2 = optn[i]; var hh=optn2.split('||'); bb+="<option value='"+hh[0]+"'>"+hh[1]+"</option>"; } jQuery('#courseID').html(bb); } }); });}); 
</script>
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
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">How do you think the course will help your academic plans and/or career ambition?</label>
<div class="form_field_wrap">
<input name="careerAmbition" class="form-control" type="text" value="<?=isset($_POST['careerAmbition'])?$_POST['careerAmbition']:''?>" >
</div>
</div>

<div class="entry-header">
<h4 class="entry-title">How did you hear about us? </h4>
</div>
<div class="form_info cmsmasters_textarea one_first">
<div class="form_field_wrap">
<?php
$hearAbtAry = array("Social Media","Linkedin","Online Group","Facebook","WhatsApp Marketing","SMS/Text Message","Email Marketing","Friend or Relative","Open Days","Website","Education Agent","Educational Exhibition","Other Sources");
?>
<select name="hearAboutUs" class="form-control" required>
<option value="" ></option>
<?php
foreach($hearAbtAry as $hearAbt){
echo '<option value="'.$hearAbt.'" '.(($_POST['hearAboutUs']==$hearAbt)?'selected="selected"':'').' >'.$hearAbt.'</option>';
}
?>
</select>
</div>
</div>
<div class="entry-header">
<h4 class="entry-title">References </h4>
</div>
<div class="one_first">
<p>As it is our practice to obtain references prior to the interview stage. Please give the name and address of two referees who we may approach and the capacity in which they are known to you. The referees named must be people who can comment authoritatively on you as a person and must include your current or most recent employer, teacher or a person who knows you well.</p>
<b>Reference 1</b>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name </label><div class="form_field_wrap"><input name="refName1" class="form-control" type="text" value="<?=isset($_POST['refName1'])?$_POST['refName1']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Email </label><div class="form_field_wrap"><input name="refEmail1" class="form-control" type="text" value="<?=isset($_POST['refEmail1'])?$_POST['refEmail1']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Contact No </label><div class="form_field_wrap"><input name="refContactNo1" class="form-control" type="text" value="<?=isset($_POST['refContactNo1'])?$_POST['refContactNo1']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Relationship (i.e employer, teacher, family) </label><div class="form_field_wrap"><input name="refRelationship1" class="form-control" type="text" value="<?=isset($_POST['refRelationship1'])?$_POST['refRelationship1']:''?>"></div></div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address</label>
<div class="form_field_wrap"><input name="refAddress1" class="form-control" type="text" value="<?=isset($_POST['refAddress1'])?$_POST['refAddress1']:''?>"></div></div>

<div class="one_first">
<b>Reference 2</b>
</div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Name </label><div class="form_field_wrap"><input name="refName2" class="form-control" type="text" value="<?=isset($_POST['refName2'])?$_POST['refName2']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Email </label><div class="form_field_wrap"><input name="refEmail2" class="form-control" type="text" value="<?=isset($_POST['refEmail2'])?$_POST['refEmail2']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Contact No </label><div class="form_field_wrap"><input name="refContactNo2" class="form-control" type="text" value="<?=isset($_POST['refContactNo2'])?$_POST['refContactNo2']:''?>"></div></div>
<div class="form_info cmsmasters_input one_half"><label for="cmsmasters_email">Relationship (i.e employer, teacher, family) </label><div class="form_field_wrap"><input name="refRelationship2" class="form-control" type="text" value="<?=isset($_POST['refRelationship2'])?$_POST['refRelationship2']:''?>"></div></div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Address</label>
<div class="form_field_wrap"><input name="refAddress2" class="form-control" type="text" value="<?=isset($_POST['refAddress2'])?$_POST['refAddress2']:''?>"></div></div>

<div class="one_first">
<p><input type="checkbox" value="1" name="agreeCheck" id="agreeCheck" required>   <b>Declaration </b> I confirm by submitting this application form that, to the best of my knowledge the information in this form is correct. I have read the LSBE prospectus/course brochure. I understand and agree to abide by the conditions and regulations of the institute, which I accept as a condition of this application.</p>
<br />
</div>

<div class="cl"></div>
<div class="form_info cmsmasters_input one_half">
<div class="form_field_wrap">
<div class="cptchCode"><img alt="Captcha" src="<?=$siteUrlMain;?>captcha.php">
<input type="text" maxlength="4" class="form-control" autocomplete="off" id="captcha" placeholder="Captcha Code *" required value="<?=isset($_POST['captcha'])?$_POST['captcha']:''?>" name="captcha"></div>

</div>
</div>
<div class="form_info cmsmasters_input one_half">
<div class="form_field_wrap">
<input type="submit" name="action" class="cmsmasters_button" value="Submit">
</div>
</div>
<div class="cl"></div>
</form>
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
jQuery(".responsibleFee").change(function(){ if(jQuery(this).val()=="Employer"){ jQuery("#responsibleFeeInfo").show('1000'); jQuery("#responsibleFeeInfo input").attr("required", "true"); jQuery("#responsibleFeeInfo select").attr("required", "true"); }else{ jQuery("#responsibleFeeInfo").hide('1000'); jQuery("#responsibleFeeInfo input").removeAttr("required"); jQuery("#responsibleFeeInfo select").removeAttr("required"); } }); 
});
</script>
<?php include "php/footer.php";?>