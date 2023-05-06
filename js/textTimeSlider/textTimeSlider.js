// text-time-slide
jQuery.fn.extend({
  textTimeSlider: function(text, time, loop = true) {
    if (!text.length) return this;
  	//console.log(text, time);
  	var curr_text = text.shift();
  	var curr_time = time.shift();
    if (loop) {
      text.push(curr_text);
      time.push(curr_time);
    }
  	
  	// Fade out 
  	this.fadeOut(250, () => {
  		this.html(curr_text); // Update text 
  		this.fadeIn(250); // Fade in */
  	});

  	setTimeout(() => {
  		this.textTimeSlider(text, time, loop);
  	}, curr_time);

  	return this;
  }
});