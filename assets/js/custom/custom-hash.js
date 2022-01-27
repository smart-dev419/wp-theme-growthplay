jQuery(document).ready(function($){

	$('.opener').on('click', function(){

		window.location.hash= $(this).data('hash');

	});

	$('.close').on('click', function() {

		history.pushState('', document.title, window.location.pathname);

	});


	if(window.location.hash) {
			
		var value = window.location.hash.replace('#','');

		setTimeout(function(){
			$("a[data-hash='" + value + "']").trigger('click');
		},1);
		
	}
});