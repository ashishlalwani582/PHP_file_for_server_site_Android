<?php
header("Content_Type:application/json");
header("HTTP/1.1","200 app FOUND");
$status['status']="record found";
				if(isset($_POST))
	   				               	{
											
										include 'connection.php';
										$res1=mysqli_query($con,"SELECT * FROM `registration`");
								
										if(mysqli_num_rows($res1)>0)
										{
											while($arr=mysqli_fetch_assoc($res1))
											{
												$data[]=$arr;
											}
										
											$status['status']="1";
											$status['message']="Data Fetched";
											$status['data']=$data;
										}		
											$json_response=json_encode($status);
				
											 echo stripcslashes($json_response);
													mysqli_close($con);
	   				               	}
										else 
										{
   										    $status['status']="0";
											$status['message']="invalid url";
											header("HTTP/1.1","400 PAGE NOT FOUND");
											$json_response=json_encode($status);
											echo $json_response;
										}	
?>