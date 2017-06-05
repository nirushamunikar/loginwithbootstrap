$(':text').focusin(function(){
	$(this).css('background','lightgreen');
});

$(':text').blur(function(){
	$(this).css('background','white');
});