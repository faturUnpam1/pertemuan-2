<html>
<head>
<title>PenggunaanIF</title>
</head>
<body>
<form method="post"action="">
  Jumlah_Pembelian:
<input type=textname = input1><br><br>
<input type=submitvalue ="TentukanDiskon">
</form>
<?php
$totalbeli=$_POST['input1'];
if(isset($totalbeli))
{
$totalbeli=intval($totalbeli);
$pot=0;
if($totalbeli>=200000)
$pot=0.1;
elseif($totalbeli>=100000)
$pot=0.05;
else
$pot=0.01;
$pot=$pot*$totalbeli;
printf("JumlahPembelian=%s<br>",$totalbeli);
printf("Diskon =%s<br>",$pot);
printf("Pembayaran=%s<br>",$totalbeli-$pot);
}
?>
</body>
</html>
