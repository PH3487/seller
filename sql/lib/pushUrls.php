<?php 
	class pushUrls
	{
		
		function __construct()
		{
			$this->first = 0;
			$this->url = "";
			return $this;
		}

		function pushGet($get,$name){
			if($this->first == 0){
				$this->url .= "?".$name."=".$get;
				$this->first++;
			}else{
				$this->url .= "&".$name."=".$get;
			}
			// return $this->url;
		}

		function lastUrls(){
			return $this->url;
		}

	}

?>