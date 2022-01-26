<?PHP
	

show_widgets('Waikiki','https://www.google.com');

function show_widgets($area=null,$url=null) {
	$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");
mysql_select_db('tohawaii_kania_hawaii', $db);
	
	$location= $area;
	
	
	
	$condition = '';
    if(!empty($area))
    {
		
        $condition = "AND  (city = '" . mysql_real_escape_string($location) . "' OR  region like '%|".mysql_real_escape_string($location)."|%')";
		
    }


	$query = "Select a.`uniturl`, `bathrooms`, `bedrooms`, `sleeps`, `href`, `thumbnailUrl`, `headline`, `description`, `state`, `city`, `country`, `region`, 
		`source`, `property_type`, `location_type`, `suitability`, `features`, `address`,round(price) as price,minimum_nights, `rating`, `review_count` 
		from `vacationrentalindex` a  inner join vacationrentalindexfeed b on a.uniturl=b.unitUrl and b.enabled=1 ";
		
	$query.=" where 1  and source like '%VRBO%' and  round(price)>0  and bedrooms>0 $condition order by  rating desc LIMIT 5 ";

	
	
	
	$result = mysql_query($query);
	// $result=mysql_fetch_assoc($result);
	
	// print_r($result);die;
	
    if ($result)
    {
        while ($row = mysql_fetch_assoc($result))
        {
            
			//$row['rates'] = json_decode($row['rates'], true);
            $rowdata[] = $row;
        }

    }
	
	?>
	
	
	
	<script src="https://www.to-hawaii.com/jquery-1.12.4.min.js"></script>
	
	<style>


.slider {
    width: 620px;
    height: 190px;
    overflow: hidden;
    position: relative;
	    margin-left: 25px;
}

.slider__arrow {
    width: 20px;
    height: 174px;
    position: absolute;
   <!-- top: 35%;-->
    background-color: #fff;
    text-align: center;
    line-height: 20px;
    color:#3294FD;
    z-index: 9;
    cursor: pointer;
	padding-top: 69px;
}

.slider__left { left: 0; }
.slider__right { right: 0; }

.slider__container {
    width: 1200px;
    height: 190px;
    position: absolute;
    top: 0;
    left: 20px;
}

.slider__item {
    width: 200px;
    height: 190px;
	padding:5px;
    <!--line-height: 170px;-->
    <!--background: pink;-->
    display: block;
    float: left;
    <!--text-align: center;-->
}

.divname{
white-space: pre-line;
    overflow: hidden;
    width: 100%;
    word-wrap: break-word;
	min-height: 35px;
	max-height: 35px;
	font-weight: bold;
}

.div_image{
width:160px;height:100px;padding-top: 5px;padding-bottom: 5px;
}

.div_name{
max-height: 45px;
margin-bottom: 2px;
    margin-top: 2px;
max-width: 160px;white-space: pre;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;
font-style: normal;
    font-variant-ligatures: normal;
    font-variant-caps: normal;
    font-variant-numeric: normal;
	font-family:Arial, Helvetica, sans-serif;;

}
.border{
	padding:3px;
	margin:3px;
	border:1px solid #DDDDDD;
	-webkit-box-shadow:0px 3px 1px #DDDDDD;
 -moz-box-shadow:0px 3px 1px #DDDDDD;
 box-shadow:0px 3px 1px #DDDDDD;
}
.border:hover{
	border:1px solid #97C1D4;
}

.border:hover p{
	
	    text-decoration: underline;
}

.imgleftarrow{
width: 32px;
}


.imgarrow{
width: 32px;
}

.bordertopbottom{
	
	border-bottom: 1px solid #DDDDDD !important;
}

.div_price{
	text-align: center;
	padding-top: 5px;
	font-weight: bold;
	font-style: normal;
    font-variant-ligatures: normal;
    font-variant-caps: normal;
    font-variant-numeric: normal;
	font-family:sans-serif;
	}

	#leftar{
	background: white;
	}
	

	
	.slider{
	width: 625px;
	margin-left:0px;
}
.div_name{
	color:#1561a3;
}
.div_price{
	position:relative;
}
.div_price:before{
    content: '';
    width: 182px;
    height: 1px;
    background: #e4e4e4;
    position: absolute;
    left: -10px;
    bottom: 25px;
    z-index: 111;
}
.div_price:after {
    content: '';
    width: 182px;
    height: 33px;
    background: #f1f3f5;
    position: absolute;
    left: -10px;
    bottom: -7px;
    z-index: -11;
}

.slider__item:last-child a{
	color:#0000ef;
}
	
<?PHP
// .slider__item:hover {
    // background-color: #F7F7F7;
// }
?>
</style>

<script>
$(function() {
$("#leftar").hide();
    $('.slider__arrow').on('click', function(e) {
	
		
        var isLeft = $(this).hasClass('slider__left');
		$(".slider__container").animate({
            left: (isLeft) ? "+=200" : "-=200",
			callback:(isLeft) ?((!$("#div3").is(":visible"))?$("#leftar").hide(): $("#leftar").show()) :(!$("#div3").is(":visible"))?$("#leftar").hide(): $("#leftar").show(),
        }, 100);
		
		setTimeout(function () {
			if(document.getElementById("div_slider__container").style.left == "20px"){
				$("#leftar").hide()
			}else{
				$("#leftar").show()
			}
			if(document.getElementById("div_slider__container").style.left == "-580px"){
				$("#rightar").hide()
			}else{
				$("#rightar").show()
			}
		}, 110);
        
		
    });
    
});



</script>

<body>
<div class="slider">
 <div id="leftar" class="slider__arrow slider__left"><img src="https://www.to-hawaii.com/widget/arrow_left.png" class="imgleftarrow" /></div>
    <div id="rightar"   class="slider__arrow slider__right"><img src="https://www.to-hawaii.com/widget/arrow_right.png" class="imgarrow" /></div>
    <div class="slider__container" id="div_slider__container">
	
	<?PHP
	$i=1;
	
	foreach ($rowdata as $data){
	
	$images = explode("|", $data['thumbnailUrl']);
	
	?>
	
	<div class="slider__item" id="div<?PHP echo $i; ?>"><a style="text-decoration: none;cursor: pointer;" href="<?php echo $data['href']; ?>" target="_blank" rel="nofollow">
			<div class='border'>
			<table>
				<tr width=10% height=10%><td class="divname"><div class="div_name" ><?PHP echo $data['headline']; ?></div></td></tr>
				<tr><td class="bordertopbottom"><img src="<?php echo $images[0];?>" class="div_image"></td></tr>
				<tr><td class="div_price">$ <?PHP echo $data['price']; ?></td><tr>
			</table>
			</div>
			</a>
		</div>
	
	<?PHP
	$i++;
	}
	
?>
<div id="div6" class="slider__item" style="line-height: 155px;text-align: center;">
	<a style="text-decoration: none;cursor: pointer;" href="<?php echo $url; ?>" target="_blank" rel="nofollow">
	<div class='border'>
		<p>view more vacation rentals</p>
	</div>
	</a>	
</div>
</div>
</div>
</body>
<?PHP
}
?>

	
	
	
	