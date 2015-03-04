<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/sass/assets/javascripts/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/path-get/assets/javascripts/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/javascripts/hover-intent.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script src="http://www.youtube.com/player_api"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/javascripts/min/jquery.functions-min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/javascripts/min/bento_queries-min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST']?>/test/thomas/library/javascripts/min/quicktoe-min.js"></script>

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
  <script>
    
    // create youtube player
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('my_video', {
          height: '100%',
          width: '100%',
          videoId: '',
		  playerVars: {'controls': 1, 'theme':'light', 'showinfo':0, 'rel':0 },          
		  events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
    }
    var delay = (function(){
	  var timer = 0;
	  return function(callback, ms){
	    clearTimeout (timer);
	    timer = setTimeout(callback, ms);
	  };
	})();
    function load_video_by_id(video_id){
	    $('#video_modal').modal('show');
	    player.loadVideoById({'videoId': video_id, 'startSeconds': 0});
    }
   
    // autoplay video
    function onPlayerReady(event) {
        		$('#video_modal').on('click', function(){
					event.target.pauseVideo();
					$('#video_modal').modal('hide');
				});
				
				$('#video_play').on('click', function(){
					event.target.playVideo();
				});
				
				$('#watch_video').on('click', function(){
					event.target.playVideo();
				});
    }

    // when video ends
    function onPlayerStateChange(event) {        
        if(event.data === 0) {            
            $('#video_modal').modal('hide');
        }
    }
    
</script>
</body>
</html>
