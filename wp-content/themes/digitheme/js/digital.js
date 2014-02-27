var scrollSpeed = 120;       // Speed in milliseconds
var step = 1;               // How many pixels to move per step
var current = 0;            // The current pixel row
var imageLength = 4300;     // Background image Length
var headerLength = 300;     // How tall the header is.
//The pixel row where to start a new loop
var restartPosition = -(imageLength - headerLength);

function scrollBg(){
        
//Go to next pixel row.
current += step;
        
//If at the end of the image, then go to the top.
if (current == restartPosition){
    current = 0;
}
        
    //Set the CSS of the header.
    $('#headercloud').css("background-position",current+"px 0");
        
        
}
    
//Calls the scrolling function repeatedly
var init = setInterval("scrollBg()", scrollSpeed);


$(document).ready(function(){

console.log('hellopakshet');

$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(100)
    .next()
    .fadeIn(100)
    .end()
    .appendTo('#slideshow');
},3000);
});