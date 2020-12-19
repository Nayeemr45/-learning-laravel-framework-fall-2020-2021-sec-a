<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome Employee home</h1>
	<a href="/create">Add Product</a> |
	<a href="/productlist">View Product List</a> |
	<a href="/logout">logout</a>

	<br>
	<br>
	Name: {{$name}}
<br>
	<h3 style="color:red;">{{session('msg')}}</h3>
</body>
</html>