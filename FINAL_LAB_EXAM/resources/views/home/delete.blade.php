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
			<legend>Delete</legend>
		<table>
			<tr>
				<td>Employee Name :</td>
				<td>{{$employee_name}}</td>
			</tr>
			<tr>
				<td>Username :</td>
				<td>{{$username}}</td>
			</tr>
			<tr>
				<td>Password :</td>
				<td>{{$password}}</td>
			</tr>
			<tr>
				<td>Contact No :</td>
				<td>{{$contact_no}}</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Confirm"></td>
			</tr>
		</table>
		</fieldset>

		<h3 style="color: red">
		
			{{session('msg')}}
		</h3>
	</form>
</body>
</html>