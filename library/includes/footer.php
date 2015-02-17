<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/sass/assets/javascripts/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/path-get/assets/javascripts/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/javascripts/hover-intent.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/javascripts/min/jquery.functions-min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/javascripts/min/bento_queries-min.js"></script>

<script>
		  
  $(function() {
  	var keywords = [ <?php echo  $keywords?>  ];
    $( "#search-input" ).autocomplete({
			source: keywords,
			minLength: 3,
			delay: 700,
			appendTo: "#search-entry-box"
    });
  });
  </script>

</body>
</html>
