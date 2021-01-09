<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search</title>
	<script src="{{ asset('asset/js/jquery-3.5.1.min.js')}}"></script>

</head>
<body>
<form method="post">
	@csrf
		<fieldset>
			<legend>Search</legend>
		<table>
			<tr>
				<td>Search</td>
				<td><input type="text" id="search" name="search" onblur="search_user()"></td>
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

	
    <table border="1">
		<tr>
			<td>NAME</td>
			<td>USERNAME</td>
			<td>password</td>
			<td>Contact no</td>
		</tr>

		<tr>
			<td>{{$employee_name}}</td>
			<td>{{$username}}</td>
			<td>{{$password}}</td>
			<td>{{$contact_no}}</td>
		</tr>
	</table>

	<script>
        function search_user() {
            jQuery.ajax({
            url: "{{route('search.user')}}",
            data:'search='+$("#search").val(),
            type: "POST",
            success:function(response){
				if(response){
					console.log('ll');
				}
          
            },
            error:function (response){console.log(response);}
            });
}
    </script>
</body>
</html>