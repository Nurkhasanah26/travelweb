<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<td>id</td>
		<td>username</td>
		<td>password</td>
		<td>fullname</td>
		<td>level</td>
	</tr>
	<?php foreach ($isi->result() as $key): ?>
		<tr>
			<td><?php echo $key->id ?></td>
			<td><?php echo $key->username ?></td>
			<td><?php echo $key->password ?></td>
			<td><?php echo $key->fullname ?></td>
			<td><?php echo $key->level ?></td>
			<td><?php echo anchor('usename/hapus/'.$key->id,"Hapus"); ?></td>
		</tr>
	<?php endforeach?>
</table>
</body>
</html>