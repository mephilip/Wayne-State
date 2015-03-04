<?php
	class FileReturn {
	
	public $server_type;
	
	public $file_name;
	
	function FileReturn($server_type, $file_name){
		if($server_type != $_SERVER['DOCUMENT_ROOT']){
			$this->server_type = $_SERVER['DOCUMENT_ROOT'];
		} else {
			$this->server_type = $server_type;
		}
		$this->file_name   = $file_name;
		return $this->server_type . '/test/thomas/library/includes/' .  $this->file_name;
	}
	
}