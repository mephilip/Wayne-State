<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/sass/assets/javascripts/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/path-get/assets/javascripts/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/javascripts/hover-intent.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/javascripts/min/jquery.functions-min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]?>/test/thomas/library/javascripts/min/bento_queries-min.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script>
  $(function() {
	  $( "#search-input" ).autocomplete({
	      source: function( request, response ) {
	        $.ajax({
	          url: "http://cgi.lib.wayne.edu/stats/piwik/index.php?module=API&method=Actions.getSiteSearchKeywords&idSite=10&date=yesterday&format=json&filter_limit=1000&token_auth=8d09da4f7f800902afbeb6ea72029d8e&period=day",
	          dataType: "jsonp",
	          data: {
	            label: request.term
	          },
	          minLength: 3,
	          success: function( data ) {
		         console.log(data);
	            response( data )
	          }
	        });
	      },
	    });
	});
  </script>
</body>
</html>
