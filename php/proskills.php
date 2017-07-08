 <?php

 $data = [
	                 "skill" => [
			         "skillname" => "photohsop",
			         "value"	=> "80"
		           ],
                    "skill2" => [
			         "skillname" => "illu",
			         "value "	=> "80"
		           ]
        "name" => "batel",
	    "email" => "batelsos123@gmail.com",
	    "phone" => "0548267566"  
       ];
 
   header('Content-Type: application/json');
   echo json_encode($data);
 

   //get

?>