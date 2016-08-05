<?php 

    $language	= 'en';
	 $lang 		= array();
	
	 function construct($language){
		$this->language = $language;
	}
	
     function findString($str) {
        if (array_key_exists($str, $this->lang[$this->language])) {
			echo $this->lang[$this->language][$str];
			return;
        }
        echo $str;
    }
    
	 function splitStrings($str) {
        return explode('=',trim($str));
    }
	
	 function p($str) {	
       // if (!array_key_exists($this->language, $this->lang)) {
            if (file_exists($this->language.'.txt')) {
                $strings = array_map(array($this,'splitStrings'),file($this->language.'.txt'));
                foreach ($strings as $k => $v) {
					$this->lang[$this->language][$v[0]] = $v[1];
                }
                return $this->findString($str);
          }
            else {
                echo $str;
            }
        }
        //else {
          //  return $this->findString($str);
       // }
    

?>