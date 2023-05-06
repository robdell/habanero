# What It Do

Creates a basic fade out/in slideshow of specified messages with specified delays for each slide. Useful for landing pages and marketing sites where you want to cycle between a set of words or phrases with varied timings. For example, on http://rohanpaul.com/, I cycle between words displayed over a video background, I needed specific timings for each word such that they match up with the video on loop. 


# Basic Usage 

1) Download textTimeSlider.js and copy to your pages' src folder or working directory. 

2) Define a place for your slides and include the script

```html

<p> This script is <span id="textTimeSliderName"></span> </p>

...

<script src="textTimeSlider.js"></script>

```

3) In your inline script or main js, select your elements with jquery and chain or call `.textTimeSlider(text, time)` where 

- `text` is an array of texts, and 
- `time` is an array of times (in ms)
- `loop` (optional) default is true. Use false if you want to trigger each loop by manually calling .textTimeSlider()

```
$( "#textTimeSliderName" ).textTimeSlider(["awesome", "superb", "aight"], [2000, 4000, 500]);
```