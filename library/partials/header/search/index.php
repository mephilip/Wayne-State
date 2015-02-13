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
						  			<li><a href="">Resource</a></li>
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
	
	
	</section>

</div>
<div id="" class="full-panel">
	
	<section id="panel-content">
	
		<h1>"Imagine all the content ... " ~ John Lennon</h1>
	
	</section>

</div>


<?php include($file_get->FileReturn($server,'footer.php')); ?>
