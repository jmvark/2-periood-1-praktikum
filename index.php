<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>esimene praktikum</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php

    ?>
    <?php
      $page_link = "second_page.php";
      $name = "jason";
      $lastname = "vargens";
      $age= "89"
    ?>
    <a href="<?php echo $page_link . '?name=' . $name . '&lastname=' . $lastname . '&age=' . $age; ?>">Teisele lehele</a>
<?php 
echo $_GET["test"];?>

</body>
</html>
