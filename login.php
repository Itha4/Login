<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id = "frm">
		
		<form action="./php/process.php" method ="POST">
		
			<div>
				 <label>Username</label>
				 <input type=" text"  id = "user" name="user"/>
			</div>
			<div>
				 <label>Password</label>
				 <input type=" password"  id = "pass" name="pass"/>
			</div>
			<div>
				 <input type=" submit"  id = "btn" value="login"/>
			</div>  
		
		</form>

	</div>

</body>
</html>