<?php
// This is the server-side script.
 
// Set the content type.
header('Content-Type: text/plain');
 
// Send the data back.
echo "Page Two";
?>

<script>
var xhr = new XMLHttpRequest();
xhr.open('get', 'two.php');
 
// Track the state changes of the request.
xhr.onreadystatechange = function () {
    var DONE = 4; // readyState 4 means the request is done.
    var OK = 200; // status 200 is a successful return.
    if (xhr.readyState === DONE) {
        if (xhr.status === OK) {
            window.innerHTML = xhr.responseText; // 'This is the returned text.'
        } else {
            alert('Error: ' + xhr.status); // An error occurred during the request.
        }
    }
};
 
// Send the request to send-ajax-data.php
xhr.send(null);
</script>