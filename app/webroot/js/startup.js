$(document).ready(function(){
	windowThing();
});
$(window).resize(function() {
	windowThing();
});
function windowThing(){
	if ($(window).height()>650){
		$('#wrapper').css('height',$(window).height());
	} else{
		$('#wrapper').css('height',650);
	}
}