<html>
<body>
	<form action="/storeproject" method="POST">
		{{csrf_field()}}
		<fieldset>
			<legend>ADD PROJECT DETAILS</legend>
			name:<input type="text" name="name" placeholder="enter name"><br>
			description:<input type="text" name="desription" placeholder="enter description"><br>
			<input type="submit" name="submit" value="Add"><br>
		</fieldset>
	</form>
</body>
</html>