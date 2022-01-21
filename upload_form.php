<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
</head>
<body>
<p class="naviBtn"><?= anchor('viewimages','view uploaded images')?></p>
<br>

<?php foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>

<?= form_open_multipart('upload/upload') ?>
<label>Image Title</label>
<input type="filetext" name="title" placeholder="Enter title here..." /><br />

<label>Image</label>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>