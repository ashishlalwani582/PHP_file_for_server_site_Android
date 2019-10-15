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
										
										$filetmp = $_FILES["image_field_name"]["tmp_name"];
										$filename = $_FILES["image_field_name"]["name"];
										$filepath = $filename;
										move_uploaded_file($filetmp,"uploadimage/".$filepath);
										
										include 'connection.php'; //connection file
										$name= $_POST['name'];
										$email= $_POST['email'];
										$contactno= $_POST['contactno'];
										$password = $_POST['password'];	
										
										$res = mysqli_query($con, "INSERT INTO `Register`(`name`, `email`, `contactno`, `password`, `imageField`) VALUES ('$name', '$email', '$contactno', '$height', '$weight', '$password', '$filename')"); 
										
										
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