<?php
header("Content_Type:application/json");
header("HTTP/1.1","200 app FOUND");
//$status['status']="record found";

		    
						if(isset($_POST['name'])) // insertion form or database field names
								{
							if(isset($_POST['email'])) // insertion form or database field names
									{
									if(isset($_POST['contactno'])) // insertion form or database field names
										{
										if(isset($_POST['password'])) // insertion form or database field names
										{
										
										//$filetmp = $_FILES["teachImage"]["tmp_name"];
//										$filename = $_FILES["teachImage"]["name"];
//										$filepath = $filename;
//										move_uploaded_file($filetmp,"uploadimage/".$filepath);
										
										include 'connection.php'; //connection file
										$name= $_POST['name'];
										$email= $_POST['email'];
										$contactno= $_POST['contactno'];
										$height= $_POST['height'];
										$weight= $_POST['weight'];
										$password = $_POST['password'];	
										
										$res = mysqli_query($con, "INSERT INTO `Register`(`name`, `email`, `contactno`, `height`, `weight`, `password`) VALUES ('$name', '$email', '$contactno', '$height', '$weight', '$password')"); 
										
										
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
										}}}}
										else 
										{
   										    $status['status']="0";
											$status['message']="invalid url";
											header("HTTP/1.1","400 PAGE NOT FOUND");
											$json_response=json_encode($status);
											echo $json_response;
										}	
?>