<?php
  
   $myFile = "users.json";
   $arr_data = array(); // create empty array

  try
  {
	   //Get data from existing json file
	   $jsondata = file_get_contents($myFile);
		
	   if ($_POST['action'] == "signup") {
		   	// converts json data into array
			$users = json_decode($jsondata);
			$isExists = false;
			foreach ($users as $user) {
				if ($user->username == $_POST['username']) {
					$isExists = true;
					break;
				}
			}
			if($isExists)
			{
				print 'User exists';
				return;
			}
			$arr_data = json_decode($jsondata, true);
			//Get form data
			$formdata = array(
				'username'=>$_POST['username'],
				'password'=> $_POST['password']
			 );
		   // Push user data to array
		   array_push($arr_data,$formdata);

		   //Convert updated array to JSON
		   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
		   
		   //write json data into data.json file
		   if(file_put_contents($myFile, $jsondata)) {
				print 'saved';
			}
		   else 
				print "error";
	   } else if ($_POST['action'] == "signin") {
			$users = json_decode($jsondata);
			$isExists = false;
			foreach ($users as $user) {
				if ($user->username == $_POST['username']) {
					$isExists = true;
					break;
				}
			}
			if ($isExists) {
					print 'valid';
				} else {
					print 'invalid';
				}
	   } else if ($_POST['action'] == "signout") {
			print 'success';
   		} else {
			print 'invalid action';
	   }
   }
   catch (Exception $e) {
            print $e->getMessage();
   }

?>