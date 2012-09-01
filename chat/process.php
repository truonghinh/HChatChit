<?php
	ini_set('default_charset', 'UTF-8');
	
    $function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
		
    	 case('getState'):
        	 if(file_exists('chat.xml')){
               $lines = file('chat.xml');
        	 }
             $log['state'] = count($lines); 
        	 break;	
    	
    	 case('update'):
        	$state = $_POST['state'];
        	if(file_exists('chat.xml')){
        	   $lines = file('chat.xml');
        	 }
        	 $count =  count($lines);
        	 if($state == $count){
        		 $log['state'] = $state;
        		 $log['text'] = false;
        		 
        		 }
        		 else{
        			 $text= array();
        			 $log['state'] = $state + count($lines) - $state;
        			 foreach ($lines as $line_num => $line)
                       {
        				   if($line_num >= $state){
                         $text[] =  $line = str_replace("\n", "", $line);
        				   }
         
                        }
						
        			 $log['text'] =convertArrayKeysToUtf8($text);//iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text);
        		 }
        	  
             break;
    	 
    	 case('send'):
		  $nickname = htmlentities(strip_tags($_POST['nickname']));
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			  $message = htmlentities(strip_tags($_POST['message']),ENT_QUOTES, "UTF-8");
			  //print($message);
			  //$message = iconv("ISO-8859-1","UTF-8/TRANSLIT", $message);
			  //iconv_set_encoding("output_encoding", "ISO-8859-1");
		 if(($message) != "\n"){
        	
			 if(preg_match($reg_exUrl, $message, $url)) {
       			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
				} 
			 
        	
        	 fwrite(fopen('chat.xml', 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 
		 }
        	 break;
    	
    }
    
    echo json_encode($log);
	
	function convertArrayKeysToUtf8(array $array) {
    $convertedArray = array();
    foreach($array as $key => $value) {
      if(!mb_check_encoding($key, 'UTF-8')) $key = utf8_encode($key);
      if(is_array($value)) $value = $this->convertArrayKeysToUtf8($value);

      $convertedArray[$key] = $value;
    }
    return $convertedArray;
  } 

?>