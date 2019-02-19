<?php print "Insert fuera de html<br />"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php print "Insert dentro de head<br />";?>
</head>
<body>
    <?php print "Insert Dentro de body<br />";?>
    <input type="text" value="<?php print "Dentro de input";?>">
</body>
</html>