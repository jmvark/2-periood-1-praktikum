
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>esimene praktikum</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <a href="index.php?test=katsetus kas nii toimib">Esimesele lehele</a>
  <?php 
  	$example = array("name" =>"jason", "lastname" => "vargens");


  ?>

  <?php echo "<p>" . $_GET["name"] . "</p>"; ?>
<?php $username = $_GET["name"]; ?>




</body>
</html>