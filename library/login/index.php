<?php 
	include('functions.php');
	include('header.php');
	include('flex-nav.php');
?>
<div id="container" class="full-panel login-panel">
	<div id="flex-overlay"></div>
	<div id="nav-toggle" class="flex-btn"><span></span></div>
	<header>
		<div id="header_contain">
			<img id="logo" src="path-get/assets/images/wsu-shield.png" alt="wsu-shield" width="482" height="424">
		</div>			
	</header>
	
	<section class="panel-content">
		<div id="log-in">
			<div class="div-inner">
				<h1>University Libraries <small>EZproxy Login</small></h1>
				<div id="form_wrap">
					<form method="post" action="https://login.proxy.lib.wayne.edu/login">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Access ID</label>
						    <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Enter Access ID">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
						  </div>
						  <button type="submit" class="btn btn-default"><i class="fa fa-user"></i> Login</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="credits">
		<div id="link_wrap">
			<div id="links" class="">
				<div class="divider"></div>
				<ul>
					<li><a target="_blank" href="http://www.library.wayne.edu/services/computing/remote_access/ezproxy_faq.php">Problems Connecting?</a></li>
					<li><a target="_blank" href="http://www.library.wayne.edu/services/computing/remote_access/">Remote Access</a></li>
					<li><a target="_blank" href="http://www.library.wayne.edu/services/help/">Contact Us</a></li>
					<li><a target="_blank" href="http://www.library.wayne.edu/services/reserves/persistent_links.php">Permanent Links</a></li>
					<li class="copy">© 2009 - <?php echo date('Y');?><br/> Wayne State University Board of Governors</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php include('footer.php'); ?>
