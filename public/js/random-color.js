$(document).ready(function(){
	var colors = ['red', 'grey', 'yellow', 'purple', 'green', 'blue']
	var c = null;

	$objects = $('.random-color');

	$objects.each(function(i, o){
		$(this).removeClass('random-color');
		c = colors[Math.floor((Math.random()*colors.length))];
		$(this).addClass(c);
	});
});