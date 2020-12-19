<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home</h1>
	<a href="/create">Create New Employee</a> |
	<a href="/userlist">View Employee List</a> |
	<a href="/search">Search Employee</a> |
	<a href="/logout">logout</a>

	<br>
	<br>
	Name: {{$name}}
<br>
	<h3 style="color:red;">{{session('msg')}}</h3>
</body>
</html>