<?php 
/*
Template Name: tricks
*/
get_header() ?>
<h4 class="niceh"><a href="<?php bloginfo('url') ?>"> back to home page</a> </h4>
<div id="tricky">
	<h1 class="niceh"> CSS Tricks! </h1>

	<h3 class="niceh"> Images</h3>
	<p>
		Add images! <br>
		Use this syntax:<br>
		&lt;img src="img/imagename.jpg" &gt;<br>

	 </p>
	<h4 class="niceh"> Examples: </h4>

	<p> if I type this: <br>
		&lt;img src="img/burger.jpg" &gt;
		i get this:
	</p>
	<img src="<?php bloginfo('template_directory'); ?>/img/burger.jpg" />

	<h3 class="niceh"> Border </h3>
	<p>
		Add a border to your html! <br>
		Use this syntax:<br>
		style="border: &lt;border size&gt; &lt;border type&gt; &lt;border color&gt;;"
	 </p>
	<h4 class="niceh"> Examples: </h4>

	<p> if I type this inside a tag: <br>
		style="border:1px solid red;" <br>
		i get this:
	</p>

	<p style="border:1px solid red">I have a border <p>

	<p> if I type this inside a tag: <br>
		style="border:1px dotted red;" <br>
		i get this:
	</p>

	<p style="border:1px dotted red">I have a dotted border <p>

	<h3 class="niceh"> CSS Color! </h3>
	<p>
		Add colors to your html! <br>
		Use this syntax:<br>
		style="color: &lt;color&gt;;"<br>
		or<br> 
		style="color:rgb(x,y,z);"<br>
		x = how red do you want it to be?<br>
		y = how green do you want it to be?<br>
		z = how blue do you want it to be?<br>

	 </p>
	<h4 class="niceh"> Examples: </h4>

	<p> if I type this inside a tag: <br>
		style="color:rgb(120,50,30);" <br>
		i get this:
	</p>
	<p style="color:rgb(120,50,30);"> Whoa what color am I?</p>

	<h3 class="niceh"> CSS font-size</h3>
	<p>
		Change your font-size! <br>
		Use this syntax:<br>
		style="font-size: &lt;size&gt;px;"<br>

	 </p>
	<h4 class="niceh"> Examples: </h4>

	<p> if I type this inside a tag: <br>
		style="font-size:50px;"
		i get this:
	</p>
	<p style="font-size:50px;"> HUGE!</p>

</div>


<?php get_footer() ?>