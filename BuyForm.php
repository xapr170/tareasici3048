<html>
<head>
    <link rel="stylesheet" href="styles.css">
<title>Formulario</title>
<script src="./buy_form.js" type="text/javascript"></script>
<script type="text/javascript">
var PRODUCT_ABBRS = ["shirt","pant"];
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
</p>
    <center>
        <h2>Formulario para GGU</h2>
        <form action= "Confirmation.php" method="post" onsubmit="return checkSubmit(this);">
            <p>Nombre: <input type="text" name="FirstName" value="" required></p>
            <p>Primer Apellido: <input type="text" name="FirstLastName" value="" required></p>
            <p>Segundo Apellido: <input type="text" name="SecondLastName" value="" required></p>
            <p>Teléfono: <input type="text" name="PhoneNumber" value="" required></p>
            <p>Apartado: <input type="text" name="Address" value="" required></p>
            <p>Cuidad: <input type="text" name="City" value="" required></p>
            <p>País: <input type="text" name="State" value="" required></p>
            <p>Código Postal: <input type="text" name="ZipCode" value="" required></p>
            <table class="demoTbl">
                <tbody>
                <tr>
                    <th class="first">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Totals</th>
                </tr>
                <tr>
                    <td>Camisa</td>
                    <td class="cur">$12.00<input type="hidden" name="shirt_price" value="15" /></td>
                    <td class="qty"><input type="text" name="shirt_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" onclick="checkValue(this)" onblur="reCheckValue(this)" /></td>
                    <td><input type="text" name="shirt_tot" value="0" readonly="readonly" size="8" class="cur" /></td>
                </tr>
                <tr>
                    <td>Pantalon</td>
                    <td class="cur">$18.00<input type="hidden" name="pant_price" value="12" /></td>
                    <td class="qty"><input type="text" name="pant_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" onclick="checkValue(this)" onblur="reCheckValue(this)" /></td>
                    <td><input type="text" name="pant_tot" value="0" readonly="readonly" size="8" class="cur" /></td>
                </tr>
                <tr>
                    <td class="total" colspan="3">Total: </td>
                    <td><input type="text" name="total" value="0" readonly="readonly" size="8" class="cur" /></td>
                </tr>
                <tr>
                    <td class="submit" colspan="4">
                </tr>
                </tbody>
            </table>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </center>
</body>
</html>

