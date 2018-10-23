<?php
/** Date: 16.10.2018 Time: 13:04 */
include 'header.php';
?>

<div class="entry-content">
	<h1>Загрузите свое фото</h1>
<p> Селфи крупным планом!</p>

	<form enctype="multipart/form-data" action="upload.php" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="500">
		Загрузить фото:
		<input name="userfile" type="file">
		<br>
		<br>
		<input type="submit" value="Отправить" />

	</form>
</div>

<?php
//echo '$_POST['userfile']';
echo 'upload';
?>


