<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Formulario</title>
</head>
<body style="font-family: Arial">

<?php
$firstname = $_POST['FirstName'];
$qtyshirt = $_POST['shirt_qty'];
$qtypant = $_POST['pant_qty'];
$totalprice = $_POST['total'];
?>

<p>Thank you!</p>
<?php

echo $firstname.' <br>';
?>
<p>Your order for:</p>

<?php
echo $qtyshirt.' Shirt <br>';
echo $qtypant.' Pant <br>';
?>
<p>For a Total of:</p>

<?php
echo $totalprice.'<br>';
?>
<p>was processed.</p>
</body>
</html>