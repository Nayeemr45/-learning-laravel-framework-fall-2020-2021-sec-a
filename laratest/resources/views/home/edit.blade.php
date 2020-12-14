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
				<td>Name</td>
				<td><input type="text" name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{$email}}"></td>
			</tr>
			<tr>
				<td>Cgpa</td>
				<td><input type="text" name="cgpa" value="{{$cgpa}}"></td>
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