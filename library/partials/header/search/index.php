<?php 
	include($_SERVER['DOCUMENT_ROOT'] . '/test/thomas/library/includes/functions.php');
	include($file_get->FileReturn($server,'header.php'));
	include($file_get->FileReturn($server,'flex-nav.php'));
?>
<div id="container" class="full-panel search-panel header-panel">
	<div id="flex-overlay"></div>
	<div id="nav-toggle" class="flex-btn"><span></span></div>
	<header>
		<div id="page-header">
			<div id="header-wrap">
				<div id="contents">
					<img id="logo" src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/path-get/assets/images/wsu-shield.png" alt="wsu-shield" width="482" height="424">
					
					<nav id="page-nav">
						<ul class="nav main-nav parent-nav">
						  <li role="presentation" class="nav-item">
						  		<a href="#">Resources</a>
						  		<ul class="sub-nav">
						  			<li><a href="">Databases</a></li>
						  			<li><a href="">Resource</a></li>
						  			<li><a href="">Resource</a></li>
								</ul>
						  </li>
						  <li role="presentation" class="nav-item">
						  		<a href="#">Services</a>
						  		<ul class="sub-nav">
						  			<li><a href="">Service</a></li>
						  			<li><a href="">Service</a></li>
						  			<li><a href="">Service</a></li>
								</ul>
						  </li>
						  <li role="presentation"><a href="#">Libraries</a></li>
						  <li role="presentation"><a class="icon" href="#"><i class="fa fa-comment"></i> Ask-A-Librarian</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
	</header>
	<section id="panel-content">
	
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
							<input id="search-input" type="text" class="form-control" placeholder="Articles, books, journals, and more" aria-describedby="sizing-addon1">
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
			</div>
			
			<div id="search-results"></div>
		</div>
	
	</section>

</div>
<div id="" class="full-panel">
	
	<section id="panel-content">
	
		<h1>"Imagine all the content ... " ~ John Lennon</h1>
	
	</section>

</div>


<?php include($file_get->FileReturn($server,'footer.php')); ?>
