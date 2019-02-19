<DOCTYPE HTML>
<html>
<head>
<title> customer new</title>
</head>
<body>
    <!--kembali ke customer-->
    <a href="customer.php"> Kembali ke customer</a>
    <br/>
    <form action="customer_update.php"
    method="$_POST">

    id    : <input type="text"
    name="txt_id_customer" value ="<?php
        echo $_GET["customer_id"];
        ?>" readonly><br/>

    nama  : <input type="text"
    name="txt_nama_customer"><br/>

    alamat : <input type="text"
    name="txt_alamat_customer"><br/>
    <input type="SUBMIT"value="postkan">

    </form>
    </a>
</body>
</html>