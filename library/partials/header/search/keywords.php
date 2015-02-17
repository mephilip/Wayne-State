<?php
	
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
		  $keyword[] .=  htmlspecialchars($value);
	 }
	 $keywords = implode(',',$keyword);
	 echo json_encode($keyword);

?>