<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    		require 'vendor/autoload.php';
	     $app = new AppController;
     ?>
     <center>
     	<h1>Hari Ini Tanggal: <?php echo $app->dateNow(); ?></h1>
     </center>
</body>
</html>