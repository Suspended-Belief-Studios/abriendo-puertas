<?php 	$pageTitle = "APOD: Abriendo Puertas &#9119; Opening Doors";	$menuItem = "home";	$spanishPage = "esindex.php";	include('inc/header.php'); ?>			 		<div class="container">			<!-- Slideshow and Text			================================================== -->			<div class="sixteen columns">				<div class="two-thirds column alpha">								<ul class="bxslider">											<li><img src="images/bxslider/01.jpg"></li>						<li><img src="images/bxslider/02.jpg"></li>						<li><img src="images/bxslider/03.jpg"></li>						<li><img src="images/bxslider/04.jpg"></li>						<li><img src="images/bxslider/05.jpg"></li>					</ul>									</div>								<div class="one-third column omega">										<div class="textBox">						<h6 class="add-bottom edit-txt" id="n0">Abriendo Puertas / Opening&nbsp;Doors is the nation’s first evidence-based comprehensive training program developed by and for Latino parents with children ages 0-5.</h6>						<br> 						<h5 class="red-orange edit-txt" stlye="text-align: center; padding: 40px;" id="n1">In the News</h5>						<p class="edit" id="n2"><strong><a href="http://ap-od.org/pdfs/Aspen-Institute-Ascend--Network.pdf" target="_blank">Aspen Institute taps Abriendo Puertas to join prestigious Ascend Network</a> (Abriendo Puertas/Opening Doors, May 5, 2014)<br />
<a href="http://noticias.univision.com/article/1921188/2014-04-15/educacion/pequenos-y-valiosos/llevando-libros-a-quienes-mas-los-necesitan" target="_blank">Llevando libros a quienes mas los necesitan</a> (Univision, April 15, 2014)<br />
<a href="http://www.bushcenter.org/blog/2014/04/10/americas-schools-are-where-immigrant-students-enter-larger-culture" target="_blank">America's schools are where immigrant students enter the larger culture</a><br />
(Bush Center, April 10, 2014)<br />
<a href="http://www.youtube.com/watch?v=z0H_qyi6xCo&amp;feature=youtu.be" target="_blank">U.S. Department of Education Releases New Family and Community Engagement Framework</a><br />
(Ed.gov, April 8, 2014)</strong><br />
<br />
<strong><a href="https://delicious.com/ap_od" target="_blank">See All News</a></strong><br />
</p>																	</div>									</div>						</div>				 		<div class="sixteen columns center">				<hr>	 		</div>	 			<!-- Mission and Youtube Video			================================================== -->						<div class="sixteen columns add-bottom">				<div class="mission eight columns purple textBox alpha add-bottom">					<h3 class="oswald edit-txt" id="n3">Mission</h3>					<p class="edit" id="n4">The mission of Abriendo Puertas/Opening Doors is to support Latino parents in their roles as family leader and as their child’s first and most influential teacher in a home that is their child's first school.</p>					<p class="edit" id="n5">Abriendo Puertas /Opening Doors uses a two-generation approach that aims to increase the number of Latino children in the United States that enter school ready to learn and able to succeed in&nbsp;life.</p>				</div>							<!-- 				<div class="desktop">								<div class="eight columns omega add-bottom">									<a id="index-movie" href="http://www.youtube.com/embed/IS6vh8RsIYg?pt=youtube" class="youtube_popup">										<img src="images/index_vid_thumb.svg" class="scale-with-grid transition-fast">									</a>								</div>							</div> -->								<div class="eight columns omega add-bottom">					<ul id="bxslider-video">						<li>							<iframe width="420" height="315" src="//www.youtube.com/embed/IS6vh8RsIYg" frameborder="0" allowfullscreen></iframe>						</li>					</ul>									</div>			</div> <!-- end sixteen column -->					</div> <!-- end container -->	<?php include('inc/footer.php'); ?>	<!-- End Document================================================== -->	<!--- Javascript  -->	<script src="http://code.jquery.com/jquery-latest.js"></script>  <script src="js/plugins/jquery.fitvids.js"></script>	<script src="js/jquery.bxslider.js"></script>		<!-- bxslider -->	<script type="text/javascript">		$(document).ready(function(){			$('.bxslider').bxSlider();			});			$('#bxslider-video').bxSlider({				video: true,		    useCSS: false,		    auto: false,			});	</script>		<!-- FlexNav -->	<script type="text/javascript" src="js/jquery.flexnav.min.js"></script>	<script type="text/javascript">		$(".flexnav").flexNav();	</script>	<script src="js/jquery.popup.min.js"></script>	<script>		$('.youtube_popup').popup({				types		: {					youtube			: function(content, callback){						content = '<iframe width="600" height="450" src="'+content+'" frameborder="0" allowfullscreen></iframe>';						// Don't forget to call the callback!						callback.call(this, content);					}				},				width					: 600,				height				: 450			});	</script>	</body></html>