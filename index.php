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
      $page_link = "second_page.php";
      $name = "jason";
    ?>
    <a href="<?php echo $page_link . '?name=' . $name; ?>">Teisele lehele</a>


</body>
</html>
