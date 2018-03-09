<?php   
				session_start();
				header("Cache-Control", "no-cache, no-store, must-revalidate");
				$conn = mysqli_connect("localhost","root","");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				mysqli_select_db($conn,"ita");
				$entry = 1;
				if(isset($_POST['submit']))
				{
					//$email=$_POST["email"];
					$password=$_POST["password"];
					$email=$_POST["email"];
					//$phone=$_POST["phone"];
					//$address=$_POST["address"];

					//$check = "pop";

					$check = "select * from users where email='$email' and password='$password'";
					$res = $conn->query($check);
					//$row = mysqli_fetch_assoc($res);
					//$user = $row['name'];
					//$_SESSION['username'] = $user;
					
					if (mysqli_num_rows($res) > 0)
					{
						//$entry = 0;
						$row = mysqli_fetch_assoc($res);
						$user = $row['name'];
						$_SESSION['username'] = $user; 
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Welcome {$user}')
							window.open('men.php?login=1 & username={$user}')
							</SCRIPT>");
					}
					else
					{
						echo "<script>window.alert('Invlaid Credentials!!')
							  window.location.href='sign-in.php'</script>";
					}
					
				}
?>