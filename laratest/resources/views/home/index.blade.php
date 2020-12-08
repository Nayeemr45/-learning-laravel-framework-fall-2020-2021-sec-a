<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home</h1>
	<a href="/create">Create New User</a> |
	<a href="/userlist">View User List</a> |
	<a href="/logout">logout</a>

	<br>
	<br>
	ID: {{$id}} <br>
	Name: {{$name}}
<br>
	<h3 style="color:red;">{{session('msg')}}</h3>
</body>
</html>