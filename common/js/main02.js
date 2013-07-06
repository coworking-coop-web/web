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






