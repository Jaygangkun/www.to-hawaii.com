<?php

header("Content-Type: text/html; charset=utf-8", true);

session_start();
require_once "lib.functions_map_functions1.old.php";


function show_rentals_list($area=null,$hotel=null) {
    ?>
	<link href="https://www.to-hawaii.com/style/kani.css?v=1" rel="stylesheet" type="text/css" />
	
	<link href="https://www.to-hawaii.com/style/jquery.ui.css" rel="stylesheet" />
    <!--<link href="https://www.to-hawaii.com/style/bootstrap.css" rel="stylesheet" />-->
    <link href="https://www.to-hawaii.com/style/bootstrap-datetimepicker.min.css" rel="stylesheet" />
	
	<style>
	
	.min-stay {
		color: #353e44;
    font-size: 12px;
    line-height: 16px;
	}
.rates{
	    width: 100%;
    text-align: right;
    padding: 10px 10px 10px 15px;
    background-color: #f1f3f5;
    position: absolute;
    bottom: 0;

}
.comment{ 
	 font-style: italic;
	color:#312c2c;
	font-weight:400;
	float:right;
}
	.rating {
		float:right;
	}

.boxed-li {
background-color: #FFFFFF;
border:none;
list-style: none;
border-radius:5px;
overflow:hidden;
padding:0px;
margin-bottom:20px;
box-shadow: 0 1px 3px rgba(0,0,0,.2);
}

.boxed-li:hover {
	box-shadow: 0 4px 8px rgba(0,0,0,.5);
}
.period {
	    color: #70767a;
    font-size: 16px;
    font-weight: 300;
    margin: 0;
}
button {
    border:none;
	outline:none;
    background-color: white;	
}
li {
	list-style:none !important;
}
.midpanel {width: 99% !important;}
	
	
	
		.rating-static {
	  width: 60px;
	  height: 16px;
	  display: block;
	  background: url('https://www.to-hawaii.com/images/star-rating.png') 0 0 no-repeat;
	}
	.rating-50 { background-position: 0 0; }
.rating-40 { background-position: -12px 0; } 
.rating-30 { background-position: -24px 0; }
.rating-20 { background-position: -36px 0; }
.rating-10 { background-position: -48px 0; }
.rating-0 { background-position: -60px 0; }

.div_filter{
display:inline-flex;width: 100%;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

#search-box{
margin: 10px;height: 36px;width: 275px;padding-left: 10px;
padding-bottom: 6px;
padding-top: 6px;
background: none;
}

.arriveDate,.departDate{
height: 36px;margin: 10px;padding-left: 10px;width: 125px;
background: none;
}

#div_select{
height: 36px;margin: 10px;width:100px;
text-shadow: 0px 2px #FFF;
    border-radius: 3px;
    box-shadow: 2px 2px 5px 1px rgba(14, 48, 16, 0.35);
}

#quickSearchSubmit{
height: 36px;margin: 10px;width: 150px;color: black;width:70px;cursor:pointer;
text-shadow: 0px 2px #FFF;
    border-radius: 3px;
    box-shadow: 2px 2px 5px 1px rgba(14, 48, 16, 0.35);
	
	background: #e6b11f;
    color: #fff;
    text-transform: uppercase;
    border: 0;
    border-bottom: 3px solid #bb8c0d;
    float: right;
    text-shadow: 0 1px 0px rgba(0,0,0,0.3);
}

.boxdatepickerdiv{
cursor:pointer;
}

.frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
#country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:300px;position: absolute;z-index: 99;padding-left:10px}
#country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
/*#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}*/
#clearsearch{
	height: 36px;
    margin: 10px;
    /*color: black;*/
	/*text-shadow: 0px 2px #FFF;*/
    /*border-radius: 3px;*/
    /*box-shadow: 2px 2px 5px 1px rgba(14, 48, 16, 0.35);*/
	text-decoration: underline;
    color: #0000ff;
	
}

.div_list{
	display: inline-block;
    	width: 100%;
	margin: 5px;
}



@media(max-width:768px){
	.div_filter{
		display:inline-block;
	}
	.div_filter input{
		width:100% !important;
	}
	#quickSearchSubmit{
		float:left !important;
		margin: 10px 0 !important;
	}
	#country-list{
		    width: 90% !important;
	}
	#search-box{
		margin: 10px 0 !important;
	}
	.arriveDate,.departDate{
		margin: 10px 0 !important;
	}
	#div_select{
		margin: 10px 0 !important;
	}
	#clearsearch{
		margin: 10px 0 !important;
	}
	.div_list{
		margin: 5px 0px !important;
	}
	#mapdiv{
		height:50% !important;
		margin: 10px 0 !important;
	}
	.map_img{
		width:75px !important;
	}
	.div_map_img{
		width:20% !important;
	}
	.div_type{
		width:20% !important;
		padding-left: 0px !important;
        padding-right: 0px !important;
	}
	.div_map_rate{
		    width: 9% !important;
	}
	.img_pos{
		height:150px !important;
	}

}

@media(max-width:568px){

}

.map_img{
	width:150px;
	height:100px;
}

.div_map_img{
		width:40%;
	}

.div_type{
	padding-top: 10px;padding-left: 20px;padding-right: 20px;width: 40%;text-align: left;
}

.div_map_rate{
	padding-top: 10px;float: right;width: 18%;
}


#mapdiv{
	width:100%;height:600px;display:none;
}


.div_rate_map{
   /* width: 120px;*/
    font-weight: bold;
    position: absolute;
    bottom: 0;
    color: white;
    background-color: rgba(0, 0, 0, 0.65);
}
.map_img_pos{
	position:relative;
}
.img_pos{
	width:250px;
	height:200px;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
	.safari{
		float:left;
	}
	
}
@media (max-width:768px){
	.safari{
		float:none;
	}
	.safarilist{
		display:table-cell;
	}
}
.message_confirmation
{
	border: 1px solid;
margin: 10px 0px;
padding:15px 10px 15px 50px;
background-repeat: no-repeat;
background-position: 10px center;
color: #9F6000;
background-color: #FEEFB3;
font-family: Verdana;
}


#btn_list, #btn_map {font-size: 15px;
font-family: Verdana;
}


#btn_map {
background-color: #3D860F !important;
}



 </style>
	
	
	
	
    <form name="SortRes" id="SortRes" method="post">
		<input type="hidden" id="hdnSort" name="hdnSort">
		<input type="hidden" id="hdnarea" name="hdnarea" value="<?PHP echo $area; ?>">
        <div style="padding: 5px 10px 5px 10px;">
			<div class="div_filter">
				<div class="safari">
					<input type="text" name="destination" value="<?PHP echo (!empty($_POST['destination'])? $_POST['destination'] : ""); ?>" id="search-box" placeholder="Where do you want to go?"  autocomplete="off" onkeydown="if (event.keyCode == 13) return false;" >
					<div id="suggesstion-box"></div>
				</div>
			<div class="boxdatepickerdiv safari">
				<input type="text" name="arriveDate" value="<?PHP echo (!empty($_POST['arriveDate'])? $_POST['arriveDate'] : ""); ?>" id="arriveDate" class="arriveDate" placeholder="Check in" autocomplete="off" maxlength="10" style="" >
				<!--<img class="ui-datepicker-trigger" src="https://assets.vacationhomerentals.com/res/1380077832/assets/hl-public/images/calendar_idle.png" alt="..." title="..." style="margin-left: -35px;">    -->
			</div>
			<div class="boxdatepickerdiv safari"> 
				<input type="text" name="departDate" value="<?PHP echo (!empty($_POST['departDate'])? $_POST['departDate'] : ""); ?>" id="departDate" class="departDate" placeholder="Check out" autocomplete="off" maxlength="10" style="">
				<!--<img class="ui-datepicker-trigger" src="https://assets.vacationhomerentals.com/res/1380077832/assets/hl-public/images/calendar_idle.png" alt="..." title="..." style="margin-left: -35px;">    -->
			</div>
			<div class="hlSelectWrap safari">
                <select id="div_select" name="guests-adult" style="">
					
					<?php
					for($i=1;$i<12;$i++){
						if($i==$_POST['guests-adult']){
							echo '<option value="'.$i.'" selected>'.$i.' guests</option>';
						}else{
							echo '<option value="'.$i.'">'.$i.' guests</option>';
						}
					}
					?>
					
					
                  </select>
            </div>

			<div class="safari">
				<button name="" type="button" id="quickSearchSubmit" onclick="javascript:submitSearchForm();" >Search</button>
			</div>
			<div class="safari">
				<button name="" type="button" id="clearsearch" onclick="javascript:clearSearchForm();" >Clear</button>
			</div>
			</div>
            <div class="gtAltNSSortBarTst">
                <div class="hidden-xs sort-bar-northstar">    <div class="sort-bar__label font_class">Sort By </div>
                <div class="sort-bar__divider"></div>
                    <ul class="sort-bar-options" style="padding-left: 0px;">
							<button class="sort-bar-option" name="sort" value="rating&desc"  onclick="javascript:submitForm(0,'rating&desc');" >
								 Default View
							</button>
							<button class="sort-bar-option" name="sort" value="price&asc"  onclick="javascript:submitForm(0,'price&asc');" >
								 Price: Low to High
							</button>
							<button class="sort-bar-option" name="sort" value="price&desc"   onclick="javascript:submitForm(0,'price&desc');">
                                Price: High to Low
                            </button>
                            <button class="sort-bar-option" name="sort" value="bedrooms&asc"  onclick="javascript:submitForm(0,'bedrooms&asc');" >
                               Bedrooms: Least to Most
                            </button>
                            <button class="sort-bar-option" name="sort" value="bedrooms&desc" onclick="javascript:submitForm(0,'bedrooms&desc');" >
                                Bedrooms: Most to Least
                            </button>
                    </ul>
					
					
					<script>
					function submitForm(typeofsort,sortval)
					{
						if(typeofsort==0)
						{
							document.getElementById('sort1').selectedIndex=0;
							document.getElementById('hdnSort').value=sortval;
						}
						else
						{
							var esort = document.getElementById("sort1");
							document.getElementById('hdnSort').value = esort.options[esort.selectedIndex].value;
						}
						//alert(document.getElementById('hdnSort').value);
						document.getElementById('SortRes').submit();
						return true;
					}
					
					function submitSearchForm(){
						
							var esort = document.getElementById("sort1");
							document.getElementById('hdnSort').value = esort.options[esort.selectedIndex].value;
						
						
						document.getElementById('SortRes').submit();
						return true;
					}
					
					function clearSearchForm(){
						
						document.getElementById("search-box").value = "";
						document.getElementById("arriveDate").value = "";
						document.getElementById("departDate").value = "";
						document.getElementById('div_select').selectedIndex=0;
						document.getElementById('SortRes').submit();
						return true;
					}
					
					
					
					</script>
					
					
					 <ul class="sort-bar-select" style="padding-left: 0px;">
                    	<select onchange="javascript:return submitForm(1,'');" id="sort1" name="sort1">
						     <option value="" <?php if($_POST['sort1'] == "") echo 'selected'; ?> >Select</option>
							 <option value="rating&desc"   <?php if($_POST['sort1'] == "rating&desc") echo 'selected'; ?> >Default View</option>
                    		<option value="price&asc"   <?php if($_POST['sort1'] == "price&asc") echo 'selected'; ?> >Price: Low to High</option>
                            <option value="price&desc" <?php if($_POST['sort1'] == "price&desc") echo 'selected'; ?>>Price: High to Low</option>
                            <option value="bedrooms&asc" <?php if($_POST['sort1'] == "bedrooms&asc") echo 'selected'; ?>>Bedrooms: Least to Most</option>
                            <option value="bedrooms&desc" <?php if($_POST['sort1'] == "bedrooms&desc") echo 'selected'; ?> >Bedrooms: Most to Least</option>
                        </select>
                    </ul>
                </div>
            </div>
			
			<div class="div_list"> 
				
				<div style="float: right;display:inline-flex">
					<div id="btn_list" class="safarilist" style="width: 100px;height: 30px;cursor:pointer;text-align: center;vertical-align: middle;padding-top: 5px;">List</div>
					<div id="btn_map" class="safarilist" style="width: 100px;height: 30px;background-color:#2A5DB0;color:#fff;cursor:pointer;text-align: center;vertical-align: middle;padding-top: 5px;">Map</div>
				</div>
                
           
			</div>
			
            <ul id="div_ul" style="padding-left: 0px;">
                <div class="boxed-hit" style="border:none;">
                <?php
				
				
				
				if(!empty($_POST['hdnSort']))
				{
					$_SESSION['ssnSort'] =$_POST['hdnSort'];
				}
				
				
				
				$sortby=$_SESSION['ssnSort'];
				//echo $sortby;
				
				// if($_POST['sort1']=="")
				// {
					// $sortby=$_POST['sort'];
				// }
				// else
				// {
					// $sortby=$_POST['sort1'];
				// }
				
				// if(empty($_POST['destination'])){
					 // $data_all = getObj($sortby,$_POST['page'], $area);
				// }else{
				
                $data_all = getObj($sortby,$_POST['page'], $area, $_POST['destination'], $_POST['arriveDate'], $_POST['departDate'], $_POST['guests-adult'],15,"21.2759167","-157.8233677",$hotel);
                
				//}
				
				//echo count($data_all['data']);
				
				if(count($data_all['data'])>0){
				
				if ($data_all['data']){
                //echo "<pre>";print_r($data_all);exit;
                foreach ($data_all['data'] as $data){
				
				$images = explode("|", $data['thumbnailUrl']);
					
				$lat = $data['latitude'];
				$lng = $data['longitude'];
				$property_type = $data['property_type'];
				$rating = $data['rating'];
					
					
			 $vrboURL=$data['href'];
              $reffromdate=$_POST['arriveDate'];
			  $reftodate=$_POST['departDate'];
			  $refadultsCount=$_POST['guests-adult'];
			  
			  if(!empty($reffromdate) && !empty($reftodate))
			  {
              $vrboURL.="&arrivalDate=$reffromdate&departureDate=$reftodate&adultsCount=$refadultsCount";
			  }
					
                ?>
				
				<div id="clearallMappoints"></div>
				
				
				<input type="hidden" id="hdnmapsortby" value="<?php echo $sortby; ?>" name="hdnmapsortby">
				<input type="hidden" id="hdnmappage" value="<?php echo $_POST['page']; ?>" name="hdnmappage">
				<input type="hidden" id="hdnmaparea" value="<?php echo $area; ?>" name="hdnmaparea">
				<input type="hidden" id="hdnmaphotel" value="<?php echo $hotel; ?>" name="hdnmaphotel">
				
				
				
				
				
				<li class="boxed-li">
				<input type="hidden" value="<?php echo $data['uniturl']; ?>"/>
                <div class="box-content box-li">
                    <div class="boxed-hit" style="width: 40%;margin-bottom:0px;">
                        <div class="hit-thumbnail-container">
                            <div class="hit-thumbnail-wrappers-container primary" style="height:250px;">
                                <div class="hit-thumbnail-wrappers">
                                    <div class="hit-thumbnail-wrapper">
                                        <div class="hit-thumbnail" style="background-image: url('<?php echo $images[0];?>')">
                                            <a href="<?php echo $vrboURL ;?>" target="_blank" class="hit-url" rel="nofollow"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hit-thumbnail-wrappers-container secondary">
                                <div class="hit-thumbnail-wrappers">
                                    <div class="hit-thumbnail-wrapper">
                                        <div class="hit-thumbnail" style="background-image: url('<?php echo $images[1];?>')">
                                            <a href="<?php echo $vrboURL ;?>" target="_blank" class="hit-url" rel="nofollow"></a>
                                        </div>
                                    </div>
                                    <div class="secondary-hit-thumbnail-separator"></div>
                                    <div class="hit-thumbnail-wrapper">
                                        <div class="hit-thumbnail" style="background-image: url('<?php echo $images[2];?>')">
                                            <a href="<?php echo $vrboURL ;?>" target="_blank" class="hit-url" rel="nofollow"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="hit-content" style="width: 60%;padding: 0px;">
                        <div style="float: left;width: 100%;padding: 18px 18px 0px 18px;background: white;">
                            <h2 class="hit-headline"><a class="hit-url" style="text-decoration: none;" href="<?php echo $vrboURL ;?>" target="_blank" rel="nofollow"><?php echo $data['headline']?></a></h2>
                            <div class="clear"></div>

                            <p class="description"><?php echo tokenTruncate($data['description'],145);?></p>
							
							
							
                            <div class="bedrooms">
                                <ul class="accommodations" style="padding:0px;">
                                    <li class="accommodation">
                                        <span class="bd-bth-slps-count"><?php echo $data['bedrooms']; ?></span>
                                            bedroom
                                    </li>
                                    <li class="accommodation bbs-baths">
                                        <span class="bd-bth-slps-count"><?php echo $data['bathrooms']; ?></span>
                                        bathroom
                                    </li>
                                    <li class="accommodation bbs-sleeps">
                                        Sleeps <span class="bd-bth-slps-count"><?php echo $data['sleeps']; ?></span>
                                    </li>
                                </ul>
                                <div class="hit-breadcrumb" style="padding: 5px 0px;">
                                    <span><?php echo $data['state'].'>'; ?></span>
                                        <span><?php echo $data['city'];?></span>
                                </div>
                                
                            </div>
                        </div>

                        <div class="rates">
                            
                                <div style="text-align: left;">
                                    <div class="min-stay">
                                       <?php echo $data['minimum_nights'];?> night min stay<span class="comment"><span><?php echo $data['review_count'];?></span>&nbsp; reviews</span>
                                    </div>
                                    <div class="price-overlay">
                                    <div class="rate">
                                        <span class="currency"><?php echo "$".number_format($data['price'], 0);?></span><span class="period">&nbsp;per night</span><span class="rating">
										<span>
										<?php
										if(round($data['rating'])==0)
										{
											echo '<span class="rating-static rating-0"></span>';
										}
										else if(round($data['rating'])==1)
										{
											echo '<span class="rating-static rating-10"></span>';
										}
										else if(round($data['rating'])==2)
										{
											echo '<span class="rating-static rating-20"></span>';
										}
										else if(round($data['rating'])==3)
										{
											echo '<span class="rating-static rating-30"></span>';
										}
										else if(round($data['rating'])==4)
										{
											echo '<span class="rating-static rating-40"></span>';
										}
										else if(round($data['rating'])==5)
										{
											echo '<span class="rating-static rating-50"></span>';
										}
										
										
										?>
                                        
                                       
										 
                                    </div>
                                    &nbsp; <a href="<?php echo $vrboURL ;?>" class="booknowbutton">Book Now</a>
                                    
                                </div>
                               
                                </div>
                        
                        </div>


                    
                </div>

                               
                </li>
                <?php }
                } 
				} else { ?>
				
				<div class="message_confirmation">There is no availability for these dates. Please try a different date.</div>

				 <?php } ?>
            </ul>
        </div>

        <div id="div_page" align="center" style="cursor:hand;" >
            <?php if (empty($_POST['page']) )
            {
                $_POST['page'] = 1;
            }?>
            <?php $page = printPage($data_all['totalPages'], $_POST['page']);?>

                <?php for ($i=0; $i<count($page); $i++) {?>
                <?php if($page[$i]=="..." || $page[$i]==$_POST['page']){
                echo '<span class="active_p" style="cursor:pointer;">'.$page[$i].'</span>';
                }else {?>
                <input type="submit" name="page" value ="<?php echo $page[$i];?>"></input>
                <?php }
            } ?>
        </div>
		 
				
		<div id="mapdiv">
		
		
		
				<div id="map_canvas" style="width:100%;height:100%">
				   
				  
				
				</div>
				
				
				
			</div>
			
			
			
			
    </form>
    <?php
} 

?>

<script src="https://www.to-hawaii.com/js/jquery-1.12.4.min.js"></script>
<!--<script src="bootstrap-datetimepicker.min.js"></script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCqIijqiUJnaotq1I24NEwm4VKTNqjs_Eg&sensor=false&libraries=places"></script>
<script type="text/javascript" src="https://www.to-hawaii.com/js/jquery.googlemap.js"></script>

<script type="text/javascript" src="https://www.to-hawaii.com/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="https://www.to-hawaii.com/js/jquery-UI.js"></script>
<script type="text/javascript" src="https://www.to-hawaii.com/js/Browser.min.js"></script>
<script type="text/javascript">
var map;
var bounds = new google.maps.LatLngBounds();

$(document).ready(function ($) {
        initialize();
		
		
		
		setTimeout(function() {
		ddlselectchange();
	}, 1000);
		
		
		var area=$("#hdnarea").val();
		
		
		// $("#search-box").keyup(function(){
							// $.ajax({
							// type: "POST",
							// url: "https://www.to-hawaii.com/readCountry.php",
							// //data:'keyword='+$(this).val(),
							// data:{ keyword: $(this).val(), area: area },
							// beforeSend: function(){
								// $("#search-box").css("background","#FFF url(https://www.to-hawaii.com/images/LoaderIcon.gif) no-repeat 250px");
							// },
							// success: function(data){
								// $("#suggesstion-box").show();
								// $("#suggesstion-box").html(data);
								// $("#search-box").css("background","#FFF");
							// }
							// });
						// });
						
	/*				
	$('.booknowbutton').click(function(){
		var href = $(this).attr('href');
		if (href.indexOf("arrivalDate") >= 0) {
			location.href = href;
		}
		else {
			if ($('#arriveDate').val() && $('#departDate').val()) {
				href = href+'&arrivalDate='+$('#arriveDate').val()+'&departureDate='+$('#departDate').val()+'&adultsCount=1';
				location.href = href;
			}
			else{
				var d = new Date();
				d.setDate(d.getDate() + 1);
				var month = d.getMonth()+1;
				var day = d.getDate();
				var arriveDate = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day + '/' + d.getFullYear();
				d = new Date();
				d.setDate(d.getDate() + 8);
				var month = d.getMonth()+1;
				var day = d.getDate();
				var departDate = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day + '/' + d.getFullYear();
				href = href+'&arrivalDate='+arriveDate+'&departureDate='+departDate+'&adultsCount=1';
				location.href = href;
			}
		}
		return false;
	});
	*/
		
});

function initialize() {
		
		
		// if($(".qdiv").length>0){
		// var getlatlong=$( ".qdiv" ).last().html();
		// var newlat=getlatlong.split(",")[0];
		// var newlong=getlatlong.split(",")[1];
		
		// var mapOptions = {
			 // center: {lat:Number(newlat) , lng:Number(newlong)  },
			// //center: {lat: 21.2759167, lng: -157.8233677 },
			// zoom: 11,
			// mapTypeControl:false,
			// zoomControl:true,
			// zoomControlOptions: {position: google.maps.ControlPosition.RIGHT_TOP},
			// streetViewControl: false
		// };
		// map = new google.maps.Map(document.getElementById('map_canvas'),
				// mapOptions); 
				
		// google.maps.event.addListener(map, 'dragend', function() {
		
		// var mylat = map.getCenter().lat(); 
		// var mylng = map.getCenter().lng()
		// reloadonDrag(mylat,mylng);
		
		// } );
		
		// }else{
			
			var mapOptions = {
			center: {lat: 21.2759167, lng: -157.8233677 },
			zoom: 15,
			mapTypeControl:false,
			zoomControl:true,
			zoomControlOptions: {position: google.maps.ControlPosition.RIGHT_TOP},
			streetViewControl: false
		};
		map = new google.maps.Map(document.getElementById('map_canvas'),
				mapOptions); 
				
		google.maps.event.addListener(map, 'dragend', function() {
		
		
		reloadonDrag();
		
		} );
			
		//}
		
		    
		
		
		
	}
	function setMapOnAll(map) {
		
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
		  //alert('hi');
        }
		
		 markers = new Array();
      }
	  isfirsttime=false;
	function reloadonDrag()
	{
	
				

                var newlat = map.getCenter().lat(); 
		        var newlong = map.getCenter().lng()	
				//alert(newlat);
				 highestZIndex = 0;
				 currentInfoWindow = null; 
		
		
				var sortby=$("#hdnmapsortby").val();
				var page=$("#hdnmappage").val();
				var area=$("#hdnmaparea").val();
				var destination=$("#search-box").val();
				var arriveDate=$("#arriveDate").val();
				var departDate=$("#departDate").val();
				var guestsadult=$("#div_select").val();
				var hotel=$("#hdnmaphotel").val();
				
				//alert(guestsadult);
							$.ajax({
							type: "POST",
							url: "https://www.to-hawaii.com/lib.functions_map_reloadmap.php",
							data:{ sortby: sortby, page: page, area: area, destination: destination, arriveDate: arriveDate, departDate: departDate,guestsadult:guestsadult,newlat:newlat,newlong:newlong, hotel:hotel },
							beforeSend: function(){
								//$("#divLoading").css("display","block");
								
							},
							success: function(data){
								//alert(data);
								//console.log('#someButton was clicked');
								//console.log(data);
								$('#clearallMappoints').html('');
								//setMapOnAll(null);
								
								$("#clearallMappoints").html(data);
							var newlatlongstring=	loadMarker();
							newlat=newlatlongstring.split('~')[0];
							newlong=newlatlongstring.split('~')[1];
							
								if(isfirsttime==false)
								{
								   map.setCenter(new google.maps.LatLng(Number(newlat),  Number(newlong)));
								   google.maps.event.trigger(map, "resize");
                                   map.setCenter(new google.maps.LatLng(Number(newlat),  Number(newlong)));
                                   google.maps.event.trigger(map, "resize");
								  // alert(map.getZoom());
                                  // map.setZoom(map.getZoom());
								  //alert(Mapzoom);
								  // if(Mapzoom == undefined || Mapzoom == null)
								  // {
								  map.setZoom(15); 
								  // }
								  // else
								  // {
									  // map.setZoom(Mapzoom);
								  
								  // }
								   isfirsttime=true;
								}
								
							}
							});
						
	}
	
	
	var markers = new Array();
	var highestZIndex = 0;
	var currentInfoWindow = null; 
	
	function addMarker(lat, lng, head, img, rate, hrefe,property_type,rating,review){
		
		var markerOptions = {
			position: new google.maps.LatLng(lat, lng), 
			map: map,
			zIndex:markers.length+1,
			 draggable:false
		};
		marker = createMarker(markerOptions, false);
		marker.set("myZIndex", marker.getZIndex());
		//marker.setIcon('https://www.to-hawaii.com/images/red-dot.png')
		marker.setIcon('https://www.to-hawaii.com/images/marker.png')
		
		var star;
		
		if(Math.round(rating)==0)
		{
			star= '<span class="rating-static rating-0"></span>';
		}
		else if(Math.round(rating)==1)
		{
			star=  '<span class="rating-static rating-10"></span>';
		}
		else if(Math.round(rating)==2)
		{
			star=  '<span class="rating-static rating-20"></span>';
		}
		else if(Math.round(rating)==3)
		{
			star=  '<span class="rating-static rating-30"></span>';
		}
		else if(Math.round(rating)==4)
		{
			star=  '<span class="rating-static rating-40"></span>';
		}
		else if(Math.round(rating)==5)
		{
			star=  '<span class="rating-static rating-50"></span>';
		}
		
	var contentString = '<div style="display:block;cursor: pointer;width: 200px;overflow:hidden;">';
		contentString += '<a style="text-decoration: none;cursor: pointer;color:black;" href="'+hrefe+'" target="_blank" rel="nofollow">';
		contentString += '<div class="map_img_pos">';
		contentString += '<img class="img_pos" src="'+ img +'" />';
		contentString += '<div class="div_rate_map" ><span style="font-size: large;">$'+ rate +'</span> per night</div>';
		contentString += '</div>';
		contentString += '<div style="overflow: hidden;white-space: nowrap;width: 200px;text-overflow: ellipsis;font-weight: 700;font-family: Roboto,Arial,Helvetica Neue,Helvetica,sans-serif;color: #244A96;padding: 10px 0 0 0;">'+ head.replace("^",",") +'</div>';
		contentString += '<div><div style="float:left"><img style="width:20px;height:20px" src="https://www.to-hawaii.com/images/person.png"/><span style="font-weight: bold;padding-left: 5px;color: #676767;">'+review+'</span></div><div style="float:right;padding-right:5px">'+star+'</div></div>';
		contentString += '</a>';
		contentString += '</div>';
		
		 var infowindow = new google.maps.InfoWindow({
		  content: contentString,
		  maxWidth: 450,
		  minWidth:200
		});
		
		google.maps.event.addListener(marker,'click',function() {
			if (currentInfoWindow != null) {
				currentInfoWindow.close();
			}
			infowindow.open(map, this);
			currentInfoWindow = infowindow; 
		});
		
		
		google.maps.event.addListener(map, "click", function(event) {
			if (currentInfoWindow != null) {
				currentInfoWindow.close();
			} 
		});
		
		//var hovericon='red-dot.png';
		var hovericon='https://www.to-hawaii.com/images/marker_hover1.png';
		var originalicon='https://www.to-hawaii.com/images/marker.png';
		
		marker.addListener('mouseover', function() {
			//this.setIcon(this.hovericon);
			this.setIcon('https://www.to-hawaii.com/images/marker_hover1.png');
		});
		
		marker.addListener('mouseout', function() {
			this.setIcon('https://www.to-hawaii.com/images/marker.png');
		});
		
		// map.setCenter(new google.maps.LatLng(lat, lng));
		// google.maps.event.trigger(map, "resize");
		
		// var myLatLng=new google.maps.LatLng(lat, lng);
		// bounds.extend(myLatLng);
		// map.fitBounds(bounds);
		//map.setZoom(11);
	}
	
	function createMarker(markerOptions) {
		var marker = new google.maps.Marker(markerOptions);
		markers.push(marker);
		return marker;
	}
	
	
	function newLocation(newLat,newLng)
	{
		
		map.setCenter({
			lat : newLat,
			lng : newLng
		});
		
	}
	
		function loadMarker(){
			var iiicount=1;
			var centerflag=false;
			var resturnnewlatlong='';
			
			if($(".qdiv").length>0){
				$( ".qdiv" ).each(function(){
					var getlatlong=$(this).html();	
					addMarker(getlatlong.split(",")[0],getlatlong.split(",")[1],getlatlong.split(",")[2],getlatlong.split(",")[3],getlatlong.split(",")[4],getlatlong.split(",")[5],getlatlong.split(",")[6],getlatlong.split(",")[7],getlatlong.split(",")[8]);
					
				    iiicount++;
					if((iiicount>($(".qdiv").length/2)) && centerflag==false)
					{
						resturnnewlatlong=getlatlong.split(",")[0]+'~'+getlatlong.split(",")[1];
						centerflag=true;
					}
				});
			}
			return resturnnewlatlong;
	}
	
	// setTimeout(function() {
		// loadMarker();
	// }, 1000);
	
$(function () {
		
		
var firsttime='true';
	$("#btn_map").click(function(){
		$("#div_ul").css("display","none");
		$("#div_page").css("display","none");
		$("#mapdiv").css("display","block");
		if (bowser.name.trim().toLowerCase() == "firefox"){
			if($(window).width()<=768){
				$("#map_canvas").css("height","320px");
				$("#map_canvas").css("display","inline-block");
			}
		}
		
		$( window ).resize(function() {
			if($(window).width()>768){
				$("#mapdiv").css("height","600px");
				$("#map_canvas").css("height","100%");
				$("#map_canvas").css("display","inline-block");
			}
		});
		 // if(firsttime=='true'){
        
        // if($(".qdiv").length>0){
            // var getlatlong=$( ".qdiv" ).last().html();
            // var newlat=getlatlong.split(",")[0];
            // var newlong=getlatlong.split(",")[1];
            
            // map.setCenter(new google.maps.LatLng(Number(newlat),  Number(newlong)));
            // google.maps.event.trigger(map, "resize");
            // map.setCenter(new google.maps.LatLng(Number(newlat),  Number(newlong)));
            // google.maps.event.trigger(map, "resize");
            
        // }
        // firsttime='false';
        // }
		 //google.maps.event.trigger(map, "resize");
		 
		   // if($(".qdiv").length>0){
             // var getlatlong=$( ".qdiv" ).last().html();
             // var newlat=getlatlong.split(",")[0];
             // var newlong=getlatlong.split(",")[1];
             reloadonDrag();
            
            
         //}
		
		 
		 
	});
	
	$("#btn_list").click(function(){
		$("#mapdiv").css("display","none");
		$("#div_ul").css("display","block");
		$("#div_page").css("display","block");
	});
	
	$('body').click(function(){
		$('#suggesstion-box').hide();
	})
		
	
    });

	function selectCountry(val) {
					$("#search-box").val(val);
					$("#suggesstion-box").hide();
					$("#country-list").remove();
					}
					
					// function hide(){
						// //$("#search-box").val(val);
						// $("#suggesstion-box").hide();
					// }

			
	function ddlselectchange() {
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth() + 1;
		var yyyy = today.getFullYear();
		if (dd < 10) {
			dd = '0' + dd
		}
		if (mm < 10) {
			mm = '0' + mm
		}
		dateToday = mm + '/' + dd + '/' + yyyy;
		var DateToday = mm + '/' + dd + '/' + yyyy;

		$("#arriveDate").datepicker({
			dateFormat: 'mm/dd/yy',
		   // showOn: "button",
			minDate: DateToday,
		}).on("change", function (e) {
			var formvalue = e.currentTarget.value;
			$("#departDate").datepicker("option", "minDate", formvalue);
			$(".ui-datepicker-trigger").html('').addClass('glyphicon glyphicon-th');
			$(".datepicker").hide();
		});

		$("#departDate").datepicker({
			dateFormat: 'mm/dd/yy',
			//showOn: "button",
			minDate: DateToday,
		});
		
		
		
		//$("#arriveDate").val(DateToday);
		//$('#departDate').val(dateToday);
		$(".ui-datepicker-trigger").html('').addClass('glyphicon glyphicon-th').show();
	}
	
	

</script>
