<?php 
	//error_reporting(E_ALL);
	include($_SERVER['DOCUMENT_ROOT'] . '/test/thomas/library/includes/functions.php');
	include($file_get->FileReturn('','header.php'));
	include($file_get->FileReturn('','flex-nav.php'));
?>
<div class="header-panel">
<header>
		<div id="page-header">
			<div id="header-wrap">
				<div id="contents">
					<img id="logo" src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/path-get/assets/images/wsu-shield.png" alt="wsu-shield" width="482" height="424">
					
					<nav id="page-nav">
						<ul class="nav main-nav parent-nav">
						  <li role="presentation" class="nav-item">
						  		<a class="nav-link-sub" href="#">Resources</a>
						  		<ul class="sub-nav sub-resources">
							  		<div class="sub-nav-wrap">
								  		<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/resources/databases/">Article Databases</a></li>
			            	<li><a href="http://elibrary.wayne.edu/search/X">Catalog</a></li>
			            	<li><a href="http://up7af9tu5s.search.serialssolutions.com/?SS_Page=refiner">Citation Linker</a></li>
			            	<li><a href="http://digital.library.wayne.edu/digitalcollections/">Digital Collections</a></li>
			            	<li><a href="http://digitalcommons.wayne.edu/">Digital Commons</a></li>
			            	<li><a href="http://library.wayne.edu/resources/ebooks/">E-Books</a></li>
								  		</div>

							  		
								  		<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/resources/journals/">E-Journals</a></li>
							            	<li><a href="http://guides.lib.wayne.edu/c.php?g=174854">Reference Tools</a></li>
							            	<li><a href="http://guides.lib.wayne.edu/">Research Guides</a></li>
							            	<li><a href="http://guides.lib.wayne.edu/friendly.php?action=82&amp;s=SpecialCollections">Special Collections</a></li>
							            	<li><a href="http://wayne.summon.serialssolutions.com/#!/">Summon</a></li>
											<li>
												<a class="icon" href="https://scholar.google.com/">
													<span class='goo-blue'>G</span><span class='goo-red'>o</span><span class='goo-yellow'>o</span><span class='goo-blue'>g</span><span class='goo-green'>l</span><span class='goo-red'>e</span>
													 Scholar
												</a>
											</li>
								  		</div>
								  		
								  		<div class="sub-nav-break video-resources">
									  		<h4>Video Resources <i class="fa fa-youtube-play"></i></h4>
									  		<?php
										  		
										  		get_youtube('https://www.youtube.com/watch?v=Oy7gJad7-A8');	
										  		get_youtube('https://www.youtube.com/watch?v=FJdWZm6GgVc');
										  		get_youtube('https://www.youtube.com/watch?v=lrUVfEt_1xg');
										  	?>
										  	<div id="all-videos"><a href='https://www.youtube.com/user/wsuinst/'>View All</a></div>
								  		</div>
								  		
							  		</div>
								</ul>
						  </li>
						  <li role="presentation" class="nav-item">
						  		<a class="nav-link-sub" href="#">Services</a>
						  		<ul class="sub-nav">
						  			<div class="sub-nav-wrap">
							  			<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/services/help/">Ask-A-Librarian</a></li>
								  			<li><a href="http://library.wayne.edu/services/borrowing/">Borrowing</a></li>
								  			<li><a href="http://library.wayne.edu/services/classroom/">Classroom Support</a></li>
								  			<li><a href="http://library.wayne.edu/services/computing/">Computing</a></li>								
							  			</div>
							  			<div class="sub-nav-break">
								  			<li><a href="http://copyright.wayne.edu/">Copyright@Wayne</a></li>
							            	<li><a href="http://library.wayne.edu/services/events/">Events Support</a></li>
							            	<li><a href="http://library.wayne.edu/services/research/">Faculty/Grad Research Support</a></li>
							            	<li><a href="https://wayne.illiad.oclc.org/illiad/illiad.dll">Interlibrary Loan</a></li>
							  			</div>
							  			<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/services/instruction/">Instruction</a></li>
							            	<li><a href="http://library.wayne.edu/services/reserves/">Reserves</a></li>
							            	<li><a href="http://library.wayne.edu/services/rooms/">Room Reservations</a></li>
							            	<li><a href="http://scholarscooperative.wayne.edu/">Scholars Cooperative</a></li>
							  			</div>
							  		</div>
								</ul>
						  </li>
						  <li role="presentation" class="nav-item">
						  <a class="nav-link-sub" href="#">Libraries</a>
						  	<ul class="sub-nav">
						  	<div class="sub-nav-wrap">
							  			<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/neef">Authur Neef Law</a></li>
								  			<li><a href="http://library.wayne.edu/pk">Purdy/Kresge</a></li>
								  			<li><a href="http://reuther.wayne.edu/">Reuther</a></li>
								  			<li><a href="http://library.wayne.edu/shiffman">Shiffman Medical</a></li>
							  			</div>
							  			<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/ugl">Undergraduate</a></li>
							            	<li><a href="http://library.wayne.edu/info/about/">About</a></li>
							            	<li><a href="http://library.wayne.edu/info/app-lab/">App Lab</a></li>
							            	<li><a href="http://library.wayne.edu/info/staff/">Contact &amp; Staff Directory</a></li>							  			
							            </div>
							  			<div class="sub-nav-break">
								  			<li><a href="http://library.wayne.edu/info/hours/">Hours</a></li>
							            	<li><a href="http://library.wayne.edu/info/maps/">Maps &amp; Directions</a></li>
							            	<li><a href="http://library.wayne.edu/blog/">News</a></li>
							            	<li><a href="http://library.wayne.edu/info/policies/">Policies</a></li>							  				</div>
							  </div>
						  	</ul>
						  </li>
						  <li role="presentation"><a class="icon" href="#"><i class="fa fa-comment"></i> Ask-A-Librarian</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
	</header>
</div>
<div id="nav-toggle" class="flex-btn"><span></span></div>
<div id="flex-overlay"></div>

<div id="container" class="full-panel search-panel header-panel">
	
	<section class="panel-content inner-panel">
	
		<div id="page-content">
			<div id="page-content-inner">
				<section class="main">	
						<h1>Classroom Technology Support</h1>

			
				</section>
				
				<aside class="navigation">
						<h5>Navigation goes here</h5>
				</aside>
			</div>
			
		</div>
	
	
		<div class="section-overlay"></div>
	</section>

</div>
<?php /*<div id="" class="full-panel">
	
	<section class="panel-content">
		<h1>"Imagine all the content ... " ~ John Lennon</h1> 
	</section>

</div> */?>



<div id="" class="auto-panel">
	
	<section class="panel-content">
		<footer id="main-footer">
			<div id="branding-panel">
				<div class="brand-inner">
					<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
				</div>
			</div>
			<div id="footer-top">
				<div class="footer-contents">
					<div class="footer-list">
						<h2>Resources</h2>
						<ul>
							<li><a href="http://library.wayne.edu/resources/databases/">Article Databases</a></li>
			            	<li><a href="http://elibrary.wayne.edu/search/X">Catalog</a></li>
			            	<li><a href="http://up7af9tu5s.search.serialssolutions.com/?SS_Page=refiner">Citation Linker</a></li>
			            	<li><a href="http://digital.library.wayne.edu/digitalcollections/">Digital Collections</a></li>
			            	<li><a href="http://digitalcommons.wayne.edu/">Digital Commons</a></li>
			            	<li><a href="http://library.wayne.edu/resources/ebooks/">E-Books</a></li>
			            	<li><a href="http://library.wayne.edu/resources/journals/">E-Journals</a></li>
			            	<li><a href="http://guides.lib.wayne.edu/c.php?g=174854">Reference Tools</a></li>
			            	<li><a href="http://guides.lib.wayne.edu/">Research Guides</a></li>
			            	<li><a href="http://guides.lib.wayne.edu/friendly.php?action=82&amp;s=SpecialCollections">Special Collections</a></li>
			            	<li><a href="http://wayne.summon.serialssolutions.com/#!/">Summon</a></li>
			            	
						</ul>
					</div>
					
					<div class="footer-list">
						<h2>Services</h2>
						<ul>
							<li><a href="http://library.wayne.edu/services/help/">Ask-A-Librarian</a></li>
			            	<li><a href="http://library.wayne.edu/services/borrowing/">Borrowing</a></li>
			            	<li><a href="http://library.wayne.edu/services/classroom/">Classroom Support</a></li>
			            	<li><a href="http://library.wayne.edu/services/computing/">Computing</a></li>
			            	<li><a href="http://copyright.wayne.edu/">Copyright@Wayne</a></li>
			            	<li><a href="http://library.wayne.edu/services/events/">Events Support</a></li>
			            	<li><a href="http://library.wayne.edu/services/research/">Faculty/Grad Research Support</a></li>
			            	<li><a href="https://wayne.illiad.oclc.org/illiad/illiad.dll">Interlibrary Loan</a></li>
			            	<li><a href="http://library.wayne.edu/services/instruction/">Instruction</a></li>
			            	<li><a href="http://library.wayne.edu/services/reserves/">Reserves</a></li>
			            	<li><a href="http://library.wayne.edu/services/rooms/">Room Reservations</a></li>
			            	<li><a href="http://scholarscooperative.wayne.edu/">Scholars Cooperative</a></li>
						</ul>
					</div>
					
					<div class="footer-list">
						<h2>Libraries</h2>
						<ul>
			            	<li><a href="http://library.wayne.edu/neef">Authur Neef Law</a></li>
			            	<li><a href="http://library.wayne.edu/pk">Purdy/Kresge</a></li>
			            	<li><a href="http://reuther.wayne.edu/">Reuther</a></li>
			            	<li><a href="http://library.wayne.edu/shiffman">Shiffman Medical</a></li>
			            	<li><a href="http://library.wayne.edu/ugl">Undergraduate</a></li>
			            	<li><a href="http://library.wayne.edu/info/about/">About</a></li>
			            	<li><a href="http://library.wayne.edu/info/app-lab/">App Lab</a></li>
			            	<li><a href="http://library.wayne.edu/info/staff/">Contact &amp; Staff Directory</a></li>
			            	<li><a href="http://library.wayne.edu/info/hours/">Hours</a></li>
			            	<li><a href="http://library.wayne.edu/info/maps/">Maps &amp; Directions</a></li>
			            	<li><a href="http://library.wayne.edu/blog/">News</a></li>
			            	<li><a href="http://library.wayne.edu/info/policies/">Policies</a></li>
		            	</ul>
					</div>
					
					<div class="footer-list footer-give">
						<div id="give-wsu">
							<span class="give-text">GIVE to WSU</span>
							<span class="right-wave"></span>
							<span class="left-wave"></span>
						</div>
						<address>
						<span>Wayne State <small>University Libraries</small></span><br/>
						5265 Cass Ave<br/>
						Detroit, MI 48202, USA
						</address>
						
						<form id="newsletter-signup">
							<div class="input-group">
						      
								<input id="newsletter-input" type="text" class="form-control" placeholder="Newsletter Signup" autocomplete="off">
								<div class="input-group-addon newsletter-go">
									<button id="ajax-search">
										<i class="fa fa-envelope"></i>
									</button>
								</div>
							</div>
						</form>		
						<h4><a href="http://wayne.edu/aimhigher/">AIM HIGHER</a></h4>		
						<ul class="social-links">
				          <li><a href=""><i class="fa fa-facebook"></i></a></li>
				          <li><a href=""><i class="fa fa-twitter"></i></a></li>
				          <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
						</ul>		
						
					</div>
				</div>
			</div>
			
			<div id="footer-bottom">
				<div class="footer-contents">
					<div class="date">
						<p><span>© 2009 - <?php echo date('Y');?></span> <span>Wayne State University Board of Governors</span></p>
					</div>
					<div class="logo"></div>
					<div class="credits">
						<ul>
							<li><a href="http://library.wayne.edu/info/policies/eresources.php">Acceptable Use</a></li>
							<li><a href="http://library.wayne.edu/info/policies/privacy.php">Privacy</a></li>
							<li><a href="http://library.wayne.edu/info/meta/sitemap.php">Site Map</a></li>
							<li><a href="http://library.wayne.edu/forms/suggestions.php">Suggestions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</section>
	
</div>


<div id="video_modal_wrap">
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body" id="my_video"></div>
    </div>
  </div>
</div>
</div>
<div id="mobile-swipe">
	<div class="swipe-inner">
		<div class="hours-open tab-close">
			<h3>Hours Content</h3>

<p>Vivamus ornare neque at ex luctus fringilla. In fringilla erat lacinia velit imperdiet sagittis. Suspendisse aliquam at ante sed suscipit. Pellentesque ac ligula posuere, rhoncus massa vitae, tempus tortor. Vestibulum ut sem quis turpis venenatis sagittis. Proin turpis lacus, luctus eu lacus eu, pharetra scelerisque nibh. Morbi lorem erat, porttitor vel tincidunt sit amet, aliquam vitae eros. Nunc ac eleifend eros. Nam congue eros eu suscipit efficitur. Nulla ut nisi at risus rhoncus efficitur nec a arcu. Aenean aliquam odio ut dui efficitur, at varius arcu egestas.</p>

<p>Phasellus scelerisque lectus eget ipsum rhoncus, et sagittis lorem sollicitudin. Donec vel metus tempor, facilisis risus eget, placerat lorem. Aenean lacinia turpis eu ligula porta sodales. Etiam eros eros, rutrum et molestie in, facilisis eu massa. In vel lorem vel neque mattis dapibus. Pellentesque efficitur mi sem, ut venenatis quam lobortis ac. Cras euismod ligula porta tortor malesuada cursus. Quisque egestas ornare eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ut dui elementum, euismod augue quis, ornare turpis. Mauris a pulvinar nisl, quis porttitor nulla. In hac habitasse platea dictumst. Vivamus molestie, nisi sed maximus venenatis, quam erat ullamcorper lacus, ac iaculis felis tellus et diam. Nam tincidunt hendrerit turpis, sed egestas nulla pulvinar et.</p>

<p>Mauris congue, neque id dapibus tincidunt, tellus felis cursus eros, non fringilla lorem risus quis nibh. Cras posuere ligula quis vestibulum lobortis. Maecenas eget mollis augue, nec porttitor nisl. Donec bibendum nulla a blandit congue. Cras elementum ex velit, tempor feugiat enim vestibulum eu. Suspendisse potenti. Phasellus placerat lacus ac mi pellentesque, id lobortis lorem ornare. Nulla maximus iaculis urna, sit amet aliquet magna lacinia vitae.</p>
		</div>
		
		<div class="phone-open tab-close">
			<h3>Phone/Contact Content</h3>

<p>Vivamus ornare neque at ex luctus fringilla. In fringilla erat lacinia velit imperdiet sagittis. Suspendisse aliquam at ante sed suscipit. Pellentesque ac ligula posuere, rhoncus massa vitae, tempus tortor. Vestibulum ut sem quis turpis venenatis sagittis. Proin turpis lacus, luctus eu lacus eu, pharetra scelerisque nibh. Morbi lorem erat, porttitor vel tincidunt sit amet, aliquam vitae eros. Nunc ac eleifend eros. Nam congue eros eu suscipit efficitur. Nulla ut nisi at risus rhoncus efficitur nec a arcu. Aenean aliquam odio ut dui efficitur, at varius arcu egestas.</p>

<p>Phasellus scelerisque lectus eget ipsum rhoncus, et sagittis lorem sollicitudin. Donec vel metus tempor, facilisis risus eget, placerat lorem. Aenean lacinia turpis eu ligula porta sodales. Etiam eros eros, rutrum et molestie in, facilisis eu massa. In vel lorem vel neque mattis dapibus. Pellentesque efficitur mi sem, ut venenatis quam lobortis ac. Cras euismod ligula porta tortor malesuada cursus. Quisque egestas ornare eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ut dui elementum, euismod augue quis, ornare turpis. Mauris a pulvinar nisl, quis porttitor nulla. In hac habitasse platea dictumst. Vivamus molestie, nisi sed maximus venenatis, quam erat ullamcorper lacus, ac iaculis felis tellus et diam. Nam tincidunt hendrerit turpis, sed egestas nulla pulvinar et.</p>

<p>Mauris congue, neque id dapibus tincidunt, tellus felis cursus eros, non fringilla lorem risus quis nibh. Cras posuere ligula quis vestibulum lobortis. Maecenas eget mollis augue, nec porttitor nisl. Donec bibendum nulla a blandit congue. Cras elementum ex velit, tempor feugiat enim vestibulum eu. Suspendisse potenti. Phasellus placerat lacus ac mi pellentesque, id lobortis lorem ornare. Nulla maximus iaculis urna, sit amet aliquet magna lacinia vitae.</p>
		</div>
		
		<div class="map-open tab-close">
			<h3>Maps Content</h3>

<p>Vivamus ornare neque at ex luctus fringilla. In fringilla erat lacinia velit imperdiet sagittis. Suspendisse aliquam at ante sed suscipit. Pellentesque ac ligula posuere, rhoncus massa vitae, tempus tortor. Vestibulum ut sem quis turpis venenatis sagittis. Proin turpis lacus, luctus eu lacus eu, pharetra scelerisque nibh. Morbi lorem erat, porttitor vel tincidunt sit amet, aliquam vitae eros. Nunc ac eleifend eros. Nam congue eros eu suscipit efficitur. Nulla ut nisi at risus rhoncus efficitur nec a arcu. Aenean aliquam odio ut dui efficitur, at varius arcu egestas.</p>

<p>Phasellus scelerisque lectus eget ipsum rhoncus, et sagittis lorem sollicitudin. Donec vel metus tempor, facilisis risus eget, placerat lorem. Aenean lacinia turpis eu ligula porta sodales. Etiam eros eros, rutrum et molestie in, facilisis eu massa. In vel lorem vel neque mattis dapibus. Pellentesque efficitur mi sem, ut venenatis quam lobortis ac. Cras euismod ligula porta tortor malesuada cursus. Quisque egestas ornare eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ut dui elementum, euismod augue quis, ornare turpis. Mauris a pulvinar nisl, quis porttitor nulla. In hac habitasse platea dictumst. Vivamus molestie, nisi sed maximus venenatis, quam erat ullamcorper lacus, ac iaculis felis tellus et diam. Nam tincidunt hendrerit turpis, sed egestas nulla pulvinar et.</p>

<p>Mauris congue, neque id dapibus tincidunt, tellus felis cursus eros, non fringilla lorem risus quis nibh. Cras posuere ligula quis vestibulum lobortis. Maecenas eget mollis augue, nec porttitor nisl. Donec bibendum nulla a blandit congue. Cras elementum ex velit, tempor feugiat enim vestibulum eu. Suspendisse potenti. Phasellus placerat lacus ac mi pellentesque, id lobortis lorem ornare. Nulla maximus iaculis urna, sit amet aliquet magna lacinia vitae.</p>
		</div>
	</div>
</div>
<div id="mobile-slider">
	<div class="mobile-button home active">
		<i class="fa fa-home"></i>
	</div>
	<div class="mobile-button hours ">
		<i class="fa fa-clock-o"></i>
	</div>
	<div class="mobile-button phone">
		<i class="fa fa-phone"></i>
	</div>
	<div class="mobile-button map">
		<i class="fa fa-map-marker"></i>
	</div>
</div>
<?php include($file_get->FileReturn('','footer.php')); ?>















