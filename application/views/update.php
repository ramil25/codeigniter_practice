
<h2>Update information</h2>
<form method="post">
<?php
foreach ($id as $row) { ?>
	<input value="<?= $row['first_name']; ?>" type="text" name="first_name"><br><br>
	<input value="<?= $row['last_name']; ?>" type="text" name="last_name"><br><br>
	<input value="<?= $row['email_address']; ?>" type="text" name="email_address"><br><br>
	<input value="<?= $row['contact_number']; ?>" type="text" name="contact_number"><br><br>
	<input value="<?= $row['job_title']; ?>" type="text" name="job_title"><br><br>
	<input value="<?= $row['monthly_salary']; ?>" type="text" name="monthly_salary"><br><br>
	<input type="submit" name="update" value="Update">
<?php } ?>
</form>