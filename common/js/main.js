// index slide
$(document).ready(function() {
		$(".slides").carouFredSel({
		auto		: 4000,
    responsive  : true,
			scroll : {
			items  : 1,
			fx : "fade",
			duration  : 800,                        
			},
		items       : {
			visible     : 1,
			height      : "46%"
		}
	});
});
//index menu
//load 
jQuery(function($){
	$(window).bind('load', function(){
		var w = $(window).width();
		var x = 640;
			if (w <= x) {
			} else {
	$(".mod_indexmenu_block").tile(3);
	$(".mod_infolist_entry a").tile(3);
			}
	});
});
//load 
jQuery(function($){
	$(window).bind('load', function(){
		var w = $(window).width();
		var x = 717;
			if (w <= x) {
			} else {
	$(".mod_footernav_block").tile(3);
			}
	});
});
//resize
jQuery(function($){
	$(window).resize(function(){
	var w = $(window).width();
	var x = 640;
		if (w <= x) {
	$(".mod_indexmenu_block").tile(1);
	$(".mod_infolist_entry a").tile(1);
		} else {
	$(".mod_indexmenu_block").tile(3);
	$(".mod_infolist_entry a").tile(3);
		}
	});
});
//resize
jQuery(function($){
	$(window).resize(function(){
	var w = $(window).width();
	var x = 717;
		if (w <= x) {
	$(".mod_footernav_block").tile(1);
		} else {
	$(".mod_footernav_block").tile(3);
		}
	});
});



//common menu
$(function(){

	var agent = navigator.userAgent;
	var list = $("html:not(.lt-ie9) .mod_header_nav ul"); 
	
	function menuslide(){
	//メニュー表示非表示
	$(".mod_header_nav .navtitle").click(function(){
	if($(list).css("display")=="none"){
	$(list).slideDown("fast");
	}else{
	$(list).slideUp("fast");
	}
	});
	}

	if(agent.search(/iPhone/) != -1){
		menuslide();
	
	}else if(agent.search(/Android/) != -1){
		menuslide();

	}else{
//resize
	$(window).resize(function(){
   //location.href = location.href;
	var w = $(window).width();
	var x = 623;
		if (w <= x) {
		$(list).css("display","none");
		} else {
		$(list).css("display","block");
		}
	});
		menuslide();
	}
});


$(function(){

function dropdown(){
	//ドロップダウン表示	   
	$("ul#topmenu li").hover(function () {
    	$("ul:not(:animated)",this).show();
 	},
  	function () {
    	$("ul:not(:animated)",this).hide();
  });
		//クリックされるとドロップダウン非表示
	$(".mod_header_nav ul li a").click(function(event){
		$("ul#topmenu ul.submenu").hide();
});
}

function nodrop(){
	//ドロップダウン表示	   
	$("ul#topmenu li").hover(function () {
    	$("ul:not(:animated)",this).show();
 	},
  	function () {
    	$("ul:not(:animated)",this).show();
  });
		//クリックされるとドロップダウン非表示
	$(".mod_header_nav ul li a").click(function(event){
		//$("ul#topmenu ul.submenu").hide();
});
}

$(window).bind('load', function(){
	var w = $(window).width();
	var x = 640;
		if (w <= x) {
		} else {
		 dropdown();
		}
});

$(window).resize(function(){
var w = $(window).width();
var x = 640;
	if (w <= x) {
  nodrop()
	} else {
		$("ul#topmenu ul.submenu").css("display","none");
 dropdown();
	}
});

});


