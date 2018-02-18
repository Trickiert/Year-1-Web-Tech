// JavaScript Document for the homepage (Index.html)

// This function will enlarge an image upon mosueover and retain the original size once the mouse moves back off it

function imgBig(enlarge) {
    "use strict";                    //This code disallows undefined code from running and allow better error catching.
    enlarge.style.height = "70%";
    enlarge.style.width = "70%";
}


function imgNorm(shrink) {
    "use strict";                 //This code disallows undefined code from running and allow better error catching.
    shrink.style.height = "50%";
    shrink.style.width = "50%";
}


// This function allows for an alternate image to be veiwed upon a mouse rollover event. In this case it is used combined with the above function.

function MouseRollover(altImage) {
	"use strict";                  //This code disallows undefined code from running and allow better error catching.
    altImage.src = "WebpageImages/NZ.jpg";
 }

 function MouseOut(origImage)

{
	
origImage.src = "WebpageImages/AustraliaFountain.jpg";
	
}

// This function displays an alert to the user upon mousing over a specific image.

function makeDealAlert() 

{
	
 alert('Click for more infomation on this exlusive offer!');
	
}