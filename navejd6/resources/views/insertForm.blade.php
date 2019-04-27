<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>
<center>
	<form action="http://localhost/navejd6/public/insert" method="post">
		<table>
			<tr>
				{{csrf_field()}}
				<td>Name</td>
				<td><input type="text" name="name0"></td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="text" name="email0">
				</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>
					<input type="text" name="password0">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>	
</center>

	<script type="text/javascript">


		var jugador = localStorage.getItem("jugador");
		var tiempo = localStorage.getItem("tiempo");
		$("#name0").html(jugador);
		$("#email0").html(tiempo);
	</script>
</body>
</html>