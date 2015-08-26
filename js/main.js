$(document).ready(function(){
	var form = $(".ajax-form");
	form.on("submit", function(event) {
		var send=true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		})

		btn = $(this).find('.btn');

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				data: $(this).serializeArray(),
				beforeSend: function(){
					btn.addClass("loading");
				}
			}).success(function() {
				btn.removeClass("loading");
				form.parents('.agmodal').trigger('ag:close');
				$('#modal-spasibo').trigger('ag:open');
				// setTimeout(function() {$('#modal-spasibo').trigger('ag:close');},4500);
				form.find("input[name!='ctip']").val('');
				btn.addClass('btn_good');
				btn.text('Отправлено')
			});
		}
	});
});

$(document).ready(function(){
	$('.slider').owlCarousel({
		nav: true,
		navText: ['',''],
		items: 1,
		smartSpeed: 600,
		loop: true,
		video: true,
		lazyLoad:true
	});
	$('.slider_with-media').owlCarousel({
		nav: true,
		navText: ['',''],
		items: 1,
		smartSpeed: 600,
		loop: false,
		video: true,
		lazyLoad:true,
		mouseDrag: false
	});
});