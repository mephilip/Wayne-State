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
			<img id="logo" src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/path-get/assets/images/wsu-shield.png" alt="wsu-shield" width="482" height="424">
		</div>
	</header>
	<section id="panel-content">
	
	
	</section>

</div>
<div id="" class="full-panel login-panel">
	
	<section id="panel-content">
	
	
	</section>

</div>


<?php include($file_get->FileReturn($server,'footer.php')); ?>
