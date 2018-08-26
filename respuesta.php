<html>
<head>
<title>
</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php
$cliente=$_REQUEST[cliente];
$tamanio=$_POST[tamanio];
$tipo=$_POST[tipo];
$total=0.0;
echo "Usuario: $cliente<br>";
echo "Tamaño: $tamanio<br>";
echo "Tipo: $tipo<br>";
if($tamanio=="personal"){
  $total=$total+2.5;
}else if($tamanio=="pequena"){
  $total=$total+4.0;
}else if($tamanio=="mediana"){
  $total=$total+6.0;
}
else if($tamanio=="grande"){
  $total=$total+7.0;
}

if($tipo=="especial"){
  $total=$total+2.0;
}

if(isset($_POST[entrada])==true){
  echo "Con Entrada <br>";
  $total=$total+2.0;
}

echo "Total a pagar: $ $total";
?>

</body>
</html>
