<ul>
	<?php
	foreach ($list as $row) { ?>
	<li><?= $row['first_name'].' '.$row['last_name']?>
	<a href="http://localhost/framework/index.php/pages/update?update=<?=$row['employee_id'] ?> ">Update</a>
	</li>	
	
	<?php } ?>
</ul>