<?php
header("Content_Type:application/json");
header("HTTP/1.1","200 app FOUND");
$status['status']="record Not found";
				if(isset($_POST['user'])) //credentials for login
	  				{					
					if(isset($_POST['password'])) //credentials for login			
					{						
						include 'connection.php'; //connection file include
						$user= $_POST['user']; // make variable of login credentials  
						$password= $_POST['password'];
									$res1=mysqli_query($con,"SELECT * FROM `registration` WHERE user ='$user' and password='$password'");
								
										if(mysqli_num_rows($res1)>0)
										{
											while($arr=mysqli_fetch_assoc($res1))
											{
												$data[]=$arr;
												
											}
										
											$status['status']="1";
											$status['data']=$data;
											
										
										}		
											$json_response=json_encode($status);
				
											 echo stripcslashes($json_response);
													mysqli_close($con);
									}}
										else 
										{
   										    $status['status']="0";
											$status['message']="invalid url";
											header("HTTP/1.1","400 PAGE NOT FOUND");
											$json_response=json_encode($status);
											echo $json_response;
										}	
?>
