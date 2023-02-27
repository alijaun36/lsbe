<?php
include "php/connect-mysql.php";
if($_GET['act']=="crs"){ $str = ""; $sql = mysqli_query($conn,"SELECT id,title FROM courses WHERE levelID='".$_GET['id']."' ORDER BY title ASC");
$numRow = mysqli_num_rows($sql); if($numRow>0){ while($row = mysqli_fetch_assoc($sql)){ $str.=$row['id']."||".strip_tags($row['title'])."~~"; }
}else{ $str=" :No course found,"; }
echo $str; }else{ header('location: ../'); }
?>