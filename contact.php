<?php
include "php/connect-mysql.php";
include "php/functions.php";
if(isset($_POST['action']) && $_POST['action']=="Send Message00"){
$errorMsg = "";
if($_POST['name']=="" || $_POST['email']=="" || $_POST['mobile']=="" || $_POST['country']=="" || $_POST['message']=="" || $_POST['captcha']==""){ $errorMsg = "1"; }
if($errorMsg!=""){ $errorMsg = "Please enter all fields."; }
if($errorMsg==""){
if(checkTextareaField($_POST['name'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your name.<br />";  }
if(checkEmail($_POST['email'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter email address.<br />";  }
if(checkTextareaField($_POST['mobile'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter mobile Number.<br />";  }
if(checkTextareaField($_POST['country'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your country.<br />";  }
if(checkTextareaField($_POST['message'])==false){ $errorMsg.= "<strong>Error!</strong>&nbsp;Please enter your message.<br />";  }
if(checkNumber($_POST['captcha'])==false){ $errorMsg.= "Please enter correct captcha";  }
}
if($errorMsg=="" && $_SESSION["codeTxt"]!=$_POST["captcha"]){
$errorMsg= '<strong>Error!</strong>&nbsp;Wrong Code Entered.';
}
if($errorMsg==""){
$to = $domainEmail2;
$country = $_POST['name']." Contact Us - ".$siteName;	
$message = '<table width="100%" cellspacing="0" cellpadding="10" border="0" bgcolor="#FFFFFF" style="font-family:arial,sans-serif;font-size:12px;border:1px solid #000">
<tbody>
<tr align="center">
<td valign="top" style="padding:7px 0;border-bottom: 2px solid #e6222c"><a target="_blank" href="'.$siteUrlMain.'"><img border="0" alt="'.$siteName.'" src="'.$siteUrlMain.'php/timthumb.php?src='.$siteUrlMain.'img/'.$logoImg.'&h=90&w=303&zc=0" height="70"></a></td>
</tr>
<tr>
<td valign="top"><h1 style="font-size:22px;font-weight:normal;line-height:22px;margin:0px 0px 11px">Contact Us </h1>
<hr />
<table style="font-size:12px;">
<tbody>
<tr><td width="20%"><b>Name </b></td><td width="80%">'.$_POST['name'].'</td></tr>
<tr><td><b>Email Address</b></td><td>'.$_POST['email'].'</td></tr>
<tr><td><b>Mobile Number</b></td><td>'.$_POST['mobile'].'</td></tr>
<tr><td><b>Country</b></td><td>'.$_POST['country'].'</td></tr>
<tr><td><b>Message</b></td><td>'.$_POST['message'].'</td></tr>
<tr><td><b>IP Address</b></td><td>'.$_SERVER['REMOTE_ADDR'].'</td></tr>
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
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers2.= 'From: '.$_POST['name'].' <'.$noReply.'> ' . "\r\n" .
'Reply-To: <'.$_POST['email'].'>' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($to,$country,$message,$headers); 

$to2 = $_POST['email'];
$country2 = "Auto reply from London De Academy";	
$message2 = '<a target="_blank" href="'.$siteUrlMain.'"><img border="0" style="margin-bottom:10px" alt="'.$siteName.'" src="'.$siteUrlMain.'php/timthumb.php?src='.$siteUrlMain.'img/'.$logoImg.'&h=90&w=303&zc=0" height="70" ></a><br><br>
Dear '.$_POST['name'].',<br><br>
Greetings from London De Academy!<br><br>
Thank you for showing interest in London De Academy. Our London De Academy team will get in touch with you within next 24 hours.<br><br>
Please call '.$contactNumber.' if you urgently want to contact our team.<br><br>
<p style="font-size:11px;color:#999999;">
Sincerely,<br />
London De Academy Support Team<br />
Email: '.$adminEmail.'<br />
Mob: '.$contactNumber.'<br />
Web: '.$domainName.'<br /></p><hr />
<p style="font-size:11px;color:#999999;text-align:center;width:100%;float:left;" >Copyright &copy; '.date('Y').' '.$domainName.' All Rights Reserved.</p>';
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers2 .= 'From: '.$siteName.'<'.$noReply.'>' . "\r\n";
@mail($to2,$country2,$message2,$headers2);
header("location: ".$siteUrlMain."contact-us?act=success#msg");
}
}	
include "php/header.php";
$sqlStgs = mysqli_query($conn,"SELECT mapLatitude,mapLongitude,contactNumber,adminEmail,address,businessHours,fbURL,twitterURL FROM admin WHERE id='1'");
$rowStgs = mysqli_fetch_assoc($sqlStgs); 
$mpDiv = "";
if($rowStgs['mapLatitude']!="" || $rowStgs['mapLongitude']!=""){
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC8LrPCmhcAwGztK2Zd5qlvUC8U-VcfBpE&signed_in=false&libraries=places"></script>
<script type="text/javascript">jQuery(document).ready(function(e){initMap();});function initMap() { var myLatLng = {lat:<?=$rowStgs['mapLatitude'];?>, lng: <?=$rowStgs['mapLongitude'];?>}; var map = new google.maps.Map(document.getElementById('contactMap'), { zoom: 14,scrollwheel: false,center: myLatLng }); var marker = new google.maps.Marker({ position: myLatLng, map: map, title: '<?=$siteName;?>' }); }</script>
<?php
$mpDiv = '<div id="contactMap"></div>';
} 
echo headerTopBg(10);
?>
<div id="middle">
<div class="headline cmsmasters_color_scheme_default">
<div class="headline_outer topHeaderBg">
<div class="headline_color"></div>
<div class="headline_inner align_center">
<div class="headline_aligner"></div>
<div class="headline_text_wrap">
<div class="headline_text">
<h1 class="entry-title">Contact Us</h1>
</div>
<div class="cmsmasters_breadcrumbs">
<div class="cmsmasters_breadcrumbs_aligner"></div>
<div class="cmsmasters_breadcrumbs_inner"><a href="<?=$siteUrlMain?>" class="cms_home">Home</a> <span class="breadcrumbs_sep"> / </span> <span>Contact Us</span></div>
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
<div id="cmsmasters_column_" class="cmsmasters_column two_third">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_heading_427b55f5c7" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
<h2 class="cmsmasters_heading">Contact Us</h2>
</div>
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
<form action="" method="post">
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_name">Name <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="name" class="form-control" type="text" value="<?=isset($_POST['name'])?$_POST['name']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_email">Email <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="email" class="form-control" type="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_name">Mobile No <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="mobile" class="form-control" type="text" value="<?=isset($_POST['mobile'])?$_POST['mobile']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_input one_half">
<label for="cmsmasters_email">Country <span class="color_2">*</span></label>
<div class="form_field_wrap">
<input name="country" class="form-control" type="text" value="<?=isset($_POST['country'])?$_POST['country']:''?>" required>
</div>
</div>
<div class="form_info cmsmasters_textarea one_first">
<label for="cmsmasters_message_2">Message <span class="color_2">*</span></label>
<div class="form_field_wrap">
<textarea name="message" cols="60" rows="7" class="textarea form-control" aria-required="true" aria-invalid="false" placeholder="Message*"><?=isset($_POST['message'])?$_POST['message']:''?></textarea>
</div>
</div>
<div class="cl"></div>
<div class="loading"></div>
<div class="form_info cmsmasters_input one_half">
<div class="form_field_wrap">
<div class="cptchCode"><img alt="Captcha" src="<?=$siteUrlMain;?>captcha.php">
<input type="text" maxlength="4" class="form-control" autocomplete="off" id="captcha" placeholder="Captcha Code *" required value="<?=isset($_POST['captcha'])?$_POST['captcha']:''?>" name="captcha"></div>

</div>
</div>
<div class="form_info cmsmasters_input one_half">
<div class="form_field_wrap">
<input type="submit" name="action" class="cmsmasters_button" value="Send Message">
</div>
</div>
<div class="cl"></div>
</form>
</div>
</div>
</div>
</div>
<div id="cmsmasters_column_" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner">
<aside id="custom-contact-info-3" class="widget widget_custom_contact_info_entries"><h3 class="widgettitle">Our Location</h3><div class="adr adress_wrap cmsmasters_theme_icon_user_address"><span class="street-address contact_widget_address"><?=$rowStgs['address'];?></span></div><span class="contact_widget_email cmsmasters_theme_icon_user_mail"><a class="email" href="mailto:<?=$rowStgs['adminEmail'];?>"><?=$rowStgs['adminEmail'];?></a></span><span class="contact_widget_phone cmsmasters_theme_icon_user_phone"><span class="tel">Call Us: <?=$rowStgs['contactNumber'];?></span></span>
<span class="contact_widget_phone cmsmasters_theme_icon_user_phone"><span class="tel">WhatsApp : +44 7448 735454</span></span>
</aside>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
/* <div id="cmsmasters_row_9991790c66" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_11">
<div id="cmsmasters_column_" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_divider_015c88ef02" class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_center"></div>
<div class="cmsmasters_text">
<?=$mpDiv;?>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
*/
?>
<div class="cl"></div>
</div>
</div>
<?php include "php/footer.php";
?>