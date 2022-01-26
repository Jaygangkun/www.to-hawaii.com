function copyDiv() {
    var firstDivContent = document.getElementById('leftpanel');
    var secondDivContent = document.getElementById('main-left');
    secondDivContent.innerHTML = firstDivContent.innerHTML;
}
copyDiv();


$(document).ready(function() {
    $('.menu-trigger').click(function() {
        $("#main-left").toggle();
        $(".menu-trigger").addClass("im-active");
        $("#main-right").toggleClass("menu-active");
    });
});

$(document).ready(function() {
    if ($('.leftpanel').css('display') == 'none') {
        $('.main-nav li').bind("click", function() {
            $(this).addClass('im-curent');
            $("ul", this).toggle(100);
        });
    }
});

$('.main-nav ul').click(function(e) {
    e.stopPropagation();
});


$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$('.back-to-top').click(function(event) {
    event.preventDefault();
    $("html, body").animate({
        scrollTop: "0"
    });
});



//----- Begin to slider
$(document).on('ready', function() {
    // Hide thumbnails
    $('.thumb-list').hide();
    showCaption();
    //preloadImages();
    // preload animated gif
    $('<img/>')[0].src = '../../../images/loading.gif'; 
    $('.thumb-list').fadeIn();
})

//Delete drag start event from img
$(document).on("dragstart", function(e) {
if (e.target.nodeName.toUpperCase() == "IMG") {
return false;
}
});

var thumbs = $(".galImg").length; //Calculate total of thumbs

function preloadImages() {
    var n=0;
    $('.thumb-list li a').each(function() {
        var image = $(this).attr("rel");
         $('<img/>')[0].src = image;
         n++;
        // Fade in thumbnails after all gallery images are loaded
         if (n==thumbs-1)$('.thumb-list').fadeIn();
    });
    
}

// Combine click and touchstart
(function ($) {
$.fn.tclick = function (onclick) {
this.bind("touchstart", function (e) { onclick.call(this, e); e.stopPropagation(); e.preventDefault(); });
this.bind("click", function (e) { onclick.call(this, e); });
return this;
};
})(jQuery);

$(".galImg").tclick(function(e) { //click event in thumbs
    $('.thumb-list li').removeClass('active');
    $(this).parent().addClass('active');
    showImage();
});

function showImage() {
    var image = $(".active a").attr("rel");
    var alternative = $(".active a img").attr("alt");
    $('.feature').html('<img src="../../../images/loading.gif"/>');
    
    var img = new Image();
    img.src = image;
    if (img.complete) {
	    loadImage(alternative, image);
  
    } 
    else {
		
	    img.onload = function() {
	    	loadImage(alternative, image);
	    }; 
    }
}

function loadImage(alternative, image) {
	    $('.feature').html('<img alt="' + alternative + '" src="' + image + '"/><div class="caption"></div>');
	    showCaption();

}

function showCaption() { //Show caption function
    var caption = $('.thumb-list .active a img').attr("alt");
    $('.caption').html(caption);
}
//----- End Slider 


//tabs
/*
function product(id) {
	for (var i=1;i<=5;i++) {
		if (document.getElementById("contenttab"+i) != undefined) {
			if (id==i) {
			        document.getElementById("contenttab"+i).style.display = "block";
			        document.getElementById("menu"+i).className = "selected";
			}
			else {
			        document.getElementById("contenttab"+i).style.display = "none";
			        document.getElementById("menu"+i).className = "";
			}
		
		}
	}
}
*/

function product(id) {
	$("#glowmenu ul li").removeClass("selected");
	$("#menu"+id).addClass("selected");
	$("#tab_container>div").hide();
	$("#contenttab"+id).show();
	if ($("#menu"+id+" span").text() == 'Map') {
		initialize();
	}
}

function doResize() {
    if ($(window).width() > 768) {
        setTimeout(function() {
            $(".rightpanel").css("height", "auto");
            $(".midpanel").css("height", "auto");
            var heightLeft = $(".leftpanel").height();
            var heightMiddle = $(".midpanel").height();
            var heightRight = $(".rightpanel").height();

            if (heightRight > heightMiddle) {

                $('.midpanel').css('min-height', heightRight + 2)

            } else {

                $('.rightpanel').css('min-height', heightMiddle + 2)
            }

            heightMiddle = $(".midpanel").height();
            heightRight = $(".rightpanel").height();

            if (heightLeft >= heightRight) {
                $(".rightpanel").css("height", heightLeft - 10);
                $(".midpanel").css("height", heightLeft - 10);
            }

        }, 1000);
    }
}


$(document).ready(function() {
    doResize();
});


$(window).resize(function() {
    doResize();
    if ($(window).width() < 561) {
        $(".rightpanel").css("min-height", "auto");
        $(".midpanel").css("min-height", "auto");
    }
    $('.main-nav li').unbind("click");
    if ($('.leftpanel').css('display') == 'none') {
        $('.main-nav li').bind("click", function() {
            $(this).addClass('im-curent');
            $("ul", this).toggle(100);
        });
    }

});

var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}

/*! tinycarousel - v2.1.8 - 2015-11-11
 * https://baijs.com/tinycarousel
 *
 * Copyright (c) 2015 Maarten Baijs <wieringen@gmail.com>;
 * Licensed under the MIT license */

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){function b(b,e){function f(){return i.update(),i.move(i.slideCurrent),g(),i}function g(){i.options.buttons&&(n.click(function(){return i.move(--t),!1}),m.click(function(){return i.move(++t),!1})),a(window).resize(i.update),i.options.bullets&&b.on("click",".bullet",function(){return i.move(t=+a(this).attr("data-slide")),!1})}function h(){i.options.buttons&&!i.options.infinite&&(n.toggleClass("disable",i.slideCurrent<=0),m.toggleClass("disable",i.slideCurrent>=i.slidesTotal-r)),i.options.bullets&&(o.removeClass("active"),a(o[i.slideCurrent]).addClass("active"))}this.options=a.extend({},d,e),this._defaults=d,this._name=c;var i=this,j=b.find(".viewport:first"),k=b.find(".overview:first"),l=null,m=b.find(".next:first"),n=b.find(".prev:first"),o=b.find(".bullet"),p=0,q={},r=0,s=0,t=0,u="x"===this.options.axis,v=u?"Width":"Height",w=u?"left":"top",x=null;return this.slideCurrent=0,this.slidesTotal=0,this.intervalActive=!1,this.update=function(){return k.find(".mirrored").remove(),l=k.children(),p=j[0]["offset"+v],s=l.first()["outer"+v](!0),i.slidesTotal=l.length,i.slideCurrent=i.options.start||0,r=Math.ceil(p/s),k.append(l.slice(0,r).clone().addClass("mirrored")),k.css(v.toLowerCase(),s*(i.slidesTotal+r)),h(),i},this.start=function(){return i.options.interval&&(clearTimeout(x),i.intervalActive=!0,x=setTimeout(function(){i.move(++t)},i.options.intervalTime)),i},this.stop=function(){return clearTimeout(x),i.intervalActive=!1,i},this.move=function(a){return t=isNaN(a)?i.slideCurrent:a,i.slideCurrent=t%i.slidesTotal,0>t&&(i.slideCurrent=t=i.slidesTotal-1,k.css(w,-i.slidesTotal*s)),t>i.slidesTotal&&(i.slideCurrent=t=1,k.css(w,0)),q[w]=-t*s,k.animate(q,{queue:!1,duration:i.options.animation?i.options.animationTime:0,always:function(){b.trigger("move",[l[i.slideCurrent],i.slideCurrent])}}),h(),i.start(),i},f()}var c="tinycarousel",d={start:0,axis:"x",buttons:!0,bullets:!1,interval:!1,intervalTime:3e3,animation:!0,animationTime:1e3,infinite:!0};a.fn[c]=function(d){return this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(a(this),d))})}});


