jQuery(document).ready(function ($) {
	$(".artform").change(function (e) {
		$("#noresult-js").remove();
		$(".articles-js").remove();
		$('#loading-js').remove();
		$(".artform").attr('disabled', true);
		$("#recipes-wrap-js").prepend('<div id="loading-js"><h1 style="color:white">Loading...<h1></div>');

		const filters = {
			authors: [],
			events: [],
			products: [],
		};

		$(".author-js").each(function (e) {
			if ($(this).is(":checked")) {
				const author = $(this).data("author");

				filters.authors.push(author);
			}
		});

		$(".event-js").each(function (e) {
			if ($(this).is(":checked")) {
				const event = $(this).data("event");

				filters.events.push(event);
			}
		});

		$(".product-js").each(function (e) {
			if ($(this).is(":checked")) {
				const product = $(this).data("product");

				filters.products.push(product);
			}
		});

		$.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			data: {
				action: "filter_projects",
				...filters,
			},
			success: function (res) {
				$('#loading-js').remove();
				$("#recipes-wrap-js").prepend(res);
				$(".artform").removeAttr('disabled');
			},
			error: function() {
				$(".artform").removeAttr('disabled');
				$('#loading-js').remove();
				$("#recipes-wrap-js").prepend('<div id="loading-js"><h1 style="color:white">Something went wrong. Please, reload the page.<h1></div>');
			},
		});
	});
});
