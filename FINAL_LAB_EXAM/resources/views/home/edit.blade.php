<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
	@csrf
		<fieldset>
			<legend>Edit</legend>
		<table>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="employee_name" value="{{$employee_name}}"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text " name="username" value="{{$username}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="{{$password}}"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contact_no" value="{{$contact_no}}"></td>
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