<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();

include ("conexionMySQL.php");
#hola
$conexion = Conectarse();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$url_anterior = $_SESSION['url'];
$re=mysql_query("select * from animal");

?>
<head>
<head>
		<meta charset="utf-8">
		<title>Boutique slider demo</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light|Cantarell' rel='stylesheet' type='text/css'>
		<!-- Including jquery: -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/For_the_demo.css">
		<!-- Including the plugin CSS: -->
		<link rel="stylesheet" type="text/css" href="css/boutique_min.css">
		<!-- Including the optional Easing plugin: -->
		<script type="text/javascript" src='js/jquery.easing.1.3.js'></script>
		<!-- Including the plugin: -->
		<script type="text/javascript" src="js/jquery.boutique_min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				// Calling the plugin on the element with the id "boutique".
				$('#boutique').boutique();

			});
		</script>
	</head>
	<body>
		<div id="content">
			<h1>boutique carousel</h1>

			<noscript>
				<div id="noscript">This gallery needs JavaScript to be switched on in your browser.</div>
			</noscript>




			<ul id="boutique">
				<li><a href="#frame1"><img src="images/image1.jpg" alt="Optional header"><span>Optional description.</span></a></li>
				<li><a href="#frame2"><img src="images/image2.jpg" alt="29.-"><span>An item that costs $29.</span></a></li>
				<li><a href="#frame3"><img src="images/image3.jpg" alt="Header 3"><span>&euro; 69.50</span></a></li>
				<li><img src="images/image4.jpg"><span>No header for this item and the description is a bit longer to occupy more lines. The next one has a minimal setup.</span></li>
				<li><img src="images/image5.jpg"></li>
				<li><img src="images/image6.jpg" alt="Long header with no description."></li>
			</ul>




			<span class="tab_act">Example + Description</span>
			<a class="tab_out" href="example2.htm">Example 2 / 3</a>
			<!--<a class="tab_out" href="instructions.htm">Instructions</a>-->
			<label class="tab_inactive" title="Available in the download package" alt="Available in the download package">Instructions</label>
			<div id="undertabs">&nbsp;</div>

			<div id="right">
				<h2>What's this?</h2>
				A ready to use jQuery slider/carousel to present your images in a unique, smooth and customizable way.
				<br><br>
				Simply link to the JavaScript and CSS files and apply it to your HTML element like other jQuery plugins. Customize the settings and CSS to match your style and purpose.<br>
				Full documentation and examples included.

				<h2>Compatible with:</h2>
				<ul>
					<li>IE6+, Firefox, Chrome, Opera, Safari</li>
					<li>JPG, PNG images</li>
					<li>All common Doctypes</li>
				</ul>

				<h2>Requirements:</h2>
				<ul>
					<li>
						jQuery library version 1.4.2+<br>
						(1.3 to skip the mouse-over effect)
					</li>
					<li><b>Optional:</b> jQuery easing plugin (included)</li>
				</ul>

			</div>

			<h2>Features:</h2>
			<ul>
				<li>Unlimited scrolling</li>
				<li>Unlimited number of images</li>
				<li>Customizable</li>
				<li>Optional headers</li>
				<li>Optional description text</li>
				<li>Optional hyperlink</li>
				<li>Optional autoplay (paused on hover)</li>
				<li>Keyboard support</li>
				<li>Multiple instances per page</li>
				<li>Uninterupted navigation (try quickly tapping the arrow keys on your keyboard)</li>
				<li>3 Example styles out of the box</li>
				<li>Advanced: External functions (next/previous)</li>
				<li>Advanced: Callback functions</li>
				<li>Contains fully commented source code</li>
				<li>Contains documentation/help file</li>
			</ul>

			<h2>Settings:</h2>
			<ul>
				<li>Total carousel width</li>
				<li>Image dimensions</li>
				<li>Styling of the frames, text area, headers and descriptions</li>
				<li>Movement speeds</li>
				<li>Easing types</li>
				<li>Starting item</li>
				<li>Enable/disable navigation while animating</li>
				<li>Enable/disable autoplay</li>
				<li>Autoplay interval</li>
				<li>Show title/description on all frames or only the front frame</li>
				<li>
					Opacity / size of background frames<br>
					And more
				</li>
			</ul>

			<h2>Markup:</h2>
			<div class="code">
				&lt;ul id="boutique"&gt;
				<div class="tab">
					<br>
					<span class="comment">// Frame with minimal setup:</span><br>
					&lt;li&gt;&lt;img src="<b>images/image.jpg</b>"&gt;&lt;/li&gt;
					<br><br>
					<span class="comment">// Frame with full setup:</span><br>
					&lt;li&gt;
					<div class="tab">
						&lt;a href="<b>Optional link</b>"&gt;
						<div class="tab">
							&lt;img src="<b>images/image1.jpg</b>" alt="<b>Optional header</b>"&gt;<br>
							&lt;span><b>Optional description.</b>&lt;/span&gt;
						</div>
						&lt;/a&gt;
					</div>
					&lt;/li&gt;
					<br><br>
				</div>
				&lt;/ul&gt;
			</div>

			<h2>Version updates:</h2>
			<b>v1.2</b> (2010/10/18):
			<ul>
				<li>Added <i>container_width</i> as plugin option</li>
				<li>Added <i>front_img_width</i> as plugin option</li>
				<li>Added <i>front_img_height</i> as plugin option</li>
				<li>Added <i>text_opacity</i> as plugin option</li>
				<li>Added <i>text_front_only</i> as plugin option</li>
				<li>Added external functions (previous / next) (see example page 2) to use for buttons</li>
				<li>Added a callback function: link click (see example page 2) to use for any other action than following a URL link</li>
				<li>Added a callback function: frame moved forward (see example page 2)</li>
			</ul>
			Note: all previous settings / CSS will still work in the new version so you can update safely.

			<div id="footer">
				Boutique carousel is exclusively available at <a href="http://codecanyon.net/item/boutique-carousel/113093">Code Canyon</a>. Example images feature <a href="http://princesslea.tumblr.com/" target="_blank">Princess Lea</a>.
			</div>

		</div>

		<script>
			// Just for this demo:
			if($.browser.msie){ $('body').addClass('ie'); }
		</script>
	</body>
</html>