<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
<form method="post">
	@csrf
		<fieldset>
			<legend>Create Product</legend>
		<table>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="product_name"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
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