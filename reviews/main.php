<script type="text/javascript">
function textCounter(field, countfield, maxlimit) {
if (field.value.length > maxlimit)
field.value = field.value.substring(0, maxlimit);
else
countfield.value = maxlimit - field.value.length;
}
function form_visible(){
var el = document.getElementById('sf');
if(el.style.display == 'inline'){
el.style.display = 'none';
}else{
el.style.display = 'inline';
}
}
var shows = 0;
var lc;
var i;
var image;
var ny;


var selectedVal = '';
var selectedText = '';

function show(star_img,rnid) 
{
	for (i=1; i<=5; i++) {
		image = 'qw'+rnid + i;
		ny = document.getElementById(image);
		ny.src="../../../reviews/images/blank.gif";
		document.getElementById('t0').innerHTML="&nbsp;";
	}

	for (i=1; i<=star_img; i++) {
		image =  'qw'+rnid + i;
		ny = document.getElementById(image);
		ny.src="../../../reviews/images/star.gif";
		if(i=='1'){
			document.getElementById('t0').innerHTML="Poor";
		}
		else if(i=='2'){
			document.getElementById('t0').innerHTML="Fine";
		}
		else if(i=='3'){
			document.getElementById('t0').innerHTML="Good";
		}
		else if(i=='4'){
			document.getElementById('t0').innerHTML="Very Good";
		}
		else if(i=='5'){
			document.getElementById('t0').innerHTML="Excellent";
		}
	}
}
function noshow(star_img,rnid)
{
	if (shows){
		document.getElementById('t0').innerHTML=selectedText;
		document.getElementById('rat').value=selectedVal;
		for (i=1; i<=5; i++) {
			image = 'qw'+rnid + i;
			ny = document.getElementById(image);
			if(i<= selectedVal)
				ny.src="../../../reviews/images/star.gif";
			else 
				ny.src="../../../reviews/images/blank.gif";				
		}
		return;
	} else {	
		for (i=1; i<=5; i++) {
		image = 'qw'+rnid + i;
		ny = document.getElementById(image);
		ny.src="../../../reviews/images/blank.gif";
		document.getElementById('t0').innerHTML="&nbsp;";
		}
 	}	
}
function mark(star_img,rid)
{
	show(star_img,rid);
	shows = 1;
	lc=rid;
	var n = document.getElementById('n'+rid);
	var b = document.getElementById('t0');
	if(star_img=='1'){
		document.getElementById('t0').innerHTML="Poor";
		document.getElementById('rat').value="1";
		selectedVal = '1';
		selectedText = 'Poor';
	}
	else if(star_img=='2'){
		document.getElementById('t0').innerHTML="Fine";
		document.getElementById('rat').value="2";
		selectedVal = '2';
		selectedText = 'Fine';
	}
	else if(star_img=='3'){
		document.getElementById('t0').innerHTML="Good";
		document.getElementById('rat').value="3";
		selectedVal = '3';
		selectedText = 'Good';
	}
	else if(star_img=='4'){
		document.getElementById('t0').innerHTML="Very Good";
		document.getElementById('rat').value="4";
		selectedVal = '4';
		selectedText = 'Very Good';
	}
	else if(star_img=='5'){
		document.getElementById('t0').innerHTML="Excellent";
		document.getElementById('rat').value="5";
		selectedVal = '5';
		selectedText = 'Excellent';
	}
}


function showform(raid){
document.write("<table width=\"100%\" border=\"0px\"><tr><td width=\"100px\"><span>");
for (var i=1; i<=5; i++) {
document.write("<img src=\"../../../reviews/images/blank.gif\" id=qw"+raid+i+" onmouseover=\"show("+i+","+raid+")\" onmouseout=\"noshow("+i+","+raid+")\" onclick=\"mark("+i+","+raid+")\">");
}
document.write("</span></td><td align=left><span id=t0>Please Select</span></td></tr></table><input type=hidden id='rat' name='rating' />");
}
</script>
<?php
@session_start();
include "conf.php";
foreach($_GET AS $key => $value) {
${$key} = $value;
} 
foreach($_POST AS $key => $value) {
${$key} = $value;
} 

//$db=mysql_connect($db_host,$database_user,$database_pass) or die("<b>MySQL Error:</b> Unable to connect to database please check that you have provided the correct <li>Database Login username<li>Database Login Password");
$db=mysql_connect('localhost',$database_user,$database_pass) or die("<b>MySQL Error:</b> Unable to connect to database please check that you have provided the correct <li>Database Login username<li>Database Login Password");
mysql_select_db($db_name,$db)or die("<b>MySQL Error:</b> Unable to select database please check that you have provided the correct <li>Database name");
echo "<br /><a href=\"#main\" onclick=\"form_visible();\"><img src=\"../../../reviews/images/comment_but.png\" alt=\"Show Form\" border=\"0px\"></a><br />";
$day =date("D d");
$month =date("M");
$year =date("Y");
$dt="$year-$month-$day";
$ent=mysql_query("SELECT * FROM ez_ccomment_opt");
$rowi=@mysql_fetch_array($ent);
if($do=="do_sign" && $id=="$mid"){
if ($comment !="" && $name !=""){
if(md5($_POST['security']) == $_SESSION['image_random_value']){
$comment = str_replace ("<","&lt", $comment);
$comment = str_replace (">","&gt", $comment);
$name = str_replace ("<","&lt", $name);
$name = str_replace (">","&gt", $name);
$email = str_replace ("<","&lt", $email);
$email = str_replace (">","&gt", $email);
$website = str_replace ("<","&lt", $website);
$comment = str_replace ('"',"&quot", $comment);
$comment = str_replace ("'","&#39;", $comment);
$name = str_replace ("'","&#39;", $name);
$email = str_replace ("'","&#39;", $email);
$comment = str_replace ("\n", "<br />", $comment);
$comment = str_replace ("<br /><br />", "<br />", $comment);
$name = stripslashes ($name);
$comment = stripslashes ($comment);
$lis="0";
if($rowi[filter]=="y"){
$user=file("../../../reviews/badwords.txt");
for($x=0;$x<sizeof($user);$x++) {
$comment = str_replace($temp[0],"-",$comment);
$jemp = explode(";",$user[$x]);
$opp[$x] = "$jemp[0];";
$list[$lis] = $opp[$x];
$lis++; 
}
if(sizeof($list) != "0") {
for($y=0;$y<sizeof($list);$y++) {
$temp = explode(";",$list[$y]);
$temq=ucwords($temp[0]);
$temr=ucfirst($temp[0]);
$tems=strtoupper($temp[0]);
$comment = str_replace ($temp[0],"-", $comment);
$comment = str_replace ($tep,"-", $comment);
$comment = str_replace ($temq,"-", $comment);
$comment = str_replace ($temr,"-", $comment);
$comment = str_replace ($tems,"-", $comment);
$name =	str_replace ($temp[0],"-",$name);
$name = str_replace ($temq,"-",$name);
$name = str_replace ($temr,"-",$name);
$name = str_replace ($tems,"-",$name);
}
}
}
$time=date("D M d, Y");
if($rowi[auto]=="y"){
$insert=@mysql_query("INSERT INTO ez_ccomment SET name='$name', email='$email',website='$website',message='$comment',date='$time',rating='$rating',status='confirmed',ccid='$mid'");
}else{
$insert=@mysql_query("INSERT INTO ez_ccomment SET name='$name', email='$email',website='$website',message='$comment',date='$time',rating='$rating',status='unconfirmed',ccid='$mid'");
}
if($insert){
print "Thank you for adding your comment.";
}
}else{
$w="1";
echo "<font color=red>Please enter valid security image.</font>";
}
}else{
$w="1";
echo "<font color=red>Please fill in the required fields.</font>";}
}
ob_start();
echo "<table width=\"99%\" cellspacing=\"0px\"><tr><td width=\"100%\">";
echo "<span id=\"sf\" style=\"display:none\"><form method=post action=\"?do=do_sign\"><table style=\"margin-top:8px; padding-left:8px;padding-top:8px;\" cellpadding=\"3px\" cellspacing=\"0px\" align=\"left\" width=\"100%\"background=\"../../../reviews/images/bgray.gif\"><tr><td style=\"border-bottom:0px;border-right:0px;border-left: #e6e6e6 0px solid;\" width=\"100px\"><b>Rating</b></td><td style=\"border-bottom:0px;border-left:0px;border-top:0px;border-right: #e6e6e6 0px solid;\">";
?>
<script type="text/javascript">showform(1);</script>
<?php
echo "</td></tr>";
echo "<tr><td valign=\"top\" style=\"border-bottom:0px;border-right:0px;border-left: #e6e6e6 0px solid;\" width=\"100px\"><b>Your Comment</b>*</td><td style=\"border-bottom:0px;border-left:0px;border-top: 0px;border-right: #e6e6e6 0px solid;\"><textarea name=comment rows=\"4\" cols=\"30\" onkeydown=textCounter(this.form.comment,this.form.descriptionleft,$rowi[limit_max]); onkeyup=textCounter(this.form.comment,this.form.descriptionleft,$rowi[limit_max]);></textarea> </td></tr>
<input type=hidden maxLength=\"3\" name=descriptionleft tabIndex=\"$rowi[limit_max]\" value=\"$rowi[limit_max]\" />
<tr><td style=\"border-bottom:0px;border-right:0px;border-top: 0px;border-left: #e6e6e6 0px solid;\"  width=\"100px\"><b>Name*</b></td><td style=\"border-bottom:0px;border-left:0px;border-top: 0px;border-right: #e6e6e6 0px solid;\"><input type=text name=name maxlength=\"35\" size=\"28\" /></td></tr>
<tr><td style=\"border-bottom:0px;border-right:0px;border-top: 0px;border-left: #e6e6e6 0px solid;\"  width=\"100px\"><b>Email</b></td><td style=\"border-bottom:0px;border-left:0px;border-top: 0px;border-right: #e6e6e6 0px solid;\"><input type=text name=email maxlength=\"35\" size=\"28\" /> (Will not be shown)</td></tr>

<tr><td style=\"border-bottom:0px;border-right:0px;border-left: #e6e6e6 0px solid;\"  width=\"100px\"><b>Security Image*</b></td><td valign=\"top\" style=\"border-bottom:0px;border-left:0px;border-top:0px;border-right: #e6e6e6 0px solid;\"><table width=\"200px\"><td width=\"100px\"><input type=text name='security' maxlength=\"8\" size=\"8\"></td><td width=\"100px\"><img src=\"../../../reviews/image.php\"></td></table></td></tr>
<input type=hidden name=mid value=\"$id\" /><tr><td style=\"border-right:0px;border-top:0px;border-left: #e6e6e6 0px solid;border-bottom: #e6e6e6 0px solid;\"><br /><br /><br /></td><td valign=\"top\" align=\"left\" style=\"border-left:0px;border-right: #e6e6e6 0px solid;border-bottom: #e6e6e6 0px solid;\"><b style=\"font-size:9px;\">* Required fields</b><br /><br /><input type=submit value=Submit style=\"height: 40px; width: 180px;font-weight:bold;\"/></td></tr></table></form><br /></span>";
echo "</td></tr><tr><td>";
ob_end_flush();
if($w=="1"){
?>
<script type="text/javascript">
var el = document.getElementById('sf');
el.style.display = 'inline';
</script>
<?php
}
echo "<table width=\"100%\"><tr><td>";
$list = ("SELECT * FROM ez_ccomment WHERE status='confirmed' AND ccid='$id' ORDER BY op DESC");
$row_num1= @mysql_num_rows(mysql_query($list));
$list_per_page=$rowi['limit_pp'];
if($row_num1>0){
echo "<span id=fit><strong style=\"color:#B06121; font-size:20px;\">Reviews and Comments:</strong></span>";
}else{
echo "<b>No ratings yet. Be the first to add a rating!</b>";
}
if($start==''){
$start=1;
}
if($start==""||$start==1){
$sfrom=0;
}else{
$sfrom=(($start-1)*$list_per_page);
}
$end=$list_per_page;
$gr=0;
$list.=	(" LIMIT $sfrom,$end");
$blist=(mysql_query($list));
while($row=@mysql_fetch_array($blist)){
if(substr_count($row[email],"@")==1){
$name="$row[name]";
}else{
$name="$row[name]";
}
$messag="$row[message]";
$messag=wordwrap($messag, 55, "\n", 1);
$row[rating]=round($row[rating],2);
if ($row[rating] == 5)
{
	$star = "../../../reviews/images/5star.gif" ;
	$pk="5 - Excellent!";
}
if ($row[rating]>=1 && $row[rating]<2)
{
	$star = "../../../reviews/images/1star.gif" ;
	$pk="1 - Poor";
}
if ($row[rating]>=2 && $row[rating]<3)
{
	$star = "../../../reviews/images/2star.gif" ;
	$pk="2 - Fine";
}

if ($row[rating]>=3 && $row[rating]<4)
{
	$star = "../../../reviews/images/3star.gif" ;
	$pk="3 - Good";

}	
if ($row[rating] >= 4 && $row[rating]<5)
{
	$star = "../../../reviews/images/4star.gif" ;
	$pk="4 - Very Good";

}	

if ($row[rating] >= 5)
{
	$star = "../../../reviews/images/5star.gif" ;
	$pk="5 - Excellent!";
}	
if ($row[rating]<=0)
{
	$star = "../../../reviews/images/00star.gif" ;
	$pk="N/A";
}
echo "<table style=\"padding-bottom:0px;\" width=\"100%\" align=\"center\" cellpadding=\"0px\" cellspacing=\"0px\"><tr><td width=\"12%\" style=\"padding-top:4px; padding-bottom:2px; border-top: #CCCCCC 1px solid;\"><img src=\"$star\"></td><td width=\"88%\" style=\"padding-top:4px; padding-bottom:2px; border-top: #CCCCCC 1px solid;\">&nbsp;</td></tr><tr><td style=\"padding-bottom:5px; font-family:Verdana, Geneva, sans-serif; font-size:8.5pt; font-style:italic;\" width=\"100%\" colspan=2>$messag</td></tr><tr><td width=\"100%\" colspan=2 style=\"padding-bottom:4px; font-size:8pt;\"><b style=\"color:#B06121; font-size:10px;\">$row[name], $row[date]</b></td></tr></table>";
$gr+=1;
}
$list_per_page=$rowi['limit_pp'];
echo "<font face=arial>";
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
echo "<center>";
echo "<table width=\"50%\" align=\"center\" border=\"0px\">";
if($start > 1){
$s=$start-1;
echo "<td width=\"2%\"><a class='pagereview gradient' href=\"?start=$s&id=$id#fit\">Previous</a></td>";
}
echo "<td width=\"96%\" align=\"center\">";
$last=round($no_of_page,0);
for($i=1;$i<=$no_of_page;$i++){
if($no_of_page<=10){
if($i!=$start){
echo " <a class='pagereview gradient' href=\"?start=$i&id=$id#fit\">$i</a> ";
}else{
echo " <b><font class='pagereview active'>$i</font></b> ";
}
}else{
if($i>$start+3){
if($once==""){
echo " ....... <a class='pagereview gradient' href=\"?start=$last&id=$id#fit\">$last</a>";
}
$once="yes";
}elseif($i<$start-3){
if($tonce=="" && ($start-3)>0){
echo "<a class='pagereview gradient' href=\"?start=1&id=$id#fit\">1</a> ....... ";
}
$tonce="yes";
}else{
if($i!=$start){
echo " <a class='pagereview gradient' href=\"?start=$i&id=$id#fit\">$i</a> ";
}else{
echo "<font class='pagereview active'> <b>$i</b> </font>";
}
}
}
}
echo "</td>";
if($start < $i-1){
$n=$start+1;
$next = "<td width=2%><a class='pagereview gradient' href=\"?start=$n&id=$id#fit\">Next</a></td>";
}elseif($start>=$i){
$next =  "";
}
echo "$next</table></center>";
}
echo "</td></tr></table></td></tr></table>";
?>
