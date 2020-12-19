<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
</head>
<body>
<form method="post">
	@csrf
		<fieldset>
			<legend>Create Employee</legend>
		<table>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="employee_name"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contact_no"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>

		<h3 style="color: red">
		
			{{session('msg')}}
		</h3>
	</form>
</body>
</html>