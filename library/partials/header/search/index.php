<?php 
	include($_SERVER['DOCUMENT_ROOT'] . '/test/thomas/library/includes/functions.php');
	include($file_get->FileReturn($server,'header.php'));
	include($file_get->FileReturn($server,'flex-nav.php'));
?>

<div class="header-panel">

<header>
		<div id="page-header">
			<div id="header-wrap">
				<div id="contents">
					<img id="logo" src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/path-get/assets/images/wsu-shield.png" alt="wsu-shield" width="482" height="424">
					
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
	
		<section class="panel-content">
	
		<div id="search-form">
			<div id="search-close" class="active"><span></span></div>
			<div class="panel-center">
				<h1>Research Starts Here</h1>
				<div class="panel-form">
					<form id="quick-search-form">
					<div class="input-group input-group-lg">
							<div class="input-group-btn">
					        <button type="button" class="btn btn-default dropdown-toggle search-select" data-toggle="dropdown" aria-expanded="false">All <span class="caret"></span></button>
					        <ul class="dropdown-menu" role="menu">
					          <li><a href="#"><span class="drop-text">Books</span> <i class="fa fa-book"></i></a></li>
					          <li><a href="#"><span class="drop-text">Journals</span> <i class="fa fa-newspaper-o"></i></a></li>
					          <li><a href="#"><span class="drop-text">Databases</span> <i class="fa fa-database"></i></a></li>
					          <li><a href="#"><span class="drop-text">Articles</span> <i class="fa fa-files-o"></i></a></li>
					          <li><a href="#"><span class="drop-text">Research Guides</span> <i class="fa fa-file-text"></i></a></li>
					          <li class="divider"></li>
					          <li><a class="all-search" href="#"><span class="drop-text">All</span><i class="fa fa-file-text"></i> <i class="fa fa-files-o"></i> <i class="fa fa-database"></i> <i class="fa fa-newspaper-o"></i> <i class="fa fa-book"></i></a></li>
					        </ul>
					      </div><!-- /btn-group -->
					      <div id="search-entry-box" class="input-group">
							<input id="search-input" type="text" class="form-control" placeholder="Articles, books, journals, and more" aria-describedby="sizing-addon1">
					      </div>
							<div class="input-group-addon search-go">
								<button id="ajax-search">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
					<ul id="form-help">
						<li><a href="">Login</a></li>
						<li><a href="">Help?</a></li>
					</ul>
				</div>
				
				<div id="search-results">
					<div id="search-term-wrap"><span id="search-term"></span></div>
					<div id="search-divide"></div>				
				</div>
			</div>
			
			
		</div>
	
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
						<strong>Wayne State <small>University Libraries</small></strong><br/>
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
<?php include($file_get->FileReturn($server,'footer.php')); ?>