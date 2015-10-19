<?php


$data = file_get_contents('css/base.txt');
$config['pass'] = "ishimov";

?>

<HTML>
<body>
<form action="" method="post"> 
<center>
<input type="password" name="password" value="" id="password" />
<br />
<input type="submit" value="Login"/>
</center>
</form>
</body>
</HTML>
<? 
if($_POST['password'] == $config['pass'])
{
echo $data;
}else{
echo "Password is invalid";
}
?>
