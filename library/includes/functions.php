<?php
	
function __autoload($classname) {
    $filename = "classes/". $classname .".php";
    include($filename);
}


$file_get = new FileReturn();









function get_json($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    $resultCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($resultCode == 200) {
        return json_decode($data);
    } else {
        return false;
    }
}
	$json = get_json('http://cgi.lib.wayne.edu/stats/piwik/index.php?module=API&method=Actions.getSiteSearchKeywords&idSite=10&period=month&date=2015-01-01&format=JSON&token_auth=8d09da4f7f800902afbeb6ea72029d8e&filter_limit=10000');
	
	 $keyword = array();
	 foreach($json as $item => $value){
		  $value = str_replace('"', '', $value->label);
		  $keyword[] .=  htmlentities($value, ENT_QUOTES);
	 }
	 json_encode($keyword);
	 $keywords = "'" . implode("','",$keyword) . "'";


function get_youtube($url){

 $youtube = "http://www.youtube.com/oembed?url=". $url ."&format=json";
parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );  
 $curl = curl_init($youtube);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 $result = curl_exec($curl);
 curl_close($curl);
 $json = json_decode($result);
 $link_thing = $my_array_of_vars['v'];
 echo "<div class='video_contain'>";
 echo "<a data-target='#video_modal' class='youtube_link' onclick=\"load_video_by_id('$link_thing')\">";
 echo "<div class='video_thumbnail'>";
 echo "<img src='" . $json->thumbnail_url . "'/>";
 echo "</div>";
 echo "<div class='video_meta'>";
 echo "<span class='video_title'>$json->title</span>"; 
 echo "</div>";
 echo "</a>";
 echo "</div>";
 }