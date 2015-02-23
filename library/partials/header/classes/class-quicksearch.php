<?php
	
	

class QuickSearch {
	public $search_term;
    public $data_type;
    public $json_url;
    public function __construct($search_term, $data_type, $json_url){
        $this->search_term = $search_term;
        $this->data_type = $data_type;
    }
    public function database(){
        $conn = new PDO('mysql:host=localhost;dbname=resources', 'load', 'REm1ngt0n');
		if($conn){
			$sth = $conn->prepare("SELECT title,url,description FROM resources_view WHERE title LIKE '%{$this->search_term}%'");
			$sth->execute();
		
		$results = $sth->fetchAll();
		$number = count($results);
		echo $number;
		foreach ($results as $result){
			$json_return .= "<h4><a href='{$result[url]}'>{$result[title]}</a></h4>";
			$json_return .= "<p>{$result[2]}</p>";
		}
		$conn = null;
			return $json_return;
		} else {
			return "no connections";
		}
    }
    public function articles(){
        return $this->search_term;
    }
    public function collections(){
        return $this->msg;
    }
    public function toJSON(){
        return json_encode($json);
    }
}


$db = new QuickSearch($_GET['q'], $data_type, $json_url);
$json_feed = $db->articles();
echo $json_feed;