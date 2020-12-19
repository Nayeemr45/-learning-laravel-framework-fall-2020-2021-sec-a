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
				<td>Name :</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>Email :</td>
				<td>{{$email}}</td>
			</tr>
			<tr>
				<td>Cgpa :</td>
				<td>{{$cgpa}}</td>
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