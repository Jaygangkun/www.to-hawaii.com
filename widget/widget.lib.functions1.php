<?PHP
header("Content-Type: text/html; charset=utf-8", true);
function show_widgets($area=null,$url=null,$sortby=null) {
	$db = mysql_connect('localhost','tohawaii_vrwin5m','@dvrjj4%&ww') or die("Database error");
	mysql_select_db('tohawaii_kania_hawaii', $db);
	$location= $area;
	$condition = '';
    if(!empty($area))
    {
		$condition = "AND  (city = '" . mysql_real_escape_string($location) . "' OR postalCode = '" . mysql_real_escape_string($location) . "'  OR  region like '%|".mysql_real_escape_string($location)."|%')";
	}
	$sortbycondition="order by  rating desc";
	if(!empty($sortby))
    {
		if($sortby=="price_asc")
		{
			$sortbycondition = " order by price asc";
		}
		else if($sortby=="rating_desc")
		{
			$sortbycondition = " order by rating desc";
		}
		else
		{
			$condition = "";
			$sortbycondition = " and a.uniturl in ($sortby)";
		}
		
		
	}

	include('oahu_regions.php');

	$registration = '';
	
	if (in_array(strtolower($area), $oahu_regions)) {
		$registration = "and registration_number !=''";
	}
	
	$query = "Select a.`postalCode`,a.`uniturl`, `bathrooms`, `bedrooms`, `registration_number`, `sleeps`, en_US_VRBO as href, `thumbnailUrl`, `headline`, `description`, `state`, `city`, `country`, `region`, 
		`source`, `property_type`, `location_type`, `suitability`, `features`, `address`,round(price) as price,minimum_nights, `rating`, `review_count` 
		from `vacationrentalindex` a  inner join vacationrentalindexfeed b on a.uniturl=b.unitUrl and b.enabled=1 ";
		
	$query.=" where 1 and  round(price)>30  and bedrooms>=0 $registration $condition $sortbycondition  LIMIT 5 ";

	
	///echo $query;exit;
	$result = mysql_query($query);
	
    if ($result)
    {
        while ($row = mysql_fetch_assoc($result))
        {
            
            $rowdata[] = $row;
        }

    }
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://www.to-hawaii.com/widget/swiper.min.css">
<style>
.swiperHolder {
	width:100%;
	max-height:200px;
	position:relative;
	margin-left:0;
	margin-bottom:10px;
}
.swiper-container {
	width:95%;
	height: 100%;
	padding:0;
}
.swiper-wrapper {
}
.swiper-slide {
	margin-left:3px;
	max-width:143px;
	text-align: center;
	font-size: 18px;
	background: #fff;
	min-height:180px;
	max-height:180px;
	/* Center slide text vertically */
			display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	/*align-items: center;*/
			align-items: flex-start;
	border: 1px solid #dddddd;
	-webkit-box-shadow: 0 2px 1px #ddd;
	box-shadow: 0 2px 1px #ddd;
}
.swiper-slide.viewMore {
	align-items: center;
	position:relative;
	overflow:hidden;
	margin-left:-2px;
}
.swiper-slide:hover {
	border:1px solid #2F83AA;
}
.placeInner {
	width:100%;
	padding:5px 0 0 0;
	text-decoration:none;
}
.placeInner img {
	width:95%;
	min-height:110px;
	max-height:110px;
	object-fit:cover;
}
.place_name {
	white-space:nowrap;
	overflow:hidden;
	text-overflow: ellipsis;
	padding:0 5px 5px 5px;
	font-weight: bold;
	color: #1561a3;
	font-style: normal;
	font-variant-ligatures: normal;
	font-variant-caps: normal;
	font-variant-numeric: normal;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.price {
	margin: 0px;
	border-top: 1px solid #e4e4e4;
	line-height: 22px;
	background: #f1f3f5;
	padding: 5px 0;
	font-weight: bold;
	font-style: normal;
	font-variant-ligatures: normal;
	font-variant-caps: normal;
	font-variant-numeric: normal;
	font-family: sans-serif;
	position: absolute;
	bottom: 0;
	width: 100%;
	color:#000000;
	font-size: 16px;
	text-align:center;
}
.viewMoreVacation {
	padding:20px;
	text-decoration:none;
	font-family: Arial, Helvetica, sans-serif;
	font-size:18px;
	position:relative;
	z-index:11;
	color:#fff;
	text-shadow:1px 1px 1px rgba(0, 0, 0, 0.5);
	line-height:22px;
}
.viewMoreVacationBG {
	background:url('https://www.to-hawaii.com/images/background-vrbo.jpg') no-repeat;
	background-size:cover;
	filter:blur(3px);
	position:absolute;
	width:110%;
	height:110%;
	top:-10px;
	left:-10px;
}
.swiper-button-prev, .swiper-button-next {
	top: 110px;
	width: 27px;
	height: 24px;
	margin-top: 0px;
}
.swiper-button-prev {
	left:-5px;
}
.swiper-button-next {
	right:-5px;
}
 @media (max-width:480px) {
 .swiper-slide {
 min-height:150px;
 max-height:150px;
}
 .placeInner img {
 min-height:82px;
 max-height:82px;
}
}

</style>
<body>
<!-- Swiper -->
<div class="swiperHolder">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?PHP
	$i=1;
	
	foreach ($rowdata as $data){
	
	$images = explode("|", $data['thumbnailUrl']);
	
	
		
				 $vrboURL=$data['href'];	
	 $images_thumbnail=str_replace('c10.jpg','c3.jpg',$images[0]);
	?>
      <div class="swiper-slide"> <a class="placeInner"  target="_blank" rel="nofollow" href="<?php echo $vrboURL; ?>">
        <div class="place_name" ><?PHP echo $data['headline']; ?></div>
        <img src="<?php echo $images_thumbnail;?>" class="place_image">
        <p class="price">$ <?PHP echo $data['price']; ?></p>
        </a> </div>
      <?PHP
					$i++;
					}
					
				?>
      <div class="swiper-slide viewMore"> <a class="placeInner" href="<?php echo $url; ?>">
        <div class="viewMoreVacation">View more vacation rentals</div>
        <div class="viewMoreVacationBG"></div>
        </a> </div>
    </div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<!-- Swiper JS -->
<script src="https://www.to-hawaii.com/widget/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 'auto',
        spaceBetween: 10,
        breakpoints: {
            1024: {
                slidesPerView:3,
            },
            768: {
                slidesPerView: 3,
            },
            540: {
                slidesPerView: 2,
            },
            300: {
                slidesPerView: 1,
            }
        }
    });
$(document).ready(function ($) {
	$('.placeInner').click(function(){
		var href = $(this).attr('href');
		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();
		var arriveDate = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day + '/' + d.getFullYear();
		d = new Date();
		d.setDate(d.getDate() + 7);
		var month = d.getMonth()+1;
		var day = d.getDate();
		var departDate = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day + '/' + d.getFullYear();
		href = href+'&arrivalDate='+arriveDate+'&departureDate='+departDate+'&adultsCount=2';
		location.href = href;
		return false;
	});
});

    </script>
</body>
<?PHP
}
?>
