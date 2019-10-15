<?php
header("Content_Type:application/json");
header("HTTP/1.1","200 app FOUND");
//$status['status']="record found";

		    
						if(isset($_POST['user'])) // insertion form or database field names
								{
							if(isset($_POST['password'])) // insertion form or database field names
									{
									if(isset($_POST['repassword'])) // insertion form or database field names
										{
									
										
										include 'connection.php'; //connection file
										$user= $_POST['user'];
										$password= $_POST['password'];
										$repassword= $_POST['repassword'];
									
										
										$res = mysqli_query($con, "INSERT INTO `registration`( `user`, `password`, `repassword`) VALUES ('$user', '$password', '$repassword')"); 
										
										
										if($res)
											{
											
											$status['status']="1";
											$status['message']="data inserted";
											}
											else
											{
											$status['status']="0";
											
											$status['message']="error";	
											}
										
												
										
										$json_response=json_encode($status);
										echo $json_response;
										 mysqli_close($con);
										}}}
										else 
										{
   										    $status['status']="0";
											$status['message']="invalid url";
											header("HTTP/1.1","400 PAGE NOT FOUND");
											$json_response=json_encode($status);
											echo $json_response;
										}	
?>