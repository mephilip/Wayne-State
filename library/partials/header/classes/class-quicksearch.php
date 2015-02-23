<?php
	
	

class QuickSearch {
	public $search_term;
    public $data_type;
    public $json_url;
    public function __construct($search_term, $data_type, $json_url){
        $this->search_term = $search_term;
        $this->data_type = $data_type;
    }
    
    public function searchTerm(){
        return $this->search_term;
    }
    
    public function database(){
        $conn = new PDO('mysql:host=localhost;dbname=resources', 'load', 'REm1ngt0n');
		if($conn){
			$sth = $conn->prepare("SELECT title,url,description FROM resources_view WHERE title LIKE '%{$this->search_term}%'");
			$sth->execute();
		
		$results = $sth->fetchAll();
		$number = count($results);
		foreach ($results as $result){
			$json_return .= "<h4><a href='{$result[url]}'>{$result[title]}</a></h4>";
			$json_return .= "<h6>{$result[url]}</h6>";
			$json_return .= "<p>{$result[2]}</p>";
		}
		$conn = null;
			return $json_return;
		} else {
			return "no connections";
		}
    }
    
    public function search_count($number){
        return $number;
    }
}


$db = new QuickSearch($_GET['q'], $data_type, $json_url);
echo "<h1>{$db->searchTerm()}</h1>";
$json_feed = json_encode($db->database());
echo json_decode($json_feed);