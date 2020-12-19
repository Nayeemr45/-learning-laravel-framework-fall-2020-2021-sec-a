<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="/employee">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Product Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($product); $i++)
		<tr>
			<td>{{$product[$i]['id']}}</td>
			<td>{{$product[$i]['product_name']}}</td>
			<td>{{$product[$i]['quantity']}}</td>
			<td>{{$product[$i]['price']}}</td>
			<td>
				<a href="/edit/{{$product[$i]['id']}}">Edit</a> |
				<a href="/delete/{{$product[$i]['id']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>