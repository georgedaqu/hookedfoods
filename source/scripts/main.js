import 'select2';
import 'magnific-popup';

import './libs/hamburger_menu.js';
import './libs/form_functions.js';
import './libs/additional_functions.js';
import './libs/plugin_parameters.js';
//import './libs/tree_menu.js';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$(document).ready(function(){
	// Hamburger menu
	$("div.resp_menu_toggle").click(function(){
		var $this = $(this);
		$this.toggleClass("toggled");
		$("html, body, div.logo, div.resp_menu_wrap").toggleClass("toggled");
	});
	// Pulse animation
	function animateLinear(index, item, parent){
		index = index + 1;
		var animation = item.animate([
				{transform: 'scale(1)'},
				{transform: `scale(${1 + (index * 0.05)})`},
				{transform: 'scale(1)'}
			], 1000);
		animation.pause();
		parent.addEventListener('mouseover', () => {
			parent.classList.add('hover');
			animation.play();
		});
		parent.addEventListener('mouseout', () => parent.classList.remove('hover'));
		animation.addEventListener(
			'finish',
			() => {
				if(parent.classList.contains('hover')){
					animation.play();
				}
			}
		);
	}
	$(".round_button").each(function(i, el){
		var $this = $(this);
		var $circles = $this.find("span");
		$circles.each((index, item) => animateLinear(index, item, el));
	});
	$("div.toggle_trigger").click(function(){
		var $this = $(this);
		if($this.next("div.toggle_container").is(":visible")){
			$this.removeClass("toggled");
			$this.next("div.toggle_container").slideUp(400);
		}else{
			$this.addClass("toggled");
			$this.next("div.toggle_container").slideDown(400);
		}
	});

	const team = $('section.team');
	if(team){
		var teamMembers = $('section.team .team_members').find('li');
		for(var i = 0; i < teamMembers.length; i+=4) {
			teamMembers.slice(i, i+4).wrapAll("<div class='members_wrap'></div>");
		}
	}
	// Filters
	$("section.reciepes_filter div.filter_items div.form_item div.filter_title").click(function(){
		var $this = $(this);
		$this.parent("div.form_item").toggleClass("active");
	});
});