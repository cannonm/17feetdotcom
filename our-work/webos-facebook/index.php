
<?php 
$parentPage = 'our-work';
require('../../inc/header.php'); ?>

<style type="text/css">

	.hero{
		background:#252D3D url(../../imgs/projects/facebook-bg.png) repeat 0 center;
	}
	
	#hero-graphic{
		position:absolute;
		bottom:-34%;
		left:2%;
		max-width:105% !important;
	}
	
	@media all and (max-width: 959px){
		#hero-graphic{ left: 0; }
	}
	
	@media all and (max-width: 767px){
		#hero-graphic{ bottom:-30%; }
	}
	
	@media all and (max-width: 480px){
		.project.copy{ padding-top:25px;}
		
	}

</style>

<div class="hero dark">
	<div class="container project header">
		<div class="row-fluid">
			<div class="span9">
				<h2>WebOS Facebook</h2>
				<h3>Working with HP, we designed a tablet experience that maximizes <br/>the best of what Facebook and WebOS have to offer.</h3>
			</div>
	
			<div class="span3 last what-it-is">
				<p>What it is</p>
				<abbr class="tablet on" title="Touch devices"></abbr>
				<abbr class="mobile" title="Mobile devices"></abbr>
				<abbr class="web" title="Web"></abbr>
			</div>
		</div>
		
		<img src="../../imgs/projects/facebook-1.png" id="hero-graphic" />
		
	</div>	
</div>

<div class="container copy project">
	
	<div class="shim-120"></div>
	<div class="shim-80 hold"></div>
	
	<div class="row-fluid relative ">
		<div class="span2 hide-lg-tablet">
			<img src="../../imgs/projects/facebook-2.png"  style="margin:20px" />
		</div>
		<blockquote class="span7 width-mobile">&hellip;this is the most <strong>highly interactive</strong> version of Facebook we've ever seen&hellip; It's <strong>mighty good looking</strong>.</blockquote>
		<div class="span3">
			<p class="cite last" style="height:150px"><span>&mdash;PC Magazine</span> <br/><a class="external nowrap" href="http://www.pcmag.com/article2/0,2817,2387970,00.asp" target="_blank">View Article</a></p>
		</div>
	</div>
	
	<div class="shim-80"></div>
	
	<div class="row-fluid width-tablet">
		
		<div class="span6">
			<img class="" src="../../imgs/projects/facebook-3.png">
		</div>
		
		<div class="span6 relative">
			<h4>A Multi-App, Application</h4>

			<p style="padding-right:15px;">From News Feed to Places, Events to Photos, Facebook is a suite of tightly integrated applications that half a billion people already know how to use. Working closely with HP's development team we quickly iterated and prototyped a variety of user interaction models to find a user experience that works beautifully across the breadth of Facebook.</p>			
		
		</div>
		
	</div>
		
	<div class="shim-120"></div>
	
	<div class="relative">
		<img src="../../imgs/projects/facebook-4.png" class="hide-mobile"/>
		<div class="last absolute posTop posLeft width-lg-tablet" style="width:300px;" >
			<div class="shim-80 hide-lg-tablet"></div>
			<h4>Room for Innovation</h4>

			<p>Places on Facebook was one area where the tablet really shines. By integrating check-ins into the map view, users can quickly get a visual on who was around them, and where exactly they are.</p>	
	
		</div>
	</div>
	
	
	<div class="shim-40"></div>
	
	<div class="row-fluid">
		<div class="span8 append-4 last no-pad width-lg-tablet" >
			<h4>Visualizing the Status Update</h4>

			<p>Another innovation was to re-think the experience when the TouchPad was docked. We developed a visually rich exhibition mode that displays status updates in real-time that looks great on your desk or all the way across the room.</p>
		</div>
	</div>
	
	<div class="shim-40"></div>
	
	<img src="../../imgs/projects/facebook-5.png" />
	
	<div class="shim-40"></div>
	
	<div class="row-fluid">
		<div class="span6 graphic no-marg"><img src="../../imgs/projects/facebook-6.jpg" /></div>
		<div class="span6 graphic last no-marg"><img src="../../imgs/projects/facebook-7.jpg"/></div>
	</div>
	
	<div class="no-pad"><em>Alternative Exhibition Mode designs</em></div>
		
	<div class="shim-120"></div>
	
	
	<div class="row-fluid width-tablet">
		<div class="span4 no-pad">
			<h4>Take It All Apart and Put It Back Together</h4>

			<p>HP's goal in creating the first Facebook tablet application wasn't to simply recreate Facebook in a new form factor. They wanted to create a showcase for the hardware and the software with an application people will use everyday. Armed with that knowledge, we focused on identifying distinct user experiences within Facebook that would be enhanced using the conventions of WebOS.</p>
		
			<p>It was our distinct pleasure to develop the user experience with the help of our friends at <a href="http://uearchitects.com/" target="_blank" class="external">UE Architects</a>.</p>
		
		</div>
	
		<div class="span8 last">
			<img src="../../imgs/projects/facebook-8.jpg" class="right" />
		
			<div class="shim-40" style="height:10px"></div>
		
			<img class="graphic hide-tablet right" src="../../imgs/projects/facebook-10.png" />
		
		</div>
	</div>

	<div class="clear"></div>
	
	
	<?php 
	$currentProject = 'webos-facebook';
	require('../../inc/project-nav.php'); ?>

</div>

<?php require('../../inc/footer.php'); ?>