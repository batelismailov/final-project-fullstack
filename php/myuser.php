 <?php

 $data = [
	                 "basicInfo" => [
			         "firstName" => "batel",
			         "lastName"	=> "ismailov"
		           ],
        "name" => "batel",
	    "email" => "batelsos123@gmail.com",
	    "phone" => "0548267566"  
       ];
 
   header('Content-Type: application/json');
   echo json_encode($data);
 

   //get

?>