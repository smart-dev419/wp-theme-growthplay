jQuery(document).ready(function($) {

	if($('#score-card-tool').length) {
		new Vue({
		    el: '#score-card-tool'
	  	});
		//Show the footer only for results page
		if($('.score_board--result').is(':visible')){
			$('#score-card-tool .footer').show();
		}
	}

});