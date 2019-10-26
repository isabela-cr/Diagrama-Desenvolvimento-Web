<?php
include("dvd.php");
$Dvd1 = new dvd (01, 5.99, "Capital Inicial", 2000);
$Dvd2 = new dvd(02, 5.99,"Paralamas do Sucesso", 1998);
$Dvd3 = new dvd(03, 6.55,"Babado Novo", 1999);
$Dvd4 = new dvd(04, 6.55,"Aviões do Forró",2009);


include("leite.php");
$Leite1 = new leite(10, 3.99, "Bh", "1L", "10-02-2018");
$Leite2 = new leite(11, 2.99,"Cotoches", "1L", "11-03-2019");
$Leite3 = new leite(12, 4.99,"Itambe", "1L", "01-07-2019");
$Leite4 = new leite(13, 5.99,"Ninho", "1L", "01-10-2019");
$Leite5 = new leite(13, 5.99,"Italac", "1L", "12-12-2019");
$Leite6 = new leite(13, 5.99,"Camponesa", "1L", "10-11-2019");

//$estoque = array (Dvd1,)

foreach ($dvd as $leite => $value) {
	if (estaVencido() == true){
		echo " estão vencidos "                                            ;



	}

}



$json = json_encode($pessoa1);
//echo $pessoa1;
echo "<br>";
echo $json;
$json = json_encode($pessoa2);
//echo $pessoa2;
echo "<br>";
echo $json;
//$clientes = newMethod;












?>

