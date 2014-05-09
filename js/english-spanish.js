
// console.log(language);

$(".language-button").click(function(){

	if ( $(".spanish").hasClass( "hidden" ) ) {
		$( ".spanish" ).removeClass( "hidden" );
		$( ".english" ).addClass( "hidden" );
		var language = "spanish";
	} 

	else {
		$( ".spanish" ).addClass( "hidden" );
		$( ".english" ).removeClass( "hidden" );
		var language = "english";

	};

});