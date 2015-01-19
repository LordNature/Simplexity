$('.animated-bg').each(function(){
	var $this = $(this),
		colors = ['#9966FF', '#00bcc3', '#5fb26a', '#fc7331'];

	setInterval(function(){
		var color = colors.shift();
		colors.push(color);
		$this.animate({backgroundColor: color}, 2000);
	},4000);
});