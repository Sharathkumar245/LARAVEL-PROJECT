<html>
<body>
	<form action="/storeproject" method="POST">
		<?php echo e(csrf_field()); ?>

		<fieldset>
			<legend>ADD PROJECT DETAILS</legend>
			name:<input type="text" name="name" placeholder="enter name"><br>
			description:<input type="text" name="desription" placeholder="enter description"><br>
			<input type="submit" name="submit" value="Add"><br>
		</fieldset>
	</form>
</body>
</html><?php /**PATH C:\Users\sharath\manilara\resources\views/form.blade.php ENDPATH**/ ?>