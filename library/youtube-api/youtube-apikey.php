<!DOCTYPE html>
<?php /*<html>
<head>
	<title>Page Title</title>
</head>
<body>

	<header>
	<iframe id="ytplayer" type="text/html" width="640" height="390"
  src="http://www.youtube.com/embed/SkfbtL6LFsM?autoplay=0&controls=1&theme=light&showinfo=0&rel=0&enablejsapi=1&color=red&modestbranding=1"
  frameborder="0"></iframe>
  
  <a onclick="callPlayer('ytplayer','playVideo'); return false;">Play</a>
  <a onclick="callPlayer('ytplayer','pauseVideo'); return false;">Pause</a>
  
  
  
  <br/><br/><br/><br/>
  
  <iframe id="ytplayer2" type="text/html" width="640" height="390"
  src="http://www.youtube.com/embed/heuM7s-IXyQ?autoplay=0&controls=1&theme=light&showinfo=0&rel=0&enablejsapi=1&color=red&modestbranding=1"
  frameborder="0"></iframe>
  
  <a onclick="callPlayer('ytplayer2','playVideo'); return false;">Play</a>
  <a onclick="callPlayer('ytplayer2','pauseVideo'); return false;">Pause</a>

	</header>
	
	<section> v
		
	</section>

	<footer>*/?>
	<?php
	$query = "Wayne state";
	$query = urlencode($query);
	$link = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyDbQuNvI8irWPX6jqgOmZbCKPr4Ze35BHk&channelId=UCDwo7OLacRTiOQ5cm9PC7rA&part=snippet,id&order=date&maxResults=30");
	//$link = json_encode($link);
	?><?php
	$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($link, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        foreach ($val as $key => $val) {
	        
	    }
    } else {
        echo "$key => $val<br/>";
    }
}
?>
	</footer>


<script>
	function callPlayer(frame_id, func, args) {
    if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
    var iframe = document.getElementById(frame_id);
    if (iframe && iframe.tagName.toUpperCase() != 'IFRAME') {
        iframe = iframe.getElementsByTagName('iframe')[0];
    }

    // When the player is not ready yet, add the event to a queue
    // Each frame_id is associated with an own queue.
    // Each queue has three possible states:
    //  undefined = uninitialised / array = queue / 0 = ready
    if (!callPlayer.queue) callPlayer.queue = {};
    var queue = callPlayer.queue[frame_id],
        domReady = document.readyState == 'complete';

    if (domReady && !iframe) {
        // DOM is ready and iframe does not exist. Log a message
        window.console && console.log('callPlayer: Frame not found; id=' + frame_id);
        if (queue) clearInterval(queue.poller);
    } else if (func === 'listening') {
        // Sending the "listener" message to the frame, to request status updates
        if (iframe && iframe.contentWindow) {
            func = '{"event":"listening","id":' + JSON.stringify(''+frame_id) + '}';
            iframe.contentWindow.postMessage(func, '*');
        }
    } else if (!domReady ||
               iframe && (!iframe.contentWindow || queue && !queue.ready) ||
               (!queue || !queue.ready) && typeof func === 'function') {
        if (!queue) queue = callPlayer.queue[frame_id] = [];
        queue.push([func, args]);
        if (!('poller' in queue)) {
            // keep polling until the document and frame is ready
            queue.poller = setInterval(function() {
                callPlayer(frame_id, 'listening');
            }, 250);
            // Add a global "message" event listener, to catch status updates:
            messageEvent(1, function runOnceReady(e) {
                    if (!iframe) {
                        iframe = document.getElementById(frame_id);
                        if (!iframe) return;
                        if (iframe.tagName.toUpperCase() != 'IFRAME') {
                            iframe = iframe.getElementsByTagName('iframe')[0];
                            if (!iframe) return;
                        }
                    }
                if (e.source === iframe.contentWindow) {
                    // Assume that the player is ready if we receive a
                    // message from the iframe
                    clearInterval(queue.poller);
                    queue.ready = true;
                    messageEvent(0, runOnceReady);
                    // .. and release the queue:
                    while (tmp = queue.shift()) {
                        callPlayer(frame_id, tmp[0], tmp[1]);
                    }
                }
            }, false);
        }
    } else if (iframe && iframe.contentWindow) {
        // When a function is supplied, just call it (like "onYouTubePlayerReady")
        if (func.call) return func();
        // Frame exists, send message
        iframe.contentWindow.postMessage(JSON.stringify({
            "event": "command",
            "func": func,
            "args": args || [],
            "id": frame_id
        }), "*");
    }
    /* IE8 does not support addEventListener... */
    function messageEvent(add, listener) {
        var w3 = add ? window.addEventListener : window.removeEventListener;
        w3 ?
            w3('message', listener, !1)
        :
            (add ? window.attachEvent : window.detachEvent)('onmessage', listener);
    }
}

</script>
</body>
</html>