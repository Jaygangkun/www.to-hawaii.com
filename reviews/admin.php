<?php
include "conf.php";
session_start();
$db=@mysql_connect($db_host,$database_user,$database_pass) or die("<b>MySQL Error:</b> Unable to connect to database please check that you have provided the correct <li>Database Login username<li>Database Login Password");	//Connect to database or give error if failed
@mysql_select_db($db_name,$db)or die("<b>MySQL Error:</b> Unable to select database please check that you have provided the correct <li>Database name");
echo "<HTML><HEAD><TITLE>Admin Panel</TITLE><LINK href=\"style_admin.css\" type=\"text/css\" rel=stylesheet></HEAD><BODY>";
foreach($_GET AS $key => $value) {
${$key} = $value;
} 
foreach($_POST AS $key => $value) {
${$key} = $value;
} 

if(isset($_SESSION['ez_gb']) && $action!="logout"){
$menu="<TD><Table width=100%><TR><TD width=2%><a href=\"admin.php\"><img src=\"images/home_s.png\" border=0></a></TD><TD width=50%><a href=\"admin.php\"><B>Main Menu</B></a></TD><TD width=2%><a href=\"?action=logout\"><img src=\"images/exit_s.png\" border=0></a></TD><TD><a href=\"?action=logout\"><B>Logout</B></a></TD></TR></Table></TD>";
}else{
$menu="";
}
echo "<Table width=100% border=0 cellpadding=0 cellspacing=0><TD width=60><img src=\"images/comment.png\"></TD><TD><BR><FONT SIZE=6 COLOR=#FF9900>Ez Comment</FONT> <B>Admin Panel</B></TD>$menu</Table><HR color=#E6e6e6>";
if($action=="logout"){
session_destroy();
echo "<center>You are loged out.</center>";
}
if($action=="login"){
if(md5($_POST['sim'])==$_SESSION['image_random_value']){
if($uid!=""){
$lgin=@mysql_query("SELECT * FROM ez_ccomment_opt WHERE admin_pass='$uid'");
$valid=@mysql_num_rows($lgin);
if($valid==1){
$_SESSION['ez_gb']="$uid";
}else{
echo "<center><font color=red>Incorrect login password.</font></center>";
}
}else{
echo "<center><font color=red>Incorrect login password.</font></center>";
}
}else{
echo "<center><font color=red>Incorrect security image value entered.</font></center>";
}
}
if(!isset($_SESSION['ez_gb']) || $action=="logout"){
echo "<CENTER>Please Login:</CENTER><form method=post action='?action=login'>
<table border=0 align=center width=60%><TR>
<TD width=40%>Login Password:</TD><TD><input type=password name=uid></TD>	
</TR>
<TR>
<TD width=40%>&nbsp;</TD><TD><img src='image.php'></TD>
</TR>	
<TR>
<TD width=40%>Security Image:</TD><TD><input type=text name=sim size=8></TD>	
</TR>
<TR>
<TD width=40%><BR><BR></TD><TD><input type=submit value=' LOGIN '></TD>	
</TR>
</table>
</form>";
}elseif(isset($_SESSION['ez_gb']) && $action!="logout"){
if($action=="" || $action=="login"){
$count=@mysql_query("SELECT * FROM ez_ccomment WHERE status='unconfirmed'");
$nu=mysql_num_rows($count);
echo "<center><b>Main Menu</b></center><HR color=#E6e6e6>";
echo "<table width=85% align=center border=0>

<TR><TD width=5%><img src=\"images/cnew.png\"></TD><TD wifth=45%><a href=\"?action=add\"><font size=4>Add Comments (<b>$nu</b>)</font></a></TD><TD width=5%><img src=\"images/cview.png\"></TD><TD wifth=45%><a href=\"?action=view\"><font size=4>View Comments</font></a></TD></TR>
<TR><TD width=5%><img src=\"images/add.png\"></TD><TD wifth=45%><a href=\"?action=add_id\"><font size=4>Add ID</font></a></TD><TD width=5%><img src=\"images/options.png\"></TD><TD wifth=45%><a href=\"?action=general\"><font size=4>General Options</font></TD></TR>
<TR><TD width=5%><img src=\"images/cpass.png\"></TD><TD wifth=45%><a href='?action=change_password'><font size=4>Change Password</font></a></TD><TD width=5%><img src=\"images/logout.png\"></TD><TD wifth=45%><a href=\"?action=logout\"><font size=4>Logout</font></a></TD><TD width=5%></TD><TD wifth=45%></TD></TR>
</table>";
}
if($action=="add_id"){
if($ser=="true"){
if($ac==""){
if($gname!=""){
$add_size=mysql_query("INSERT INTO ez_ccid SET name='$gname'");
}
if($add_size){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Confirmation</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Comment ID has been added.</TD></TR></table><BR>";
}else{
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>ERROR</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">There has been an error in adding ID. Please check your input.</TD></TR></table><BR>";

}
}
elseif($ac=="edit"){
if($gname!=""){
$add_size=mysql_query("UPDATE ez_ccid SET name='$gname' WHERE op='$id'");
}
if($add_size){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Confirmation</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Comment ID has been renamed.</TD></TR></table><BR>";
}else{
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>ERROR</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">There has been an error in renaming ID. Please check your input.</TD></TR></table><BR>";
}
}elseif($ac=="delete"){
$edit_sz=mysql_query("SELECT * FROM ez_ccid");
while($rov=mysql_fetch_array($edit_sz)){
$k++;
$ad_size=mysql_query("DELETE FROM ez_ccid WHERE op='$bid[$k]'");
$ad_size1=mysql_query("DELETE FROM ez_ccomment WHERE ccid='$bid[$k]'");
}
if($ad_size){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Confirmation</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Comment ID as well as all comments associated with that ID have been deleted.</TD></TR></table><BR>";
}else{
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>ERROR</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">There has been an error in deleting.</TD></TR></table><BR>";
}
}
}
if($do=="edit"){
$edit_sz=mysql_query("SELECT * FROM ez_ccid WHERE op='$id'");
if(mysql_num_rows($edit_sz)==1){
$row=mysql_fetch_array($edit_sz);
echo "<form method=post action=\"?action=add_id&ser=true&ac=edit\"><table border=0 cellpadding=1 cellspacing=0 width=80% align=center><tr bgcolor=\"#E6E6E6\" height=\"24\"><td align=\"center\" width=\"100%\" colspan=3>&nbsp;<B>Rename Comment ID Description</B></td></tr>";
echo"<TR style=\"background:#F6F6F6;\" height=\"24\"><TD width=15% align=center><img src=\"images/folder_edit.png\"></TD><TD width=\"20%\" style=\"padding-left:5px;\">ID:</TD><TD width=65%><input type=text name=gname value=\"$row[name]\"> <font size=1> (Provide a name for the comment ID)</font></TD></TR><input type=hidden name=id value=\"$row[op]\"><TR style=\"background:#F6F6F6;\" height=\"24\"><TD width=20% style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\" colspan=2><BR><BR></TD><TD style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\"><input type=submit value=' Edit '>&nbsp;<input type=button onclick='javascript:history.back()' value=' Cancel '>&nbsp;</TD></TR></Table></form><BR>";
}else{
echo "Please try again.";
}
}else{
echo "<form method=post action=\"?action=add_id&ser=true\"><table border=0 cellpadding=1 cellspacing=0 width=80% align=center><tr bgcolor=\"#E6E6E6\" height=\"26\"><td align=\"center\" width=\"100%\" colspan=3>&nbsp;<B>Add Comment ID</B></td></tr>";
echo"<TR style=\"background:#F6F6F6;\" height=\"24\"><TD width=15% align=center><img src=\"images/folder_add.png\"></TD><TD width=\"20%\" style=\"padding-left:5px;\">Name:</TD><TD><input type=text name=gname> <font size=1> (Provide a name for Comment ID)</font></TD></TR><TR style=\"background:#F6F6F6;\" height=\"24\"><TD width=20% style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\" colspan=2><BR><BR></TD><TD style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\"><input type=submit value=' Add '>&nbsp;<input type=button onclick='javascript:history.back()' value=' Cancel '>&nbsp;</TD></TR></Table></form><BR>";
}
$sizes=mysql_query("SELECT * FROM ez_ccid ORDER BY name ASC");
if(mysql_num_rows($sizes)>=1){
echo "<table border=0 cellpadding=5 cellspacing=0 width=80% align=center><tr><td width=20%><a href=\"javascript:deletegroup()\"><B><font color=red>Delete Selected</font></B></a></td></tr></table>";
echo "<table border=0 cellpadding=1 cellspacing=0 width=80% align=center><form name=frmList action=\"?action=add_id&ser=true&ac=delete\" method=post><input type=hidden name=pageaction value=\"deletelist\"><tr bgcolor=\"#E6E6E6\" height=\"24\"><td align=\"center\" width=\"25\"><input type=checkbox id=\"checkAll\" onclick=\"selectAll()\"></td><td align=\"left\" width=20%>&nbsp;<b>Comment ID</b></td><td align=\"left\">&nbsp;<b>Description</b></td><td align=\"center\" width=\"100\">&nbsp;</td></tr>"; 	
$i=0;
while($row=mysql_fetch_array($sizes)){
$i++;
echo"<tr id=\"row$i\" style=\"background:#F6F6F6;\" height=\"24\"><td  align=\"center\" style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\"><input type=checkbox id=\"check$i\" name=\"bid[$i]\" value=\"$row[op]\" onclick=\"if(this.checked==true){ selectRow('row$i'); }else{ deselectRow('row$i'); }\"></td><td style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\" align=left>$row[op]</TD><td align=\"left\" style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\">$row[name]</td><td align=\"center\" style=\"BORDER-BOTTOM:#E6E6E6 1px solid;\"><a href=?action=add_id&do=edit&id=$row[op]><img src=images/edit.png border=0 alt=\"Rename\"></a></td></tr>";
}
echo "</form></table><table border=0 cellpadding=5 cellspacing=0 width=80% align=center>	<tr><td width=20%><a href=\"javascript:deletegroup()\"><B><font color=red>Delete Selected</font></B></a></td></tr>	</table>";
?>
<script language=javascript>
function selectAll(){
if(document.getElementById("checkAll").checked==true){
document.getElementById("checkAll").checked=true;

<?php
for($j=1;$j<=$i;$j++){
echo "document.getElementById(\"check$j\").checked=true; document.getElementById(\"row$j\").style.background='#D6DEEC';"; 
}
echo "}else{document.getElementById(\"checkAll\").checked=false;";
for($j=1;$j<=$i;$j++){
echo "document.getElementById(\"check$j\").checked=false; document.getElementById(\"row$j\").style.background='#F6F6F6';"; 
}
echo "} }";
?>
	function selectRow(row){
		document.getElementById(row).style.background="#D6DEEC";
	}

	function deselectRow(row){
		document.getElementById(row).style.background="#F6F6F6";
	}
	
	function deletegroup(){  
	    if(confirm('Are you sure you want to delete the selected Comment ID(s) ?\nTHIS WILL ALSO DELETE ALL COMMENTS IN THAT ID')){
	    	document.frmList.submit();
		}
	}
</script></div>
<?php
}
}
if($action=="change_password"){
if($add=="true" && $admin_password!=""){
if($admin_password==$c_admin_password){
$set=mysql_query("UPDATE ez_ccomment_opt SET admin_pass='$admin_password'");
if($set){
echo "<center>Password has been successfully changed.</center>";
}
}else{
echo "<center>New password and confirm new password do not match.</center>";
}
}elseif($add=="true" && $admin_password==""){
echo "<center>Password field can not be empty.</center>";
}
echo "<H3>Change Password:</H3>";
echo "<form method=post><table width=80% align=center>";
echo "<TR><TD width=25%>New Password:</TD><TD width=80%><input type=password name='admin_password'></TD></TR>";
echo "<TR><TD width=25%>Confirm New Password:</TD><TD width=80%><input type=password name='c_admin_password'></TD></TR>";
echo "<TR><TD width=25%><BR><BR><input type=hidden name=add value=true></TD><TD width=80%> <input type=submit value=' CHANGE '> &nbsp; <input type=button value=' CANCEL ' onclick='javascript:history.back();'></TD></TR>";
echo "</table></form>";
}
if($action=="general"){
if($add=="true"){
$set=mysql_query("UPDATE ez_ccomment_opt SET limit_pp='$limit_pp',auto='$verification',filter='$filter',limit_max='$limit_max'");
if($set){
echo "<center>Options have been successfully updated.<BR></center>";
}
}
echo "<h3>General Options:</h3>";
$opt=mysql_query("SELECT * FROM ez_ccomment_opt");
$my=mysql_fetch_array($opt);
echo "<form method=post><table width=80% align=center>";
echo "<TR><TD width=35%>Comments Per Page:</TD><TD width=80%><input type=text name='limit_pp' value='$my[limit_pp]' size=5></TD></TR>";
echo "<TR><TD width=35%>Maximum Comment Length:</TD><TD width=80%><input type=text name='limit_max' value='$my[limit_max]' size=5></TD></TR>";
if($my[filter]=="y"){
$sci="selected";
}else{
$scj="selected";
}
if($my[auto] == "y"){
$sb="selected";
}else{
$sc="selected";
}
echo "<TR><TD width=35%>Filter Comments:</TD><TD width=80%><select name='filter'><option value='y' $sci>Yes<option value='n' $scj>No</select></TD></TR>";
echo "<TR><TD width=35%>Verification by Admin:</TD><TD width=80%><select name='verification'><option value='y' $sb>No<option value='n' $sc>Yes</select></TD></TR>";
echo "<TR><TD width=25%><BR><BR><input type=hidden name=add value=true></TD><TD width=80%> <input type=submit value=' CHANGE '>&nbsp;&nbsp;<input type=button value=' CANCEL ' onclick='javascript:history.back();'></TD></TR>";
echo "</table></form>";
}
if($action=="edit"){
$ent=mysql_query("SELECT * FROM ez_ccomment WHERE op='$id'");
$row=mysql_fetch_array($ent);
echo "Edit Entry:";
$message=str_replace("<br>","\n",$row['message']);
echo "<form method=post action=\"?action=do_edit\"><table cellpadding=2 cellspacing=0><tr><td>Name:</td><td><input type=text name=name maxlength=28 size=28 value=\"$row[name]\"></td></tr><tr><td>Email:</td><td><input type=text name=email maxlength=35 size=28 value=\"$row[email]\"></td></tr><tr><td>Rating:</td><td><select name=rating><option value=$row[rating]>$row[rating]<option value=5>5<option value=4>4<option value=3>3<option value=2>2<option value=1>1</select></td></tr><tr><td>Comments:</td><td><textarea name=comment rows=5 cols=45>$message</textarea><BR></td></tr><tr><td><input type=hidden name=id value=$id><BR><BR><BR></td><td align=center><input type=submit value=ADD> <input type=button value=Cancel onclick=javascript:history.back()></td></tr></table></form>";
}
if($action=="do_edit"){
$upd=@mysql_query("UPDATE ez_ccomment SET name='$name', email='$email', message='$comment',website='$website',status='confirmed',rating='$rating' WHERE op='$id'");
if($upd){
echo "<center>Entry has been added.</center>";
}else{
echo "<center><font color=red>Entry could not be added.</font></center>";
}
}
if($action=="add"){
$enti=mysql_query("SELECT * FROM ez_ccomment_opt");
$rowi=mysql_fetch_array($enti);
if($rowi['auto']=="y"){
echo "<center>Listings are currently set to auto add after submission.</center>";
}
if($do=="add" && $id!=""){
$upd=@mysql_query("UPDATE ez_ccomment SET status='confirmed' WHERE op='$id'");
if($upd){
echo "<center>Entry has been added.</center>";
}else{
echo "<center><font color=red>Entry could not be added.</font></center>";
}
}
if($do=="reject" && $id!=""){
$upd=@mysql_query("DELETE FROM ez_ccomment WHERE op='$id'");
if($upd){
echo "<center>Entry has been deleted.</center>";
}else{
echo "<center><font color=red>Entry could not be deleted.</font></center>";
}
}
$count=@mysql_query("SELECT * FROM ez_ccomment WHERE status='unconfirmed'");
$nu=mysql_num_rows($count);
if($nu>=1){
echo "&nbsp;&nbsp;&nbsp;<B>$nu</B> waiting entries:";
}else{
echo "<BR>&nbsp;&nbsp;&nbsp;<B>No entries waiting for approval.</B><BR><BR>";
}
echo "<table width=100% border=0 style='FONT-SIZE: 16px; COLOR: #000000; BORDER-WIDTH:#c2cfdf 4px SOLID;'><td>";
$list = ("SELECT * FROM ez_ccomment WHERE status='unconfirmed' ORDER BY op ASC");
echo "<center><font face=arial>";
$row_num1= mysql_num_rows(mysql_query($list));
$list_per_page="5";
if($start==""){
$start=1;
}
if($start==""||$start==1){
$sfrom=0;
}else{
$sfrom=(($start-1)*$list_per_page);
}
$end=$list_per_page;
if ($row_num1>$list_per_page){
$no_of_page=$row_num1/$list_per_page;
}
$no_page=explode(".",$no_of_page);
if($no_page[1]>0){
$no_of_page+=1;
}
if($start > 1){
$s=$start-1;
echo "<a href=\"?action=add&?start=$s\">Previous</a>";
}
for($i=1;$i<=$no_of_page;$i++){
if($i!=$start){
if($i%10==0){
echo "<BR>";
}
echo " <a href=\"?action=add&start=$i\">$i</a> ";
}else{
echo " <b>$i</b> ";
}
}
if($start < $i-1){
$n=$start+1;
$next = " <a href=\"?action=add&start=$n\">Next</a>";
}elseif($start>=$i){
$next =  "";
}
echo "$next</font>";
$gr=0;
$list.=	(" LIMIT $sfrom,$end");
$blist=(mysql_query($list));
while($row=mysql_fetch_array($blist)){
if(substr_count($row[email],"@")==1){
$name="<a href='mailto:$row[email]'>$row[name]</a>";
}else{
$name="$row[name]";
}
$row[rating]=round($row[rating],2);
if ($row[rating] == 5)
{
	$star = "images/5star.gif" ;
}
if ($row[rating]>=1 && $row[rating]<1.5)
{
	$star = "images/1star.gif" ;
}
if ($row[rating]>=1.5 && $row[rating]<2)
{
	$star = "images/15star.gif" ;
}
if ($row[rating]>=2 && $row[rating]<2.5)
{
	$star = "images/2star.gif" ;
}
if ($row[rating]>=2.5 && $row[rating]<3)
{
	$star = "images/25star.gif" ;
}
if ($row[rating]>=3 && $row[rating]<3.5)
{
	$star = "images/3star.gif" ;
}	
if ($row[rating]>=3.5 && $row[rating]<4)
{
	$star = "images/35star.gif" ;
}	
if ($row[rating] >= 4 && $row[rating]<4.5)
{
	$star = "images/4star.gif" ;
}	
if ($row[rating] >= 4.5 && $row[rating]<5)
{
	$star = "images/45star.gif" ;
}	
if ($row[rating] >= 5)
{
	$star = "images/5star.gif" ;
}	
if ($row[rating]<=0)
{
	$star = "images/00star.gif" ;
}

$messag=$row[message];
$mk=mysql_query("SELECT * FROM ez_ccid WHERE op='$row[ccid]'");
$tom=mysql_fetch_array($mk);
echo "<Table width=95% border=0 align=center cellpadding=3 cellspacing=0><TR><TD width=100% style='BORDER-TOP: #FF9900 1px solid;'><B>Name:</B> $name in \"$tom[op] ($tom[name])\"</TD></TR><TR><TD width=100%><B>Rating:</B> <img src=\"$star\"> ($row[rating]/5)</TD></TR><TR><TD width=100%><B>Message:</B> $messag</TD></TR><TR><TD width=100%><B>Comment On:</B> $row[date]</TD></TR></Table><Table border=0 width=50% align=center><TR><TD width=5% align=center><a href=\"?action=add&do=add&id=$row[op]\"><img src='images/add.gif' border=0><BR>Add</a></TD> <TD width=5% align=center><a href=\"?action=edit&id=$row[op]\"><img src=\"images/edit.gif\" border=0><BR>Edit</a></TD><TD width=5% align=center><a href=\"?action=add&do=reject&id=$row[op]\"><img src='images/delete.png' border=0><BR>Reject</TD></TR></table><BR>";
$gr+=1;
}
$list_per_page="10";
echo "<font face=arial><center>";
if($start==""){
$start=1;
}
if($start==""||$start==1){
$sfrom=0;
}else{
$sfrom=(($start-1)*$list_per_page);
}
$end=$list_per_page;
if ($row_num1>$list_per_page){
$no_of_page=$row_num1/$list_per_page;
$no_page=explode(".",$no_of_page);
if($no_page[1]>0){
$no_of_page+=1;
}
if($start > 1){
$s=$start-1;
echo "<a href=\"?action=add&start=$s&cid=$cid\">Previous</a>";
}
for($i=1;$i<=$no_of_page;$i++){
if($i!=$start){
if($i%10==0){
echo "<BR>";
}
echo " <a href=\"?action=add&start=$i&cid=$cid\">$i</a> ";
}else{
echo " <b><FONT COLOR=#000000>$i</FONT></b> ";
}
}
if($start < $i-1){
$n=$start+1;
$next = " <a href=\"?action=add&start=$n&cid=$cid\">Next</a>";
}elseif($start>=$i){
$next =  "";
}
echo "$next</font>";
}
}
if($action=="view"){
//if($cid==""){
echo "<BR><form method=post action=\"?action=view\"><table width=\"85%\" align=\"center\" cellspacing=0><TR bgcolor=\"#E6E6E6\" height=26><TD width=100% colspan=2 align=center><B>Select ID</B></TD></TR>";
echo "<TR bgcolor=\"#F6F6F6\" height=\"24\"><TD align=center><select name=cid><option value=\"\">Please Select";
$gall=mysql_query("SELECT * FROM ez_ccid ORDER BY name ASC");
while($tow=mysql_fetch_array($gall)){
if($cid==$tow[op]){
$b="selected";
}else{
$b="";
}
echo "<option value=\"$tow[op]\" $b>$tow[op] - $tow[name]";
}
echo "</select></td></TR>";
echo "<TR bgcolor=\"#F6F6F6\"><TD style=\"BORDER-BOTTOM: #E6E6E6 1px solid;\" align=center><BR><input type=submit value=\" GO \"><BR><BR></TD></TR></Table></form><BR>";
//}
if($do=="delete" && $id!=""){
$upd=@mysql_query("DELETE FROM ez_ccomment WHERE op='$id'");
if($upd){
echo "<center>Entry has been deleted.</center>";
}else{
echo "<center><font color=red>Entry could not be deleted.</font></center>";
}
}
if($cid!=""){
$count=@mysql_query("SELECT * FROM ez_ccomment WHERE ccid='$cid'");
$nu=mysql_num_rows($count);
echo "<center><B>$nu</B> comment(s)</center>";

echo "<table width=100% border=0 style='FONT-SIZE: 16px; COLOR: #000000; BORDER-WIDTH:#c2cfdf 4px SOLID;'><td>";
$list = ("SELECT * FROM ez_ccomment WHERE ccid='$cid' ORDER BY op ASC");
echo "<center><font face=arial>";
$row_num1= mysql_num_rows(mysql_query($list));
$list_per_page="5";
if($start==""){
$start=1;
}
if($start==""||$start==1){
$sfrom=0;
}else{
$sfrom=(($start-1)*$list_per_page);
}
$end=$list_per_page;
if ($row_num1>$list_per_page){
$no_of_page=$row_num1/$list_per_page;
}
$no_page=explode(".",$no_of_page);
if($no_page[1]>0){
$no_of_page+=1;
}
if($start > 1){
$s=$start-1;
echo "<a href=\"?action=view&?start=$s&cid=$cid\">Previous</a>";
}
for($i=1;$i<=$no_of_page;$i++){
if($i!=$start){
if($i%10==0){
echo "<BR>";
}
echo " <a href=\"?action=view&start=$i&cid=$cid\">$i</a> ";
}else{
echo " <b>$i</b> ";
}
}
if($start < $i-1){
$n=$start+1;
$next = " <a href=\"?action=view&start=$n&cid=$cid\">Next</a>";
}elseif($start>=$i){
$next =  "";
}
echo "$next</font>";
$gr=0;
//echo "$sfrom --------- $end";
$list.=	(" LIMIT $sfrom,$end");
$blist=(mysql_query($list));
while($row=mysql_fetch_array($blist)){
if(substr_count($row[email],"@")==1){
$name="<a href='mailto:$row[email]'>$row[name]</a>";
}else{
$name="$row[name]";
}
$row[rating]=round($row[rating],2);
if ($row[rating] == 5)
{
	$star = "images/5star.gif" ;
}
if ($row[rating]>=1 && $row[rating]<1.5)
{
	$star = "images/1star.gif" ;
}
if ($row[rating]>=1.5 && $row[rating]<2)
{
	$star = "images/15star.gif" ;
}
if ($row[rating]>=2 && $row[rating]<2.5)
{
	$star = "images/2star.gif" ;
}
if ($row[rating]>=2.5 && $row[rating]<3)
{
	$star = "images/25star.gif" ;
}
if ($row[rating]>=3 && $row[rating]<3.5)
{
	$star = "images/3star.gif" ;
}	
if ($row[rating]>=3.5 && $row[rating]<4)
{
	$star = "images/35star.gif" ;
}	
if ($row[rating] >= 4 && $row[rating]<4.5)
{
	$star = "images/4star.gif" ;
}	
if ($row[rating] >= 4.5 && $row[rating]<5)
{
	$star = "images/45star.gif" ;
}	
if ($row[rating] >= 5)
{
	$star = "images/5star.gif" ;
}	
if ($row[rating]<=0)
{
	$star = "images/00star.gif" ;
}
$messag=$row[message];
echo "<Table width=95% border=0 align=center cellpadding=3 cellspacing=0><TR><TD width=100% style='BORDER-TOP: #FF9900 1px solid;'><B>Name:</B> $name</TD></TR><TR><TD width=100%><B>Rating:</B> <img src=\"$star\"> ($row[rating]/5)</TD></TR><TR><TD width=100%><B>Message:</B> $messag</TD></TR><TR><TD width=100%><B>Comment On:</B> $row[date]</TD></TR><TR><TD width=100%><B>Status:</B> $row[status]</TD></TR></Table><Table width=60% align=center><TR><TD width=5% align=center><a href=\"?action=edit&id=$row[op]&cid=$cid\"><img src=\"images/edit.gif\" border=0><BR>Edit</a></TD><TD width=5% align=center><a href=\"?action=view&do=delete&id=$row[op]&cid=$cid\"><img src=\"images/delete.png\" border=0><BR>Delete</a></TD></TR></table><BR>";
$gr+=1;
}
$list_per_page="5";
echo "<font face=arial><center>";
if($start==""){
$start=1;
}
if($start==""||$start==1){
$sfrom=0;
}else{
$sfrom=(($start-1)*$list_per_page);
}
$end=$list_per_page;
if ($row_num1>$list_per_page){
$no_of_page=$row_num1/$list_per_page;
$no_page=explode(".",$no_of_page);
if($no_page[1]>0){
$no_of_page+=1;
}
if($start > 1){
$s=$start-1;
echo "<a href=\"?action=view&start=$s&cid=$cid\">Previous</a>";
}
for($i=1;$i<=$no_of_page;$i++){
if($i!=$start){
if($i%10==0){
echo "<BR>";
}
echo " <a href=\"?action=view&start=$i&cid=$cid\">$i</a> ";
}else{
echo " <b><FONT COLOR=#000000>$i</FONT></b> ";
}
}
if($start < $i-1){
$n=$start+1;
$next = " <a href=\"?action=view&start=$n&cid=$cid\">Next</a>";
}elseif($start>=$i){
$next =  "";
}
echo "$next</font>";
}
}
}
}
?>
<HR color=#E6e6e6>
</BODY>
</HTML>