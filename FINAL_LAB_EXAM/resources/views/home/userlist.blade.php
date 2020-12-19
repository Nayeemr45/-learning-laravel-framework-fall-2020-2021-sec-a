<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USERNAME</td>
			<td>password</td>
			<td>Contact no</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['employee_name']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['password']}}</td>
			<td>{{$users[$i]['contact_no']}}</td>
			<td>
				<a href="/edit/{{$users[$i]['id']}}">Edit</a> |
				<a href="/delete/{{$users[$i]['id']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>