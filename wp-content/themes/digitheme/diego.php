<?php
/*
Template Name: diego
*/
get_header(); ?>
<body style="text-align:left;">
	<style>
	
	#topButton {
		padding:10px 10px 10px 10px;
		border:2px solid black;
		width:100px;
		background-color:rgb(191,202,249); /* Light Blue */
		color:rgb(46,66,148);
		font-size:25px;
	}

	#click100 {
		border:2px solid black;
		background-color:rgb(191,202,249); /* Light Blue */
	}
	</style>

	<script>
	var buttonCount = 0;
	$(document).ready(function(){
		$("#click1,#click10,#click25,#click50,#click100").hide();


		$("#topButton").click(function(){
			buttonCount += 1;
			console.log("Button clicked!");


			switch(buttonCount) {
				case 1:
				$("#click1").fadeIn();
				break;
				case 10:
				$("#click10").fadeIn();
				break;
				case 25:
				$("#click25").fadeIn();
				break;
				case 50:
				$("#click50").fadeIn();
				break;
				case 100:
				$("#click100").fadeIn();
				break;
			};	
		});
	});
	</script>

</head>

<body>
	<div id="topButton">
		Click me!
	</div>

	<p id="click1"> Hi Teacher Franz! This is Diego! Click the button more!</p>

	<p id="click10"> Teacher Franz, I miss you!</p>

	<p id="click25"> Teacher Franz, I made this while you were at Japan. Did you give me pasulubong? Okay, the final text will appear when you do 100 clicks in total.</p>

	<p id="click50"> OOOOOOOHHHHH WE'RE HALF WAY THERE! OOOOOOH LIVIN' ON PRAYER, TAKE MY HAND, WE'LL MAKE IT I SWEAR... OOOOOHHHH LIVIN' ON A PRAYER!!!!!</p>

	<p id="click100"> Bye! Thanks for all the cool projects throughout this year! 
		<br>
		<img src="http://www.downstech.com.au/images/computer.jpg">
		<img src="http://spoiledcoils.com/wp-content/uploads/2013/09/burger-300x202.jpg">
		<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTstm0TF7j-q7co_jBatxy9aIexlDa-12ZHILny6NOYk_eBA19n"></p>

<?php get_footer();?>