<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
</head>
<body>
<p class="naviBtn"><?= anchor('upload','upload file')?></p>
   <?php    foreach($result->getResult() as $image);?>
  
   <div class="imgDiv">

   <a target="_blank" href="<?php echo base_url($image->FileName);?>>
   <img height="100px" width="100px" src="<?php echo base_url($image->FileName);?>"> </a>
   <div class="imageTitle">
   <?php echo $image->Title;?>
   </div>
  
   </div>
   <?php endforeach;?>
</body>
</html>