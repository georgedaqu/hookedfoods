<?php

// Template Name: Contact Us

get_header('', array('dark_menu' => true, 'no_curves' => true)); ?>
<?php the_content() ?>


<script>
	$(window).on("load resize scroll", function(){
		var from_top = $(window).scrollTop();
		var section_height1 = $("section.team").offset().top;
		if(from_top > section_height1){
			$("section.team").addClass("colored");
		}else{
			$("section.team").removeClass("colored");
		}
	});
</script>

<?php get_footer(); ?>