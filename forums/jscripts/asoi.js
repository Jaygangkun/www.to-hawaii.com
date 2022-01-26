/* Advanced Stats on Index/Portal 3.0.1 Javascript File
 * Author: Smethead (smethead@gmail.com)
 * Date modified: 20 May 2009
 */
var expanded = Cookie.get('asoi_exp');
var expandedel;
var ready = true;
var wasrunning = false;
var updwasrunning = false;
var timerID = null;
var timerUp = null;
var placeholder;
var ready = true;
var indexbottom = null;
jQuery(document).ready(function(){
	indexbottom = jQuery('body').html().match(/ASOI_3_I_T/);
	placeholder = "<img src=\"images/spinner.gif\" style=\"vertical-align:middle\" alt=\"\" width=\"12px\" height=\"12px\" title=\""+asoi_loading+"\" />"+asoi_loading;
	for(var i=1;i<asoi_limit;i++)
		placeholder += "<br />\n";
	if(expanded != "")
	{
		var bg = jQuery('.trow1').css('background-color');
		var fg = jQuery('.trow1').css('color');
		var bc = jQuery('.tborder').css('background-color');
		jQuery('#'+expanded).css({
			'background': bg,
			'color': fg,
			'border-top': '1px solid '+bc,
			'border-left': '1px solid '+bc,
			'border-right': '1px solid '+bc,
			'margin-left': '-1px',
			'margin-right': '2px'
		});
	}
	if(Cookie.get('asoi_run') == "true")
		autoChange();
	if(Cookie.get('asoi_run') != "true" && expanded != "" && Cookie.get('asoi_upd') == "true")
		autoUpdate();
	jQuery('#asoi_autoChange').click(function(){
		autoChange(true);
	});
	jQuery('#asoi_autoUpdate').click(function(){
		autoUpdate(true);
	})
	jQuery('.asoi_i_head').mouseover(function(){
		var id = this.id;
		jQuery('#asoi_i_body').queue(function(){
			asoi_expcol(id, 0, 1);
			jQuery(this).dequeue();
		});
	}).mouseout(function(){
		if(updwasrunning)
		{
			autoUpdate(true);
			updwasrunning = false;
		}
	}).click(function(){
		asoi_expcol(this.id, 1, 0);
	});
});
function asoi_expcol(id, click, hover)
{
	expanded = Cookie.get('asoi_exp');
	if(!expanded) expanded = "";
	if(expanded != "" && click == 1)
	{
		if(updwasrunning)
		{
			updwasrunning = false;
		}
		else if((asoi_type == "click" && id == expanded && !updwasrunning) || asoi_type == "hover")
		{
			jQuery('#asoi_back').slideUp("fast", function(){
				expanded = "";
				Cookie.set('asoi_exp', expanded);
			});
			var fg = (asoi_place == "index" && indexbottom)?jQuery('.tcat').css('color'):jQuery('.thead').css('color');
			jQuery('#'+expanded).css({
				'background': 'none',
				'color': fg,
				'border': 'none',
				'margin-left': '0px',
				'margin-right': '3px'
			});
		}
		if(asoi_type == "hover" && click == 1) return;
	}
	else if(expanded == "" && click == 1)
	{
		var els = getElementsByClass('asoi_i_head', null, 'span');
		for(i = 0; i < els.length; i++)
		{
			var fg = (asoi_place == "index" && indexbottom)?jQuery('.tcat').css('color'):jQuery('.thead').css('color');
			jQuery(els[i]).css({
				'background': 'none',
				'color': fg,
				'border': 'none',
				'margin-left': '0px',
				'margin-right': '3px'
			});
		}
		asoi_ajaxGet(id, "show");
		expanded = id;
		Cookie.set('asoi_exp', expanded);
		autoUpdate();
		return;
	}
	if(expanded != "")
	{
		if(hover == 1 && Cookie.get('asoi_run') == "true")
		{
			autoChange(true);
		}
		if(hover == 1 && Cookie.get('asoi_upd') == "true" && !updwasrunning)
		{
			autoUpdate(true);
			updwasrunning = true;
		}
		if(expanded != id && (asoi_type == "hover" || (asoi_type == "click" && click == 1)))
		{
			expanded = id;
			Cookie.set('asoi_exp', expanded);
			var els = getElementsByClass('asoi_i_head', null, 'span');
			var fg = (asoi_place == "index" && indexbottom)?jQuery('.tcat').css('color'):jQuery('.thead').css('color');
			for(i = 0; i < els.length; i++)
			{
				jQuery(els[i]).css({
					'background': 'none',
					'color': fg,
					'border': 'none',
					'margin-left': '0px',
					'margin-right': '3px'
				});
			}
			
			jQuery('#asoi_i_body').queue(function(){
				jQuery('#asoi_i_body').fadeOut("fast");
					asoi_ajaxGet(id, "fadeIn");
					jQuery(this).dequeue();
				});
			if(Cookie.get('asoi_upd') == "true") autoUpdate();
		}
	}
}
function autoChange(click)
{
	if(click && Cookie.get('asoi_run') == "true")
	{
		Cookie.set('asoi_run', false);
		jQuery('#asoi_autoChange').attr('src', 'images/asoi_autoChangeOff.gif');
	}
	else if(click && Cookie.get('asoi_run') != "true")
	{
		Cookie.set('asoi_run', true);
		jQuery('#asoi_autoChange').attr('src', 'images/asoi_autoChangeOn.gif');
	}
	if(Cookie.get('asoi_run') == "true")
	{
		if(Cookie.get('asoi_upd') == "true")
		{
			autoUpdate(true);
			wasrunning = true;
		}
		Cookie.set('asoi_run', true);
		var els = getElementsByClass('asoi_i_head', null, 'span');
		if(els.length == 1) return;
		var expandedel = document.getElementById(Cookie.get('asoi_exp'));
		for(i = 0; i < els.length; i++)
		{
			if(expandedel)
			{
				if(expandedel == els[i])
				{
					if(i == els.length-1) i = -1;
					if(asoi_type == "hover") asoi_expcol(els[i+1].id, 0, 0);
					else if(asoi_type == "click") jQuery(els[i+1]).click();
					expandedel = els[i+1];
					break;
				}
			}
			else
			{
				if(asoi_type == "hover") asoi_expcol(els[0].id, 1, 0);
				else if(asoi_type == "click") jQuery(els[0]).click();
				expandedel = els[0];
				break;
			}	
		}
		timerID = self.setTimeout("autoChange()", asoi_run_time*1000);
	}
	else
	{
		clearTimeout(timerID);
		Cookie.set('asoi_run', false);
		if(wasrunning)
		{
			autoUpdate(true);
			wasrunning = false;
		}
	}
}
function autoUpdate(click)
{
	if(click && Cookie.get('asoi_upd') == "true")
	{
		Cookie.set('asoi_upd', false);
		jQuery('#asoi_autoUpdate').attr('src', 'images/asoi_autoUpdateOff.gif');
	}
	else if(click && Cookie.get('asoi_upd') != "true" && Cookie.get('asoi_run') != "true")
	{
		Cookie.set('asoi_upd', true);
		jQuery('#asoi_autoUpdate').attr('src', 'images/asoi_autoUpdateOn.gif');
	}
	else if(click && Cookie.get('asoi_upd') != "true" && Cookie.get('asoi_run') == "true")
	{
		wasrunning = true;
	}
	if(Cookie.get('asoi_run') != "true" && Cookie.get('asoi_upd') == "true")
	{
		Cookie.set('asoi_upd', true);
		jQuery(this).queue(function(){
			jQuery('#asoi_i_body').fadeOut("fast");
			asoi_ajaxGet(expanded, "fadeIn");
			jQuery(this).dequeue();
		});
		timerUp = self.setTimeout("autoUpdate()", asoi_upd_time*1000);
	}
	else
	{
		Cookie.set('asoi_upd', false);
		clearTimeout(timerUp);
	}
}

function getElementsByClass( searchClass, domNode, tagName) {
	if (domNode == null) domNode = document;
	if (tagName == null) tagName = '*';
	var el = new Array();
	var tags = domNode.getElementsByTagName(tagName);
	var tcl = ' '+searchClass+' ';
	for(i=0,j=0; i<tags.length; i++) {
		var test = ' ' + tags[i].className + ' ';
		if (test.indexOf(tcl) != -1)
			el[j++] = tags[i];
	}
	return el;
}
function asoi_ajaxGet(id, callback)
{
	jQuery.ajax({
		method: "post",url: "asoi.php",data: "asoi="+id+"&limit="+asoi_limit,
		beforeSend: function(){
			ready = false;
			var bg = jQuery('.trow1').css('background-color');
			var fg = jQuery('.trow1').css('color');
			var bc = jQuery('.tborder').css('background-color');
			jQuery('#'+id).css({
				'background': bg,
				'color': fg,
				'border-top': '1px solid '+bc,
				'border-left': '1px solid '+bc,
				'border-right': '1px solid '+bc,
				'margin-left': '-1px',
				'margin-right': '2px'
			});
			var els = getElementsByClass('asoi_i_head', null, 'span');
			var fg = (asoi_place == "index" && indexbottom)?jQuery('.tcat').css('color'):jQuery('.thead').css('color');
			for(i = 0; i < els.length; i++)
			{
				if(els[i].id != id)
				jQuery(els[i]).css({
					'background': 'none',
					'color': fg,
					'border': 'none',
					'margin-left': '0px',
					'margin-right': '3px'
				});
			}
			if(callback != "show") jQuery('#asoi_i_body').queue(function(){
				jQuery(this).html(placeholder);
				jQuery(this).fadeIn("fast");
				ready = true;
				jQuery(this).dequeue();
			});
		},
		complete: function(){},
		success: function(html){
			jQuery('#asoi_i_body').queue(function(){
				if(callback == "show")
				{
					jQuery(this).html(html);
					jQuery('#asoi_back').slideDown("fast");
				}
				else
				{
					if(ready)
					jQuery(this).fadeOut("fast", function(){
						jQuery(this).html(html);
						jQuery(this).fadeIn("fast");
					});
				}
				jQuery(this).dequeue();
			});
		}
	});
}